<div class="page-shell">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        
        <!-- Page Header with Breadcrumb -->
        <header class="mb-8 lg:mb-10">
            <div class="flex items-center gap-3 mb-4">
                <a 
                    href="{{ route('admin.vehicles.index') }}" 
                    class="flex items-center justify-center w-10 h-10 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white transition-all duration-200 hover:scale-105"
                    aria-label="Back to vehicles list"
                >
                    <ion-icon name="arrow-back-outline" class="text-xl"></ion-icon>
                </a>
                <nav class="text-sm text-slate-400">
                    <ol class="flex items-center gap-2">
                        <li><a href="{{ route('admin.vehicles.index') }}" class="hover:text-green-400 transition-colors">Vehicles</a></li>
                        <li><ion-icon name="chevron-forward-outline" class="text-xs"></ion-icon></li>
                        <li class="text-white font-medium">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="space-y-2">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight bg-gradient-to-r from-green-200 via-green-400 to-green-200 bg-clip-text text-transparent">
                    Edit Vehicle
                </h1>
                <p class="text-slate-400 text-sm sm:text-base flex items-center gap-2">
                    <ion-icon name="car-sport-outline" class="text-lg"></ion-icon>
                    <span>{{ $vehicle->full_name }}</span>
                </p>
            </div>
        </header>

        <!-- Flash Messages -->
        @if (session()->has('message'))
            <div class="mb-6 animate-in slide-in-from-top duration-300">
                <div class="glass-panel border-l-4 border-green-500 p-4 rounded-lg">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0">
                            <ion-icon name="checkmark-circle" class="text-2xl text-green-400"></ion-icon>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-white">{{ session('message') }}</p>
                        </div>
                        <button 
                            onclick="this.parentElement.parentElement.parentElement.remove()"
                            class="flex-shrink-0 text-slate-400 hover:text-white transition-colors"
                            aria-label="Dismiss notification"
                        >
                            <ion-icon name="close-outline" class="text-xl"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Form -->
        <form wire:submit="update" class="space-y-6 lg:space-y-8">
            
            <!-- Section 1: Basic Information -->
            <div class="glass-panel p-5 sm:p-6 lg:p-8 rounded-xl backdrop-blur-xl">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-white/10">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-green-500/20 text-green-400">
                        <ion-icon name="information-circle" class="text-2xl"></ion-icon>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-white">Basic Information</h2>
                        <p class="text-xs text-slate-400">Essential vehicle details and identification</p>
                    </div>
                </div>

                <div class="space-y-5">
                    <!-- VIN Number -->
                    <div class="space-y-2">
                        <label for="vin_number" class="block text-sm font-semibold text-slate-200">
                            VIN Number <span class="text-green-400">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <ion-icon name="barcode-outline" class="text-slate-400 text-lg"></ion-icon>
                            </div>
                            <input 
                                type="text"
                                id="vin_number" 
                                wire:model="vin_number" 
                                placeholder="e.g., JN1BCNS35U0000001" 
                                class="ui-input w-full pl-12 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                aria-describedby="vin-help"
                            />
                        </div>
                        <p id="vin-help" class="text-xs text-slate-400">17-character unique identification number</p>
                        @error('vin_number') 
                            <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Make and Model -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="make" class="block text-sm font-semibold text-slate-200">
                                Make <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <ion-icon name="business-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <input 
                                    type="text"
                                    id="make" 
                                    wire:model="make" 
                                    placeholder="e.g., Toyota" 
                                    class="ui-input w-full pl-12 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('make') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="model" class="block text-sm font-semibold text-slate-200">
                                Model <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <ion-icon name="car-sport-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <input 
                                    type="text"
                                    id="model" 
                                    wire:model="model" 
                                    placeholder="e.g., Harrier" 
                                    class="ui-input w-full pl-12 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('model') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Year and Mileage -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="year_of_reg" class="block text-sm font-semibold text-slate-200">
                                Year of Registration <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <ion-icon name="calendar-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <input 
                                    type="number"
                                    id="year_of_reg" 
                                    wire:model="year_of_reg" 
                                    min="2019" 
                                    max="2026" 
                                    class="ui-input w-full pl-12 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('year_of_reg') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="mileage" class="block text-sm font-semibold text-slate-200">
                                Mileage (km) <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <ion-icon name="speedometer-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <input 
                                    type="number"
                                    id="mileage" 
                                    wire:model="mileage" 
                                    min="0" 
                                    placeholder="e.g., 45000" 
                                    class="ui-input w-full pl-12 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('mileage') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Technical Specifications -->
            <div class="glass-panel p-5 sm:p-6 lg:p-8 rounded-xl backdrop-blur-xl">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-white/10">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-500/20 text-blue-400">
                        <ion-icon name="settings-outline" class="text-2xl"></ion-icon>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-white">Technical Specifications</h2>
                        <p class="text-xs text-slate-400">Engine, transmission, and fuel details</p>
                    </div>
                </div>

                <div class="space-y-5">
                    <!-- Engine and Transmission -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="engine_capacity" class="block text-sm font-semibold text-slate-200">
                                Engine Capacity <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <ion-icon name="hardware-chip-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <input 
                                    type="text"
                                    id="engine_capacity" 
                                    wire:model="engine_capacity" 
                                    placeholder="e.g., 2.0L" 
                                    class="ui-input w-full pl-12 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('engine_capacity') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="transmission" class="block text-sm font-semibold text-slate-200">
                                Transmission <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                    <ion-icon name="git-network-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <select 
                                    id="transmission"
                                    wire:model="transmission" 
                                    class="ui-select w-full pl-12 py-3 rounded-lg appearance-none cursor-pointer transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                >
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <ion-icon name="chevron-down-outline" class="text-slate-400"></ion-icon>
                                </div>
                            </div>
                            @error('transmission') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Fuel Type and Grade -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="fuel_type" class="block text-sm font-semibold text-slate-200">
                                Fuel Type <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                    <ion-icon name="water-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <select 
                                    id="fuel_type"
                                    wire:model="fuel_type" 
                                    class="ui-select w-full pl-12 py-3 rounded-lg appearance-none cursor-pointer transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                >
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <ion-icon name="chevron-down-outline" class="text-slate-400"></ion-icon>
                                </div>
                            </div>
                            @error('fuel_type') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="auction_grade" class="block text-sm font-semibold text-slate-200 flex items-center gap-2">
                                Auction Grade <span class="text-green-400">*</span>
                                <button type="button" class="text-slate-400 hover:text-slate-200" title="Higher grades indicate better condition">
                                    <ion-icon name="help-circle-outline" class="text-base"></ion-icon>
                                </button>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10">
                                    <ion-icon name="star-outline" class="text-slate-400 text-lg"></ion-icon>
                                </div>
                                <select 
                                    id="auction_grade"
                                    wire:model="auction_grade" 
                                    class="ui-select w-full pl-12 py-3 rounded-lg appearance-none cursor-pointer transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                >
                                    <option value="3">3 - Good</option>
                                    <option value="3.5">3.5 - Very Good</option>
                                    <option value="4">4 - Excellent</option>
                                    <option value="4.5">4.5 - Superior</option>
                                    <option value="5">5 - Pristine</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <ion-icon name="chevron-down-outline" class="text-slate-400"></ion-icon>
                                </div>
                            </div>
                            @error('auction_grade') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Pricing & Availability -->
            <div class="glass-panel p-5 sm:p-6 lg:p-8 rounded-xl backdrop-blur-xl">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-white/10">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-green-500/20 text-green-400">
                        <ion-icon name="cash-outline" class="text-2xl"></ion-icon>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-white">Pricing & Availability</h2>
                        <p class="text-xs text-slate-400">Set the price range and vehicle status</p>
                    </div>
                </div>

                <div class="space-y-5">
                    <!-- Price Range -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="cif_price_min" class="block text-sm font-semibold text-slate-200">
                                Minimum CIF Price (KES) <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <span class="text-slate-400 font-semibold">KES</span>
                                </div>
                                <input 
                                    type="number"
                                    id="cif_price_min" 
                                    wire:model="cif_price_min" 
                                    min="0" 
                                    step="0.01" 
                                    placeholder="2,300,000" 
                                    class="ui-input w-full pl-16 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('cif_price_min') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="cif_price_max" class="block text-sm font-semibold text-slate-200">
                                Maximum CIF Price (KES) <span class="text-green-400">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <span class="text-slate-400 font-semibold">KES</span>
                                </div>
                                <input 
                                    type="number"
                                    id="cif_price_max" 
                                    wire:model="cif_price_max" 
                                    min="0" 
                                    step="0.01" 
                                    placeholder="2,500,000" 
                                    class="ui-input w-full pl-16 py-3 rounded-lg transition-all duration-200 focus:ring-2 focus:ring-green-400/50 focus:border-green-400"
                                />
                            </div>
                            @error('cif_price_max') 
                                <div class="flex items-center gap-2 text-red-400 text-sm mt-1">
                                    <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Availability Toggle -->
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-slate-200">
                            Vehicle Status
                        </label>
                        <label class="flex items-center gap-4 p-4 rounded-lg bg-white/5 hover:bg-white/10 cursor-pointer transition-all duration-200 border border-white/10 hover:border-green-400/50">
                            <input 
                                type="checkbox" 
                                wire:model="is_available" 
                                class="checkbox checkbox-warning w-5 h-5"
                            />
                            <div class="flex-1">
                                <span class="text-white font-medium">Available for Sale</span>
                                <p class="text-xs text-slate-400 mt-0.5">Mark this vehicle as available on the website</p>
                            </div>
                            <div class="flex-shrink-0">
                                @if($is_available)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-green-500/20 text-green-300 ring-1 ring-green-500/50">
                                        <ion-icon name="checkmark-circle" class="text-sm"></ion-icon>
                                        Active
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-slate-500/20 text-slate-300 ring-1 ring-slate-500/50">
                                        <ion-icon name="pause-circle" class="text-sm"></ion-icon>
                                        Inactive
                                    </span>
                                @endif
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Section 4: Vehicle Images -->
            <div class="glass-panel p-5 sm:p-6 lg:p-8 rounded-xl backdrop-blur-xl">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-white/10">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-purple-500/20 text-purple-400">
                        <ion-icon name="images-outline" class="text-2xl"></ion-icon>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-white">Vehicle Images</h2>
                        <p class="text-xs text-slate-400">Upload up to 5 high-quality photos</p>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="p-4 rounded-lg bg-blue-500/10 border border-black/500/30">
                        <div class="flex items-start gap-3">
                            <ion-icon name="information-circle" class="text-blue-400 text-xl flex-shrink-0 mt-0.5"></ion-icon>
                            <div class="text-sm">
                                <p class="text-blue-200 font-medium mb-1">Image Requirements</p>
                                <ul class="text-blue-300/80 text-xs space-y-1">
                                    <li>• Maximum file size: 5MB per image</li>
                                    <li>• Supported formats: JPG, PNG, WebP</li>
                                    <li>• Recommended resolution: 1920x1080 or higher</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image Upload Dropzone -->
                    <div>
                        <label class="block cursor-pointer group">
                            <div class="glass-panel border-2 border-dashed border-slate-600 hover:border-green-400 p-8 rounded-xl transition-all duration-300 group-hover:bg-white/5">
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-16 h-16 mb-4 rounded-full bg-gradient-to-br from-green-500/20 to-green-600/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                        <ion-icon name="cloud-upload-outline" class="text-4xl text-green-400"></ion-icon>
                                    </div>
                                    <p class="text-white font-semibold mb-1">Click to upload or drag and drop</p>
                                    <p class="text-slate-400 text-sm">Select a vehicle image from your device</p>
                                </div>
                                <input 
                                    type="file" 
                                    wire:model="newImage" 
                                    accept="image/*" 
                                    class="hidden"
                                />
                            </div>
                        </label>
                        @error('newImage') 
                            <div class="flex items-center gap-2 text-red-400 text-sm mt-2">
                                <ion-icon name="alert-circle" class="text-base"></ion-icon>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Image Preview and Add Button -->
                    @if($newImage)
                        <div class="p-4 rounded-lg bg-white/5 border border-white/10">
                            <p class="text-sm font-semibold text-white mb-3">Image Preview</p>
                            <div class="flex flex-col sm:flex-row gap-4 items-start">
                                <img 
                                    src="{{ $newImage->temporaryUrl() }}" 
                                    alt="Preview" 
                                    class="w-full sm:w-48 h-32 object-cover rounded-lg ring-2 ring-green-400/50"
                                />
                                <div class="flex-1 space-y-3">
                                    <p class="text-sm text-slate-300">
                                        Ready to add this image to the gallery
                                    </p>
                                    <div class="flex gap-2">
                                        <button 
                                            type="button" 
                                            wire:click="addImage" 
                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-semibold transition-all duration-200 hover:scale-105"
                                        >
                                            <ion-icon name="checkmark-circle-outline" class="text-lg"></ion-icon>
                                            <span>Add Image</span>
                                        </button>
                                        <button 
                                            type="button" 
                                            wire:click="$set('newImage', null)" 
                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white transition-all duration-200"
                                        >
                                            <ion-icon name="close-circle-outline" class="text-lg"></ion-icon>
                                            <span>Cancel</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Image Gallery -->
                    @if(count($images) > 0)
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-semibold text-white">
                                    Uploaded Images 
                                    <span class="text-green-400">({{ count($images) }}/5)</span>
                                </p>
                                @if(count($images) >= 5)
                                    <span class="text-xs text-green-400 font-medium">Maximum reached</span>
                                @endif
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                                @foreach($images as $index => $image)
                                    <div class="relative group">
                                        <img 
                                            src="{{ str_starts_with($image, '/') || str_starts_with($image, 'http') ? $image : asset('storage/' . $image) }}" 
                                            alt="Vehicle image {{ $index + 1 }}" 
                                            class="w-full h-32 object-cover rounded-lg ring-1 ring-white/10 group-hover:ring-green-400/50 transition-all"
                                        />
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                                            <button 
                                                type="button" 
                                                wire:click="removeImage({{ $index }})" 
                                                class="absolute bottom-2 right-2 p-2 rounded-lg bg-red-500 hover:bg-red-600 text-white transition-all hover:scale-110"
                                                aria-label="Remove image"
                                            >
                                                <ion-icon name="trash-outline" class="text-lg"></ion-icon>
                                            </button>
                                        </div>
                                        @if($index === 0)
                                            <div class="absolute top-2 left-2 px-2 py-1 rounded bg-green-500 text-white text-xs font-semibold">
                                                Primary
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <p class="text-xs text-slate-400">
                                <ion-icon name="information-circle-outline" class="align-middle"></ion-icon>
                                The first image will be used as the primary display image
                            </p>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <ion-icon name="image-outline" class="text-5xl text-slate-500 mb-3"></ion-icon>
                            <p class="text-slate-400 text-sm">No images uploaded yet</p>
                        </div>
                    @endif
                    @error('images') 
                        <div class="flex items-center gap-2 text-red-400 text-sm">
                            <ion-icon name="alert-circle" class="text-base"></ion-icon>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>

            <!-- Form Actions -->
            <div class="glass-panel p-5 sm:p-6 rounded-xl backdrop-blur-xl">
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <button 
                        type="submit" 
                        class="flex-1 inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-lg bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold transition-all duration-200 hover:scale-105 hover:shadow-lg hover:shadow-green-500/30 focus:ring-2 focus:ring-green-400 focus:ring-offset-2 focus:ring-offset-slate-900"
                    >
                        <ion-icon name="save-outline" class="text-xl"></ion-icon>
                        <span>Update Vehicle</span>
                    </button>
                    <a 
                        href="{{ route('admin.vehicles.index') }}" 
                        class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white font-semibold transition-all duration-200 border border-white/10 hover:border-white/20"
                    >
                        <ion-icon name="close-circle-outline" class="text-xl"></ion-icon>
                        <span>Cancel</span>
                    </a>
                </div>
                <p class="text-xs text-slate-400 text-center mt-4">
                    <ion-icon name="shield-checkmark-outline" class="align-middle"></ion-icon>
                    All changes will be saved immediately after submission
                </p>
            </div>
        </form>
    </div>
</div>

