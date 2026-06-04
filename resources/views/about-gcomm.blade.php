@extends('layouts.layout')

@section('title', 'About Gcomm | Gcomm PR Agency Indonesia')
@section('meta_description', 'Founded in 2010, Gcomm is a leading Crisis Communication Specialist & PR Agency in Indonesia. Certified ISO 9001:2018 and registered APPRI member.')

@section('content')
<!-- Hero Section -->
<section class="pt-36 pb-20 relative px-6 overflow-hidden hero-grid bg-slate-950 border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-85" alt="About Gcomm Background">
        <!-- Dark overlay to ensure text readability -->
        <div class="absolute inset-0 bg-slate-950/65"></div>
        <!-- Smooth bottom fade -->
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Who We Are</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">ABOUT US</h1>
        <p class="max-w-3xl mx-auto text-slate-200 text-lg sm:text-xl font-medium tracking-wide italic leading-relaxed">
            "We Lead in Crisis Handling, Built on PR Expertise."
        </p>
    </div>
</section>

<!-- Company History & Profile -->
<section class="py-24 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
    <div class="flex flex-col gap-6 animate-fade-in">
        <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 leading-tight">REPUTATION, INTEGRITY & DIPLOMACY</h2>
        <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
            Founded in 2010, we are a strategic communications agency committed to helping brands manage their reputation—especially in times of crisis. We don’t just do publicity. We shape narratives, protect trust, and turn critical moments into opportunities for clarity and credibility.
        </p>
        <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
            As a Crisis Communication Specialist, we provide rapid, reliable, and strategic solutions when your brand faces unexpected challenges. From media storms to internal disruptions, we help you stay in control, communicate with confidence, and maintain public trust.
        </p>
        <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
            With over a decade of experience, a deep understanding of public perception, and a results-oriented mindset, we work side by side with our clients to build resilience, deliver impact, and create lasting value.
        </p>
    </div>
    
    <!-- Trust Stats -->
    <div class="grid grid-cols-2 gap-6 animate-fade-in">
        <div class="glass p-8 rounded-3xl flex flex-col gap-2 bg-white">
            <span class="font-display font-extrabold text-5xl text-accent">14+</span>
            <span class="text-xs tracking-wider text-slate-500 font-semibold uppercase">Years Active</span>
        </div>
        <div class="glass p-8 rounded-3xl flex flex-col gap-2 bg-white">
            <span class="font-display font-extrabold text-5xl text-accent">100+</span>
            <span class="text-xs tracking-wider text-slate-500 font-semibold uppercase">Successful Campaigns</span>
        </div>
        <div class="glass p-8 rounded-3xl flex flex-col gap-2 bg-white">
            <span class="font-display font-extrabold text-5xl text-slate-800">500+</span>
            <span class="text-xs tracking-wider text-slate-500 font-semibold uppercase">Media Networks</span>
        </div>
        <div class="glass p-8 rounded-3xl flex flex-col gap-2 bg-white">
            <span class="font-display font-extrabold text-5xl text-accent">100%</span>
            <span class="text-xs tracking-wider text-slate-500 font-semibold uppercase">APPRI Commitment</span>
        </div>
    </div>
</section>

<!-- Quality, Certification & Affiliation Showcase -->
<section class="py-16 bg-slate-100/50 border-t border-b border-slate-200/50">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-stretch">
            <!-- ISO Certification -->
            <div class="flex gap-6 p-8 bg-white rounded-3xl border border-slate-200/60 shadow-sm transition-all duration-300 hover:shadow-md">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center text-accent">
                    <!-- Shield/Checkmark SVG -->
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-display font-bold text-xl text-slate-900 mb-2">ISO 9001:2018 Certified</h3>
                    <p class="text-slate-500 text-xs font-semibold mb-3 uppercase tracking-wider">Certificate No: 01900122025</p>
                    <p class="text-slate-600 text-sm font-light leading-relaxed typewriter-once" data-speed="22">
                        Reflects our dedication to quality and consistency across all services, from strategic consulting and public relations to information management and digital communications.
                    </p>
                </div>
            </div>

            <!-- APPRI Membership -->
            <div class="flex gap-6 p-8 bg-white rounded-3xl border border-slate-200/60 shadow-sm transition-all duration-300 hover:shadow-md">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center text-accent">
                    <!-- Users/Verified Association SVG -->
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-display font-bold text-xl text-slate-900 mb-2">APPRI Registered Member</h3>
                    <p class="text-slate-500 text-xs font-semibold mb-3 uppercase tracking-wider">Professional Code & Ethics</p>
                    <p class="text-slate-600 text-sm font-light leading-relaxed typewriter-once" data-speed="22">
                        As a registered member of Asosiasi Perusahaan Public Relations Indonesia, we strictly adhere to professional standards and ethical practices in building trust and diplomacy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specialized Units / Ecosystem -->
<section class="py-24 bg-white border-b border-slate-200/50">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase tracking-widest font-bold text-accent">Our Ecosystem</span>
            <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 mt-2 mb-4">SPECIALIZED UNITS</h2>
            <p class="text-slate-500 text-sm sm:text-base font-light leading-relaxed">
                Beyond our core agency services, we are proud to operate several specialized units that expand the impact of our communication ecosystem.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Unit 1 -->
            <div class="glass p-8 rounded-3xl bg-[#f8fafc]/50 flex flex-col h-full">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-accent mb-6">
                    <!-- Event SVG -->
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 mb-3">Kreasi Milenia</h3>
                <p class="text-slate-600 text-xs sm:text-sm font-light leading-relaxed flex-grow">
                    Our specialist unit for creative and strategic event execution, turning concepts into memorable live experiences.
                </p>
            </div>

            <!-- Unit 2 -->
            <div class="glass p-8 rounded-3xl bg-[#f8fafc]/50 flex flex-col h-full">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-accent mb-6">
                    <!-- Academic SVG -->
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 mb-3">Publikata</h3>
                <p class="text-slate-600 text-xs sm:text-sm font-light leading-relaxed flex-grow">
                    A dedicated platform for public training, corporate communication workshops, and professional development classes.
                </p>
            </div>

            <!-- Unit 3 -->
            <div class="glass p-8 rounded-3xl bg-[#f8fafc]/50 flex flex-col h-full">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-accent mb-6">
                    <!-- Data/Analytics SVG -->
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h2a2 2 0 002-2zm12 0v-3a2 2 0 00-2-2h-2a2 2 0 00-2 2v3a2 2 0 002 2h2a2 2 0 002-2zm0 0v-7a2 2 0 00-2-2h-2a2 2 0 00-2 2v9a2 2 0 002 2h2a2 2 0 002-2z" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 mb-3">G-Riset Data</h3>
                <p class="text-slate-600 text-xs sm:text-sm font-light leading-relaxed flex-grow">
                    Our media monitoring, market research, and analytics team providing crucial intelligence for communications strategies.
                </p>
            </div>

            <!-- Unit 4 -->
            <div class="glass p-8 rounded-3xl bg-[#f8fafc]/50 flex flex-col h-full">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-accent mb-6">
                    <!-- Tech/Code SVG -->
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 mb-3">Gagasan Tech</h3>
                <p class="text-slate-600 text-xs sm:text-sm font-light leading-relaxed flex-grow">
                    IT software house, specialized systems developer, and hardware & software solution provider.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

