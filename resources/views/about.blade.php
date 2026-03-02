@extends('layouts.app', ['title' => 'About Us - Xplore Car Imports', 'description' => 'Learn about Xplore Car Imports, our mission, values, and experience helping Kenyans import premium Japanese vehicles with transparency and care.'])

@section('content')
<div class="page-shell">
    {{-- Hero Section with Background Image --}}
    <div class="relative w-full min-h-[500px] sm:min-h-[600px] lg:min-h-[700px] overflow-hidden flex items-center justify-center mb-8 sm:mb-12 lg:mb-16">
        {{-- Background Image with Mazda CX5 --}}
        <div class="absolute inset-0 z-0">
            <img src="https://www.mazdausa.com/siteassets/vehicles/2026/cx-5/04_btv/004_exterior/ext.-360s/2.5-s/360-rhodium-white/e360-my26-cx5-s-rhodiumwhite-v2-024.jpg#default?w=1023" 
                 alt="Mazda CX5 White Car" 
                 class="w-full h-full object-cover object-center"
            />
            {{-- Premium Gradient Overlays --}}
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/50 to-slate-900/70"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/40 via-transparent to-slate-900/40"></div>
            {{-- Subtle radial glow for depth --}}
            <div class="absolute top-0 right-0 w-96 h-96 bg-amber-400/5 rounded-full filter blur-3xl opacity-50"></div>
        </div>

        {{-- Content Container --}}
        <div class="relative z-10 max-w-6xl mx-auto px-3 sm:px-6 lg:px-8 py-12 sm:py-20 lg:py-32 text-center w-full">
            {{-- Badge --}}
            <div class="inline-block mb-4 sm:mb-6">
                <p class="uppercase tracking-[0.3em] text-xs font-bold text-amber-300 bg-amber-400/20 px-4 sm:px-6 py-2 rounded-full backdrop-blur-sm border border-amber-400/40 transition-all hover:bg-amber-400/30">
                    About Xplore Imports
                </p>
            </div>

            {{-- Main Heading --}}
            <h1 class="text-3xl sm:text-5xl lg:text-7xl font-black mb-4 sm:mb-6 leading-tight text-white drop-shadow-lg">
                <span class="bg-gradient-to-r from-amber-300 via-amber-200 to-amber-400 bg-clip-text text-transparent">Making car importation</span>
                <br class="hidden sm:block" />
                <span class="text-white">easy, transparent, and stress-free</span>
                <br class="hidden sm:block" />
                <span class="text-amber-300">for every Kenyan</span>
            </h1>

            {{-- Subheading --}}
            <p class="text-base sm:text-lg lg:text-xl text-slate-100 max-w-3xl mx-auto px-2 sm:px-0 mb-8 sm:mb-10 leading-relaxed drop-shadow-md">
                We connect Kenyans to quality, affordable cars from Japan—handling everything from sourcing and inspection to shipping and customs clearance.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                <a href="{{ route('cars') }}" class="bg-amber-500 hover:bg-amber-600 text-white hover:shadow-xl hover:shadow-amber-400/30 transition-all transform hover:scale-105 px-6 py-3 rounded-lg flex items-center justify-center gap-2">
                    <ion-icon name="car-outline" class="text-lg"></ion-icon>
                    Browse Our Vehicles
                </a>
                <a href="{{ route('contact') }}" class="bg-amber-400 hover:bg-amber-500 px-6 py-3  border-white/40 text-white transition-all transform hover:scale-105 backdrop-blur-sm">
                    <ion-icon name="call-outline" class="text-lg"></ion-icon>
                    Get in Touch
                </a>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-6 sm:bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
            <ion-icon name="chevron-down-outline" class="text-2xl text-amber-300 opacity-70"></ion-icon>
        </div>
    </div>

    {{-- Stats Section --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-6">
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">1+</p>
                <p class="ui-muted text-xs sm:text-sm">Years in Business</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">10+</p>
                <p class="ui-muted text-xs sm:text-sm">Cars Imported</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">10+</p>
                <p class="ui-muted text-xs sm:text-sm">Happy Clients</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">10+</p>
                <p class="ui-muted text-xs sm:text-sm">Taxi Investors Trained</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">200+</p>
                <p class="ui-muted text-xs sm:text-sm">Drivers Trained</p>
            </div>
            <div class="glass-panel p-4 sm:p-6 text-center">
                <p class="text-2xl sm:text-3xl font-bold text-amber-400 mb-1 sm:mb-2">100+</p>
                <p class="ui-muted text-xs sm:text-sm">Drivers Connected</p>
            </div>
        </div>
    </div>

    {{-- Our Story --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Our Story</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base">Helping Kenyans Drive Their Dream Cars and Own a Stabilized Taxi Business</p>
        </div>

        <div class="max-w-4xl mx-auto glass-panel rounded-3xl p-6 sm:p-8 lg:p-12">
            <p class="ui-muted leading-relaxed mb-4 text-sm sm:text-base">
                Xplore Imports was born out of a simple idea: helping everyday Kenyans find the right cars for their taxi and personal businesses. Over the years, we noticed one common challenge—many people wanted to import cars but didn't know where to start or who to trust.
            </p>
            <p class="ui-muted leading-relaxed mb-4 text-sm sm:text-base">
                Our mission is to make the car importation journey easy, transparent, and stress-free. We connect clients to quality and affordable cars from Japan, handling everything from sourcing, inspection, shipping, and customs clearance to final delivery straight to your door.
            </p>
            <p class="ui-muted leading-relaxed mb-4 text-sm sm:text-base">
                Since 2021, we've been offering expert Taxi Business Advising, helping hundreds of drivers and entrepreneurs make smarter car investment decisions. Building on that success, in 2025 we expanded into Car Import Services bringing the same trusted, transparent approach to vehicle sourcing and delivery from Japan.
            </p>
            <p class="ui-muted leading-relaxed mb-6 text-sm sm:text-base">
                We believe in open communication and honesty every step of the way. Clients receive clear updates, transparent costs, and total peace of mind knowing their cars are handled with care.
            </p>
            <div class="flex justify-center">
                <a href="https://youtu.be/feO-u_WJjog?si=WusDX_6oR6UZO6Ep" target="_blank" class="btn-outline-amber text-sm sm:text-base">
                    <ion-icon name="logo-youtube" class="text-lg sm:text-xl"></ion-icon>
                    Watch on YouTube
                </a>
            </div>
        </div>
    </div>

    {{-- Core Values --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Our Core Values</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base">The principles that define who we are and how we serve our clients</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="shield-checkmark-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Integrity & Transparency</h3>
                <p class="ui-muted text-xs sm:text-sm">Honest communication and clear pricing with no hidden fees.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="heart-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Customer Care</h3>
                <p class="ui-muted text-xs sm:text-sm">Every client is treated as a partner—your satisfaction is our success.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="globe-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Global Reach</h3>
                <p class="ui-muted text-xs sm:text-sm">Strong partnerships in Japan ensure premium selections.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="checkmark-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Reliability</h3>
                <p class="ui-muted text-xs sm:text-sm">We deliver what we promise—on time and with care.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="people-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Community Focus</h3>
                <p class="ui-muted text-xs sm:text-sm">We grow by empowering Kenyans to make informed car investment decisions.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="star-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Excellence</h3>
                <p class="ui-muted text-xs sm:text-sm">Striving for quality service in every import, every client, every time.</p>
            </div>
        </div>
    </div>

    {{-- Why Choose Us --}}
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold">Why Choose Xplore Imports</h2>
            <p class="ui-muted mt-2 text-sm sm:text-base">Built on trust, experience, and a passion for making car importation simple</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="cube-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">End-to-End Service</h3>
                <p class="ui-muted text-xs sm:text-sm">From vehicle sourcing to doorstep delivery—we handle it all for you.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="checkmark-done-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Trusted Markets</h3>
                <p class="ui-muted text-xs sm:text-sm">We only source cars from reputable and verified dealers worldwide.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="person-circle-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Personal Guidance</h3>
                <p class="ui-muted text-xs sm:text-sm">Our team walks with you through every step of the process.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="pricetag-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Affordable Pricing</h3>
                <p class="ui-muted text-xs sm:text-sm">We ensure competitive rates without compromising on quality.</p>
            </div>

            <div class="glass-panel p-6 sm:col-span-2 lg:col-span-1">
                <div class="w-12 h-12 bg-amber-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="rocket-outline" class="text-xl text-slate-900"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Fast & Secure Delivery</h3>
                <p class="ui-muted text-xs sm:text-sm">Your car arrives safely, with real-time shipment updates.</p>
            </div>

            
        </div>
    </div>

    <!-- FAQ Section -->
        <div class="mt-8 sm:mt-12 lg:mt-16 rounded-3xl glass-panel p-6 sm:p-8 lg:p-12">
            <div class="text-center mb-8 sm:mb-12">
                <p class="uppercase tracking-[0.2em] text-xs font-semibold text-amber-400 mb-2 sm:mb-4">Questions?</p>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-2">Frequently Asked Questions</h2>
                <p class="ui-muted text-sm sm:text-base">Find answers to common questions about our import process, requirements, and services.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 sm:gap-4">
                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">01</span>
                            <span class="text-base font-semibold ui-title">How does car importation work?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We help you source your preferred vehicle from overseas dealers, handle the purchase, shipping, and clearance at the port before delivery to you.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">02</span>
                            <span class="text-base font-semibold ui-title">What documents are required to import a car?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        You'll need a valid national ID or passport, KRA PIN certificate, and proof of purchase. We'll assist you with customs clearance documents as well.
                    </div>
                </details>

                

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">04</span>
                            <span class="text-base font-semibold ui-title">Do I have to pay the full amount upfront?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        No. We offer flexible payment options where you can pay a deposit to initiate the process, with the balance payable upon delivery.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">05</span>
                            <span class="text-base font-semibold ui-title">Are there additional hidden costs?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        No. We provide a transparent quotation upfront, including shipping, customs duty, port charges, and clearance fees.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">06</span>
                            <span class="text-base font-semibold ui-title">Can I track my vehicle during shipping?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, we provide shipping details and updates so you can track your vehicle until it arrives in Kenya.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">07</span>
                            <span class="text-base font-semibold ui-title">What types of vehicles can I import?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We help you import cars, SUVs, vans, trucks, and even specialized vehicles, as long as they meet KEBS age and standards requirements.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">08</span>
                            <span class="text-base font-semibold ui-title">Are imported cars inspected before arrival?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes. All vehicles must pass a pre-shipment inspection (PSI) to ensure they meet safety and environmental standards.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">09</span>
                            <span class="text-base font-semibold ui-title">Can I finance my imported car?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We work with financial partners who can offer car import financing solutions depending on eligibility.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">10</span>
                            <span class="text-base font-semibold ui-title">Do imported vehicles come with a warranty?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, some vehicles may come with manufacturer or dealer warranties, and we can guide you on extended warranty options.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">11</span>
                            <span class="text-base font-semibold ui-title">What happens if my car is damaged during shipping?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        All vehicles are insured during transit. In case of damage, insurance claims can be made to cover the loss.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">12</span>
                            <span class="text-base font-semibold ui-title">Can you help me register the car once it arrives?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Absolutely. We assist with NTSA registration, number plate issuance, and roadworthiness certification.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">13</span>
                            <span class="text-base font-semibold ui-title">How long does the importation process take?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        The entire process typically takes 45-60 days from the time you select your car to final delivery at your doorstep. This includes sourcing, due diligence, shipping (approximately 45 days), port clearance, NTSA registration, and final delivery.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">14</span>
                            <span class="text-base font-semibold ui-title">What payment options do you offer?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        We offer flexible payment terms: pay 70% upfront when the car is confirmed, and the remaining 30% plus any clearing charges once your vehicle arrives at the Port of Mombasa. All payments are processed securely through verified banking channels.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">15</span>
                            <span class="text-base font-semibold ui-title">Are all cars Kenya-compliant?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, absolutely. We only source vehicles that meet Kenya's import regulations, including right-hand drive configuration and the 8-year age limit from the year of manufacture. All cars undergo thorough verification before purchase.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">16</span>
                            <span class="text-base font-semibold ui-title">Do you handle all customs and NTSA registration?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Yes, we handle everything. Our team manages all port clearance procedures, duty payments, KEBS compliance verification, NTSA registration, and number plate acquisition. You don't need to worry about any paperwork or bureaucratic processes.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">17</span>
                            <span class="text-base font-semibold ui-title">Can I get a car specifically for taxi/ride-hailing business?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Absolutely! We specialize in sourcing fuel-efficient, reliable cars perfect for taxi and ride-hailing businesses. We also provide business advisory services, driver recruitment support, and ongoing mentorship to help you succeed in the transport business.
                    </div>
                </details>

                <details class="group rounded-2xl border border-slate-200/60 bg-white/70 p-5 transition hover:border-amber-400/50 dark:bg-slate-900/40 dark:border-white/10">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-amber-400/20 text-amber-300 text-sm font-semibold">18</span>
                            <span class="text-base font-semibold ui-title">What if the car has hidden problems?</span>
                        </div>
                        <ion-icon name="chevron-down-outline" class="text-xl text-amber-400 transition-transform group-open:rotate-180"></ion-icon>
                    </summary>
                    <div class="mt-4 pl-11 ui-muted text-sm leading-relaxed">
                        Before finalizing any purchase, we conduct comprehensive due diligence including service history checks, recall records, and accident reports. We only source high-grade vehicles (Grade 4 and above) and provide you with complete transparency about the car's condition before you commit to the purchase.
                    </div>
                </details>
            </div>
        </div>

    {{-- CTA Section --}}
    <div class="max-w-4xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 text-center">
        <div class="rounded-3xl bg-gradient-to-r from-amber-400 to-yellow-300 text-slate-900 p-6 sm:p-8 shadow-xl">
            <h2 class="text-2xl sm:text-3xl font-bold mb-3 sm:mb-4">Ready to Find Your Dream Car?</h2>
            <p class="mb-4 sm:mb-6 text-sm sm:text-base text-slate-800">Browse our latest inventory of premium Japanese imports, all KEBS compliant and ready for delivery.</p>
            <a href="{{ route('cars') }}" class="btn-ink btn-lg text-sm sm:text-base">Browse Our Inventory</a>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
