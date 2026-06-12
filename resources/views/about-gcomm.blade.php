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

<section class="bg-white">
    <div class="py-24 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="flex flex-col justify-center gap-4 mb-16 reveal">
            <div>
                <span class="text-xs uppercase tracking-widest font-bold text-accent">Strategic Divisions</span>
                <h2 class="font-display font-extrabold text-4xl sm:text-5xl text-slate-900 mt-2">OUR SPECIALIZED DIVISIONS</h2>
            </div>
            <p class="max-w-2xl text-slate-500 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="20">
                Operating specialized business units under Gcomm to provide holistic communication, event execution, IT software solutions, and training programs.
            </p>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 reveal-stagger">
            <!-- Unit 1 -->
            <div class="glass tilt-card p-8 rounded-3xl flex flex-col gap-6 group bg-white justify-between">
                <div class="flex flex-col gap-4">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">/01</span>
                    <h3 class="font-display font-bold text-2xl text-slate-900 group-hover:text-accent transition-colors">PR & Reputation</h3>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">
                        Strategic public relations, diseminasi press release to 500+ national media networks, media monitoring, and crisis mitigation control.
                    </p>
                </div>
                 </div>
    
            <!-- Unit 2 -->
            <div class="glass tilt-card p-8 rounded-3xl flex flex-col gap-6 group bg-white justify-between">
                <div class="flex flex-col gap-4">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">/02</span>
                    <h3 class="font-display font-bold text-2xl text-slate-900 group-hover:text-accent transition-colors">Event & Live Stream</h3>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">
                        Planning and executing hybrid MICE events, offline conventions, media gatherings, and full stage production scaling from local to international levels.
                    </p>
                </div>
            </div>
    
            <!-- Unit 3 -->
            <div class="glass tilt-card p-8 rounded-3xl flex flex-col gap-6 group bg-white justify-between">
                <div class="flex flex-col gap-4">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">/03</span>
                    <h3 class="font-display font-bold text-2xl text-slate-900 group-hover:text-accent transition-colors">IT & Media Analytics</h3>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">
                        Empowered by software/web development and Smart Monalisa for media monitoring tools and public relations insights.
                    </p>
                </div>
             </div>
        </div>
    </div>
</section>  
@endsection

