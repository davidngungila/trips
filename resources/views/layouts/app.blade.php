<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(isset($title)) {{ $title }} - @endif TanzaniaTrips – Discover the Heart of Africa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,800;1,400&family=Outfit:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

<!-- TOAST -->
<div class="toast" id="toast"><i class="fas fa-check-circle"></i><span id="toast-msg">Done!</span></div>

<!-- NAVBAR -->
@include('partials.navbar')

<!-- MAIN CONTENT -->
@yield('content')

<!-- FOOTER -->
@include('partials.footer')

<!-- TOUR DETAIL MODALS -->
@include('partials.modals')

<!-- JAVASCRIPT -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')

</body>
</html>
