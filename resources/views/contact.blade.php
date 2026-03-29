@extends('layouts.app', ['title' => 'Contact Us - Xplore Cars Imports', 'description' => 'Contact Xplore Cars Imports for Japan car imports, inspection reports, shipping, and customs clearing in Kenya.'])

@section('content')
<div class="page-shell">
    <div class="w-full lg:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
        <!-- Page Header -->
        <div class="text-center mb-12 sm:mb-16 lg:mb-20 max-w-3xl mx-auto">
            <div class="inline-block mb-4 sm:mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-green-500 bg-green-500/10 px-4 py-2 rounded-full">
                    Get In Touch
                </span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight text-black dark:text-white">
                We're Here to Help
            </h1>
            <p class="text-base sm:text-lg lg:text-lg text-black/70 dark:text-white/80 leading-relaxed">
                Have questions about importing a vehicle? Our expert team is available 24/7 to assist you with every step of the process. Reach out and let's start your journey.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Contact Form Section - Spans 2 columns -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-blue-900 rounded-2xl shadow-sm border border-black/10 dark:border-white/10 p-6 sm:p-8 lg:p-10 backdrop-blur-sm">
                    <!-- Form Header -->
                    <div class="mb-8 sm:mb-10">
                        <h2 class="text-2xl sm:text-3xl font-bold text-black dark:text-white mb-2">
                            Send us a Message
                        </h2>
                        <p class="text-sm text-black/60 dark:text-white/70">
                            Fill out the form below and we'll get back to you within 2 hours during business hours.
                        </p>
                    </div>

                    <!-- Success Alert -->
                    @if (session('success'))
                        <div id="success-alert" class="mb-6 p-4 sm:p-5 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-800 rounded-xl flex items-start gap-3 sm:gap-4 animate-in fade-in slide-in-from-top-1 transition-all duration-300">
                            <div class="flex-shrink-0 mt-0.5">
                                <ion-icon name="checkmark-circle" class="text-emerald-600 dark:text-emerald-400 text-2xl"></ion-icon>
                            </div>
                            <div class="flex-1">
                                <p class="text-emerald-900 dark:text-emerald-100 text-sm font-semibold">Message Sent Successfully!</p>
                                <p class="text-emerald-800 dark:text-emerald-200 text-sm mt-1">{{ session('success') }}</p>
                            </div>
                            <button onclick="dismissAlert()" class="flex-shrink-0 text-emerald-600 dark:text-emerald-400 hover:text-emerald-800 dark:hover:text-emerald-200 transition-colors">
                                <ion-icon name="close-outline" class="text-2xl"></ion-icon>
                            </button>
                        </div>
                    @endif

                    <!-- Error Alert -->
                    @if ($errors->any())
                        <div class="mb-6 p-4 sm:p-5 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl">
                            <div class="flex items-start gap-3 sm:gap-4 mb-3">
                                <div class="flex-shrink-0 mt-0.5">
                                    <ion-icon name="alert-circle" class="text-red-600 dark:text-red-400 text-2xl"></ion-icon>
                                </div>
                                <p class="text-red-900 dark:text-red-100 text-sm font-semibold">Please fix the following errors:</p>
                            </div>
                            <ul class="space-y-2 ml-9">
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-700 dark:text-red-300 text-sm flex items-start gap-2">
                                        <span class="text-red-500 font-bold mt-0.5">•</span>
                                        <span>{{ $error }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 sm:space-y-7">
                        @csrf

                        <!-- Two Column Row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-7">
                            <!-- Name Field -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-black dark:text-white mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="John Doe"
                                    required
                                    class="w-full px-4 py-3 sm:py-3.5 rounded-lg border border-black/20 dark:border-black/40 bg-white dark:bg-blue-600 text-black dark:text-white placeholder-black/50 dark:placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200
                                    @error('name') border-red-500 focus:ring-red-500 @enderror"
                                />
                                @error('name')
                                    <p class="mt-2 text-xs font-medium text-red-600 dark:text-red-400 flex items-center gap-1">
                                        <ion-icon name="alert-circle" class="text-sm"></ion-icon>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-black dark:text-white mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="john@example.com"
                                    required
                                    class="w-full px-4 py-3 sm:py-3.5 rounded-lg border border-black/20 dark:border-black/40 bg-white dark:bg-blue-600 text-black dark:text-white placeholder-black/50 dark:placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200
                                    @error('email') border-red-500 focus:ring-red-500 @enderror"
                                />
                                @error('email')
                                    <p class="mt-2 text-xs font-medium text-red-600 dark:text-red-400 flex items-center gap-1">
                                        <ion-icon name="alert-circle" class="text-sm"></ion-icon>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-black dark:text-white mb-2">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="+254 757 356 989"
                                required
                                class="w-full px-4 py-3 sm:py-3.5 rounded-lg border border-black/20 dark:border-black/40 bg-white dark:bg-blue-600 text-black dark:text-white placeholder-black/50 dark:placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200
                                @error('phone') border-red-500 focus:ring-red-500 @enderror"
                            />
                            @error('phone')
                                <p class="mt-2 text-xs font-medium text-red-600 dark:text-red-400 flex items-center gap-1">
                                    <ion-icon name="alert-circle" class="text-sm"></ion-icon>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-black dark:text-white mb-2">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <select
                                id="subject"
                                name="subject"
                                required
                                class="w-full px-4 py-3 sm:py-3.5 rounded-lg border border-black/20 dark:border-black/40 bg-white dark:bg-blue-600 text-black dark:text-white placeholder-black/50 dark:placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 appearance-none cursor-pointer
                                @error('subject') border-red-500 focus:ring-red-500 @enderror"
                                style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 fill=%22none%22 viewBox=%220 0 20 20%22%3E%3Cpath stroke=%22%236B7280%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22 stroke-width=%221.5%22 d=%22M6 8l4 4 4-4%22/%3E%3C/svg%3E'); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em; padding-right: 2.5rem;"
                            >
                                <option value="" disabled selected>Select a subject</option>
                                <option value="Car Inquiry" @if(old('subject') === 'Car Inquiry') selected @endif>Car Inquiry</option>
                                <option value="Inspection Report" @if(old('subject') === 'Inspection Report') selected @endif>Inspection Report</option>
                                <option value="Shipping Question" @if(old('subject') === 'Shipping Question') selected @endif>Shipping Question</option>
                                <option value="General Inquiry" @if(old('subject') === 'General Inquiry') selected @endif>General Inquiry</option>
                            </select>
                            @error('subject')
                                <p class="mt-2 text-xs font-medium text-red-600 dark:text-red-400 flex items-center gap-1">
                                    <ion-icon name="alert-circle" class="text-sm"></ion-icon>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-black dark:text-white mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                placeholder="Tell us more about your inquiry..."
                                required
                                class="w-full px-4 py-3 sm:py-3.5 rounded-lg border border-black/20 dark:border-black/40 bg-white dark:bg-blue-600 text-black dark:text-white placeholder-black/50 dark:placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 resize-none
                                @error('message') border-red-500 focus:ring-red-500 @enderror"
                            >{{ old('message') }}</textarea>
                            <p class="mt-2 text-xs text-blue-500 dark:text-blue-400">Minimum 10 characters</p>
                            @error('message')
                                <p class="mt-2 text-xs font-medium text-red-600 dark:text-red-400 flex items-center gap-1">
                                    <ion-icon name="alert-circle" class="text-sm"></ion-icon>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="w-full py-3 sm:py-3.5 px-6 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 active:scale-95 shadow-md hover:shadow-lg flex items-center justify-center gap-2 group"
                        >
                            <span>Send Message</span>
                            <ion-icon name="send" class="text-lg group-hover:translate-x-1 transition-transform duration-200"></ion-icon>
                        </button>

                        <p class="text-xs text-blue-500 dark:text-blue-400 text-center">
                            We typically respond within 2 hours during business hours.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="lg:col-span-1">
                <div class="space-y-5 sm:space-y-6">
                    <!-- Phone Card -->
                    <div class="group bg-white dark:bg-blue-900 rounded-xl border border-black/10 dark:border-white/10 p-5 sm:p-6 hover:shadow-md transition-all duration-300 backdrop-blur-sm hover:border-green-500/30">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-400 to-green-500 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <ion-icon name="call" class="text-lg text-white"></ion-icon>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-semibold text-black dark:text-white mb-0.5">Call or Text Us</h3>
                                <p class="text-sm font-medium text-green-600 dark:text-green-400 break-all">+254 757 356 989</p>
                                <p class="text-sm text-blue-500 dark:text-blue-400 mt-1.5">Available 24/7</p>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Card -->
                    <div class="group bg-white dark:bg-blue-900 rounded-xl border border-black/10 dark:border-white/10 p-5 sm:p-6 hover:shadow-md transition-all duration-300 backdrop-blur-sm hover:border-green-500/30">
                        <a href="https://wa.me/254757356989" target="_blank" class="flex items-start gap-4 cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <ion-icon name="logo-whatsapp" class="text-lg text-white"></ion-icon>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-semibold text-black dark:text-white mb-0.5">WhatsApp</h3>
                                <p class="text-sm font-medium text-green-600 dark:text-green-400 break-all hover:underline transition-colors">+254 757 356 989</p>
                                <p class="text-sm text-blue-500 dark:text-blue-400 mt-1.5">Chat with us instantly</p>
                            </div>
                        </a>
                    </div>

                    <!-- Email Card -->
                    <div class="group bg-white dark:bg-blue-900 rounded-xl border border-black/10 dark:border-white/10 p-5 sm:p-6 hover:shadow-md transition-all duration-300 backdrop-blur-sm hover:border-green-500/30">
                        <a href="mailto:info@xplorecar.com" class="flex items-start gap-4 cursor-pointer">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <ion-icon name="mail" class="text-lg text-white"></ion-icon>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-semibold text-black dark:text-white mb-0.5">Email</h3>
                                <p class="text-sm font-medium text-green-600 dark:text-green-400 break-all hover:underline transition-colors">info@xplorecar.com</p>
                                <p class="text-sm text-green-500 dark:text-green-400 mt-1.5">Response within 2 hours</p>
                            </div>
                        </a>
                    </div>

                    <!-- Location Card -->
                    <div class="group bg-white dark:bg-blue-900 rounded-xl border border-black/10 dark:border-white/10 p-5 sm:p-6 hover:shadow-md transition-all duration-300 backdrop-blur-sm hover:border-purple-500/30">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <ion-icon name="location" class="text-lg text-white"></ion-icon>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-semibold text-black dark:text-white mb-0.5">Office Location</h3>
                                <p class="text-sm text-black/70 dark:text-white/80 break-words">New Rain, Kenyatta Road, Nairobi</p>
                                <p class="text-sm text-purple-500 dark:text-purple-400 mt-1.5">Visit by appointment</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="group bg-white dark:bg-blue-900 rounded-xl border border-black/10 dark:border-white/10 p-5 sm:p-6 hover:shadow-md transition-all duration-300 backdrop-blur-sm hover:border-indigo-500/30">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <ion-icon name="time" class="text-lg text-white"></ion-icon>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-sm font-semibold text-black dark:text-white mb-2">Business Hours</h3>
                                <div class="space-y-1 text-sm text-black/70 dark:text-white/80">
                                    <p><span class="font-medium">Mon - Fri:</span> 8:00 AM - 6:00 PM</p>
                                    <p><span class="font-medium">Sat - Sun:</span> 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Support Badge -->
                    <div class="bg-gradient-to-br from-green-50 to-orange-50 dark:from-green-900/20 dark:to-orange-900/20 rounded-xl border border-green-200 dark:border-green-800 p-5 sm:p-6">
                        <div class="flex items-start gap-3 sm:gap-4">
                            <div class="text-3xl mt-0.5">⚡</div>
                            <div>
                                <h4 class="text-sm font-semibold text-green-900 dark:text-green-100 mb-1">Quick Support</h4>
                                <p class="text-sm text-green-800 dark:text-green-200 leading-relaxed">Get instant assistance with our WhatsApp support. We're here to help you find the perfect vehicle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Auto-dismiss success alert after 5 seconds
    @if (session('success'))
        setTimeout(() => {
            dismissAlert();
        }, 5000);
    @endif

    function dismissAlert() {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                alert.remove();
            }, 300);
        }
    }
</script>
@endpush

@endsection

