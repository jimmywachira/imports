@extends('layouts.app', ['title' => 'About Us - Xplore Cars Imports', 'description' => 'Learn about Xplore Cars Imports, our mission, values, and experience helping Kenyans import premium Japanese vehicles with transparency and care.'])

@section('content')
<div class="page-shell">
    {{-- Hero Section with Background Image --}}
    <div class="relative w-full min-h-125 sm:min-h-150 lg:min-h-175 overflow-hidden flex items-center justify-center mb-16 sm:mb-20 lg:mb-24">
        {{-- Background Image with Mazda CX5 --}}
        <div class="absolute inset-0 z-0">
            <img src="https://www.mazdausa.com/siteassets/vehicles/2026/cx-5/04_btv/004_exterior/ext.-360s/2.5-s/360-rhodium-white/e360-my26-cx5-s-rhodiumwhite-v2-024.jpg#default?w=1023" 
                 alt="Mazda CX5 White Car" 
                 class="w-full h-full object-cover object-center scale-110 hover:scale-105 transition-transform duration-700"
            />
            {{-- Premium Gradient Overlays with blur --}}
            <div class="absolute inset-0 bg-linear-to-br from-blue-950/50 via-blue-900/50 to-blue-950/50"></div>
            <div class="absolute inset-0 bg-linear-to-r from-blue-950/50 via-blue-900/30 to-transparent"></div>
            {{-- Animated radial glows for premium feel --}}
            <div class="absolute top-10 right-20 w-96 h-96 bg-green-400/10 rounded-full filter blur-3xl opacity-40 animate-pulse"></div>
            <div class="absolute bottom-10 left-20 w-80 h-80 bg-blue-400/5 rounded-full filter blur-3xl opacity-30"></div>
        </div>

        {{-- Content Container with Animation --}}
        <div class="relative z-10 max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-20 lg:py-32 text-center w-full space-y-6 sm:space-y-8">
            {{-- Premium Badge with Animation --}}
            <div class="inline-block animate-fade-in">
                <div class="group">
                    <p class="uppercase tracking-[0.3em] text-xs font-bold text-green-300 bg-linear-to-r from-green-400/20 to-green-300/20 px-4 sm:px-6 py-2 rounded-full backdrop-blur-xl border border-green-400/50 transition-all hover:bg-linear-to-r hover:from-green-400/30 hover:to-green-300/30 hover:border-green-300/70">
                        About Xplore Imports
                    </p>
                </div>
            </div>

            {{-- Main Heading with Premium Typography --}}
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black mb-4 sm:mb-6 leading-tight text-white drop-shadow-2xl">
                <span class="bg-linear-to-r from-green-300 via-emerald-300 to-green-400 bg-clip-text text-transparent animate-pulse">Making car importation</span>
                <br class="hidden sm:block" />
                <span class="text-white font-black">easy, transparent, stress-free</span>
                <br class="hidden sm:block" />
                <span class="bg-linear-to-r from-green-300 to-green-400 bg-clip-text text-transparent">for every Kenyan</span>
            </h1>

            {{-- Subheading with Better Contrast --}}
            <p class="text-base sm:text-lg lg:text-xl text-emerald-50 max-w-3xl mx-auto px-2 sm:px-0 leading-relaxed drop-shadow-lg font-light">
                We connect Kenyans to quality, premium cars from Japan—handling everything from sourcing and inspection to shipping and customs clearance with complete transparency.
            </p>

            {{-- CTA Buttons with Premium Styling --}}
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center pt-4">
                <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center gap-2 px-8 py-4 bg-linear-to-r from-green-400 to-green-500 hover:from-green-500 hover:to-emerald-600 text-white font-semibold rounded-xl transition-all transform hover:scale-105 hover:shadow-2xl hover:shadow-green-500/50 backdrop-blur-sm border border-green-300/50">
                    <ion-icon name="call-outline" class="text-xl group-hover:rotate-12 transition-transform"></ion-icon>
                    <span>Get in Touch Now</span>
                </a>
                <a href="{{ route('cars') }}" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl transition-all transform hover:scale-105 backdrop-blur-xl border border-white/30 hover:border-white/50">
                    <ion-icon name="car-outline" class="text-xl group-hover:scale-110 transition-transform"></ion-icon>
                    <span>Browse Inventory</span>
                </a>
            </div>
        </div>

        {{-- Scroll Indicator with Animation --}}
        <div class="absolute bottom-6 sm:bottom-8 left-1/2 transform -tranblue-x-1/2 z-10 animate-bounce">
            <div class="bg-green-400/30 backdrop-blur-sm rounded-full p-3 border border-green-400/50">
                <ion-icon name="chevron-down-outline" class="text-2xl text-green-300 drop-shadow-lg"></ion-icon>
            </div>
        </div>
    </div>

    {{-- Stats Section with Premium Glass Design --}}
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-3 sm:gap-4 lg:gap-5">
            {{-- Stats 1 --}}
            <div class="glass-panel group hover:border-green-400/60 transition-all p-5 sm:p-6 text-center transform hover:scale-105 hover:-tranblue-y-1">
                <div class="flex items-center justify-center mb-3">
                    <ion-icon name="build-outline" class="text-3xl text-green-400 group-hover:rotate-12 transition-transform"></ion-icon>
                </div>
                <p class="text-2xl sm:text-3xl font-bold text-green-400 mb-1">1+</p>
                <p class="ui-muted text-xs sm:text-sm font-medium">Years in Business</p>
            </div>

            {{-- Stats 2 --}}
            <div class="glass-panel group hover:border-green-400/60 transition-all p-5 sm:p-6 text-center transform hover:scale-105 hover:-tranblue-y-1">
                <div class="flex items-center justify-center mb-3">
                    <ion-icon name="car" class="text-3xl text-green-400 group-hover:tranblue-x-1 transition-transform"></ion-icon>
                </div>
                <p class="text-2xl sm:text-3xl font-bold text-green-400 mb-1">10+</p>
                <p class="ui-muted text-xs sm:text-sm font-medium">Cars Imported</p>
            </div>

            {{-- Stats 3 --}}
            <div class="glass-panel group hover:border-green-400/60 transition-all p-5 sm:p-6 text-center transform hover:scale-105 hover:-tranblue-y-1">
                <div class="flex items-center justify-center mb-3">
                    <ion-icon name="happy-outline" class="text-3xl text-green-400 group-hover:scale-110 transition-transform"></ion-icon>
                </div>
                <p class="text-2xl sm:text-3xl font-bold text-green-400 mb-1">10+</p>
                <p class="ui-muted text-xs sm:text-sm font-medium">Happy Clients</p>
            </div>

            {{-- Stats 4 --}}
            <div class="glass-panel group hover:border-green-400/60 transition-all p-5 sm:p-6 text-center transform hover:scale-105 hover:-tranblue-y-1">
                <div class="flex items-center justify-center mb-3">
                    <ion-icon name="briefcase-outline" class="text-3xl text-green-400 group-hover:-rotate-12 transition-transform"></ion-icon>
                </div>
                <p class="text-2xl sm:text-3xl font-bold text-green-400 mb-1">10+</p>
                <p class="ui-muted text-xs sm:text-sm font-medium">Taxi Investors</p>
            </div>

            {{-- Stats 5 --}}
            <div class="glass-panel group hover:border-green-400/60 transition-all p-5 sm:p-6 text-center transform hover:scale-105 hover:-tranblue-y-1">
                <div class="flex items-center justify-center mb-3">
                    <ion-icon name="people-outline" class="text-3xl text-green-400 group-hover:scale-125 transition-transform"></ion-icon>
                </div>
                <p class="text-2xl sm:text-3xl font-bold text-green-400 mb-1">200+</p>
                <p class="ui-muted text-xs sm:text-sm font-medium">Drivers Trained</p>
            </div>

            {{-- Stats 6 --}}
            <div class="glass-panel group hover:border-green-400/60 transition-all p-5 sm:p-6 text-center transform hover:scale-105 hover:-tranblue-y-1">
                <div class="flex items-center justify-center mb-3">
                    <ion-icon name="navigate-outline" class="text-3xl text-green-400 group-hover:rotate-45 transition-transform"></ion-icon>
                </div>
                <p class="text-2xl sm:text-3xl font-bold text-green-400 mb-1">100+</p>
                <p class="ui-muted text-xs sm:text-sm font-medium">Connected Drivers</p>
            </div>
        </div>
    </div>

    {{-- Our Story Section with Background Image --}}
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
        <div class="relative overflow-hidden rounded-3xl border border-green-400/20 shadow-2xl">
            <img
                src="https://www.mazdausa.com/siteassets/vehicles/2026/cx-5/04_btv/004_exterior/ext.-360s/2.5-s/360-rhodium-white/e360-my26-cx5-s-rhodiumwhite-v2-024.jpg"
                alt="Mazda CX-5 background"
                class="absolute inset-0 h-full w-full object-cover"
            />
            <div class="absolute inset-0 bg-linear-to-br from-blue-950/50 via-blue-900/50 to-blue-950/50"></div>
            <div class="absolute inset-0 bg-linear-to-r from-blue-950/50 via-blue-900/30 to-transparent"></div>

            <div class="relative z-10 p-6 sm:p-10 lg:p-14">
                <div class="max-w-4xl text-center lg:text-left">
                    <p class="uppercase tracking-[0.3em] text-xs font-bold text-green-300 mb-3">OUR JOURNEY</p>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-6 leading-tight text-white">Our Story</h2>
                    <p class="text-sm sm:text-base leading-relaxed mb-4 text-blue-100/95">
                        Xplore Imports was born out of a simple idea: helping everyday Kenyans find the right cars for their taxi and personal businesses. Over the years, we noticed one common challenge—many people wanted to import cars but didn't know where to start or who to trust.
                    </p>
                    <p class="text-sm sm:text-base leading-relaxed mb-4 text-blue-100/95">
                        Our mission is to make the car importation journey easy, transparent, and stress-free. We connect clients to quality and affordable cars from Japan, handling everything from sourcing, inspection, shipping, and customs clearance to final delivery straight to your door.
                    </p>
                    <p class="text-sm sm:text-base leading-relaxed mb-6 text-blue-100/95">
                        Since 2021, we've been offering expert Taxi Business Advising, helping hundreds of drivers and entrepreneurs make smarter car investment decisions. In 2025 we expanded into Car Import Services bringing the same trusted, transparent approach to vehicle sourcing from Japan.
                    </p>
                    <p class="text-sm sm:text-base leading-relaxed mb-8 text-blue-100/95">
                        We believe in open communication and honesty every step of the way. Clients receive clear updates, transparent costs, and total peace of mind knowing their cars are handled with care.
                    </p>
                    <a href="https://youtu.be/feO-u_WJjog?si=WusDX_6oR6UZO6Ep" target="_blank" class="group inline-flex items-center gap-2 px-6 py-3 bg-linear-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold rounded-lg transition-all transform hover:scale-105">
                        <ion-icon name="logo-youtube" class="text-xl group-hover:animate-pulse"></ion-icon>
                        <span>Watch Our Story</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Core Values Section with Premium Design --}}
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
        <div class="text-center mb-12 sm:mb-16">
            <p class="uppercase tracking-[0.3em] text-xs font-bold text-green-400 mb-3">WHAT DRIVES US</p>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4">Our Core Values</h2>
            <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">The principles that guide every decision we make and how we serve our valued clients with excellence</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            {{-- Value 1 --}}
            <div class="group glass-panel p-6 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:scale-105 hover:-tranblue-y-2">
                <div class="w-14 h-14 bg-linear-to-br from-green-400 to-green-500 rounded-xl flex items-center justify-center mb-4 shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-transform shadow-lg">
                    <ion-icon name="shield-checkmark-outline" class="text-2xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg sm:text-xl font-bold mb-3">Integrity & Transparency</h3>
                <p class="ui-muted text-sm leading-relaxed">Honest communication and clear pricing with no hidden fees ever.</p>
            </div>

            {{-- Value 2 --}}
            <div class="group glass-panel p-6 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:scale-105 hover:-tranblue-y-2">
                <div class="w-14 h-14 bg-linear-to-br from-amber-400 to-amber-500 rounded-xl flex items-center justify-center mb-4 shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-transform shadow-lg">
                    <ion-icon name="heart-outline" class="text-2xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg sm:text-xl font-bold mb-3">Customer Care</h3>
                <p class="ui-muted text-sm leading-relaxed">Every client is treated as a partner—your satisfaction is our success.</p>
            </div>

            {{-- Value 3 --}}
            <div class="group glass-panel p-6 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:scale-105 hover:-tranblue-y-2">
                <div class="w-14 h-14 bg-linear-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center mb-4 shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-transform shadow-lg">
                    <ion-icon name="globe-outline" class="text-2xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg sm:text-xl font-bold mb-3">Global Reach</h3>
                <p class="ui-muted text-sm leading-relaxed">Strong partnerships in Japan ensure premium selections and quality.</p>
            </div>

            {{-- Value 4 --}}
            <div class="group glass-panel p-6 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:scale-105 hover:-tranblue-y-2">
                <div class="w-14 h-14 bg-linear-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center mb-4 shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-transform shadow-lg">
                    <ion-icon name="checkmark-circle-outline" class="text-2xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg sm:text-xl font-bold mb-3">Reliability</h3>
                <p class="ui-muted text-sm leading-relaxed">We deliver what we promise—on time and with exceptional care.</p>
            </div>

            {{-- Value 5 --}}
            <div class="group glass-panel p-6 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:scale-105 hover:-tranblue-y-2">
                <div class="w-14 h-14 bg-linear-to-br from-indigo-400 to-indigo-500 rounded-xl flex items-center justify-center mb-4 shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-transform shadow-lg">
                    <ion-icon name="people-outline" class="text-2xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg sm:text-xl font-bold mb-3">Community Focus</h3>
                <p class="ui-muted text-sm leading-relaxed">We grow by empowering Kenyans to make informed car investments.</p>
            </div>

            {{-- Value 6 --}}
            <div class="group glass-panel p-6 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:scale-105 hover:-tranblue-y-2">
                <div class="w-14 h-14 bg-linear-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center mb-4 shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-transform shadow-lg">
                    <ion-icon name="star-outline" class="text-2xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg sm:text-xl font-bold mb-3">Excellence</h3>
                <p class="ui-muted text-sm leading-relaxed">Striving for quality service in every import, every client, always.</p>
            </div>
        </div>
    </div>

    {{-- Why Choose Us Section --}}
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
        <div class="text-center mb-12 sm:mb-16">
            <p class="uppercase tracking-[0.3em] text-xs font-bold text-green-400 mb-3">COMPETITIVE ADVANTAGE</p>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4">Why Choose Xplore Imports</h2>
            <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">Built on trust, experience, and a genuine passion for making car importation simple and stress-free</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 sm:gap-8">
            {{-- Benefit 1 --}}
            <div class="group glass-panel p-7 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:-tranblue-y-2">
                <div class="flex gap-4 sm:gap-5">
                    <div class="w-12 h-12 bg-linear-to-br from-green-400 to-green-500 rounded-lg flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                        <ion-icon name="cube-outline" class="text-xl text-black"></ion-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">End-to-End Service</h3>
                        <p class="ui-muted text-sm leading-relaxed">From vehicle sourcing to doorstep delivery—we handle everything with expertise and care.</p>
                    </div>
                </div>
            </div>

            {{-- Benefit 2 --}}
            <div class="group glass-panel p-7 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:-tranblue-y-2">
                <div class="flex gap-4 sm:gap-5">
                    <div class="w-12 h-12 bg-linear-to-br from-blue-400 to-blue-500 rounded-lg flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                        <ion-icon name="checkmark-done-outline" class="text-xl text-black"></ion-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Trusted Markets</h3>
                        <p class="ui-muted text-sm leading-relaxed">We only source cars from reputable and verified dealers with stellar track records.</p>
                    </div>
                </div>
            </div>

            {{-- Benefit 3 --}}
            <div class="group glass-panel p-7 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:-tranblue-y-2">
                <div class="flex gap-4 sm:gap-5">
                    <div class="w-12 h-12 bg-linear-to-br from-amber-400 to-amber-500 rounded-lg flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                        <ion-icon name="person-circle-outline" class="text-xl text-black"></ion-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Personal Guidance</h3>
                        <p class="ui-muted text-sm leading-relaxed">Our dedicated team walks with you through every step of the entire process.</p>
                    </div>
                </div>
            </div>

            {{-- Benefit 4 --}}
            <div class="group glass-panel p-7 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:-tranblue-y-2">
                <div class="flex gap-4 sm:gap-5">
                    <div class="w-12 h-12 bg-linear-to-br from-green-400 to-emerald-500 rounded-lg flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                        <ion-icon name="pricetag-outline" class="text-xl text-black"></ion-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Affordable Pricing</h3>
                        <p class="ui-muted text-sm leading-relaxed">We ensure competitive rates without compromising on quality or service.</p>
                    </div>
                </div>
            </div>

            {{-- Benefit 5 --}}
            <div class="group glass-panel p-7 sm:p-8 rounded-2xl hover:border-green-400/60 transition-all transform hover:-tranblue-y-2 sm:col-span-2 lg:col-span-1">
                <div class="flex gap-4 sm:gap-5">
                    <div class="w-12 h-12 bg-linear-to-br from-purple-400 to-purple-500 rounded-lg flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                        <ion-icon name="rocket-outline" class="text-xl text-black"></ion-icon>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Fast & Secure Delivery</h3>
                        <p class="ui-muted text-sm leading-relaxed">Your car arrives safely with real-time shipment tracking updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ Section with Premium Design --}}
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
        <div class="rounded-3xl glass-panel p-8 sm:p-10 lg:p-12">
            <div class="text-center mb-10 sm:mb-12">
                <p class="uppercase tracking-[0.3em] text-xs font-bold text-green-400 mb-3">NEED CLARITY?</p>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4">Frequently Asked Questions</h2>
                <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">Find quick answers to common questions about our import process, requirements, and services</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-5">
                {{-- FAQ Item 1 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">01</span>
                            <span class="text-sm sm:text-base font-semibold">How does car importation work?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We help you source your preferred vehicle from overseas dealers, handle the purchase, shipping, and clearance at the port before delivery to you.
                    </div>
                </details>

                {{-- FAQ Item 2 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">02</span>
                            <span class="text-sm sm:text-base font-semibold">What documents are required?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        You'll need a valid national ID or passport, KRA PIN certificate, and proof of purchase. We'll assist with customs clearance documents.
                    </div>
                </details>

                {{-- FAQ Item 3 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">03</span>
                            <span class="text-sm sm:text-base font-semibold">Do I pay upfront?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        No. We offer flexible payment: 70% deposit when confirmed, 30% plus clearing charges when your vehicle arrives at the Port of Mombasa.
                    </div>
                </details>

                {{-- FAQ Item 4 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">04</span>
                            <span class="text-sm sm:text-base font-semibold">Are there hidden costs?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        No. We provide transparent quotations upfront including shipping, customs duty, port charges, and clearance fees.
                    </div>
                </details>

                {{-- FAQ Item 5 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">05</span>
                            <span class="text-sm sm:text-base font-semibold">Can I track my vehicle?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, we provide shipping details and real-time updates so you can track your vehicle until it arrives in Kenya.
                    </div>
                </details>

                {{-- FAQ Item 6 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">06</span>
                            <span class="text-sm sm:text-base font-semibold">What vehicle types can I import?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We help import cars, SUVs, vans, trucks, and specialized vehicles that meet KEBS age and standards requirements.
                    </div>
                </details>

                {{-- FAQ Item 7 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">07</span>
                            <span class="text-sm sm:text-base font-semibold">Are cars inspected before arrival?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes. All vehicles pass pre-shipment inspection (PSI) ensuring they meet Kenya's safety and environmental standards.
                    </div>
                </details>

                {{-- FAQ Item 8 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">08</span>
                            <span class="text-sm sm:text-base font-semibold">How long does the process take?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Typically 45-60 days from selection to delivery, including sourcing, shipping, port clearance, NTSA registration, and final delivery.
                    </div>
                </details>

                {{-- FAQ Item 9 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">09</span>
                            <span class="text-sm sm:text-base font-semibold">Can I finance my imported car?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, we work with financial partners offering car import financing solutions depending on your eligibility.
                    </div>
                </details>

                {{-- FAQ Item 10 --}}
                <details class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-5 transition hover:bg-white/10 dark:hover:border-green-400/40">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 group-hover:text-green-400 transition">
                        <div class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-400/20 text-green-400 text-sm font-bold shrink-0">10</span>
                            <span class="text-sm sm:text-base font-semibold">Do vehicles come with warranty?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-green-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, some vehicles come with manufacturer or dealer warranties, and we guide you on extended warranty options.
                    </div>
                </details>
            </div>
        </div>
    </div>

    {{-- Premium CTA Section --}}
    <div class="max-w-4xl mx-auto px-3 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
        <div class="relative group">
            {{-- Background with Mazda image blur and gradient --}}
            <div class="absolute inset-0 rounded-3xl overflow-hidden">
                <img src="https://www.mazdausa.com/siteassets/vehicles/2026/cx-5/04_btv/004_exterior/ext.-360s/2.5-s/360-rhodium-white/e360-my26-cx5-s-rhodiumwhite-v2-024.jpg" 
                     alt="Mazda Background" 
                     class="w-full h-full object-cover blur-sm opacity-30 group-hover:blur-md group-hover:opacity-40 transition-all duration-500"
                />
                <div class="absolute inset-0 bg-linear-to-br from-green-600/90 via-green-500/85 to-emerald-600/90"></div>
                <div class="absolute inset-0 bg-linear-to-t from-blue-900/40 to-transparent"></div>
            </div>

            {{-- Content --}}
            <div class="relative z-10 rounded-3xl px-6 sm:px-8 lg:px-12 py-12 sm:py-14 lg:py-16 text-center space-y-6">
                <div>
                    <p class="uppercase tracking-[0.3em] text-xs font-bold text-white/80 mb-3">TAKE THE NEXT STEP</p>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white drop-shadow-lg mb-4">Ready for Your Premium Import?</h2>
                    <p class="text-base sm:text-lg text-white/95 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                        Browse our premium inventory of Japanese vehicles or get in touch with our team to discuss your perfect match.
                    </p>
                </div>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 justify-center pt-4">
                    <a href="{{ route('contact') }}" class="group/btn inline-flex items-center justify-center gap-2 px-8 py-4 bg-white hover:bg-blue-100 text-green-600 font-bold rounded-xl transition-all transform hover:scale-105 shadow-2xl hover:shadow-3xl">
                        <ion-icon name="call-outline" class="text-xl group-hover/btn:rotate-12 transition-transform"></ion-icon>
                        <span>Contact Us Now</span>
                    </a>
                    <a href="{{ route('cars') }}" class="group/btn inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/20 hover:bg-white/30 text-white font-bold rounded-xl transition-all transform hover:scale-105 backdrop-blur-lg border border-white/40 hover:border-white/60">
                        <ion-icon name="car-outline" class="text-xl group-hover/btn:scale-125 transition-transform"></ion-icon>
                        <span>View Inventory</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

