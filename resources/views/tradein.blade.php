@extends('layouts.app', ['title' => 'Trade-In Program - Xplore Cars Imports', 'description' => 'Trade in your current vehicle for a newer Japanese import with competitive valuation and a simple process.'])

@section('content')
<div class="page-shell">
    {{-- Coming Soon Announcement --}}
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-4 sm:py-6 mb-6 sm:mb-8">
        <div class="glass-panel rounded-2xl p-4 sm:p-6 lg:p-8 bg-gradient-to-r from-green-400/10 via-green-500/5 to-green-400/10 border-l-4 border-green-400">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-green-400/20">
                        <ion-icon name="construct-outline" class="text-2xl text-green-500"></ion-icon>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg sm:text-xl font-bold text-green-600 dark:text-green-400">Service Coming Soon</h3>
                    <p class="text-sm sm:text-base ui-muted mt-1 sm:mt-2">
                        We're actively developing our Trade-In Program to provide you with the best vehicle valuation and upgrade experience. This service will be available very soon. 
                        <a href="{{ route('contact') }}" class="text-green-500 hover:text-green-600 font-semibold transition">Get in touch</a> to express your interest or visit our 
                        <a href="{{ route('cars') }}" class="text-green-500 hover:text-green-600 font-semibold transition">available cars</a> in the meantime.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-green-400/20 text-green-600 dark:text-green-400">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></span>
                        Coming Soon
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-3/4 mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-green-400 mb-4">Flexible Ownership</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Trade-In Program</h1>
            <p class="text-xl ui-muted max-w-3xl mx-auto">Upgrade your car with our competitive trade-in program. Get maximum value for your current vehicle and drive away with a newer import.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="swap-horizontal-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Easy Trade-In</h3>
                <p class="ui-muted text-sm">Simple process—bring your car, get it valued, and upgrade in one transaction.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="cash-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Best Value</h3>
                <p class="ui-muted text-sm">Competitive valuations based on current market rates and vehicle condition.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="time-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Fast Process</h3>
                <p class="ui-muted text-sm">Quick valuation and paperwork. Trade-in credit applied immediately to your new car.</p>
            </div>
        </div>

        {{-- How It Works --}}
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-12">How Our Trade-In Program Works</h2>
            <div class="space-y-6">
                <div class="glass-panel p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-black">1</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Schedule Inspection</h3>
                        <p class="ui-muted">Contact us and book an inspection appointment at your convenience.</p>
                    </div>
                </div>

                <div class="glass-panel p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-black">2</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Vehicle Assessment</h3>
                        <p class="ui-muted">We thoroughly evaluate your car's condition, mileage, and market value.</p>
                    </div>
                </div>

                <div class="glass-panel p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-black">3</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Receive Quote</h3>
                        <p class="ui-muted">Get a competitive trade-in offer with no obligation to proceed.</p>
                    </div>
                </div>

                <div class="glass-panel p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-black">4</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Select New Vehicle</h3>
                        <p class="ui-muted">Browse our inventory and choose your next car. Credit is applied to the purchase price.</p>
                    </div>
                </div>

                <div class="glass-panel p-6 flex items-start gap-6">
                    <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-black">5</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Complete Transaction</h3>
                        <p class="ui-muted">Finalize paperwork, arrange payment, and take ownership of your new vehicle.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- What We Accept --}}
        <div class="rounded-3xl glass-panel p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">What We Accept</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-green-400">We Accept:</h3>
                    <ul class="space-y-3 ui-muted">
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>All vehicle makes and models</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>Local and imported vehicles</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>Used cars with high mileage</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>Vehicles with minor damage</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-green-400">Requirements:</h3>
                    <ul class="space-y-3 ui-muted">
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>Valid logbook and registration</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>No outstanding loans</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>Clear vehicle history</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-green-400"></ion-icon>
                            <span>Valid insurance document</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Benefits --}}
        <div class="rounded-3xl bg-gradient-to-br from-green-400/20 via-yellow-300/10 to-lime-200/5 border border-green-400/30 p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">Benefits of Trading In With Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-green-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Hassle-Free Experience</h3>
                        <p class="ui-muted text-sm">We handle all documentation and paperwork. One visit, simple transaction.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-green-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Fair Market Value</h3>
                        <p class="ui-muted text-sm">Transparent pricing based on current market conditions and vehicle assessment.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-green-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Instant Credit</h3>
                        <p class="ui-muted text-sm">Trade-in value applied immediately to your new vehicle purchase.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <ion-icon name="star-outline" class="text-green-400 text-2xl flex-shrink-0 mt-1"></ion-icon>
                    <div>
                        <h3 class="font-semibold">Upgrade Easily</h3>
                        <p class="ui-muted text-sm">Simple way to move to a newer, better car without selling privately.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3xl bg-gradient-to-r from-green-400 to-yellow-300 text-black p-8 shadow-xl">
            <h2 class="text-3xl font-bold mb-4">Ready to Trade In?</h2>
            <p class="mb-6 text-slate-800">Contact us today to schedule your vehicle inspection and get a competitive trade-in quote.</p>
            <a href="{{ route('contact') }}" class="btn-ink btn-lg">Schedule Inspection</a>
        </div>
    </div>
</div>
@endsection

