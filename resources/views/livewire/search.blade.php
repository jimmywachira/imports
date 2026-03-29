<div class="page-shell border-amber-300">
    <div class="w-full lg:w-3/4 mx-auto px-6 py-12">
        <!-- Hero Header -->
        <header class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-amber-400 via-yellow-300 to-lime-200 text-blue-900 shadow-2xl mb-12">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,_rgba(0,0,0,0.5),_transparent_60%)]"></div>
            <div class="relative p-8 md:p-12">
                <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                    <div class="space-y-3">
                        <p class="uppercase tracking-[0.2em] text-xs font-semibold">Japan Direct Imports</p>
                        <h1 class="text-4xl md:text-5xl font-extrabold">Find Your Dream Import</h1>
                        <p class="text-blue-800 max-w-2xl">Verified 2019+ Japanese vehicles, clean history, and transparent CIF pricing tailored for the Kenyan market.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="stats font-extrabold">
                            <div class="stat place-items-center">
                                <div class="stat-value text-blue-300 text-3xl">{{ $cars->total() }}</div>
                                <div class="stat-desc text-blue-500">Available Cars</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="glass-panel p-6 mb-8">
            <h2 class="text-xl font-semibold mb-2">Japan Direct Import Cars</h2>
            <p class="ui-muted">
                Search import cars by make, price, and year. Every vehicle is sourced from verified Japanese auctions with
                inspection reports and Kenya customs support.
            </p>
            <div class="mt-4 flex flex-wrap gap-4 text-sm">
                <a href="{{ route('cars') }}" class="text-amber-400 hover:text-amber-300 font-medium">Browse Inventory</a>
                <a href="{{ route('inspection') }}" class="text-amber-400 hover:text-amber-300 font-medium">Inspection Reports</a>
                <a href="{{ route('shipping') }}" class="text-amber-400 hover:text-amber-300 font-medium">Shipping & Clearing</a>
            </div>
        </section>

        <!-- Filters Section -->
        <div class="glass-panel p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <!-- Search -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Search</span>
                    </label>
                    <input 
                        type="text" 
                        wire:model.live.debounce.300ms="search" 
                        placeholder="Make, Model, VIN..." 
                        class="ui-input"
                    />
                </div>

                <!-- Make Filter -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Make</span>
                    </label>
                    <select 
                        wire:model.live="make" 
                        class="ui-select"
                    >
                        <option value="">All Makes</option>
                        @foreach($this->makes as $makeName)
                            <option value="{{ $makeName }}">{{ $makeName }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Transmission Filter -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Transmission</span>
                    </label>
                    <select 
                        wire:model.live="transmission" 
                        class="ui-select"
                    >
                        <option value="">All Types</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                </div>

                <!-- Fuel Type Filter -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Fuel Type</span>
                    </label>
                    <select 
                        wire:model.live="fuelType" 
                        class="ui-select"
                    >
                        <option value="">All Types</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>

                <!-- Min Year -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Min Year</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="minYear" 
                        placeholder="2019" 
                        min="2019"
                        max="2026"
                        class="ui-input"
                    />
                </div>

                <!-- Max Year -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Max Year</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="maxYear" 
                        placeholder="2026" 
                        min="2019"
                        max="2026"
                        class="ui-input"
                    />
                </div>

                <!-- Min Price -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Min Price (KES)</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="minPrice" 
                        placeholder="500000" 
                        class="ui-input"
                    />
                </div>

                <!-- Max Price -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text ui-label">Max Price (KES)</span>
                    </label>
                    <input 
                        type="number" 
                        wire:model.live.debounce.300ms="maxPrice" 
                        placeholder="5000000" 
                        class="ui-input"
                    />
                </div>
            </div>

            <!-- Sort and Reset -->
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="form-control w-full md:w-64">
                    <label class="label">
                        <span class="label-text ui-label">Sort By</span>
                    </label>
                    <select 
                        wire:model.live="sortBy" 
                        class="ui-select"
                    >
                        <option value="newest">Newest First</option>
                        <option value="price_low">Price: Low to High</option>
                        <option value="price_high">Price: High to Low</option>
                        <option value="year_new">Year: Newest First</option>
                        <option value="year_old">Year: Oldest First</option>
                        <option value="mileage_low">Mileage: Low to High</option>
                    </select>
                </div>

                <button 
                    wire:click="resetFilters" 
                    class="btn-outline-amber"
                >
                    <ion-icon name="refresh-outline" class="text-lg"></ion-icon>
                    Reset Filters
                </button>
            </div>
        </div>

        <!-- Results Count -->
        <div class="mb-6">
            <p class="ui-muted">
                Showing <span class="font-semibold text-amber-300">{{ $cars->firstItem() ?? 0 }}</span> 
                to <span class="font-semibold text-amber-300">{{ $cars->lastItem() ?? 0 }}</span> 
                of <span class="font-semibold text-amber-300">{{ $cars->total() }}</span> results
            </p>
        </div>

        <!-- Cars Grid -->
        @if($cars->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach($cars as $car)
                    <div class="ui-card">
                        <!-- Image -->
                        <div class="relative overflow-hidden h-56">
                            <img 
                                class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                src="{{ $car->primary_image }}" 
                                alt="{{ $car->full_name }}" 
                                loading="lazy"
                            />
                            <div class="absolute top-3 left-3 flex flex-col gap-2">
                                <span class="badge badge-accent font-semibold">{{ $car->auction_grade }} Grade</span>
                                <span class="badge badge-warning">{{ $car->fuel_type }}</span>
                            </div>
                            @if(!$car->is_available)
                                <div class="absolute inset-0 bg-slate-900/70 flex items-center justify-center dark:bg-slate-900/70">
                                    <span class="badge badge-error badge-lg">SOLD</span>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-5">
                            <h3 class="text-lg font-bold mb-2 ui-title line-clamp-1">
                                {{ $car->full_name }}
                            </h3>
                            
                            <!-- Specs -->
                            <div class="flex flex-wrap gap-2 mb-4 text-sm ui-muted">
                                <span class="flex items-center gap-1">
                                    <ion-icon name="speedometer-outline"></ion-icon>
                                    {{ $car->formatted_mileage }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <ion-icon name="settings-outline"></ion-icon>
                                    {{ $car->transmission }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <ion-icon name="flash-outline"></ion-icon>
                                    {{ $car->engine_capacity }}
                                </span>
                            </div>

                            <!-- Price and Action -->
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs text-slate-400 mb-1">CIF Price</p>
                                    <p class="text-2xl font-bold text-amber-300">
                                        {{ $car->formatted_price }}
                                    </p>
                                </div>
                                <a 
                                    href="{{ route('car.details', $car->slug) }}" 
                                    wire:navigate
                                    class="btn-pill-amber"
                                > 
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $cars->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="ui-empty">
                <ion-icon name="car-outline" class="text-6xl text-slate-400 mb-4"></ion-icon>
                <h3 class="text-2xl font-bold mb-2">No Cars Found</h3>
                <p class="ui-muted mb-6">Try adjusting your filters to see more results</p>
                <button 
                    wire:click="resetFilters" 
                    class="btn-primary"
                >
                    Reset All Filters
                </button>
            </div>
        @endif
    </div>
</div>



