<div class="page-shell">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        
        <!-- Header -->
        <header class="mb-8 lg:mb-12">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div class="space-y-2">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-green-500/20 to-green-600/20 flex items-center justify-center">
                                <ion-icon name="speedometer-outline" class="text-3xl text-green-400"></ion-icon>
                            </div>
                            <span class="bg-gradient-to-r from-green-200 via-green-400 to-green-200 bg-clip-text text-transparent">
                                Dashboard
                            </span>
                        </div>
                    </h1>
                    <p class="text-slate-400 text-sm sm:text-base ml-1">
                        Welcome back! Here's your vehicle inventory overview
                    </p>
                </div>
                <div class="flex gap-3">
                    <a 
                        href="{{ route('admin.vehicles.create') }}" 
                        class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold transition-all duration-200 hover:scale-105 hover:shadow-lg hover:shadow-green-500/30"
                    >
                        <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                        <span class="hidden sm:inline">Add Vehicle</span>
                        <span class="sm:hidden">Add</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 mb-8 lg:mb-12">
            
            <!-- Total Vehicles -->
            <div class="glass-panel p-6 lg:p-7 rounded-xl backdrop-blur-xl hover:shadow-lg hover:shadow-green-500/10 transition-all duration-300 group">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-slate-400 text-sm font-medium uppercase tracking-wide mb-2">Total Vehicles</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl lg:text-5xl font-extrabold text-white group-hover:text-green-400 transition-colors duration-300">
                                {{ $total_vehicles }}
                            </span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">All vehicles in inventory</p>
                    </div>
                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-green-500/20 to-green-600/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <ion-icon name="car-sport-outline" class="text-3xl lg:text-4xl text-green-400"></ion-icon>
                    </div>
                </div>
                <div class="pt-4 border-t border-white/10">
                    <a href="{{ route('admin.vehicles.index') }}" class="text-xs text-green-400 hover:text-green-300 font-medium inline-flex items-center gap-1 transition-colors">
                        <span>View all</span>
                        <ion-icon name="arrow-forward-outline" class="text-sm"></ion-icon>
                    </a>
                </div>
            </div>

            <!-- Available Vehicles -->
            <div class="glass-panel p-6 lg:p-7 rounded-xl backdrop-blur-xl hover:shadow-lg hover:shadow-green-500/10 transition-all duration-300 group">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-slate-400 text-sm font-medium uppercase tracking-wide mb-2">Available</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl lg:text-5xl font-extrabold text-white group-hover:text-green-400 transition-colors duration-300">
                                {{ $available_vehicles }}
                            </span>
                            @if($total_vehicles > 0)
                                <span class="text-sm text-slate-400">
                                    ({{ round(($available_vehicles / $total_vehicles) * 100) }}%)
                                </span>
                            @endif
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Ready for sale</p>
                    </div>
                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-green-500/20 to-green-600/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <ion-icon name="checkmark-circle" class="text-3xl lg:text-4xl text-green-400"></ion-icon>
                    </div>
                </div>
                <div class="pt-4 border-t border-white/10">
                    <div class="flex items-center gap-2">
                        <div class="flex-1 bg-white/5 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-green-500 to-green-400 h-full rounded-full transition-all duration-500" 
                                 style="width: {{ $total_vehicles > 0 ? round(($available_vehicles / $total_vehicles) * 100) : 0 }}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sold Vehicles -->
            <div class="glass-panel p-6 lg:p-7 rounded-xl backdrop-blur-xl hover:shadow-lg hover:shadow-red-500/10 transition-all duration-300 group">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <p class="text-slate-400 text-sm font-medium uppercase tracking-wide mb-2">Sold</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl lg:text-5xl font-extrabold text-white group-hover:text-red-400 transition-colors duration-300">
                                {{ $sold_vehicles }}
                            </span>
                            @if($total_vehicles > 0)
                                <span class="text-sm text-slate-400">
                                    ({{ round(($sold_vehicles / $total_vehicles) * 100) }}%)
                                </span>
                            @endif
                        </div>
                        <p class="text-xs text-slate-400 mt-2">No longer available</p>
                    </div>
                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-red-500/20 to-red-600/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <ion-icon name="ban" class="text-3xl lg:text-4xl text-red-400"></ion-icon>
                    </div>
                </div>
                <div class="pt-4 border-t border-white/10">
                    <div class="flex items-center gap-2">
                        <div class="flex-1 bg-white/5 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-red-500 to-red-400 h-full rounded-full transition-all duration-500" 
                                 style="width: {{ $total_vehicles > 0 ? round(($sold_vehicles / $total_vehicles) * 100) : 0 }}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="glass-panel p-6 lg:p-8 rounded-xl backdrop-blur-xl mb-8 lg:mb-12">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-green-500/20 flex items-center justify-center">
                    <ion-icon name="flash-outline" class="text-2xl text-green-400"></ion-icon>
                </div>
                <h2 class="text-2xl font-bold text-white">Quick Actions</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4">
                <a 
                    href="{{ route('admin.vehicles.create') }}" 
                    class="group flex items-center gap-3 p-4 rounded-lg bg-gradient-to-br from-green-500/10 to-green-600/10 hover:from-green-500/20 hover:to-green-600/20 border border-green-500/30 hover:border-green-400/50 transition-all duration-200 hover:scale-105"
                >
                    <div class="w-10 h-10 rounded-lg bg-green-500/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <ion-icon name="add-circle-outline" class="text-2xl text-green-400"></ion-icon>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-white text-sm">Add Vehicle</p>
                        <p class="text-xs text-slate-400 truncate">Create new listing</p>
                    </div>
                </a>
                
                <a 
                    href="{{ route('admin.vehicles.index') }}" 
                    class="group flex items-center gap-3 p-4 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 transition-all duration-200 hover:scale-105"
                >
                    <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <ion-icon name="list-outline" class="text-2xl text-blue-400"></ion-icon>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-white text-sm">Manage</p>
                        <p class="text-xs text-slate-400 truncate">View all vehicles</p>
                    </div>
                </a>
                
                <a 
                    href="{{ route('cars') }}" 
                    target="_blank"
                    class="group flex items-center gap-3 p-4 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 transition-all duration-200 hover:scale-105"
                >
                    <div class="w-10 h-10 rounded-lg bg-purple-500/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <ion-icon name="eye-outline" class="text-2xl text-purple-400"></ion-icon>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-white text-sm">Preview</p>
                        <p class="text-xs text-slate-400 truncate">View public site</p>
                    </div>
                </a>
                
                <a 
                    href="{{ route('profile.edit') }}" 
                    class="group flex items-center gap-3 p-4 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 transition-all duration-200 hover:scale-105"
                >
                    <div class="w-10 h-10 rounded-lg bg-slate-500/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <ion-icon name="settings-outline" class="text-2xl text-slate-400"></ion-icon>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-white text-sm">Settings</p>
                        <p class="text-xs text-slate-400 truncate">Profile & preferences</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Vehicles -->
        <div class="glass-panel p-6 lg:p-8 rounded-xl backdrop-blur-xl">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center">
                        <ion-icon name="time-outline" class="text-2xl text-blue-400"></ion-icon>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">Recent Vehicles</h2>
                        <p class="text-xs text-slate-400">Latest additions to your inventory</p>
                    </div>
                </div>
                @if($recent_vehicles->count() > 0)
                    <a 
                        href="{{ route('admin.vehicles.index') }}" 
                        class="hidden sm:inline-flex items-center gap-1 text-sm text-green-400 hover:text-green-300 font-medium transition-colors"
                    >
                        <span>View all</span>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                @endif
            </div>

            @if($recent_vehicles->count() > 0)
                
                <!-- Desktop Table View -->
                <div class="hidden lg:block overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-white/10">
                                <th class="text-left px-4 py-3 text-xs font-semibold text-green-300 uppercase tracking-wider">Vehicle</th>
                                <th class="text-left px-4 py-3 text-xs font-semibold text-green-300 uppercase tracking-wider">Year</th>
                                <th class="text-left px-4 py-3 text-xs font-semibold text-green-300 uppercase tracking-wider">Mileage</th>
                                <th class="text-left px-4 py-3 text-xs font-semibold text-green-300 uppercase tracking-wider">Price</th>
                                <th class="text-center px-4 py-3 text-xs font-semibold text-green-300 uppercase tracking-wider">Status</th>
                                <th class="text-right px-4 py-3 text-xs font-semibold text-green-300 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @foreach($recent_vehicles as $vehicle)
                                <tr class="hover:bg-white/5 transition-colors group">
                                    <td class="px-4 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-12 h-12 rounded-lg bg-white/5 flex items-center justify-center overflow-hidden group-hover:ring-2 group-hover:ring-green-400/50 transition-all">
                                                @if($vehicle->primary_image)
                                                    <img src="{{ $vehicle->primary_image }}" alt="{{ $vehicle->full_name }}" class="w-full h-full object-cover">
                                                @else
                                                    <ion-icon name="car-sport-outline" class="text-2xl text-slate-400"></ion-icon>
                                                @endif
                                            </div>
                                            <div>
                                                <p class="font-semibold text-white">{{ $vehicle->make }} {{ $vehicle->model }}</p>
                                                <p class="text-xs text-slate-400 font-mono">VIN: {{ $vehicle->vin_number }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span class="text-slate-300 font-medium">{{ $vehicle->year_of_reg }}</span>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span class="text-slate-300">{{ $vehicle->formatted_mileage }}</span>
                                    </td>
                                    <td class="px-4 py-4">
                                        <span class="text-green-400 font-bold">{{ $vehicle->formatted_price }}</span>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex justify-center">
                                            @if($vehicle->is_available)
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-green-500/20 text-green-300 ring-1 ring-green-500/50">
                                                    <ion-icon name="checkmark-circle" class="text-sm"></ion-icon>
                                                    Available
                                                </span>
                                            @else
                                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-red-500/20 text-red-300 ring-1 ring-red-500/50">
                                                    <ion-icon name="close-circle" class="text-sm"></ion-icon>
                                                    Sold
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-end gap-2">
                                            <a 
                                                href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                                class="p-2 rounded-lg text-green-400 hover:text-green-300 hover:bg-green-500/10 transition-all"
                                                title="Edit vehicle"
                                            >
                                                <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                            </a>
                                            <a 
                                                href="{{ route('car.details', $vehicle->slug) }}" 
                                                target="_blank"
                                                class="p-2 rounded-lg text-blue-400 hover:text-blue-300 hover:bg-blue-500/10 transition-all"
                                                title="View details"
                                            >
                                                <ion-icon name="eye-outline" class="text-xl"></ion-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="lg:hidden space-y-4">
                    @foreach($recent_vehicles as $vehicle)
                        <div class="p-4 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 transition-all">
                            <div class="flex gap-3 mb-3">
                                <div class="w-16 h-16 rounded-lg bg-white/5 flex items-center justify-center overflow-hidden flex-shrink-0">
                                    @if($vehicle->primary_image)
                                        <img src="{{ $vehicle->primary_image }}" alt="{{ $vehicle->full_name }}" class="w-full h-full object-cover">
                                    @else
                                        <ion-icon name="car-sport-outline" class="text-2xl text-slate-400"></ion-icon>
                                    @endif
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-bold text-white truncate">{{ $vehicle->make }} {{ $vehicle->model }}</h3>
                                    <p class="text-xs text-slate-400 font-mono truncate">{{ $vehicle->vin_number }}</p>
                                    <div class="flex items-center gap-2 mt-2">
                                        <span class="text-sm text-slate-300">{{ $vehicle->year_of_reg }}</span>
                                        <span class="text-slate-500">•</span>
                                        <span class="text-sm text-slate-300">{{ $vehicle->formatted_mileage }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between pt-3 border-t border-white/10">
                                <div class="flex items-center gap-3">
                                    <span class="text-green-400 font-bold">{{ $vehicle->formatted_price }}</span>
                                    @if($vehicle->is_available)
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-green-500/20 text-green-300 ring-1 ring-green-500/50">
                                            Available
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-red-500/20 text-red-300 ring-1 ring-red-500/50">
                                            Sold
                                        </span>
                                    @endif
                                </div>
                                <div class="flex gap-2">
                                    <a 
                                        href="{{ route('admin.vehicles.edit', $vehicle->id) }}" 
                                        class="p-2 rounded-lg text-green-400 hover:bg-green-500/10 transition-all"
                                    >
                                        <ion-icon name="create-outline" class="text-xl"></ion-icon>
                                    </a>
                                    <a 
                                        href="{{ route('car.details', $vehicle->slug) }}" 
                                        target="_blank"
                                        class="p-2 rounded-lg text-blue-400 hover:bg-blue-500/10 transition-all"
                                    >
                                        <ion-icon name="eye-outline" class="text-xl"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- View All Link (Mobile) -->
                <div class="sm:hidden mt-4 pt-4 border-t border-white/10">
                    <a 
                        href="{{ route('admin.vehicles.index') }}" 
                        class="flex items-center justify-center gap-2 py-2 text-sm text-green-400 hover:text-green-300 font-medium transition-colors"
                    >
                        <span>View all vehicles</span>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>

            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-br from-slate-500/20 to-slate-600/20 mb-6">
                        <ion-icon name="car-sport-outline" class="text-5xl text-slate-400"></ion-icon>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">No Vehicles Yet</h3>
                    <p class="text-slate-400 mb-6 max-w-sm mx-auto">
                        Get started by adding your first vehicle to the inventory
                    </p>
                    <a 
                        href="{{ route('admin.vehicles.create') }}" 
                        class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold transition-all duration-200 hover:scale-105"
                    >
                        <ion-icon name="add-circle-outline" class="text-xl"></ion-icon>
                        <span>Add Your First Vehicle</span>
                    </a>
                </div>
            @endif
        </div>
    </div>

    @include('partials.footer')
</div>
