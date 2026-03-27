<!-- Main Navigation -->
<nav class="sticky top-0 z-100 w-full bg-linear-to-br from-slate-100 via-white to-slate-100  dark:from-blue-950 dark:via-blue-900 dark:to-blue-800 backdrop-blur-xl shadow-lg p-2">
<!-- Top Contact Bar -->
<div class="w-full lg:w-3/4 text-green-500 mx-auto mb-2 px-3 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-end gap-2 sm:gap-6 py-2 text-xs sm:text-sm">
            <a href="tel:+254757356989" class="flex items-center gap-2 hover:text-white transition-colors group">
                <ion-icon name="call-outline" class="text-base group-hover:scale-110 transition-transform"></ion-icon>
                <span class="font-medium">+254 757 356 989</span>
            </a>
            <a href="mailto:info@xplorecar.com" class="flex items-center gap-2 hover:text-white transition-colors group">
                <ion-icon name="mail-outline" class="text-base group-hover:scale-110 transition-transform"></ion-icon>
                <span class="font-medium">info@xplorecar.com</span>
            </a>
        </div>
</div>

    <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18 gap-4">
            <!-- Logo -->
            <a href="{{ route('cars') }}" class="flex items-center gap-2 shrink-0">
                <div class="h-9 w-9 rounded-full bg-linear-to-br from-green-400 to-green-500 flex items-center justify-center shadow-md">
                    <ion-icon name="car-sport-outline" class="text-black text-lg"></ion-icon>
                </div>
                <div class="leading-tight">
                    <p class="text-base sm:text-lg lg:text-xl font-extrabold text-black dark:text-white">Xplore Cars Imports</p>
                </div>
            </a>

            <!-- Desktop Links -->
            <div class="hidden lg:flex items-center gap-1 rounded-full border border-black/10 dark:border-white/10 bg-black/5 dark:bg-white/5 px-4 py-2">
                <a href="{{ route('cars') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('cars') ? 'bg-green-400 text-black shadow-sm' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">Browse Cars</a>
                <a href="{{ route('about') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('about') ? 'bg-green-400 text-black shadow-sm' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">About</a>
                <a href="{{ route('testimonials') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('testimonials') ? 'bg-green-400 text-black shadow-sm' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">Testimonials</a>
                <a href="{{ route('contact') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('contact') ? 'bg-green-400 text-black shadow-sm' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">Contact</a>
            </div>

            <!-- Desktop Actions -->
            <div class="hidden md:flex items-center gap-2 shrink-0">
                <button
                    id="theme-toggle"
                    type="button"
                    class="h-10 w-10 rounded-full border border-black/10 dark:border-white/10 bg-black/5 dark:bg-white/5 text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors"
                    aria-label="Toggle theme"
                >
                    <ion-icon data-theme-icon name="moon-outline" class="text-lg"></ion-icon>
                </button>

                @auth
                    <span class="hidden xl:inline-flex items-center gap-2 px-3 py-2 rounded-full text-xs font-semibold uppercase tracking-[0.15em] text-black/60 dark:text-white/70 bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10">
                        <ion-icon name="person-circle-outline" class="text-sm"></ion-icon>
                        {{ Auth::user()->name }}
                    </span>
                    
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="inline-flex items-center gap-2 px-3 py-2 rounded-xl text-sm font-medium text-black dark:text-white hover:text-red-500 hover:bg-red-500/10 transition-colors">
                            <ion-icon name="log-out-outline" class="text-base"></ion-icon>
                            <span class="hidden xl:inline">Logout</span>
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 rounded-xl transition-colors">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold rounded-xl bg-green-400 text-black hover:bg-green-500 transition-colors">Register</a>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-btn"
                class="md:hidden h-10 w-10 rounded-xl border border-black/10 dark:border-white/10 bg-black/5 dark:bg-white/5 text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors flex items-center justify-center"
                aria-label="Toggle menu"
                aria-expanded="false"
            >
                <ion-icon name="menu" class="text-2xl"></ion-icon>
            </button>
        </div>

        @auth
            <!-- Admin Sub Navigation -->
            <div class="hidden md:flex items-center justify-between gap-3 border-black/10 dark:border-white/10 py-3">
                <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.18em] text-black/60 dark:text-white/70">
                    <ion-icon name="shield-checkmark-outline" class="text-sm text-green-400"></ion-icon>
                    Admin Navigation
                </div>
                <div class="flex items-center gap-2">
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">
                        <ion-icon name="speedometer-outline" class="text-base"></ion-icon>
                        Dashboard
                    </a>
                    <a href="{{ route('admin.vehicles.index') }}" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.vehicles.*') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">
                        <ion-icon name="car-outline" class="text-base"></ion-icon>
                        Manage Vehicles
                    </a>
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('profile.edit') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">
                        <ion-icon name="settings-outline" class="text-base"></ion-icon>
                        Settings
                    </a>
                </div>
            </div>
        @endauth

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-black/10 dark:border-white/10 py-3 space-y-1">
            <button
                id="theme-toggle-mobile"
                type="button"
                class="w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors"
                aria-label="Toggle theme"
            >
                <ion-icon data-theme-icon name="moon-outline" class="align-middle mr-2"></ion-icon>
                Toggle Theme
            </button>

            <a href="{{ route('cars') }}" class="block px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('cars') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">Browse Cars</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('about') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">About</a>
            <a href="{{ route('testimonials') }}" class="block px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('testimonials') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">Testimonials</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('contact') ? 'bg-green-400 text-black' : 'text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10' }}">Contact</a>

            @auth
                <div class="pt-2 mt-2 border-t border-black/10 dark:border-white/10">
                    <p class="px-4 py-2 text-xs uppercase tracking-[0.2em] text-black/50 dark:text-white/60">{{ Auth::user()->name }}</p>
                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 rounded-xl text-sm font-medium text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <ion-icon name="speedometer-outline" class="align-middle mr-2"></ion-icon>
                        Dashboard
                    </a>
                    <a href="{{ route('admin.vehicles.index') }}" class="block px-4 py-3 rounded-xl text-sm font-medium text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <ion-icon name="car-outline" class="align-middle mr-2"></ion-icon>
                        Manage Vehicles
                    </a>
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-3 rounded-xl text-sm font-medium text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <ion-icon name="settings-outline" class="align-middle mr-2"></ion-icon>
                        Settings
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-black dark:text-white hover:text-red-500 hover:bg-red-500/10 transition-colors">
                            <ion-icon name="log-out-outline" class="align-middle mr-2"></ion-icon>
                            Logout
                        </button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="pt-2 mt-2 border-t border-black/10 dark:border-white/10">
                    <a href="{{ route('login') }}" class="block px-4 py-3 rounded-xl text-sm font-medium text-black dark:text-white hover:bg-black/10 dark:hover:bg-white/10 transition-colors">
                        <ion-icon name="log-in-outline" class="align-middle mr-2"></ion-icon>
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="block px-4 py-3 rounded-xl text-sm font-semibold bg-green-400 text-black hover:bg-green-500 transition-colors">
                        <ion-icon name="person-add-outline" class="align-middle mr-2"></ion-icon>
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>
</nav>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', (!isExpanded).toString());
            });

            mobileMenu.querySelectorAll('a, button[type="submit"]').forEach((element) => {
                element.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }
    });
</script>
