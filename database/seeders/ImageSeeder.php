<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\HomepageDestination;
use App\Models\GalleryImage;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing images
        $this->clearExistingImages();

        // Seed tour images
        $this->seedTourImages();

        // Seed destination images
        $this->seedDestinationImages();

        // Seed homepage gallery images
        $this->seedGalleryImages();

        // Seed homepage destination featured images
        $this->seedHomepageDestinationImages();
    }

    /**
     * Clear existing image URLs
     */
    private function clearExistingImages(): void
    {
        Tour::query()->update(['image_url' => null]);
        Destination::query()->update(['image_url' => null]);
    }

    /**
     * Seed tour images with professional Tanzania safari photos
     */
    private function seedTourImages(): void
    {
        $tourImages = [
            'serengeti-safari' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/serengeti_safari_lions_wildlife.jpg',
            'kilimanjaro-climb' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/kilimanjaro_mountain_summit_climb.jpg',
            'ngorongoro-crater' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ngorongoro_crater_wildlife_view.jpg',
            'lake-manyara' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_manyara_birds_flamingos.jpg',
            'tarangire-national-park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/tarangire_elephants_baobab.jpg',
            'zanzibar-beach' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/zanzibar_beach_resort_ocean.jpg',
            'selous-game-reserve' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/selous_game_reserve_wildlife.jpg',
            'ruaha-national-park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ruaha_river_wilderness.jpg',
            'mikumi-national-park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mikumi_game_drive_safari.jpg',
            'stone-town' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/stone_town_historic_architecture.jpg',
            'pemba-island' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/pemba_island_beach_diving.jpg',
            'arusha-national-park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/arusha_meru_mountain_view.jpg',
            'lake-duluti' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_duluti_fishing_village.jpg',
            'gombe-stream' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/gombe_stream_chimpanzees.jpg',
            'mahale-mountains' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mahale_mountains_forest_trekking.jpg',
            'katavi-national-park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/katavi_lake_flamingos.jpg',
            'rubondo-island' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/rubondo_island_beach_paradise.jpg',
            'saadani-national-park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/saadani_national_park_wildlife.jpg',
            'udzungwa-mountains' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/udzungwa_mountains_trekking_view.jpg',
        ];

        foreach ($tourImages as $slug => $imageUrl) {
            $tour = Tour::where('slug', 'LIKE', "%{$slug}%")->first();
            if ($tour) {
                $tour->update(['image_url' => $imageUrl]);
            }
        }

        $this->command->info('✅ Seeded tour images for ' . count($tourImages) . ' tours');
    }

    /**
     * Seed destination featured images
     */
    private function seedDestinationImages(): void
    {
        $destinationImages = [
            'Serengeti' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/serengeti_national_park_sunset.jpg',
            'Kilimanjaro' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/kilimanjaro_peak_summit_dawn.jpg',
            'Ngorongoro' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ngorongoro_crater_view_from_above.jpg',
            'Lake Manyara' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_manyara_park_landscape.jpg',
            'Tarangire' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/tarangire_river_valley_view.jpg',
            'Zanzibar' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/zanzibar_spice_island_beach.jpg',
            'Selous' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/selous_game_reserve_aerial_view.jpg',
            'Ruaha' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ruaha_national_park_river.jpg',
            'Mikumi' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mikumi_national_park_hippos.jpg',
            'Arusha' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/arusha_national_park_mount_meru.jpg',
            'Lake Victoria' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_victoria_shoreline_sunset.jpg',
            'Pemba' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/pemba_island_tropical_beach.jpg',
            'Gombe' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/gombe_stream_monkey_forest.jpg',
            'Mahale' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mahale_mountains_misty_morning.jpg',
            'Katavi' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/katavi_national_park_lake_view.jpg',
            'Udzungwa' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/udzungwa_mountains_sunset_view.jpg',
        ];

        foreach ($destinationImages as $name => $imageUrl) {
            $destination = Destination::where('name', 'LIKE', "%{$name}%")->first();
            if ($destination) {
                $destination->update(['image_url' => $imageUrl]);
            }
        }

        $this->command->info('✅ Seeded destination images for ' . count($destinationImages) . ' destinations');
    }

    /**
     * Seed homepage gallery images
     */
    private function seedGalleryImages(): void
    {
        $galleryImages = [
            [
                'title' => 'Serengeti Sunset Safari',
                'description' => 'Beautiful sunset over the Serengeti plains with acacia trees',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/serengeti_sunset_acacia_trees.jpg',
                'category' => 'safari',
                'is_featured' => true,
                'display_order' => 1,
            ],
            [
                'title' => 'Kilimanjaro Summit Success',
                'description' => 'Trekking team celebrating at the summit of Mount Kilimanjaro',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/kilimanjaro_summit_celebration.jpg',
                'category' => 'mountain',
                'is_featured' => true,
                'display_order' => 2,
            ],
            [
                'title' => 'Zanzibar Beach Paradise',
                'description' => 'Pristine white sand beaches and crystal clear waters of Zanzibar',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/zanzibar_beach_paradise_resort.jpg',
                'category' => 'beach',
                'is_featured' => true,
                'display_order' => 3,
            ],
            [
                'title' => 'Ngorongoro Crater Wildlife',
                'description' => 'Diverse wildlife in the Ngorongoro Conservation Area',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ngorongoro_wildlife_diversity.jpg',
                'category' => 'wildlife',
                'is_featured' => true,
                'display_order' => 4,
            ],
            [
                'title' => 'Lake Manyara Birds',
                'description' => 'Flamingos and other bird species at Lake Manyara National Park',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_manyara_birds_flamingos_flock.jpg',
                'category' => 'wildlife',
                'is_featured' => false,
                'display_order' => 5,
            ],
            [
                'title' => 'Tarangire Elephants',
                'description' => 'Elephants gathering at waterhole in Tarangire National Park',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/tarangire_elephants_waterhole.jpg',
                'category' => 'wildlife',
                'is_featured' => false,
                'display_order' => 6,
            ],
            [
                'title' => 'Stone Town Architecture',
                'description' => 'Historic Stone Town architecture and narrow streets',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/stone_town_architecture_streets.jpg',
                'category' => 'cultural',
                'is_featured' => false,
                'display_order' => 7,
            ],
            [
                'title' => 'Safari Game Drive',
                'description' => 'Professional safari vehicle on game drive in Serengeti',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/safari_game_drive_vehicle.jpg',
                'category' => 'safari',
                'is_featured' => false,
                'display_order' => 8,
            ],
            [
                'title' => 'Pemba Island Diving',
                'description' => 'Crystal clear waters for diving around Pemba Island',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/pemba_island_diving_snorkeling.jpg',
                'category' => 'beach',
                'is_featured' => false,
                'display_order' => 9,
            ],
            [
                'title' => 'Mahale Mountains Trek',
                'description' => 'Trekking through the pristine Mahale Mountains',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mahale_mountains_trekking_path.jpg',
                'category' => 'mountain',
                'is_featured' => false,
                'display_order' => 10,
            ],
            [
                'title' => 'Local Cultural Experience',
                'description' => 'Authentic Maasai cultural village experience',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/maasai_cultural_village_experience.jpg',
                'category' => 'cultural',
                'is_featured' => false,
                'display_order' => 11,
            ],
            [
                'title' => 'Serengeti Migration',
                'description' => 'Great wildebeest migration crossing the Serengeti plains',
                'image_url' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/serengeti_wildebeest_migration.jpg',
                'category' => 'wildlife',
                'is_featured' => false,
                'display_order' => 12,
            ],
        ];

        // Gallery images will be seeded when GalleryImage model is available
        // foreach ($galleryImages as $image) {
        //     GalleryImage::create($image);
        // }

        $this->command->info('✅ Gallery images prepared: ' . count($galleryImages) . ' images (skipped - GalleryImage model not available)');
    }

    /**
     * Seed homepage destination featured images
     */
    private function seedHomepageDestinationImages(): void
    {
        $homepageDestinations = [
            'Serengeti National Park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/serengeti_national_park_hero.jpg',
            'Ngorongoro Crater' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ngorongoro_crater_hero_view.jpg',
            'Mount Kilimanjaro' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/kilimanjaro_mountain_hero.jpg',
            'Zanzibar Island' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/zanzibar_island_beach_hero.jpg',
            'Stone Town' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/stone_town_historic_hero.jpg',
            'Lake Manyara' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_manyara_park_hero.jpg',
            'Tarangire Park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/tarangire_elephants_hero.jpg',
            'Ruaha National Park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/ruaha_national_park_hero.jpg',
            'Pemba Island' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/pemba_island_beach_hero.jpg',
            'Selous Game Reserve' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/selous_game_reserve_hero.jpg',
            'Mikumi National Park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mikumi_national_park_hero.jpg',
            'Mahale Mountains' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/mahale_mountains_forest_hero.jpg',
            'Gombe Stream' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/gombe_stream_monkey_hero.jpg',
            'Arusha National Park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/arusha_national_park_hero.jpg',
            'Lake Victoria' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/lake_victoria_shoreline_hero.jpg',
            'Katavi National Park' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/katavi_national_park_lake_view_hero.jpg',
            'Udzungwa Mountains' => 'https://res.cloudinary.com/dqflffa1o/image/upload/v1718000000/udzungwa_mountains_hero.jpg',
        ];

        foreach ($homepageDestinations as $name => $imageUrl) {
            $homepageDestination = HomepageDestination::where('name', $name)->first();
            if ($homepageDestination) {
                $homepageDestination->update(['featured_image_url' => $imageUrl]);
            }
        }

        $this->command->info('✅ Seeded homepage destination images for ' . count($homepageDestinations) . ' destinations');
    }
}
