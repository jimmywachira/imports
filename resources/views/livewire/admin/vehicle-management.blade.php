<div class="page-shell">
    <div class="w-full lg:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        
        <!-- Page Header -->
        <header class="mb-8 lg:mb-10">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                <div class="space-y-1">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight bg-gradient-to-r from-green-200 via-green-400 to-green-200 bg-clip-text text-transparent">
                        Vehicle Management
                    </h1>
                    <p class="text-slate-400 text-sm sm:text-base">
                        View, edit, and manage your vehicle inventory
                    </p>
                </div>
                <div class="shrink-0">
                    <a 
                        href="{{ route('admin.vehicles.create') }}" 
                        class="btn-primary inline-flex items-center border-2 bg-emerald-600 text-bold border-emerald-600 justify-center gap-2 px-5 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105 hover:shadow-lg hover:shadow-green-500/20 focus:ring-2 focus:ring-green-400 focus:ring-offset-2 focus:ring-offset-slate-900"
                        aria-label="Add new vehicle"
                    >
                        <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                        <span>Add Vehicle</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Flash Messages -->
        @if (session()->has('message'))
            <div class="mb-6 animate-in slide-in-from-top duration-300">
                <div class="glass-panel border-l-4 border-green-500 p-4 rounded-lg">
                    <div class="flex items-center gap-3">
                        <div class="shrink-0">
                            <ion-icon name="checkmark-circle" class="text-2xl text-green-400"></ion-icon>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">{{ session('message') }}</p>
                        </div>
                        <button 
                            onclick="this.parentElement.parentElement.parentElement.remove()"
                            class="shrink-0 text-slate-400 hover:text-white transition-colors"
                            aria-label="Dismiss"
                        >
                            <ion-icon name="close-outline" class="text-xl"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Search & Filter Section -->
        <div class="glass-panel p-5 lg:p-6 mb-6 lg:mb-8 rounded-xl backdrop-blur-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
                
                <!-- Search Input -->
                <div class="lg:col-span-2 space-y-2">
                    <label for="search" class="block text-xs font-medium text-slate-300 uppercase tracking-wide">
                        Search Inventory
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <ion-icon name="search-outline" class="text-slate-400 text-lg"></ion-icon>
                        </div>
                        <input 
                            type="text"
                            id="search"
                            wire:model.live.debounce.300ms="search" 
                            placeholder="Search by make, model, VIN, or year..." 
                            class="ui-input w-full pl-10 pr-10 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                            aria-label="Search vehicles"
                        />
                        @if($search)
                            <button 
                                wire:click="$set('search', '')"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-white transition-colors"
                                aria-label="Clear search"
                            >
                                <ion-icon name="close-circle" class="text-lg"></ion-icon>
                            </button>
                        @endif
                    </div>
                </div>

                <!-- Status Filter -->
                <div class="space-y-2">
                    <label for="status" class="block text-xs font-medium text-slate-300 uppercase tracking-wide">
                        Vehicle Status
                    </label>
                    <div class="relative">
                        <select 
                            id="status"
                            wire:model.live="status" 
                            class="ui-select w-full py-3 rounded-lg appearance-none cursor-pointer transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                            aria-label="Filter by status"
                        >
                            <option value="all">All Vehicles</option>
                            <option value="available">Available Only</option>
                            <option value="sold">Sold Only</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <ion-icon name="chevron-down-outline" class="text-slate-400"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Filters & Results Summary -->
            <div class="mt-5 pt-5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div class="flex items-center gap-2 text-sm">
                    <span class="text-slate-400">Showing</span>
                    <span class="font-semibold text-green-300">{{ $vehicles->firstItem() ?? 0 }}–{{ $vehicles->lastItem() ?? 0 }}</span>
                    <span class="text-slate-400">of</span>
                    <span class="font-semibold text-green-300">{{ $vehicles->total() }}</span>
                    <span class="text-slate-400">{{ Str::plural('vehicle', $vehicles->total()) }}</span>
                </div>
                
                @if($search || $status !== 'all')
                    <button 
                        wire:click="$set('search', ''); $set('status', 'all')"
                        class="text-sm text-green-400 hover:text-green-300 font-medium inline-flex items-center gap-1 transition-colors"
                    >
                        <ion-icon name="close-circle-outline"></ion-icon>
                        <span>Clear Filters</span>
                    </button>
                @endif
            </div>
        </div>

        <!-- Vehicles Content -->
        @if($vehicles->count() > 0)
            
            <!-- Desktop Table View (Hidden on Mobile) -->
            <div class="hidden lg:block glass-card overflow-hidden rounded-xl mb-8 backdrop-blur-xl">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-white/10 bg-white/5">
                                <th class="text-left px-6 py-4 text-xs font-semibold text-green-300 uppercase tracking-wider">Vehicle</th>
                                <th class="text-left px-6 py-4 text-xs font-semibold text-green-300 uppercase tracking-wider">Year</th>
                                <th class="text-left px-6 py-4 text-xs font-semibold text-green-300 uppercase tracking-wider">Specifications</th>
                                <th class="text-left px-6 py-4 text-xs font-semibold text-green-300 uppercase tracking-wider">Price</th>
                                <th class="text-center px-6 py-4 text-xs font-semibold text-green-300 uppercase tracking-wider">Status</th>
                                <th class="text-right px-6 py-4 text-xs font-semibold text-green-300 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @foreach($vehicles as $vehicle)
                                <tr class="hover:bg-white/5 transition-colors group">
                                    <!-- Vehicle Info -->
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <div class="relative shrink-0">
                                                <img 
                                                    src="{{ $vehicle->primary_image }}" 
                                                    alt="{{ $vehicle->full_name }}"
                                                    class="w-20 h-20 rounded-lg object-cover ring-1 ring-white/10 group-hover:ring-green-400/50 transition-all"
                                                />
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="font-semibold text-white text-base truncate">
                                                    {{ $vehicle->make }} {{ $vehicle->model }}
                                                </p>
                                                <p class="text-xs text-slate-400 font-mono mt-1">
                                                    VIN: {{ $vehicle->vin_number }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Year -->
                                    <td class="px-6 py-4">
                                        <span class="text-slate-300 font-medium">{{ $vehicle->year_of_reg }}</span>
                                    </td>

                                    <!-- Specs -->
                                    <td class="px-6 py-4">
                                        <div class="space-y-1 text-sm">
                                            <p class="text-slate-300 font-medium">{{ $vehicle->formatted_mileage }}</p>
                                            <div class="flex items-center gap-2 text-slate-400 text-xs">
                                                <span>{{ $vehicle->transmission }}</span>
                                                <span class="text-white/30">•</span>
                                                <span>{{ $vehicle->fuel_type }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Price -->
                                    <td class="px-6 py-4">
                                        <span class="text-green-400 font-bold text-lg">{{ $vehicle->formatted_price }}</span>
                                    </td>

                                    <!-- Status -->
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center">
                                            <button 
                                                wire:click="toggleAvailability('{{ $vehicle->id }}')"
                                                wire:confirm="Are you sure you want to change the availability status?"
                                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 hover:scale-105
                                                    {{ $vehicle->is_available 
                                                        ? 'bg-green-500/20 text-green-300 ring-1 ring-green-500/50 hover:bg-green-500/30' 
                                                        : 'bg-red-500/20 text-red-300 ring-1 ring-red-500/50 hover:bg-red-500/30' 
                                                    }}"
                                                aria-label="Toggle availability status"
                                            >
                                                <ion-icon name="{{ $vehicle->is_available ? 'checkmark-circle' : 'close-circle' }}" class="text-base"></ion-icon>
                                                <span>{{ $vehicle->is_available ? 'Available' : 'Sold' }}</span>
                                            </button>
                                        </div>
                                    </td>

                                    <!-- Actions -->
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-2">
                                            <a 
                                                href="{{ route('car.details', $vehicle->slug) }}" 
                                                target="_blank"
                                                class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-white/10 transition-all duration-200"
                                                title="View vehicle details"
                                                aria-label="View vehicle details"
                                            >
                                                <ion-icon name="eye-outline" class="text-xl"></ion-icon>
                                            </a>
                                            <a 
                                                href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                                class="p-2 rounded-lg text-green-400 hover:text-green-300 hover:bg-green-500/10 transition-all duration-200"
                                                title="Edit vehicle"
                                                aria-label="Edit vehicle"
                                            >
                                                <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                            </a>
                                            <button 
                                                wire:click="deleteVehicle('{{ $vehicle->id }}')"
                                                wire:confirm="Are you sure you want to delete this vehicle? This action cannot be undone."
                                                class="p-2 rounded-lg text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-all duration-200"
                                                title="Delete vehicle"
                                                aria-label="Delete vehicle"
                                            >
                                                <ion-icon name="trash-outline" class="text-xl"></ion-icon>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Mobile Card View (Visible on Mobile/Tablet) -->
            <div class="lg:hidden space-y-4 mb-8">
                @foreach($vehicles as $vehicle)
                    <div class="glass-card p-4 rounded-xl backdrop-blur-xl hover:shadow-lg transition-all duration-200">
                        <div class="flex gap-4 mb-4">
                            <div class="shrink-0">
                                <img 
                                    src="{{ $vehicle->primary_image }}" 
                                    alt="{{ $vehicle->full_name }}"
                                    class="w-24 h-24 sm:w-28 sm:h-28 rounded-lg object-cover ring-1 ring-white/10"
                                />
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="font-bold text-white text-lg mb-1 truncate">
                                    {{ $vehicle->make }} {{ $vehicle->model }}
                                </h3>
                                <p class="text-xs text-slate-400 font-mono mb-2">{{ $vehicle->vin_number }}</p>
                                <div class="flex items-center gap-2 text-sm text-slate-300 mb-2">
                                    <span class="font-medium">{{ $vehicle->year_of_reg }}</span>
                                    <span class="text-white/30">•</span>
                                    <span>{{ $vehicle->formatted_mileage }}</span>
                                </div>
                                <button 
                                    wire:click="toggleAvailability('{{ $vehicle->id }}')"
                                    wire:confirm="Are you sure you want to change the availability status?"
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold
                                        {{ $vehicle->is_available 
                                            ? 'bg-green-500/20 text-green-300 ring-1 ring-green-500/50' 
                                            : 'bg-red-500/20 text-red-300 ring-1 ring-red-500/50' 
                                        }}"
                                >
                                    <ion-icon name="{{ $vehicle->is_available ? 'checkmark-circle' : 'close-circle' }}"></ion-icon>
                                    <span>{{ $vehicle->is_available ? 'Available' : 'Sold' }}</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-white/10">
                            <div>
                                <p class="text-xs text-slate-400 mb-1">Price</p>
                                <p class="text-green-400 font-bold text-lg">{{ $vehicle->formatted_price }}</p>
                            </div>
                            <div class="flex gap-2">
                                <a 
                                    href="{{ route('car.details', $vehicle->slug) }}" 
                                    target="_blank"
                                    class="p-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-white/10 transition-all"
                                    aria-label="View"
                                >
                                    <ion-icon name="eye-outline" class="text-xl"></ion-icon>
                                </a>
                                <a 
                                    href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                    class="p-2.5 rounded-lg text-green-400 hover:bg-green-500/10 transition-all"
                                    aria-label="Edit"
                                >
                                    <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                </a>
                                <button 
                                    wire:click="deleteVehicle('{{ $vehicle->id }}')"
                                    wire:confirm="Are you sure you want to delete this vehicle? This action cannot be undone."
                                    class="p-2.5 rounded-lg text-red-400 hover:bg-red-500/10 transition-all"
                                    aria-label="Delete"
                                >
                                    <ion-icon name="trash-outline" class="text-xl"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                <div class="glass-panel px-4 py-2 rounded-lg">
                    {{ $vehicles->links() }}
                </div>
            </div>

        @else
            <!-- Enhanced Empty State -->
            <div class="glass-card rounded-xl p-12 text-center backdrop-blur-xl">
                <div class="max-w-md mx-auto">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-linear-to-br from-green-500/20 to-green-600/20 mb-6">
                        <ion-icon name="car-sport-outline" class="text-5xl text-green-400"></ion-icon>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-white mb-3">
                        @if($search || $status !== 'all')
                            No Matching Vehicles
                        @else
                            No Vehicles Yet
                        @endif
                    </h3>
                    
                    <p class="text-slate-400 mb-8">
                        @if($search || $status !== 'all')
                            We couldn't find any vehicles matching your criteria. Try adjusting your filters or search terms.
                        @else
                            Get started by adding your first vehicle to the inventory.
                        @endif
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                        @if($search || $status !== 'all')
                            <button 
                                wire:click="$set('search', ''); $set('status', 'all')"
                                class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-white/5 hover:bg-white/10 text-white font-medium transition-all duration-200"
                            >
                                <ion-icon name="refresh-outline" class="text-xl"></ion-icon>
                                <span>Clear Filters</span>
                            </button>
                        @endif
                        
                        <a 
                            href="{{ route('admin.vehicles.create') }}" 
                            class="btn-primary inline-flex items-center gap-2 px-5 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105"
                        >
                            <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                            <span>Add Your First Vehicle</span>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

