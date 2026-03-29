@extends('layouts.app', ['title' => 'Vehicle History - Xplore Cars Imports', 'description' => 'Vehicle history reports with auction records, mileage verification, and compliance status for Japanese import cars.'])

@section('content')
<div class="page-shell">
    <div class="w-full lg:w-3/4 mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-green-400 mb-4">Transparency & Trust</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Vehicle History Reports</h1>
            <p class="text-xl ui-muted max-w-3xl mx-auto">Every vehicle comes with a complete history. From Japan auction records to maintenance history, we provide full transparency.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="document-text-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Auction Records</h3>
                <p class="ui-muted text-sm">Complete Japanese auction documentation and vehicle condition reports from certified inspectors.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="speedometer-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Mileage History</h3>
                <p class="ui-muted text-sm">Verified odometer readings and maintenance records from Japanese service centers.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4">
                    <ion-icon name="checkmark-done-circle-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-lg font-semibold mb-2">Compliance Status</h3>
                <p class="ui-muted text-sm">KEBS compliance verification and all necessary permits for Kenyan roadworthiness.</p>
            </div>
        </div>

        {{-- What's Included --}}
        <div class="rounded-3xl glass-panel p-8 md:p-12 mb-16">
            <h2 class="text-3xl font-bold mb-8">Information Provided in Our History Reports</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Vehicle Specifications</h3>
                    <ul class="space-y-3 ui-muted">
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>VIN and registration number</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Make, model, and year</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Engine type and capacity</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Color and body type</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Transmission and fuel type</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4">Ownership & Service</h3>
                    <ul class="space-y-3 ui-muted">
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Previous ownership details</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Maintenance and service records</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Accident history (if any)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Warranty information</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="checkmark-outline" class="text-green-400"></ion-icon>
                            <span>Current odometer reading</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Japanese Auction System --}}
        <div class="rounded-3xl bg-gradient-to-br from-green-400/20 via-yellow-300/10 to-lime-200/5 border border-green-400/30 p-8 md:p-12">
            <h2 class="text-3xl font-bold mb-6">Understanding Japanese Auction Grades</h2>
            <div class="space-y-4">
                <div class="glass-panel rounded-lg p-4 flex items-start gap-4">
                    <div class="min-w-fit">
                        <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center text-black font-bold text-sm">5</div>
                    </div>
                    <div>
                        <h3 class="font-semibold">Excellent Condition</h3>
                        <p class="ui-muted text-sm">Nearly perfect condition with minimal wear. Excellent for value investment.</p>
                    </div>
                </div>

                <div class="glass-panel rounded-lg p-4 flex items-start gap-4">
                    <div class="min-w-fit">
                        <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center text-black font-bold text-sm">4.5</div>
                    </div>
                    <div>
                        <h3 class="font-semibold">Very Good Condition</h3>
                        <p class="ui-muted text-sm">Well-maintained with only minor signs of use. Highly recommended.</p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-lg p-4 flex items-start gap-4">
                    <div class="min-w-fit">
                        <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center text-black font-bold text-sm">4</div>
                    </div>
                    <div>
                        <h3 class="font-semibold">Good Condition</h3>
                        <p class="text-slate-300 text-sm">Clean vehicle with moderate use. Good balance of price and quality.</p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-lg p-4 flex items-start gap-4">
                    <div class="min-w-fit">
                        <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center text-black font-bold text-sm">3.5</div>
                    </div>
                    <div>
                        <h3 class="font-semibold">Average Condition</h3>
                        <p class="text-slate-300 text-sm">Well-used vehicle with visible wear. Budget-friendly option.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

