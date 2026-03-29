@extends('layouts.app', ['title' => 'Inspection Reports - Xplore Cars Imports', 'description' => 'Understand our vehicle inspection reports with detailed checks, photos, and grading for Japanese import cars in Kenya.'])

@section('content')
<div class="page-shell">
    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center mb-8 sm:mb-12 lg:mb-16">
            <p class="uppercase tracking-[0.2em] text-xs font-semibold text-green-400 mb-2 sm:mb-4">Quality Assurance</p>
            <h1 class="text-2xl sm:text-4xl lg:text-6xl font-extrabold mb-3 sm:mb-4 leading-tight">Inspection Reports</h1>
            <p class="text-base sm:text-lg lg:text-xl ui-muted max-w-3xl mx-auto px-2 sm:px-0">Every vehicle undergoes rigorous third-party inspection reports aligned to Japanese auction grading. Full transparency with detailed reports, photos, and mechanical assessments.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8 sm:mb-12 lg:mb-16">
            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="checkmark-circle-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Comprehensive Check</h3>
                <p class="ui-muted text-xs sm:text-sm">Engine, transmission, suspension, electrical systems, and bodywork thoroughly inspected.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="camera-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">HD Photos & Videos</h3>
                <p class="ui-muted text-xs sm:text-sm">360° views, close-ups, and videos of key components for complete transparency.</p>
            </div>

            <div class="glass-panel p-6">
                <div class="w-12 h-12 bg-green-400 rounded-lg flex items-center justify-center mb-4 flex-shrink-0">
                    <ion-icon name="document-outline" class="text-xl text-black"></ion-icon>
                </div>
                <h3 class="text-base sm:text-lg font-semibold mb-2">Written Report</h3>
                <p class="ui-muted text-xs sm:text-sm">Detailed PDF report with findings, ratings, and recommendations delivered to you.</p>
            </div>
        </div>

        <div class="rounded-3xl glass-panel p-6 sm:p-8 lg:p-12 mb-8 sm:mb-12 lg:mb-16">
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-6 sm:mb-8">What's Included in Our Reports</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-green-400 text-xl sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base">Exterior Condition</h3>
                            <p class="ui-muted text-xs sm:text-sm">Paint, body damage, rust, metal repairs</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-green-400 text-xl sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base">Engine & Transmission</h3>
                            <p class="ui-muted text-xs sm:text-sm">Performance, oil condition, leaks</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-green-400 text-xl sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base">Electrical Systems</h3>
                            <p class="ui-muted text-xs sm:text-sm">Lighting, electronics, battery condition</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-green-400 text-xl sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base">Suspension & Brakes</h3>
                            <p class="ui-muted text-xs sm:text-sm">Wear, alignment, brake condition</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-green-400 text-xl sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base">Interior & Comfort</h3>
                            <p class="ui-muted text-xs sm:text-sm">Upholstery, dashboard, climate control</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <ion-icon name="checkmark-outline" class="text-green-400 text-xl sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base">Overall Grading</h3>
                            <p class="ui-muted text-xs sm:text-sm">Based on Japanese auction standards (1-5)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3xl bg-gradient-to-r from-green-400 to-yellow-300 text-black p-6 sm:p-8 shadow-xl mb-6 sm:mb-8">
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-3 sm:mb-4">Ready to View Inspection Reports?</h2>
            <p class="mb-4 sm:mb-6 text-sm sm:text-base text-slate-800">Browse our car inventory to see available vehicles with their detailed inspection reports.</p>
            <a href="{{ route('cars') }}" class="btn-ink btn-lg text-sm sm:text-base">Browse Cars</a>
        </div>

        <div class="text-center">
            <a href="{{ route('cars') }}" class="btn-outline-green btn-sm p-2 text-xs sm:text-sm">Back to Cars Listing</a>
        </div>
    </div>
</div>
@endsection

