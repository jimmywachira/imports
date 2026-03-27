<!-- Premium Footer Section -->
<footer class="relative w-full bg-linear-to-br from-slate-100 via-white to-slate-100  dark:from-blue-950 dark:via-blue-900 dark:to-blue-800 overflow-hidden transition-colors duration-300">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 bg-green-400/5 dark:bg-green-400/10 rounded-full blur-3xl opacity-30 dark:opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-400/5 dark:bg-blue-400/5 rounded-full blur-3xl opacity-20 dark:opacity-10"></div>
    </div>

    <div class="relative z-10">
        <!-- Main Footer Content -->
        <div class="w-full lg:w-3/4 mx-auto px-3 sm:px-6 lg:px-8 pt-16 sm:pt-20 lg:pt-24 pb-8 sm:pb-12">
            <!-- Top Grid Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-12 mb-12 sm:mb-16">
                <!-- Brand Column -->
                <div class="space-y-6">
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-linear-to-br from-green-400 to-emerald-500 flex items-center justify-center shadow-lg shadow-green-500/20">
                                <ion-icon name="car-sport-outline" class="text-black text-xl"></ion-icon>
                            </div>
                            <div>
                                <p class="text-xl font-bold text-black dark:text-white">Xplore Car</p>
                                <p class="text-xs text-green-500 dark:text-green-400 font-semibold tracking-widest">IMPORTS</p>
                            </div>
                        </div>
                        <p class="text-sm text-black/60 dark:text-white/70 leading-relaxed">
                            Premium Japanese vehicle imports with complete transparency, expert guidance, and KEBS compliance for every customer.
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="flex gap-3 pt-2">
                        <a href="https://www.youtube.com/@Explore254Discover" target="_blank" class="group w-10 h-10 rounded-full bg-black/5 dark:bg-white/10 hover:bg-red-500/20 dark:hover:bg-red-500/30 flex items-center justify-center transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-red-500 dark:hover:border-red-400">
                            <ion-icon name="logo-youtube" class="text-red-600 dark:text-red-400 group-hover:text-red-700 dark:group-hover:text-red-300 text-base"></ion-icon>
                        </a>
                        <a href="https://www.facebook.com/XploreImports" target="_blank" class="group w-10 h-10 rounded-full bg-black/5 dark:bg-white/10 hover:bg-blue-500/20 dark:hover:bg-blue-500/30 flex items-center justify-center transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-blue-500 dark:hover:border-blue-400">
                            <ion-icon name="logo-facebook" class="text-blue-600 dark:text-blue-400 group-hover:text-blue-700 dark:group-hover:text-blue-300 text-base"></ion-icon>
                        </a>
                        <a href="https://wa.me/c/254757356989" target="_blank" class="group w-10 h-10 rounded-full bg-black/5 dark:bg-white/10 hover:bg-green-500/20 dark:hover:bg-green-500/30 flex items-center justify-center transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-green-500 dark:hover:border-green-400">
                            <ion-icon name="logo-whatsapp" class="text-green-600 dark:text-green-400 group-hover:text-green-700 dark:group-hover:text-green-300 text-base"></ion-icon>
                        </a>
                        <a href="https://www.tiktok.com/@explore_254k3" target="_blank" class="group w-10 h-10 rounded-full bg-black/5 dark:bg-white/10 hover:bg-black/20 dark:hover:bg-white/20 flex items-center justify-center transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-black dark:hover:border-white">
                            <ion-icon name="logo-tiktok" class="text-black dark:text-white text-base"></ion-icon>
                        </a>
                        <a href="https://www.instagram.com/xplorecar_imports/" target="_blank" class="group w-10 h-10 rounded-full bg-black/5 dark:bg-white/10 hover:bg-pink-500/20 dark:hover:bg-pink-500/30 flex items-center justify-center transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-pink-500 dark:hover:border-pink-400">
                            <ion-icon name="logo-instagram" class="text-pink-600 dark:text-pink-400 group-hover:text-pink-700 dark:group-hover:text-pink-300 text-base"></ion-icon>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-1 bg-linear-to-r from-green-400 to-emerald-500 rounded-full"></div>
                        <h3 class="text-base sm:text-lg font-bold text-black dark:text-white uppercase tracking-wide">Quick Links</h3>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('cars') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Browse Cars</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimonials') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Testimonials</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-1 bg-linear-to-r from-green-400 to-emerald-500 rounded-full"></div>
                        <h3 class="text-base sm:text-lg font-bold text-black dark:text-white uppercase tracking-wide">Services</h3>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('cars') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Car Importation</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cars') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Inspection Reports</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cars') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Shipping & Clearing</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cars') }}" class="group flex items-center gap-2 text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                                <ion-icon name="chevron-forward-outline" class="text-sm opacity-0 group-hover:opacity-100 transition-opacity -ml-2"></ion-icon>
                                <span class="group-hover:translate-x-1 transition-transform">Vehicle History</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-1 bg-linear-to-r from-green-400 to-emerald-500 rounded-full"></div>
                        <h3 class="text-base sm:text-lg font-bold text-black dark:text-white uppercase tracking-wide">Connect</h3>
                    </div>
                    <div class="space-y-4">
                        <a href="tel:+254757356989" class="group flex items-start gap-3 p-3 rounded-lg bg-black/5 dark:bg-white/10 hover:bg-green-500/20 dark:hover:bg-green-500/20 transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-green-400 dark:hover:border-green-400">
                            <ion-icon name="call-outline" class="text-green-600 dark:text-green-400 shrink-0 mt-0.5 text-lg group-hover:scale-110 transition-transform"></ion-icon>
                            <div class="text-sm">
                                <p class="text-black/60 dark:text-white/70 text-xs uppercase tracking-wider mb-0.5">Phone</p>
                                <p class="text-black dark:text-white font-semibold">+254 757 356 989</p>
                            </div>
                        </a>
                        <a href="mailto:info@xplorecar.com" class="group flex items-start gap-3 p-3 rounded-lg bg-black/5 dark:bg-white/10 hover:bg-green-500/20 dark:hover:bg-green-500/20 transition-all duration-300 border border-black/10 dark:border-white/20 hover:border-green-400 dark:hover:border-green-400">
                            <ion-icon name="mail-outline" class="text-green-600 dark:text-green-400 shrink-0 mt-0.5 text-lg group-hover:scale-110 transition-transform"></ion-icon>
                            <div class="text-sm">
                                <p class="text-black/60 dark:text-white/70 text-xs uppercase tracking-wider mb-0.5">Email</p>
                                <p class="text-black dark:text-white font-semibold">info@xplorecar.com</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-linear-to-r from-transparent via-black/20 dark:via-white/20 to-transparent my-12 sm:my-16"></div>

            <!-- Bottom Section -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8">
                <!-- Copyright -->
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <p class="text-xs sm:text-sm text-black/60 dark:text-white/70">
                        &copy; 2026 Xplore Cars Imports. <br class="hidden sm:block" />All rights reserved.
                    </p>
                </div>

                <!-- Legal Links -->
                <div class="flex gap-4 sm:gap-6 justify-center flex-wrap">
                    <a href="{{ route('privacy') }}" class="group text-xs sm:text-sm text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300 relative">
                        <span>Privacy Policy</span>
                        <div class="h-0.5 bg-green-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left absolute -bottom-1 w-full"></div>
                    </a>
                    <a href="{{ route('terms') }}" class="group text-xs sm:text-sm text-black/60 dark:text-white/70 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300 relative">
                        <span>Terms of Service</span>
                        <div class="h-0.5 bg-green-500 scale-x-0 group-hover:scale-x-100 transition-transform origin-left absolute -bottom-1 w-full"></div>
                    </a>
                </div>

                <!-- Compliance Badge -->
                <div class="flex items-center justify-start sm:justify-end gap-2">
                    <div class="w-8 h-8 rounded-lg bg-green-500/20 flex items-center justify-center border border-green-400/50 dark:border-green-400/50">
                        <ion-icon name="shield-checkmark-outline" class="text-green-600 dark:text-green-400 text-lg"></ion-icon>
                    </div>
                    <p class="text-xs sm:text-sm text-black/60 dark:text-white/70">
                        <span class="text-green-600 dark:text-green-400 font-semibold">KEBS</span> Compliance Verified
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Accent Line -->
        <div class="h-1 bg-linear-to-r from-transparent via-green-400/50 dark:via-green-400/50 to-transparent"></div>
    </div>
</footer>
