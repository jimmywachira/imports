<style>
    .page-shell {
        color: #000;
    }

    .dark .page-shell {
        color: #fff;
    }

    .page-shell .ui-muted,
    .page-shell [class*="text-slate-"] {
        color: inherit !important;
    }
</style>

<div class="page-shell text-black dark:text-white">
    <div class="w-full lg:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <header class="relative overflow-hidden rounded-3xl bg-linear-to-r from-green-500 via-green-400 to-green-300 text-slate-900 shadow-2xl mb-8 sm:mb-10">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(72,187,120),transparent_60%)]"></div>
            <div class="relative p-6 sm:p-8 lg:p-12">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                    <div class="space-y-3 max-w-3xl">
                        <p class="uppercase tracking-[0.22em] text-xs font-semibold text-slate-800/80">Japan Direct Imports</p>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">Find Your Dream Import</h1>
                        <p class="text-sm sm:text-base text-slate-800/90">Verified 2019+ Japanese vehicles, clean history, and transparent CIF pricing tailored for the Kenyan market.</p>
                    </div>

                    <div class="glass-panel px-5 py-4 rounded-2xl border border-white/30 bg-white/20 backdrop-blur-md">
                        <p class="text-xs uppercase tracking-wide text-slate-800/80">Current Listings</p>
                        <div class="flex items-end gap-2 mt-1">
                            <span class="text-3xl font-extrabold text-slate-900">{{ $cars->total() }}</span>
                            <span class="text-sm text-slate-700 mb-1">vehicles</span> 
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="glass-panel p-4 sm:p-6 rounded-2xl mb-6 border-green-600 border bg-green-300/10 backdrop-blur-sm">
            <h2 class="text-lg sm:text-xl font-semibold mb-2">Japan Car Imports in Kenya</h2>
            <p class="ui-muted text-sm sm:text-base">Explore KEBS-compliant import cars from Japan with verified inspection reports, transparent CIF pricing, and end-to-end shipping and customs clearing support.</p>
            <div class="mt-4 flex flex-wrap gap-2 sm:gap-3 text-xs sm:text-sm">
                <a href="{{ route('inspection') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-500 text-green-300 hover:bg-green-500/20 transition-colors font-medium">
                    <ion-icon name="document-text-outline"></ion-icon>
                    <span>Inspection Reports</span>
                </a>
                <a href="{{ route('shipping') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-500 text-green-300 hover:bg-green-500/20 transition-colors font-medium">
                    <ion-icon name="boat-outline"></ion-icon>
                    <span>Shipping & Clearing</span>
                </a>
                <a href="{{ route('tradein') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-500 text-green-300 hover:bg-green-500/20 transition-colors font-medium">
                    <ion-icon name="swap-horizontal-outline"></ion-icon>
                    <span>Trade-In Program</span>
                </a>
            </div>
        </section>

        <div class="glass-panel rounded-2xl p-4 sm:p-5 lg:p-6 mb-6 sm:mb-8 border border-white/20 backdrop-blur-xl">
            <!-- Premium Header with Visual Hierarchy -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6 pb-4 border-b border-white/15">
                <div class="space-y-0.5">
                    <h2 class="text-lg sm:text-xl lg:text-2xl font-black flex items-center gap-2">
                        <span class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-linear-to-br from-emerald-400 to-cyan-400 text-black">
                            <ion-icon name="filter-outline" class="text-lg"></ion-icon>
                        </span>
                        <span>Refine Your Search</span>
                    </h2>
                    <p class="text-xs ui-muted">Narrow down by specs, price, and year</p>
                </div>
                <button wire:click="resetFilters" class="group inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 text-emerald-400 hover:text-emerald-300 text-xs sm:text-sm font-semibold transition-all duration-200 border border-white/20 hover:border-emerald-400/50 active:scale-95 whitespace-nowrap">
                    <ion-icon name="refresh-outline" class="text-base group-hover:rotate-180 transition-transform duration-500"></ion-icon>
                    <span>Reset</span>
                </button>
            </div>

            <!-- Search Bar - Enhanced -->
            <div class="mb-5">
                <div class="relative group">
                    <label class="block mb-2">
                        <span class="text-xs font-bold uppercase tracking-widest text-slate-300 flex items-center gap-1.5">
                            <ion-icon name="search-outline" class="text-sm text-emerald-400"></ion-icon>
                            Quick Search
                        </span>
                    </label>
                    <input
                        type="text"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Search by make, model, or VIN..."
                        class="w-full px-4 py-2.5 text-sm placeholder-slate-500 bg-white/5 border border-white/15 rounded-xl focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 group-hover:border-white/25"
                    />
                    <div class="absolute right-3 top-9 pointer-events-none text-slate-500 group-focus-within:text-emerald-400 transition-colors">
                        <ion-icon name="checkmark-circle-outline" class="text-sm opacity-0 group-focus-within:opacity-100 transition-opacity"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Primary Filters Section -->
            <div class="mb-5">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Vehicle Details</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Make Filter -->
                    <div class="form-control group">
                        <label class="label mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-slate-300 flex items-center gap-1.5">
                                <ion-icon name="car-outline" class="text-sm text-emerald-400"></ion-icon>
                                Make
                            </span>
                        </label>
                        <select wire:model.live="make" class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 appearance-none cursor-pointer font-medium">
                            <option value="" class="bg-slate-900">All Makes</option>
                            @foreach($this->makes as $makeName)
                                <option value="{{ $makeName }}" class="bg-slate-900">{{ $makeName }}</option>
                            @endforeach
                        </select>
                        <ion-icon name="chevron-down-outline" class="absolute right-3 top-9 text-slate-400 pointer-events-none text-base"></ion-icon>
                    </div>

                    <!-- Transmission Filter -->
                    <div class="form-control group">
                        <label class="label mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-slate-300 flex items-center gap-1.5">
                                <ion-icon name="settings-outline" class="text-sm text-emerald-400"></ion-icon>
                                Transmission
                            </span>
                        </label>
                        <select wire:model.live="transmission" class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 appearance-none cursor-pointer font-medium">
                            <option value="" class="bg-slate-900">All Types</option>
                            <option value="Automatic" class="bg-slate-900">Automatic</option>
                            <option value="Manual" class="bg-slate-900">Manual</option>
                        </select>
                        <ion-icon name="chevron-down-outline" class="absolute right-3 top-9 text-slate-400 pointer-events-none text-base"></ion-icon>
                    </div>

                    <!-- Fuel Type Filter -->
                    <div class="form-control group">
                        <label class="label mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-slate-300 flex items-center gap-1.5">
                                <ion-icon name="flash-outline" class="text-sm text-emerald-400"></ion-icon>
                                Fuel
                            </span>
                        </label>
                        <select wire:model.live="fuelType" class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 appearance-none cursor-pointer font-medium">
                            <option value="" class="bg-slate-900">All Types</option>
                            <option value="Petrol" class="bg-slate-900">Petrol</option>
                            <option value="Diesel" class="bg-slate-900">Diesel</option>
                            <option value="Hybrid" class="bg-slate-900">Hybrid</option>
                        </select>
                        <ion-icon name="chevron-down-outline" class="absolute right-3 top-9 text-slate-400 pointer-events-none text-base"></ion-icon>
                    </div>

                    <!-- Sort By Filter -->
                    <div class="form-control group">
                        <label class="label mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-slate-300 flex items-center gap-1.5">
                                <ion-icon name="swap-vertical-outline" class="text-sm text-emerald-400"></ion-icon>
                                Sort By
                            </span>
                        </label>
                        <select wire:model.live="sortBy" class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 appearance-none cursor-pointer font-medium">
                            <option value="newest" class="bg-slate-900">Newest First</option>
                            <option value="price_low" class="bg-slate-900">Price: Low to High</option>
                            <option value="price_high" class="bg-slate-900">Price: High to Low</option>
                            <option value="year_new" class="bg-slate-900">Year: Newest</option>
                            <option value="year_old" class="bg-slate-900">Year: Oldest</option>
                            <option value="mileage_low" class="bg-slate-900">Mileage: Low to High</option>
                        </select>
                        <ion-icon name="chevron-down-outline" class="absolute right-3 top-9 text-slate-400 pointer-events-none text-base"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Price & Year Range Section -->
            <div class="border-t border-white/15 pt-5">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Price & Year Range</p>
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                    <!-- Min Year -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Min Year</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="minYear"
                            placeholder="2019"
                            min="2019"
                            max="2026"
                            class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 font-medium placeholder-slate-500"
                        />
                    </div>

                    <!-- Max Year -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Max Year</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="maxYear"
                            placeholder="2026"
                            min="2019"
                            max="2026"
                            class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 font-medium placeholder-slate-500"
                        />
                    </div>

                    <!-- Min Price -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Min Price</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="minPrice"
                            placeholder="500,000"
                            class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 font-medium placeholder-slate-500"
                        />
                    </div>

                    <!-- Max Price -->
                    <div class="form-control">
                        <label class="block mb-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Max Price</span>
                        </label>
                        <input
                            type="number"
                            wire:model.live.debounce.300ms="maxPrice"
                            placeholder="5,000,000"
                            class="w-full px-3 py-2 text-sm bg-white/5 border border-white/15 rounded-lg hover:border-white/25 focus:bg-white/10 focus:border-emerald-400/60 focus:outline-none transition-all duration-200 font-medium placeholder-slate-500"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 sm:mb-6 flex items-center justify-between gap-3">
            <p class="ui-muted text-xs sm:text-sm">
                Showing <span class="font-semibold text-green-300">{{ $cars->firstItem() ?? 0 }}</span>
                to <span class="font-semibold text-green-300">{{ $cars->lastItem() ?? 0 }}</span>
                of <span class="font-semibold text-green-300">{{ $cars->total() }}</span> results
            </p>
        </div>

        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 mb-6 sm:mb-8">
                @foreach($cars as $car)
                    <article class="ui-card rounded-2xl overflow-hidden border border-white/10 hover:border-green-400/50 transition-all duration-300 group">
                        <div class="relative overflow-hidden h-44 sm:h-52 lg:h-56">
                            <img
                                class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $car->primary_image }}"
                                alt="{{ $car->full_name }}"
                                loading="lazy"
                            />

                            <div class="absolute top-3 left-3 flex flex-col gap-2">
                                <span class="badge badge-accent font-semibold text-xs">{{ $car->auction_grade }} Grade</span>
                                <span class="badge badge-warning text-xs">{{ $car->fuel_type }}</span>
                            </div>

                            @if(!$car->is_available)
                                <div class="absolute inset-0 bg-blue-600/50/70 flex items-center justify-center">
                                    <span class="badge badge-error badge-lg">SOLD</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-4 sm:p-5 bg-white/5 group-hover:bg-white/10 transition-colors">
                            <h3 class="text-base sm:text-lg font-bold mb-2 ui-title line-clamp-1">{{ $car->full_name }}</h3>

                            <div class="grid grid-cols-1 gap-2 mb-4 text-xs ui-muted">
                                <span class="inline-flex items-center gap-1.5">
                                    <ion-icon name="speedometer-outline" class="text-base"></ion-icon>
                                    <span>{{ $car->formatted_mileage }}</span>
                                </span>
                                <span class="inline-flex items-center gap-1.5">
                                    <ion-icon name="settings-outline" class="text-base"></ion-icon>
                                    <span>{{ $car->transmission }}</span>
                                </span>
                                <span class="inline-flex items-center gap-1.5">
                                    <ion-icon name="flash-outline" class="text-base"></ion-icon>
                                    <span>{{ $car->engine_capacity }}</span>
                                </span>
                            </div>

                            <div class="flex items-center justify-between gap-3">
                                <div class="min-w-0">
                                    <p class="text-xs mb-0.5">CIF Price</p>
                                    <p class="text-lg sm:text-2xl font-bold text-green-300 leading-tight">{{ $car->formatted_price }}</p>
                                </div>

                                <a
                                    href="{{ route('car.details', $car->slug) }}"
                                    wire:navigate
                                    class="inline-flex items-center gap-1.5 px-3 py-2 rounded-lg bg-green-500 hover:bg-green-600 text-white text-sm font-semibold transition-all duration-200 whitespace-nowrap"
                                >
                                    <span>View Details</span>
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="flex justify-center overflow-x-auto">
                {{ $cars->links() }}
            </div>
        @else
            <div class="ui-empty rounded-2xl">
                <ion-icon name="car-outline" class="text-5xl sm:text-6xl mb-4"></ion-icon>
                <h3 class="text-xl sm:text-2xl font-bold mb-2">No Cars Found</h3>
                <p class="ui-muted mb-4 sm:mb-6 text-sm sm:text-base">Try adjusting your filters to see more results.</p>
                <button wire:click="resetFilters" class="bg-green-600 text-sm sm:text-base">
                    <ion-icon name="refresh-outline"></ion-icon>
                    <span>Reset All Filters</span>
                </button>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>


