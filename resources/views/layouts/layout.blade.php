<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'gcomm.id | PR Agency Indonesia | Integrated Communications')</title>
    <meta name="description" content="@yield('meta_description', 'Gcomm.id is a leading Public Relations & Integrated Communications Agency in Indonesia. We are registered with APPRI and certified with ISO 9001:2018.')">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'gcomm.id | PR Agency Indonesia')">
    <meta property="og:description" content="@yield('meta_description', 'Gcomm.id is a leading Public Relations & Integrated Communications Agency in Indonesia.')">
    <meta property="og:image" content="{{ asset('images/wp-uploads/LOGO-GCOMM-2023.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&family=Syne:wght@700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- GSAP Animation Library + Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R1VMQ0GK33"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R1VMQ0GK33');
</script>
</head>
<body class="bg-[#f8fafc] text-slate-900 font-sans min-h-screen flex flex-col antialiased selection:bg-accent selection:text-white overflow-x-hidden {{ request()->is('/') ? 'home-page' : '' }}">

    <!-- Scroll Progress Bar -->
    <div id="scroll-progress"></div>
    <!-- Cursor glow -->
    <div id="cursor-glow"></div>

    <!-- Header / Navbar -->
    <nav id="main-nav" style="position:fixed;top:0;left:0;right:0;z-index:50;transition:background-color 0.3s ease,backdrop-filter 0.3s ease,border-color 0.3s ease;background-color:transparent;border-bottom:1px solid rgba(226,232,240,0.2);">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center group">
                <img src="{{ asset('images/logo.png') }}" alt="Gcomm Logo" class="h-9 w-auto object-contain">
            </a>
            
            <ul class="hidden md:flex items-center gap-8">
                <li><a href="/" class="text-sm font-medium transition-colors hover:text-accent {{ request()->is('/') ? 'text-accent' : 'text-slate-600' }}">Home</a></li>
                
                <!-- About Us Dropdown -->
                <li class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium transition-colors hover:text-accent cursor-pointer {{ request()->is('about*') ? 'text-accent' : 'text-slate-600' }}">
                        About Us
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 rounded-xl bg-white border border-slate-200/80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2 shadow-xl">
                        <a href="/about-gcomm" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">About Gcomm</a>
                        <a href="/our-experts-behind-the-success" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Our Experts Behind the Success</a>
                        <a href="/corporate-values" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Corporate Values</a>
                        <a href="/our-company-profile" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Our Company Profile</a>
                        <a href="/trusted-brands" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Trusted Brands</a>
                    </div>
                </li>

                <!-- Services Dropdown -->
                <li class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium transition-colors hover:text-accent cursor-pointer {{ request()->is('services*') ? 'text-accent' : 'text-slate-600' }}">
                        Services
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 rounded-xl bg-white border border-slate-200/80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2 shadow-xl">
                        <a href="/public-relations" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Public Relations</a>
                        <a href="/social-media-management" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Social Media Management</a>
                        <a href="/event-organizer" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Event Organizer</a>
                        <a href="/crisis-management" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Crisis Management</a>
                        <a href="/web-development" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Web Development</a>
                        <a href="/personal-branding" class="block px-4 py-2.5 text-xs text-slate-600 hover:text-accent hover:bg-slate-50 transition-colors">Personal Branding</a>
                    </div>
                </li>

                <li><a href="/case-study" class="text-sm font-medium transition-colors hover:text-accent {{ request()->is('case-study') ? 'text-accent' : 'text-slate-600' }}">Case Study</a></li>
                <li><a href="/news" class="text-sm font-medium transition-colors hover:text-accent {{ request()->is('news') ? 'text-accent' : 'text-slate-600' }}">Insight</a></li>
            </ul>

            <div class="hidden md:block">
                <a href="/get-in-touch" class="px-6 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-accent hover:bg-[#035ab2] transition-colors">
                    Get In Touch
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-btn" class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 focus:outline-none" aria-label="Toggle Menu">
                <span class="block w-6 h-0.5 bg-slate-900 transition-transform duration-300" id="hamburger-1"></span>
                <span class="block w-6 h-0.5 bg-slate-900 transition-opacity duration-300" id="hamburger-2"></span>
                <span class="block w-6 h-0.5 bg-slate-900 transition-transform duration-300" id="hamburger-3"></span>
            </button>
        </div>
        
        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200/50 bg-[#f8fafc] px-6 py-6 flex flex-col gap-4">
            <a href="/" class="text-lg font-medium text-slate-700 hover:text-accent">Home</a>
            
            <div class="flex flex-col gap-2">
                <button onclick="toggleMobileDropdown('mobile-about')" class="flex items-center justify-between text-lg font-medium text-slate-700 hover:text-accent w-full text-left">
                    About Us
                    <svg id="icon-mobile-about" class="w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div id="mobile-about" class="hidden flex-col gap-2 mt-2">
                    <a href="/about-gcomm" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; About Gcomm</a>
                    <a href="/our-experts-behind-the-success" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Our Experts Behind the Success</a>
                    <a href="/corporate-values" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Corporate Values</a>
                    <a href="/our-company-profile" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Our Company Profile</a>
                    <a href="/trusted-brands" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Trusted Brands</a>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <button onclick="toggleMobileDropdown('mobile-services')" class="flex items-center justify-between text-lg font-medium text-slate-700 hover:text-accent w-full text-left">
                    Services
                    <svg id="icon-mobile-services" class="w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div id="mobile-services" class="hidden flex-col gap-2 mt-2">
                    <a href="/public-relations" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Public Relations</a>
                    <a href="/social-media-management" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Social Media Management</a>
                    <a href="/event-organizer" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Event Organizer</a>
                    <a href="/crisis-management" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Crisis Management</a>
                    <a href="/web-development" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Web Development</a>
                    <a href="/personal-branding" class="pl-4 text-base text-slate-600 hover:text-accent">&bull; Personal Branding</a>
                </div>
            </div>

            <a href="/case-study" class="text-lg font-medium text-slate-700 hover:text-accent">Case Study</a>
            <a href="/news" class="text-lg font-medium text-slate-700 hover:text-accent">Insight</a>
            <a href="/get-in-touch" class="mt-4 text-center px-6 py-3 rounded-full text-sm font-semibold uppercase tracking-wider text-white bg-accent hover:bg-[#035ab2]">
                Get In Touch
            </a>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#f1f5f9] border-t border-slate-200 py-16">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 grid grid-cols-1 md:grid-cols-12 gap-10">
            <!-- Col 1: About Gcomm -->
            <div class="md:col-span-5 flex flex-col gap-6">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Gcomm Logo" class="h-10 w-auto object-contain">
                </div>
                <p class="text-slate-600 text-sm leading-relaxed max-w-sm">
                    A trusted Public Relations & Integrated Communications Agency that helps government institutions and corporations build outstanding reputation and public credibility since 2010.
                </p>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/appri_member_badge.png') }}" alt="APPRI Member Logo" class="h-10 w-auto object-contain">
                    <img src="{{ asset('images/iso_9001_badge.png') }}" alt="ISO 9001:2018 Certification" class="h-10 w-auto object-contain">
                </div>
                <!-- Social Media Links -->
                <div class="flex items-center gap-4 mt-2">
                    <a href="https://www.instagram.com/gcomm.id/" target="_blank" class="w-8 h-8 rounded-full bg-slate-200 hover:bg-[#046bd2] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="https://www.facebook.com/gcomm.id/" target="_blank" class="w-8 h-8 rounded-full bg-slate-200 hover:bg-[#046bd2] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/g-communicationsindonesia/" target="_blank" class="w-8 h-8 rounded-full bg-slate-200 hover:bg-[#046bd2] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://wa.me/6281284946638?text=Hallo.%20I%20want%20more%20information%20about%20your%20service%21" target="_blank" class="w-8 h-8 rounded-full bg-slate-200 hover:bg-[#25D366] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="WhatsApp">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.457L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.42 9.864-9.852.002-2.63-1.023-5.101-2.885-6.963C16.573 1.928 14.09 1.9 11.996 1.9c-5.44 0-9.866 4.42-9.87 9.852 0 1.957.51 3.865 1.485 5.561L2.6 21.439l3.52-.924l.527.339zm11.233-5.466c-.294-.148-1.743-.86-2.017-.959-.273-.099-.473-.148-.673.148-.2.297-.773.959-.947 1.157-.174.198-.348.223-.642.074-.294-.148-1.242-.458-2.366-1.461-.874-.78-1.464-1.743-1.636-2.04-.173-.297-.018-.458.13-.606.134-.133.294-.347.44-.52.148-.173.197-.297.296-.495.099-.198.05-.371-.025-.52-.075-.148-.673-1.62-.922-2.219-.242-.581-.487-.504-.673-.513l-.57-.011c-.198 0-.52.074-.792.371-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.743-.711 1.991-1.399.248-.688.248-1.278.173-1.399-.074-.12-.272-.22-.566-.37z"/></svg>
                    </a>
                    <a href="mailto:marketing@gcomm.id" class="w-8 h-8 rounded-full bg-slate-200 hover:bg-[#046bd2] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Email">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="md:col-span-3 flex flex-col gap-4">
                <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400">Navigation</h4>
                <ul class="flex flex-col gap-2.5 text-sm text-slate-600">
                    <li><a href="/" class="hover:text-accent transition-colors">Home</a></li>
                    <li><a href="/about-gcomm" class="hover:text-accent transition-colors">About Us</a></li>
                    <li><a href="/case-study" class="hover:text-accent transition-colors">Case Study</a></li>
                    <li><a href="/news" class="hover:text-accent transition-colors">Insight</a></li>
                    <li><a href="/get-in-touch" class="hover:text-accent transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3: Address & Contact Details -->
            <div class="md:col-span-4 flex flex-col gap-4">
                <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400">Gcomm HQ</h4>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Graha G Indonesia<br>
                    Jl. Nusantara No. 166C, Gandul, Cinere District<br>
                    Depok City, West Java 16512
                </p>
                <ul class="flex flex-col gap-2 text-sm text-slate-600 mt-2">
                    <li class="flex items-center gap-2">
                        <span class="text-accent font-medium">E:</span> marketing@gcomm.id
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-accent font-medium">P:</span> +62 821-1444-1699
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-12 pt-8 border-t border-slate-200 flex flex-col justify-center items-center text-center text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} gcomm.id. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 z-[90] flex flex-col gap-4 items-end pointer-events-none">
        <!-- Back to Top Button -->
        <button id="back-to-top" class="w-14 h-14 flex items-center justify-center rounded-full bg-accent text-white shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-[#035ab2] hover:shadow-xl focus:outline-none animate-bounce" aria-label="Back to top">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/6281284946638?text=Hallo.%20I%20want%20more%20information%20about%20your%20service%21" target="_blank" class="w-14 h-14 flex items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg pointer-events-auto transition-all duration-300 hover:scale-110 hover:shadow-xl animate-float focus:outline-none" aria-label="Chat with us on WhatsApp">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.457L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.42 9.864-9.852.002-2.63-1.023-5.101-2.885-6.963C16.573 1.928 14.09 1.9 11.996 1.9c-5.44 0-9.866 4.42-9.87 9.852 0 1.957.51 3.865 1.485 5.561L2.6 21.439l3.52-.924.527.339zm11.233-5.466c-.294-.148-1.743-.86-2.017-.959-.273-.099-.473-.148-.673.148-.2.297-.773.959-.947 1.157-.174.198-.348.223-.642.074-.294-.148-1.242-.458-2.366-1.461-.874-.78-1.464-1.743-1.636-2.04-.173-.297-.018-.458.13-.606.134-.133.294-.347.44-.52.148-.173.197-.297.296-.495.099-.198.05-.371-.025-.52-.075-.148-.673-1.62-.922-2.219-.242-.581-.487-.504-.673-.513l-.57-.011c-.198 0-.52.074-.792.371-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.743-.711 1.991-1.399.248-.688.248-1.278.173-1.399-.074-.12-.272-.22-.566-.37z"/></svg>
        </a>
    </div>

    <!-- Mobile Menu + Navbar Sticky + Cursor + Scroll Bar -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            var h1 = document.getElementById('hamburger-1');
            var h2 = document.getElementById('hamburger-2');
            var h3 = document.getElementById('hamburger-3');
            
            if(menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                h1.style.transform = 'rotate(45deg) translate(5px, 5px)';
                h2.style.opacity = '0';
                h3.style.transform = 'rotate(-45deg) translate(6px, -6px)';
            } else {
                menu.classList.add('hidden');
                h1.style.transform = 'none';
                h2.style.opacity = '1';
                h3.style.transform = 'none';
            }
        });

        function toggleMobileDropdown(id) {
            var el = document.getElementById(id);
            var icon = document.getElementById('icon-' + id);
            if(el.classList.contains('hidden')) {
                el.classList.remove('hidden');
                el.classList.add('flex');
                icon.style.transform = 'rotate(180deg)';
            } else {
                el.classList.add('hidden');
                el.classList.remove('flex');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // ── Navbar sticky ────────────────────────────────────────
        const nav = document.getElementById('main-nav');
        function handleScroll() {
            if (window.scrollY > 20) {
                nav.style.backgroundColor = 'rgba(248,250,252,0.92)';
                nav.style.backdropFilter = 'blur(16px)';
                nav.style.webkitBackdropFilter = 'blur(16px)';
                nav.style.borderBottomColor = 'rgba(226,232,240,0.6)';
                nav.classList.add('nav-scrolled');
            } else {
                nav.style.backgroundColor = 'transparent';
                nav.style.backdropFilter = 'none';
                nav.style.webkitBackdropFilter = 'none';
                nav.style.borderBottomColor = 'rgba(226,232,240,0.2)';
                nav.classList.remove('nav-scrolled');
            }
        }
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();

        // ── Scroll progress bar ──────────────────────────────────
        const progressBar = document.getElementById('scroll-progress');
        window.addEventListener('scroll', function() {
            const scrolled = window.scrollY;
            const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
            if (maxScroll > 0) progressBar.style.transform = 'scaleX(' + (scrolled / maxScroll) + ')';
        }, { passive: true });

        // ── Back to Top Button ───────────────────────────────────
        const backToTopBtn = document.getElementById('back-to-top');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 400) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
            }
        }, { passive: true });
        
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ── Cursor glow (desktop only) ───────────────────────────
        if (window.innerWidth > 768) {
            const glow = document.getElementById('cursor-glow');
            let glowX = 0, glowY = 0, rafId;
            glow.style.cssText = 'position:fixed;pointer-events:none;z-index:9997;width:360px;height:360px;border-radius:50%;background:radial-gradient(circle,rgba(4,107,210,0.10) 0%,transparent 70%);transform:translate(-50%,-50%);top:0;left:0;transition:opacity 0.3s;';

            document.addEventListener('mousemove', function(e) {
                glowX = e.clientX;
                glowY = e.clientY;
                cancelAnimationFrame(rafId);
                rafId = requestAnimationFrame(function() {
                    glow.style.left = glowX + 'px';
                    glow.style.top  = glowY + 'px';
                });
            });
            document.addEventListener('mouseleave', function() { glow.style.opacity = '0'; });
            document.addEventListener('mouseenter', function() { glow.style.opacity = '1'; });
        }
    </script>
</body>
</html>
