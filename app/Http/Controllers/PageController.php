<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Handles the rendering of static and informational pages.
 */
class PageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @param Request $request
     * @return View
     */
    public function home(Request $request): View
    {
        // Get hero slides from database
        $heroSlides = \App\Models\HeroSlide::with('image')
            ->where('is_active', true)
            ->orderBy('display_order', 'asc')
            ->get()
            ->map(function($slide) {
                // Get image URL - prefer gallery image, fallback to direct URL
                $imageUrl = null;
                if ($slide->image_id && $slide->image) {
                    $imageUrl = $slide->image->display_url;
                } elseif ($slide->getAttributes()['image_url']) {
                    $rawUrl = $slide->getAttributes()['image_url'];
                    if (str_starts_with($rawUrl, 'http://') || str_starts_with($rawUrl, 'https://')) {
                        $imageUrl = $rawUrl;
                    } else {
                        $imageUrl = asset($rawUrl);
                    }
                }
                
                return [
                    'title' => $slide->title,
                    'subtitle' => $slide->subtitle,
                    'badge_text' => $slide->badge_text,
                    'badge_icon' => $slide->badge_icon,
                    'image_url' => $imageUrl ?: asset('images/safari_home-1.jpg'),
                    'primary_button_text' => $slide->primary_button_text,
                    'primary_button_link' => $slide->primary_button_link,
                    'primary_button_icon' => $slide->primary_button_icon,
                    'secondary_button_text' => $slide->secondary_button_text,
                    'secondary_button_link' => $slide->secondary_button_link,
                    'secondary_button_icon' => $slide->secondary_button_icon,
                    'animation_type' => $slide->animation_type,
                    'overlay_type' => $slide->overlay_type,
                ];
            });
        
        // Get featured tours for home page
        $featuredTours = \App\Models\Tour::with('destination')
            ->where('status', 'active')
            ->where('publish_status', 'published')
            ->where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get()
            ->map(function($tour) {
                return [
                    'id' => $tour->id,
                    'name' => $tour->name,
                    'slug' => $tour->slug,
                    'price' => (float) $tour->price,
                    'starting_price' => (float) ($tour->starting_price ?? $tour->price),
                    'duration_days' => $tour->duration_days,
                    'duration_nights' => $tour->duration_nights,
                    'image' => $tour->image_url ? (str_starts_with($tour->image_url, 'http') ? $tour->image_url : asset($tour->image_url)) : asset('images/safari_home-1.jpg'),
                    'description' => $tour->short_description ?: substr($tour->description ?? '', 0, 150) . '...',
                    'destination' => $tour->destination ? $tour->destination->name : 'Tanzania',
                    'rating' => $tour->rating ?? 4.5,
                    'max_group_size' => $tour->max_group_size,
                    'min_group_size' => $tour->min_group_size ?? 1,
                    'tour_type' => $tour->tour_type,
                    'difficulty_level' => $tour->difficulty_level,
                    'is_last_minute_deal' => $tour->is_last_minute_deal,
                    'last_minute_discount_percentage' => $tour->last_minute_discount_percentage,
                ];
            });

        // Get homepage gallery images
        $homepageGallery = \App\Models\Gallery::where('is_active', true)
            ->where(function($query) {
                $query->where('category', 'Homepage Gallery')
                      ->orWhere('category', 'Tanzania in Pictures')
                      ->orWhere('is_featured', true);
            })
            ->orderBy('display_order', 'asc')
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(12) // Limit to 12 images for homepage
            ->get()
            ->map(function($gallery) {
                return [
                    'id' => $gallery->id,
                    'title' => $gallery->title,
                    'alt_text' => $gallery->alt_text ?? $gallery->title,
                    'caption' => $gallery->caption ?? $gallery->description,
                    'image_url' => $gallery->display_url ?? asset('images/safari_home-1.jpg'),
                    'thumbnail_url' => $gallery->getThumbnailUrl('600') ?? $gallery->display_url,
                ];
            });

        // Get homepage activities
        $activities = \App\Models\Activity::forHomepage()->get()->map(function($activity) {
            return [
                'id' => $activity->id,
                'name' => $activity->name,
                'description' => $activity->description,
                'icon' => $activity->icon,
                'image_url' => $activity->display_image_url,
            ];
        });

        // Get destinations for homepage
        $destinations = \App\Models\HomepageDestination::where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('name')
            ->take(5) // Limit to first 5 destinations
            ->get()
            ->map(function($destination) {
                return [
                    'id' => $destination->id,
                    'name' => $destination->name,
                    'slug' => $destination->slug,
                    'description' => $destination->short_description ?? $destination->description,
                    'featured_image_url' => $destination->featured_image_url,
                    'tour_count' => \App\Models\Tour::where('status', 'active')
                        ->where('publish_status', 'published')
                        ->where(function($query) use ($destination) {
                            $query->whereHas('destination', function($destQuery) use ($destination) {
                                $destQuery->where('name', 'like', '%' . $destination->name . '%');
                            })
                                  ->orWhere('name', 'like', '%' . $destination->name . '%');
                        })
                        ->count(),
                    'rating' => $destination->rating ?? 4.8,
                    'category' => $this->getDestinationCategory($destination->name),
                    'is_featured' => $destination->is_featured,
                ];
            });

        return view('home', compact('featuredTours', 'heroSlides', 'homepageGallery', 'activities', 'destinations'));
    }

    /**
     * Helper method to determine destination category
     */
    private function getDestinationCategory($destinationName): string
    {
        $nationalParks = ['Serengeti', 'Ngorongoro', 'Tarangire', 'Ruaha', 'Lake Manyara'];
        $beachIslands = ['Zanzibar', 'Pemba', 'Mafia'];
        $mountains = ['Kilimanjaro', 'Mount Meru', 'Usambara'];
        $cultural = ['Stone Town', 'Bagamoyo', 'Kilwa Kisiwani'];

        if (in_array($destinationName, $nationalParks)) {
            return 'national-parks';
        } elseif (in_array($destinationName, $beachIslands)) {
            return 'beach';
        } elseif (in_array($destinationName, $mountains)) {
            return 'mountains';
        } elseif (in_array($destinationName, $cultural)) {
            return 'cultural';
        }

        return 'national-parks'; // default
    }

    /**
     * Display the 'About Us' page.
     *
     * @param Request $request
     * @return View
     */
    public function about(Request $request): View
    {
        // Get all sections
        $sections = \App\Models\AboutPage::where('is_active', true)
            ->orderBy('display_order')
            ->get()
            ->keyBy('section_key');
        
        // Get team members
        $teamMembers = \App\Models\AboutPageTeamMember::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Get values
        $values = \App\Models\AboutPageValue::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Get recognitions (changed from certifications & awards)
        $recognitions = \App\Models\AboutPageRecognition::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Get timeline items
        $timelineItems = \App\Models\AboutPageTimelineItem::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Get statistics
        $statistics = \App\Models\AboutPageStatistic::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Get Why Travel With Us items
        $whyTravelWithUs = \App\Models\WhyTravelWithUs::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Get content blocks
        $contentBlocks = \App\Models\AboutPageContentBlock::where('is_active', true)
            ->orderBy('display_order')
            ->get()
            ->groupBy('block_type');
        
        return view('about', compact(
            'sections',
            'teamMembers',
            'values',
            'recognitions',
            'timelineItems',
            'statistics',
            'whyTravelWithUs',
            'contentBlocks'
        ));
    }

    /**
     * Display the 'Our Team' page.
     *
     * @param Request $request
     * @return View
     */
    public function team(Request $request): View
    {
        return view('team');
    }

    /**
     * Display the 'Sustainability' page.
     *
     * @param Request $request
     * @return View
     */
    public function sustainability(Request $request): View
    {
        return view('sustainability');
    }

    /**
     * Display the 'Partners' page.
     *
     * @param Request $request
     * @return View
     */
    public function partners(Request $request): View
    {
        return view('partners');
    }

    /**
     * Display the 'Careers' page.
     *
     * @param Request $request
     * @return View
     */
    public function careers(Request $request): View
    {
        return view('careers');
    }

    /**
     * Display the 'Press & Media' page.
     *
     * @param Request $request
     * @return View
     */
    public function press(Request $request): View
    {
        return view('press');
    }

    /**
     * Display the 'Booking Help' page.
     *
     * @param Request $request
     * @return View
     */
    public function bookingHelp(Request $request): View
    {
        return view('support.booking-help');
    }

    /**
     * Display the 'FAQ' page.
     *
     * @param Request $request
     * @return View
     */
    public function faq(Request $request): View
    {
        return view('support.faq');
    }

    /**
     * Display the 'Customer Reviews' page.
     *
     * @param Request $request
     * @return View
     */
    public function reviews(Request $request): View
    {
        return view('support.reviews');
    }

    /**
     * Display the 'Travel Insurance' page.
     *
     * @param Request $request
     * @return View
     */
    public function travelInsurance(Request $request): View
    {
        return view('support.travel-insurance');
    }

    /**
     * Display the 'Travel Tips' page.
     *
     * @param Request $request
     * @return View
     */
    public function travelTips(Request $request): View
    {
        return view('support.travel-tips');
    }

    /**
     * Display the 'Gift Cards' page.
     *
     * @param Request $request
     * @return View
     */
    public function giftCards(Request $request): View
    {
        return view('support.gift-cards');
    }

    /**
     * Display the 'Safaris' page.
     *
                    'rating' => $tour->rating ?? 4.5,
                    'is_featured' => $tour->is_featured ?? false,
                ];
            });

        return view('safaris', compact('safariTours'));
    }

    /**
     * Display the 'Custom Tours' page.
     *
     * @param Request $request
     * @return View
     */
    public function customTours(Request $request): View
    {
        // Get destinations for the form (Destination model doesn't have is_active column)
        $destinations = \App\Models\Destination::orderBy('name')->get();
        
        return view('custom-tours', compact('destinations'));
    }

    public function tours(): View
    {
        // Get tours from database with destination relationship
        $tours = \App\Models\Tour::with(['categories', 'destination'])
            ->where('status', 'active')
            ->where('publish_status', 'published')
            ->orderBy('is_featured', 'desc')
            ->orderBy('name')
            ->get();
        
        // Get categories for filtering
        $categories = \App\Models\TourCategory::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
        
        // Get unique destinations for filtering
        $destinations = \App\Models\Destination::orderBy('name')
            ->pluck('name')
            ->values();
        
        return view('tours', compact('tours', 'categories', 'destinations'));
    }

    /**
     * Display destinations page.
     *
     * @return View
     */
    public function destinations(): View
    {
        // Get destinations from database
        $destinations = \App\Models\HomepageDestination::where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('name')
            ->get();
        
        // Get tour count and featured tours for each destination
        foreach ($destinations as $destination) {
            $destination->tour_count = \App\Models\Tour::where('status', 'active')
                ->where('publish_status', 'published')
                ->where(function($query) use ($destination) {
                    $query->where('destination', 'like', '%' . $destination->name . '%')
                          ->orWhere('name', 'like', '%' . $destination->name . '%');
                })
                ->count();
            
            // Get featured tours for this destination
            $destination->featured_tours = \App\Models\Tour::with('destination')
                ->where('status', 'active')
                ->where('publish_status', 'published')
                ->where(function($query) use ($destination) {
                    $query->where('destination', 'like', '%' . $destination->name . '%')
                          ->orWhere('name', 'like', '%' . $destination->name . '%');
                })
                ->orderBy('is_featured', 'desc')
                ->orderBy('rating', 'desc')
                ->take(5)
                ->get(['id', 'name', 'slug', 'price', 'rating'])
                ->toArray();
        }
        
        return view('destinations', compact('destinations'));
    }

    /**
     * Display kilimanjaro page.
     *
     * @return View
     */
    public function kilimanjaro(): View
    {
        // Get Kilimanjaro-related tours from database
        $kilimanjaroTours = \App\Models\Tour::with(['destination', 'categories'])
            ->where('status', 'active')
            ->where('publish_status', 'published')
            ->where(function($query) {
                $query->where('name', 'like', '%kilimanjaro%')
                      ->orWhere('description', 'like', '%kilimanjaro%')
                      ->orWhere('short_description', 'like', '%kilimanjaro%')
                      ->orWhere('tour_type', 'like', '%trekking%')
                      ->orWhere('tour_type', 'like', '%mountain%');
            })
            ->orderBy('is_featured', 'desc')
            ->orderBy('name')
            ->get();
        
        // Get statistics for Kilimanjaro
        $stats = [
            'total_tours' => $kilimanjaroTours->count(),
            'featured_tours' => $kilimanjaroTours->where('is_featured', true)->count(),
            'avg_price' => $kilimanjaroTours->avg('price'),
            'avg_duration' => $kilimanjaroTours->avg('duration_days'),
        ];
        
        return view('kilimanjaro', compact('kilimanjaroTours', 'stats'));
    }

    /**
     * Display things to do page.
     *
     * @return View
     */
    public function todo(): View
    {
        // Get tour categories for activity types
        $categories = \App\Models\TourCategory::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
        
        // Get featured tours for each category
        $toursByCategory = [];
        foreach ($categories as $category) {
            $toursByCategory[$category->slug] = \App\Models\Tour::with(['destination', 'categories'])
                ->where('status', 'active')
                ->where('publish_status', 'published')
                ->whereHas('categories', function($query) use ($category) {
                    $query->where('tour_categories.id', $category->id);
                })
                ->orderBy('is_featured', 'desc')
                ->orderBy('name')
                ->take(3)
                ->get();
        }
        
        // Get all tours for the "All Activities" section
        $allTours = \App\Models\Tour::with(['destination', 'categories'])
            ->where('status', 'active')
            ->where('publish_status', 'published')
            ->orderBy('is_featured', 'desc')
            ->orderBy('name')
            ->take(12)
            ->get();
        
        return view('todo', compact('categories', 'toursByCategory', 'allTours'));
    }

    /**
     * Display blog page.
     *
     * @return View
     */
    public function blog(): View
    {
        return view('blog');
    }

    /**
     * Display contact page.
     *
     * @return View
     */
    public function contact(): View
    {
        return view('contact');
    }

    /**
     * Show the affiliate program page.
     *
     * @param Request $request
     * @return View
     */
    public function affiliate(Request $request): View
    {
        return view('affiliate');
    }

    /**
     * Show the privacy policy page.
     *
     * @param Request $request
     * @return View
     */
    public function privacy(Request $request): View
    {
        return view('privacy');
    }

    /**
     * Show the terms and conditions page.
     *
     * @param Request $request
     * @return View
     */
    public function terms(Request $request): View
    {
        return view('terms');
    }

    /**
     * Show the cookie policy page.
     *
     * @param Request $request
     * @return View
     */
    public function cookie(Request $request): View
    {
        return view('cookie');
    }

    /**
     * Show the booking conditions page.
     *
     * @param Request $request
     * @return View
     */
    public function booking(Request $request): View
    {
        return view('booking');
    }
}

