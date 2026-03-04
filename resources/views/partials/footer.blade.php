<footer class="bg-slate-100 border-t border-slate-200 text-slate-700 py-8 sm:py-12 dark:bg-gradient-to-r dark:from-blue-950 dark:to-blue-900 dark:border-blue-800 dark:text-blue-100">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 mb-8 sm:mb-12">
            <!-- Brand -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-yellow-300 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-blue-900 font-bold text-lg">X</span>
                    </div>
                    <span class="text-lg sm:text-xl font-bold">Xplore</span>
                </div>
                <p class="text-slate-500 text-xs sm:text-sm dark:text-blue-400">Premium Japanese car imports with full transparency and KEBS compliance.</p>
                <div class="flex gap-2 sm:gap-3">
                    <a href="https://www.youtube.com/@Explore254Discover" class="w-10 h-10 hover:bg-green-400 rounded-full flex items-center justify-center transition dark:bg-blue-800 text-sm sm:text-base">
                        <ion-icon size="large" class="text-red-600" name="logo-youtube"></ion-icon>
                    </a>
                    <a href="https://www.facebook.com/XploreImports" class="w-10 h-10  hover:bg-green-400 rounded-full flex items-center justify-center transition dark:bg-blue-800 text-sm sm:text-base">
                        <ion-icon size="large" class="text-blue-600" name="logo-facebook"></ion-icon>
                    </a>
                    <a href="https://wa.me/c/254757356989" class="w-10 h-10 bg-slate-200 hover:bg-green-400 rounded-full flex items-center justify-center transition dark:bg-blue-800 text-sm sm:text-base">
                        <ion-icon size="large" class="text-green-500" name="logo-whatsapp"></ion-icon>
                    </a>
                    <a href="https://www.tiktok.com/@explore_254k3?_t=ZM-90qsd8mGmTo&_r=1" class="w-10 h-10  hover:bg-green-400 rounded-full flex items-center justify-center transition dark:bg-blue-800 text-sm sm:text-base">
                        <ion-icon size="large" class="text-black" name="logo-tiktok"></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/xplorecar_imports/" class="w-10 h-10  hover:bg-green-400 rounded-full flex items-center justify-center transition dark:bg-blue-800 text-sm sm:text-base">
                        <ion-icon size="large" class="text-pink-600" name="logo-instagram"></ion-icon>
                    </a>  
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="font-semibold text-base sm:text-lg"> Quick Links </h3>
                <ul class="space-y-2 text-sm sm:text-base">
                    {{-- <li><a href="{{ route('cars') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Browse Cars</a></li> --}}
                    <li><a href="{{ route('about') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">About Us</a></li>
                    <li><a href="{{ route('advisory') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Advisory</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="space-y-4">
                <h3 class="font-semibold text-base sm:text-lg">Services</h3>
                <ul class="space-y-2 text-sm sm:text-base">
                    <li><a href="{{ route('importation') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Car Importation</a></li>
                    <li><a href="{{ route('inspection') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Inspection Reports</a></li>
                    <li><a href="{{ route('shipping') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Shipping & Clearing</a></li>
                    <li><a href="{{ route('history') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Vehicle History</a></li>
                    <li><a href="{{ route('tradein') }}" class="text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400 line-clamp-1">Trade-In Program</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="space-y-4">
                <h3 class="font-semibold text-base sm:text-lg">Contact Info</h3>
                <ul class="space-y-2 sm:space-y-3 text-slate-600 dark:text-blue-300 text-sm sm:text-base">
                    <li class="flex items-start gap-2 sm:gap-3">
                        <ion-icon name="call-outline" class="text-green-400 flex-shrink-0 mt-0.5 text-base sm:text-lg"></ion-icon>
                        <span class="line-clamp-2">+254 757 356 989</span>
                    </li>
                    <li class="flex items-start gap-2 sm:gap-3">
                        <ion-icon name="mail-outline" class="text-green-400 flex-shrink-0 mt-0.5 text-base sm:text-lg"></ion-icon>
                        <a href="mailto:info@xplorecar.com" class="line-clamp-2 text-slate-600 hover:text-green-500 transition dark:text-blue-300 dark:hover:text-green-400">info@xplorecar.com</a>
                    </li>
                    <li class="flex items-start gap-2 sm:gap-3">
                        <ion-icon name="location-outline" class="text-green-400 flex-shrink-0 mt-0.5 text-base sm:text-lg"></ion-icon>
                        <span class="line-clamp-1">New Rain, along Kenyatta Road - Nairobi</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-slate-200 pt-6 sm:pt-8 dark:border-blue-800">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 text-xs sm:text-sm text-slate-500 dark:text-blue-400">
                <p class="line-clamp-1">&copy; 2026 Xplore Car Imports. All rights reserved.</p>
                <div class="flex gap-2 sm:gap-4 justify-start sm:justify-center flex-wrap">
                    <a href="{{ route('privacy') }}" class="hover:text-green-400 transition line-clamp-1">Privacy Policy</a>
                    <a href="{{ route('terms') }}" class="hover:text-green-400 transition line-clamp-1">Terms of Service</a>
                </div>
                <p class="line-clamp-1 text-xs lg:text-right">KEBS 8-Year Compliance Verified</p>
            </div>
        </div>
    </div>
</footer>
