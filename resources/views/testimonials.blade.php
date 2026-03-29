@extends('layouts.app', ['title' => 'Client Testimonials - Xplore Cars Imports', 'description' => 'Read testimonials from satisfied Xplore Cars Imports clients who have successfully imported their dream cars from Japan.'])

@section('content')
<div class="page-shell">
    {{-- Hero Section --}}
    <section class="relative overflow-hidden mb-10 sm:mb-14 lg:mb-20">
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-linear-to-br from-blue-500/12 via-cyan-500/8 to-blue-600/12"></div>
            <div class="absolute -top-24 -left-16 h-72 w-72 rounded-full bg-blue-400/20 blur-3xl"></div>
            <div class="absolute -bottom-20 right-0 h-80 w-80 rounded-full bg-cyan-400/20 blur-3xl"></div>
        </div>

        <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 pt-8 sm:pt-12 lg:pt-16 pb-2">
            <div class="glass-panel rounded-3xl p-6 sm:p-10 lg:p-14 border border-green-400/30">
                <div class="max-w-4xl">
                    <p class="uppercase tracking-[0.28em] text-[11px] font-bold text-green-400 mb-4">Verified Client Experiences</p>
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black leading-tight mb-4 sm:mb-6">
                        Trusted by buyers who wanted confidence,
                        <span class="bg-linear-to-r from-green-400 to-cyan-400 bg-clip-text text-transparent">not guesswork</span>
                    </h1>
                    <p class="text-sm sm:text-base lg:text-lg ui-muted max-w-3xl leading-relaxed">
                        These stories come from real clients who imported with Xplore Cars Imports and received guided support from vehicle selection to customs clearance and delivery.
                    </p>

                    <div class="mt-6 sm:mt-8 flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-2 rounded-full border border-green-400/40 bg-green-400/10 px-4 py-2 text-xs font-semibold text-green-400">
                            <ion-icon name="shield-checkmark-outline" class="text-base"></ion-icon>
                            Verified Buyer Feedback
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full border border-cyan-400/40 bg-cyan-400/10 px-4 py-2 text-xs font-semibold text-cyan-400">
                            <ion-icon name="star-outline" class="text-base"></ion-icon>
                            4.9/5 Average Satisfaction
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Trust Stats --}}
    <section class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-6">
            <div class="glass-panel rounded-2xl p-5 sm:p-6 text-center border border-green-400/30">
                <p class="text-3xl sm:text-4xl font-black text-green-400 mb-1">10+</p>
                <p class="ui-muted text-xs sm:text-sm tracking-wide">Happy Customers</p>
            </div>
            <div class="glass-panel rounded-2xl p-5 sm:p-6 text-center border border-green-400/30">
                <p class="text-3xl sm:text-4xl font-black text-green-400 mb-1">4.9/5</p>
                <p class="ui-muted text-xs sm:text-sm tracking-wide">Average Rating</p>
            </div>
            <div class="glass-panel rounded-2xl p-5 sm:p-6 text-center border border-green-400/30">
                <p class="text-3xl sm:text-4xl font-black text-green-400 mb-1">10+</p>
                <p class="ui-muted text-xs sm:text-sm tracking-wide">Vehicles Imported</p>
            </div>
            <div class="glass-panel rounded-2xl p-5 sm:p-6 text-center border border-green-400/30">
                <p class="text-3xl sm:text-4xl font-black text-green-400 mb-1">100%</p>
                <p class="ui-muted text-xs sm:text-sm tracking-wide">Support Commitment</p>
            </div>
        </div>
    </section>

    {{-- Video Testimonials --}}
    <section class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-10 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12">
            <p class="uppercase tracking-[0.28em] text-[11px] font-bold text-green-400 mb-3">Video Stories</p>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-black mb-3">Hear It Directly From Our Clients</h2>
            <p class="ui-muted max-w-2xl mx-auto text-sm sm:text-base">Real voices. Real delivery experiences. Real outcomes for Kenyan car buyers importing from Japan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">

        <article class="group glass-panel rounded-3xl overflow-hidden border border-white/20 transition-all duration-300 hover:border-green-400/50 hover:shadow-2xl hover:shadow-green-500/20">
                <div class="aspect-video w-full overflow-hidden">
                    <iframe
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/ubvbEjIL2Mk"
                        title="Client Testimonial 1"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="p-5 sm:p-6">
                    <p class="text-base font-bold mb-1">First-Time Import Success Story</p>
                    <p class="ui-muted text-sm">Private Vehicle Owner</p>
                </div>
            </article>

            <article class="group glass-panel rounded-3xl overflow-hidden border border-white/20 transition-all duration-300 hover:border-green-400/50 hover:shadow-2xl hover:shadow-green-500/20">
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
                <div class="p-5 sm:p-6">
                    <p class="text-base font-bold mb-1">First-Time Import Success Story</p>
                    <p class="ui-muted text-sm">Private Vehicle Owner</p>
                </div>
            </article>

            <article class="group glass-panel rounded-3xl overflow-hidden border border-white/20 transition-all duration-300 hover:border-green-400/50 hover:shadow-2xl hover:shadow-green-500/20">
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
                <div class="p-5 sm:p-6">
                    <p class="text-base font-bold mb-1">Smooth Import and Delivery Journey</p>
                    <p class="ui-muted text-sm">Private Vehicle Owner</p>
                </div>
            </article>

            <article class="group glass-panel rounded-3xl overflow-hidden border border-white/20 transition-all duration-300 hover:border-green-400/50 hover:shadow-2xl hover:shadow-green-500/20">
                <div class="aspect-video w-full overflow-hidden">
                    <iframe
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/Rk-3GiidTZY"
                        title="Client Testimonial 3"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="p-5 sm:p-6">
                    <p class="text-base font-bold mb-1">Business Buyer Experience</p>
                    <p class="ui-muted text-sm">Fleet and Commercial Investor</p>
                </div>
            </article>

            <article class="group glass-panel rounded-3xl overflow-hidden border border-white/20 transition-all duration-300 hover:border-green-400/50 hover:shadow-2xl hover:shadow-green-500/20">
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
                <div class="p-5 sm:p-6">
                    <p class="text-base font-bold mb-1">Transparent Service and Support</p>
                    <p class="ui-muted text-sm">Private Vehicle Owner</p>
                </div>
            </article>
        </div>
    </section>

    {{-- Written Testimonials --}}
    <section class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-10 lg:py-14">
        <div class="text-center mb-8 sm:mb-10">
            <p class="uppercase tracking-[0.28em] text-[11px] font-bold text-blue-400 mb-3">Client Reviews</p>
            <h2 class="text-2xl sm:text-4xl font-black mb-3">What Clients Appreciate Most</h2>
            <p class="ui-muted text-sm sm:text-base max-w-2xl mx-auto">From communication quality to final handover, these are the moments clients remember.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <article class="glass-panel rounded-2xl p-6 sm:p-7 border border-white/20 hover:border-green-400/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-full bg-linear-to-br from-green-400 to-emerald-400 text-black text-sm font-black flex items-center justify-center">DK</div>
                        <div>
                            <h3 class="font-bold">David K***</h3>
                            <p class="text-xs ui-muted">Taxi Business Owner</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-green-400" aria-label="5 star rating">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">Xplore Cars Imports handled everything from selection to customs with professionalism. I saved money and time, and the process felt fully managed end to end.</p>
            </article>

            <article class="glass-panel rounded-2xl p-6 sm:p-7 border border-white/20 hover:border-green-400/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-full bg-linear-to-br from-green-400 to-emerald-400 text-black text-sm font-black flex items-center justify-center">AM</div>
                        <div>
                            <h3 class="font-bold">Amelia ***</h3>
                            <p class="text-xs ui-muted">Private Vehicle Owner</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-green-400" aria-label="5 star rating">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">I had many questions before importing, and the team answered each one clearly. My vehicle arrived in excellent condition, exactly as promised.</p>
            </article>

            <article class="glass-panel rounded-2xl p-6 sm:p-7 border border-white/20 hover:border-green-400/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-full bg-linear-to-br from-green-400 to-emerald-400 text-black text-sm font-black flex items-center justify-center">SK</div>
                        <div>
                            <h3 class="font-bold">Samuel K***</h3>
                            <p class="text-xs ui-muted">Commercial Investor</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-green-400" aria-label="5 star rating">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">I imported multiple vehicles for business and the consistency was impressive. Their customs expertise and communication made scaling my fleet easier.</p>
            </article>

            <article class="glass-panel rounded-2xl p-6 sm:p-7 border border-white/20 hover:border-green-400/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-full bg-linear-to-br from-green-400 to-emerald-400 text-black text-sm font-black flex items-center justify-center">NJ</div>
                        <div>
                            <h3 class="font-bold">Njoro ***</h3>
                            <p class="text-xs ui-muted">Family Business Owner</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-green-400" aria-label="5 star rating">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">The guidance was honest and practical. I was helped to choose within budget and still get quality. Delivery was faster than I expected.</p>
            </article>

            <article class="glass-panel rounded-2xl p-6 sm:p-7 border border-white/20 hover:border-green-400/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-full bg-linear-to-br from-green-400 to-emerald-400 text-black text-sm font-black flex items-center justify-center">GK</div>
                        <div>
                            <h3 class="font-bold">Grace K***</h3>
                            <p class="text-xs ui-muted">Transport Business Owner</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-green-400" aria-label="5 star rating">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">Their transparency stands out. Every detail was explained, and I always knew the next step. I now refer friends and colleagues to Xplore.</p>
            </article>

            <article class="glass-panel rounded-2xl p-6 sm:p-7 border border-white/20 hover:border-green-400/40 transition">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="h-11 w-11 rounded-full bg-linear-to-br from-green-400 to-emerald-400 text-black text-sm font-black flex items-center justify-center">JW</div>
                        <div>
                            <h3 class="font-bold">Joseph W***</h3>
                            <p class="text-xs ui-muted">Executive Professional</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-green-400" aria-label="5 star rating">
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    </div>
                </div>
                <p class="ui-muted text-sm leading-relaxed">The process was clear from start to finish and the final car quality was excellent. It felt secure, transparent, and worth every step.</p>
            </article>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 pt-8 sm:pt-10 lg:pt-14 pb-12 sm:pb-16 lg:pb-20">
        <div class="relative overflow-hidden rounded-3xl border border-green-400/30 bg-linear-to-r from-green-500/12 via-emerald-500/10 to-green-500/12 p-7 sm:p-10 lg:p-14 text-center">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-0 left-10 h-24 w-24 rounded-full bg-green-400/20 blur-2xl"></div>
                <div class="absolute bottom-0 right-10 h-24 w-24 rounded-full bg-emerald-400/20 blur-2xl"></div>
            </div>

            <div class="relative">
                <p class="uppercase tracking-[0.28em] text-[11px] font-bold text-green-400 mb-3">Start Your Journey</p>
                <h2 class="text-2xl sm:text-4xl lg:text-5xl font-black mb-4">Ready to import your next car with confidence?</h2>
                <p class="ui-muted text-sm sm:text-base lg:text-lg mb-8 max-w-2xl mx-auto">Work with a team that keeps pricing clear, timelines realistic, and communication consistent from day one.</p>

                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                    <a href="{{ route('cars') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                        Browse Available Cars
                    </a>
                    <a href="{{ route('contact') }}" class="bg-transparent hover:bg-green-600 text-green-500 hover:text-white font-bold py-2 px-4 rounded-full border border-green-500 hover:border-green-600 transition duration-300">
                        Talk to Our Team
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('partials.footer')
@endsection