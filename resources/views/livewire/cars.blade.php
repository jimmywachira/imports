<div class="page-shell">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <header class="relative overflow-hidden rounded-3xl bg-linear-to-r from-green-500 via-green-400 to-lime-300 text-slate-900 shadow-2xl mb-8 sm:mb-10">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,rgba(0,0,0,0.6),transparent_60%)]"></div>
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

        <section class="glass-panel p-4 sm:p-6 rounded-2xl mb-6">
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

        <div class="glass-panel rounded-2xl p-4 sm:p-6 mb-6 sm:mb-8 border border-white/10">
            <div class="flex items-center justify-between gap-3 mb-5">
                <h2 class="text-lg sm:text-xl font-bold text-white">Filter Inventory</h2>
                <button wire:click="resetFilters" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-sm transition-all">
                    <ion-icon name="refresh-outline" class="text-base"></ion-icon>
                    <span>Reset</span>
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="form-control lg:col-span-2">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Search</span>
                    </label>
                    <div class="relative">
                        <ion-icon name="search-outline" class="absolute left-3 top-1/2 -translate-y-1/2"></ion-icon>
                        <input
                            type="text"
                            wire:model.live.debounce.300ms="search"
                            placeholder="Make, model, or VIN ..."
                            class="ui-input w-full pl-10 pr-3 py-2.5 text-sm"
                        />
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Make</span>
                    </label>
                    <select wire:model.live="make" class="ui-select text-sm">
                        <option value="">All Makes</option>
                        @foreach($this->makes as $makeName)
                            <option value="{{ $makeName }}">{{ $makeName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Sort By</span>
                    </label>
                    <select wire:model.live="sortBy" class="ui-select text-sm">
                        <option value="newest">Newest First</option>
                        <option value="price_low">Price: Low to High</option>
                        <option value="price_high">Price: High to Low</option>
                        <option value="year_new">Year: Newest First</option>
                        <option value="year_old">Year: Oldest First</option>
                        <option value="mileage_low">Mileage: Low to High</option>
                    </select>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Transmission</span>
                    </label>
                    <select wire:model.live="transmission" class="ui-select text-sm">
                        <option value="">All Types</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Fuel Type</span>
                    </label>
                    <select wire:model.live="fuelType" class="ui-select text-sm">
                        <option value="">All Types</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Min Year</span>
                    </label>
                    <input
                        type="number"
                        wire:model.live.debounce.300ms="minYear"
                        placeholder="2019"
                        min="2019"
                        max="2026"
                        class="ui-input text-sm"
                    />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Max Year</span>
                    </label>
                    <input
                        type="number"
                        wire:model.live.debounce.300ms="maxYear"
                        placeholder="2026"
                        min="2019"
                        max="2026"
                        class="ui-input text-sm"
                    />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Min Price (KES)</span>
                    </label>
                    <input
                        type="number"
                        wire:model.live.debounce.300ms="minPrice"
                        placeholder="500000"
                        class="ui-input text-sm"
                    />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label text-xs sm:text-sm">Max Price (KES)</span>
                    </label>
                    <input
                        type="number"
                        wire:model.live.debounce.300ms="maxPrice"
                        placeholder="5000000"
                        class="ui-input text-sm"
                    />
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
                                <div class="absolute inset-0 bg-slate-900/70 flex items-center justify-center">
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
                <button wire:click="resetFilters" class="btn-primary text-sm sm:text-base">
                    <ion-icon name="refresh-outline"></ion-icon>
                    <span>Reset All Filters</span>
                </button>
            </div>
        @endif
    </div>

    @include('partials.footer')
</div>


