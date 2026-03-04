@extends('layouts.app', ['title' => 'Client Testimonials - Xplore Car Imports', 'description' => 'Read testimonials from satisfied Xplore Car Imports clients who have successfully imported their dream cars from Japan.'])

@section('content')
<div class="page-shell">
    {{-- Hero Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-3 lg:px-4 py-4 sm:py-6 lg:py-8">
        <div class="text-center mb-8 sm:mb-12 lg:mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">What Our Clients Say</p>
            <h1 class="text-2xl sm:text-4xl lg:text-6xl font-extrabold mb-3 sm:mb-4 leading-tight">Hear from Satisfied Xplore Car Imports Clients</h1>
            <p class="text-base sm:text-lg lg:text-xl ui-muted max-w-3xl mx-auto px-3 sm:px-0">Join Successful Kenyans who have imported quality vehicles with confidence and ease through Xplore Car Imports.</p>
        </div>
    </div>

    {{-- Video Testimonials Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">Client Stories</p>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Watch Real Client Video Testimonials</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base max-w-2xl mx-auto">Hear directly from our satisfied clients as they share their experience importing vehicles with Xplore Car Imports</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            {{-- Video 1 --}}
            <div class="group relative overflow-hidden bg-slate-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="aspect-video w-full overflow-hidden">
                    <iframe 
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/8APihMmKJb4?start=5" 
                        title="Client Testimonial 1"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-6 flex flex-col justify-end pointer-events-none">
                    <p class="text-white font-semibold">happy Client success story</p>
                    <p class="text-slate-200 text-sm">Private Vehicle Owner</p>
                </div>
            </div>

            {{-- Video 2 --}}
            <div class="group relative overflow-hidden bg-slate-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="aspect-video w-full overflow-hidden">
                    <iframe 
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/ztZaKMBXPTI" 
                        title="Client Testimonial 2"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-6 flex flex-col justify-end pointer-events-none">
                    <p class="text-white font-semibold">happy Client success story</p>
                    <p class="text-slate-200 text-sm">Private Vehicle Owner</p>
                </div>
            </div>

            {{-- Video 3 --}}
            <div class="group relative overflow-hidden bg-slate-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="aspect-video w-full overflow-hidden">
                    <iframe 
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/Rk-3GiidTZY" 
                        title="Client Testimonial 2 - happy Client success story"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-6 flex flex-col justify-end pointer-events-none">
                    <p class="text-white font-semibold">happy Client success story</p>
                    <p class="text-slate-200 text-sm">Private Vehicle Owner</p>
                </div>
            </div>

            {{-- Video 4 --}}
            <div class="group relative overflow-hidden bg-slate-900 shadow-lg hover:shadow-2xl transition-all duration-300">
                <div class="aspect-video w-full overflow-hidden">
                    <iframe 
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/t2E0UnaAsMA?start=36" 
                        title="Client Testimonial 4"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-6 flex flex-col justify-end pointer-events-none">
                    <p class="text-white font-semibold">happy Client success story</p>
                    <p class="text-slate-200 text-sm">Private Vehicle Owner</p>
                </div>
            </div>
    </div>
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-6">
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl lg:text-4xl font-bold text-amber-400 mb-1 sm:mb-2">10+</p>
                <p class="ui-muted text-xs sm:text-sm">Happy Customers</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl lg:text-4xl font-bold text-amber-400 mb-1 sm:mb-2">4.9/5</p>
                <p class="ui-muted text-xs sm:text-sm">Average Rating</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl lg:text-4xl font-bold text-amber-400 mb-1 sm:mb-2">10+</p>
                <p class="ui-muted text-xs sm:text-sm">Vehicles Imported</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl lg:text-4xl font-bold text-amber-400 mb-1 sm:mb-2">100%</p>
                <p class="ui-muted text-xs sm:text-sm">Satisfaction Guarantee</p>
            </div>
        </div>
    </div>

    
    {{-- Testimonials Grid --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            {{-- Testimonial Card 1 --}}
            <div class="glass-panel p-6 sm:p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">David K***</h3>
                        <p class="text-sm ui-muted">Taxi Business Owner</p>
                    </div>
                    <div class="flex gap-1">
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">"Xplore Car Imports made the entire process seamless. From selecting the car to clearing it at customs, everything was handled professionally. I saved significantly compared to what I would have spent elsewhere. Highly recommended!"</p>
            </div>

            {{-- Testimonial Card 2 --}}
            <div class="glass-panel p-6 sm:p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">Amelia ***</h3>
                        <p class="text-sm ui-muted">Private Vehicle Owner</p>
                    </div>
                    <div class="flex gap-1">
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">"I was skeptical about importing a car from Japan, but the Xplore team answered all my questions and walked me through each step. The car arrived in perfect condition, and I'm absolutely in love with it. Transparent, reliable, and trustworthy!"</p>
            </div>

            {{-- Testimonial Card 3 --}}
            <div class="glass-panel p-6 sm:p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">Samuel K***</h3>
                        <p class="text-sm ui-muted">Commercial Investor</p>
                    </div>
                    <div class="flex gap-1">
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">"I imported 3 vehicles for my fleet and had nothing but positive experiences. The team's expertise in navigating customs and regulations is exceptional. They handled everything efficiently and professionally. This is my go-to partner for all car imports."</p>
            </div>

            {{-- Testimonial Card 4 --}}
            <div class="glass-panel p-6 sm:p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">Njoro ***</h3>
                        <p class="text-sm ui-muted">Family Business Owner</p>
                    </div>
                    <div class="flex gap-1">
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">"Xplore's customer service is outstanding. They provided honest guidance and helped me choose a vehicle that suited my budget perfectly. The entire process was faster than expected, and my car is running like a dream!"</p>
            </div>

            {{-- Testimonial Card 5 --}}
            <div class="glass-panel p-6 sm:p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">Grace K***</h3>
                        <p class="text-sm ui-muted">Transport Business Owner</p>
                    </div>
                    <div class="flex gap-1">
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">"I've been in the transport business for years, and this is the best experience I've had importing vehicles. Xplore's transparency and attention to detail set them apart. I've already referred several friends to their service!"</p>
            </div>

            {{-- Testimonial Card 6 --}}
            <div class="glass-panel p-6 sm:p-8 hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">Joseph W***</h3>
                        <p class="text-sm ui-muted">Executive Professional</p>
                    </div>
                    <div class="flex gap-1">
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                        <ion-icon name="star" class="text-green-400"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">"The peace of mind that comes with using Xplore is invaluable. Every step was explained clearly, and I was never left in the dark. My car is fantastic, and I got excellent value for my money. Will definitely use them again!"</p>
            </div>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="glass-panel p-8 sm:p-12 lg:p-16 text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">Ready to Import Your Dream Car?</h2>
            <p class="ui-muted text-base sm:text-lg mb-8 max-w-2xl mx-auto">Join hundreds of satisfied customers who have successfully imported quality vehicles with Xplore Car Imports.</p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                <a href="{{ route('cars') }}" class="btn-primary btn-lg">
                    Browse Vehicles
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-lg">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
