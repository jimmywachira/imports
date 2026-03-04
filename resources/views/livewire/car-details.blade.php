<div class="page-shell">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-6 sm:py-12">
        <!-- Breadcrumb -->
        <div class="text-xs sm:text-sm breadcrumbs mb-4 sm:mb-6 overflow-x-auto">
            <ul class="flex gap-2">
                <li><a href="{{ route('cars') }}" wire:navigate class="text-green-400 hover:text-green-300 whitespace-nowrap">Browse Cars</a></li>
                <li class="text-slate-600 dark:text-slate-300 whitespace-nowrap">{{ $car->make }}</li>
                <li class="text-slate-600 dark:text-slate-300 whitespace-nowrap line-clamp-1">{{ $car->full_name }}</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 mb-8 sm:mb-12">
            <!-- Left Column - Images and Details -->
            <div class="lg:col-span-2 space-y-4 sm:space-y-6">
                <!-- Main Image Gallery -->
                <div class="glass-panel overflow-hidden">
                    <!-- Main Image Display -->
                    <div class="relative h-48 sm:h-64 lg:h-96 bg-slate-200/60 dark:bg-slate-900/50">
                        <img 
                            src="{{ $car->primary_image }}" 
                            alt="{{ $car->full_name }}" 
                            class="w-full h-full object-contain"
                        />
                        @if(!$car->is_available)
                            <div class="absolute inset-0 bg-slate-900/70 flex items-center justify-center">
                                <span class="badge badge-error badge-lg text-xs sm:text-lg px-4 sm:px-8 py-2 sm:py-4">SOLD</span>
                            </div>
                        @endif
                    </div>

                    <!-- Thumbnail Gallery (if multiple images exist) -->
                    @if($car->images && count($car->images) > 1)
                        <div class="p-3 sm:p-4 flex gap-2 overflow-x-auto">
                            @foreach($car->images as $index => $image)
                                <button 
                                    wire:click="selectImage({{ $index }})"
                                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 rounded-lg overflow-hidden border-2 transition-colors
                                        {{ $selectedImage === $index ? 'border-green-400' : 'border-slate-700 hover:border-green-400/50' }}"
                                >
                                    <img src="{{ str_starts_with($image, '/') || str_starts_with($image, 'http') ? $image : asset('storage/' . $image) }}" alt="View {{ $index + 1 }}" class="w-full h-full object-cover" />
                                </button>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Vehicle Specifications -->
                <div class="glass-panel p-4 sm:p-6 lg:p-8">
                    <h2 class="text-lg sm:text-2xl font-bold mb-4 sm:mb-6 flex items-center gap-2">
                        <ion-icon name="information-circle-outline" class="text-2xl sm:text-3xl text-green-400 flex-shrink-0"></ion-icon>
                        <span>Vehicle Specifications</span>
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <!-- Spec Item -->
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="car-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div class="min-w-0">
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Make & Model</p>
                                <p class="font-semibold text-sm sm:text-lg line-clamp-2">{{ $car->make }} {{ $car->model }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="calendar-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Year of Registration</p>
                                <p class="font-semibold text-sm sm:text-lg">{{ $car->year_of_reg }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="speedometer-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Mileage</p>
                                <p class="font-semibold text-sm sm:text-lg">{{ $car->formatted_mileage }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="flash-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Engine Capacity</p>
                                <p class="font-semibold text-sm sm:text-lg">{{ $car->engine_capacity }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="settings-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Transmission</p>
                                <p class="font-semibold text-sm sm:text-lg">{{ $car->transmission }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="water-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Fuel Type</p>
                                <p class="font-semibold text-sm sm:text-lg">{{ $car->fuel_type }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="star-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">Auction Grade</p>
                                <p class="font-semibold text-sm sm:text-lg">{{ $car->auction_grade }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-green-400/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <ion-icon name="barcode-outline" class="text-lg sm:text-xl text-green-400"></ion-icon>
                            </div>
                            <div class="min-w-0">
                                <p class="text-slate-500 text-xs sm:text-sm dark:text-slate-400">VIN Number</p>
                                <p class="font-semibold text-xs sm:text-base font-mono break-all">{{ $car->vin_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="glass-panel p-4 sm:p-6 lg:p-8">
                    <h2 class="text-lg sm:text-2xl font-bold mb-4 sm:mb-6 flex items-center gap-2">
                        <ion-icon name="clipboard-outline" class="text-2xl sm:text-3xl text-green-400 flex-shrink-0"></ion-icon>
                        <span>Import Information</span>
                    </h2>

                    <div class="prose prose-invert max-w-none">
                        <ul class="space-y-2 sm:space-y-3 text-slate-600 dark:text-slate-300 text-sm sm:text-base">
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-lg sm:text-xl text-green-400 flex-shrink-0 mt-0.5"></ion-icon>
                                <span>Sourced directly from verified Japanese auctions</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-lg sm:text-xl text-green-400 flex-shrink-0 mt-0.5"></ion-icon>
                                <span>Clean vehicle history with no major accidents</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-lg sm:text-xl text-green-400 flex-shrink-0 mt-0.5"></ion-icon>
                                <span>Pre-shipment inspection (PSI) certificate included</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-lg sm:text-xl text-green-400 flex-shrink-0 mt-0.5"></ion-icon>
                                <span>Full assistance with customs clearance and NTSA registration</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <ion-icon name="checkmark-circle" class="text-lg sm:text-xl text-green-400 flex-shrink-0 mt-0.5"></ion-icon>
                                <span>Shipping and delivery to your preferred location in Kenya</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Column - Pricing and Contact -->
            <div class="space-y-4 sm:space-y-6">
                <!-- Price Card -->
                <div class="rounded-2xl bg-gradient-to-br from-green-400 to-yellow-300 text-blue-900 p-4 sm:p-6 lg:p-8 shadow-2xl lg:sticky lg:top-4">
                    <div class="mb-4 sm:mb-6">
                        <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider mb-2">CIF Price</p>
                        <p class="text-xl sm:text-2xl lg:text-3xl font-extrabold">{{ $car->formatted_price }}</p>
                        <p class="text-xs sm:text-sm mt-2 text-blue-800">Cost, Insurance, and Freight to Kenya</p>
                    </div>

                    <div class="divider my-4 sm:my-6"></div>

                    <div class="space-y-2 sm:space-y-3">
                        @if($car->is_available)
                            <a 
                                href="{{ route('contact') }}" 
                                class="btn-blue btn-lg w-full text-sm sm:text-base min-h-10 sm:min-h-12"
                            >
                                <ion-icon name="mail-outline" class="text-lg sm:text-xl"></ion-icon>
                                Request Info
                            </a>
                            <button class="btn-outline-blue btn-lg w-full text-sm sm:text-base min-h-10 sm:min-h-12">
                                <ion-icon name="call-outline" class="text-lg sm:text-xl"></ion-icon>
                                Call Us
                            </button>
                        @else
                            <div class="alert alert-error text-sm">
                                <ion-icon name="close-circle-outline" class="text-lg flex-shrink-0"></ion-icon>
                                <span>This vehicle has been sold</span>
                            </div>
                            <a 
                                href="{{ route('cars') }}" 
                                wire:navigate
                                class="btn-blue btn-lg w-full text-sm sm:text-base min-h-10 sm:min-h-12"
                            >
                                Browse Available Cars
                            </a>
                        @endif
                    </div>

                    <div class="mt-4 sm:mt-6 pt-4 sm:pt-6 border-t border-blue-900/20">
                        <div class="flex items-start gap-3 text-xs sm:text-sm">
                            <ion-icon name="shield-checkmark-outline" class="text-lg sm:text-2xl flex-shrink-0 mt-0.5"></ion-icon>
                            <div>
                                <p class="font-semibold">Secure Transaction</p>
                                <p class="text-blue-800">Trusted by 500+ customers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Info -->
                <div class="glass-panel p-4 sm:p-6">
                    <h3 class="text-base sm:text-lg font-bold mb-3 sm:mb-4">Quick Contact</h3>
                    <div class="space-y-2 sm:space-y-3 text-xs sm:text-sm">
                        <div class="flex items-center gap-3">
                            <ion-icon name="call-outline" class="text-lg sm:text-xl text-green-400 flex-shrink-0"></ion-icon>
                            <div class="min-w-0">
                                <p class="text-slate-500 dark:text-slate-400 text-xs">Phone</p>
                                <p class="font-semibold break-all">+254 700 123 456</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="mail-outline" class="text-lg sm:text-xl text-green-400 flex-shrink-0"></ion-icon>
                            <div class="min-w-0">
                                <p class="text-slate-500 dark:text-slate-400 text-xs">Email</p>
                                <p class="font-semibold break-all text-xs sm:text-sm">info@xplorecar.com</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <ion-icon name="time-outline" class="text-lg sm:text-xl text-green-400 flex-shrink-0 mt-0.5"></ion-icon>
                            <div>
                                <p class="text-slate-500 dark:text-slate-400 text-xs">Available</p>
                                <p class="font-semibold text-xs sm:text-sm">24/7 Customer Support</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Badge -->
                <div class="glass-panel p-6">
                    <h3 class="text-lg font-bold mb-4">Why Choose Us?</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Transparent Pricing</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Quality Guarantee</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Fast Processing</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <ion-icon name="checkmark-circle" class="text-green-400"></ion-icon>
                            <span>Full Documentation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Cars Section -->
        @if($similarCars->count() > 0)
            <div class="mt-16">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Similar Vehicles</h2>
                        <p class="text-slate-600 dark:text-slate-300">You might also be interested in these cars</p>
                    </div>
                    <a 
                        href="{{ route('cars') }}" 
                        wire:navigate
                        class="btn-outline-green"
                    >
                        View All Cars
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($similarCars as $similarCar)
                        <div class="ui-card">
                            <!-- Image -->
                            <div class="relative overflow-hidden h-48">
                                <img 
                                    class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                    src="{{ $similarCar->primary_image }}" 
                                    alt="{{ $similarCar->full_name }}" 
                                    loading="lazy"
                                />
                                <div class="absolute top-3 left-3">
                                    <span class="badge badge-accent font-semibold">{{ $similarCar->auction_grade }} Grade</span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-5">
                                <h3 class="text-lg font-bold mb-2 text-slate-900 dark:text-slate-100 line-clamp-1">
                                    {{ $similarCar->full_name }}
                                </h3>
                                
                                <div class="flex flex-wrap gap-2 mb-4 text-sm text-slate-600 dark:text-slate-300">
                                    <span>{{ $similarCar->formatted_mileage }}</span>
                                    <span>•</span>
                                    <span>{{ $similarCar->transmission }}</span>
                                </div>

                                <div class="flex items-center justify-between">
                                    <p class="text-xl font-bold text-green-300">
                                        {{ $similarCar->formatted_price }}
                                    </p>
                                    <a 
                                        href="{{ route('car.details', $similarCar->slug) }}" 
                                        wire:navigate
                                        class="btn-primary btn-sm"
                                    >
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>