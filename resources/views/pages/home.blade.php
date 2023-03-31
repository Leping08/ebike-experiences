@extends('layouts.app')

@section('title', 'eBikes Florida')

@section('description',
    'Explore the benefits of electric bikes in Florida. Our site provides information and resources
    to help you make the switch to eco-friendly transportation. Learn about the latest e-bike models, regulations, and best
    practices for safe riding in the Sunshine State.')

@section('content')
    <main class="container mx-auto py-8">
        <div class="w-full">
            <iframe class="h-96 w-2/3" src="http://custompromotionsinc.com/flipbooks/LaboratoryMillWithPrices/"></iframe>
        </div>
        <h1 class="text-4xl font-bold mb-8">Welcome to {{ config('app.seo_name') }}</h1>
        <img src="https://images.unsplash.com/photo-1501712779049-23ec3228b569" alt="Bike image" class="w-full mb-8">
        <p class="mb-4">Looking for an adventure? Rent an e-bike and explore the beach! With plenty of bike trails and
            breathtaking scenery, it's the perfect way to enjoy the outdoors.</p>
        <img src="https://images.unsplash.com/photo-1616000484288-40eb61f20c16" alt="Bike image"
            class="w-1/2 float-left mr-4 mb-4">
        <img src="https://images.unsplash.com/photo-1574206383445-5bb5b856e5ee" alt="Car image"
            class="w-1/2 float-right ml-4 mb-4">
        <p class="mb-4">Want to explore further? Our e-bikes are equipped with long-lasting batteries, so you can go the
            distance. And if you need to cover even more ground, consider renting one of our e-cars. With zero emissions and
            a quiet electric motor, it's the perfect way to explore without leaving a carbon footprint.</p>
        <img src="https://images.unsplash.com/photo-1572836887393-ae7248c4ff9f" alt="Bike image" class="w-full mb-8">
    </main>
@endsection
