@extends('layouts.layout')

@section('title', 'gcomm.id | PR Agency Indonesia | Integrated Communications')

@section('content')
<!-- Hero Section with Background Video (Light Mode / Dark Hero) -->
<section class="relative min-h-[110vh] flex flex-col justify-between items-center text-center px-6 overflow-hidden hero-grid pt-32 pb-16 bg-[#f8fafc]">
    <!-- Background Video -->
    <div class="absolute inset-0 z-0 overflow-hidden bg-slate-950">
        <video autoplay loop api="true" muted playsinline class="w-full h-full object-cover opacity-85 scale-110 transition-transform duration-700">
            <source src="{{ asset('videos/header.mp4') }}" type="video/mp4">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200" class="w-full h-full object-cover" alt="PR Agency Gcomm Background">
        </video>
        <!-- Dark overlay to ensure text readability -->
        <div class="absolute inset-0 bg-slate-950/65"></div>
        <!-- Smooth bottom gradient fade to transition into the light body section -->
        <div class="absolute inset-x-0 bottom-0 h-72 z-10 pointer-events-none" style="background: linear-gradient(to top, #ffffff 0%, rgba(255, 255, 255, 0.5) 50%, transparent 100%);"></div>
    </div>
 
    <!-- Hero Content (Spora layout with Gcomm Copy) -->
    <div class="max-w-5xl mx-auto z-10 flex flex-col items-center">
        <!-- Subtitle badge -->
        <span class="hero-badge opacity-0 inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-white/20 bg-white/5 text-white text-xs font-semibold uppercase tracking-widest mb-8">
            <span class="w-1.5 h-1.5 rounded-full bg-accent animate-ping"></span>
            Public Relations & Reputation Architect
        </span>
 
        <!-- Main Headline (Gcomm Tagline with GSAP reveal wrappers) -->
        <h1 class="font-display font-extrabold text-4xl sm:text-7xl leading-[1.2] tracking-tight text-white mb-8 max-w-4xl uppercase text-center">
            <div class="overflow-hidden relative block h-fit">
                <span class="hero-title-line inline-block translate-y-[110%]">BUILDING TRUST.</span>
            </div>
            <div class="overflow-hidden relative block h-fit">
                <span class="hero-title-line inline-block translate-y-[110%] text-transparent bg-clip-text bg-gradient-to-r from-accent via-blue-400 to-accent">PROVIDING VALUE.</span>
            </div>
        </h1>
 
        <!-- Short Description (Gcomm Mission) -->
        <p class="hero-desc opacity-0 translate-y-4 max-w-3xl text-slate-300 text-base sm:text-lg font-light leading-relaxed mb-12 typewriter-once" data-speed="18" data-delay="1100">
            We focus on empowering institutions, brands, and individuals by turning aspirations and ideas into tangible outcomes. We specialize in shaping narratives, protecting reputations, and fostering clarity and credibility.
        </p>
 
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <a href="/get-in-touch" class="hero-btn opacity-0 translate-y-4 w-full sm:w-auto px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-white bg-accent hover:bg-[#035ab2] transition-all shadow-lg shadow-accent/25 shimmer">
                Free Consultation
            </a>
            <a href="/case-study" class="hero-btn opacity-0 translate-y-4 w-full sm:w-auto px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-slate-200 border border-white/30 hover:border-white/70 hover:text-white transition-all">
                Case Studies &rarr;
            </a>
        </div>
    </div>

    <!-- Inline Client Marquee -->
    <div class="w-full z-10 py-10 overflow-hidden relative mt-16 md:mt-24">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex flex-col md:flex-row items-center gap-6">
            <!-- Marquee Track Wrapper -->
            <div class="flex-grow overflow-hidden relative flex items-center w-full">
                
                <div class="animate-marquee flex items-center gap-8 py-2">
                    @for ($i = 0; $i < 2; $i++)
                    <div class="flex items-center gap-4">
                        @for ($j = 1; $j <= 15; $j++)
                        <div class="flex-shrink-0 w-36 h-20 bg-white rounded-xl border border-slate-100 flex items-center justify-center p-0.5 hover:scale-105 hover:shadow-xs transition-all duration-300">
                            <img src="{{ asset('images/client_logo_' . $j . '.png') }}" alt="Client Logo {{ $j }}" class="max-w-full max-h-full object-contain">
                        </div>
                        @endfor
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 bg-white">
    <div class="flex flex-col gap-4 mb-16 reveal">
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
        <div class="glass tilt-card p-8 rounded-3xl flex flex-col gap-6 group bg-white justify-between min-h-[320px]">
            <div class="flex flex-col gap-4">
                <span class="text-xs font-semibold text-accent uppercase tracking-widest">/01 &bull; GCOMM PR</span>
                <h3 class="font-display font-bold text-2xl text-slate-900 group-hover:text-accent transition-colors">PR & Reputation</h3>
                <p class="text-slate-500 text-sm font-light leading-relaxed">
                    Strategic public relations, diseminasi press release to 500+ national media networks, media monitoring, and crisis mitigation control.
                </p>
            </div>
            <img src="{{ asset('images/logo.png') }}" alt="Gcomm PR" class="h-11 w-auto object-contain self-start grayscale group-hover:grayscale-0 transition-all opacity-60 group-hover:opacity-100">
        </div>

        <!-- Unit 2 -->
        <div class="glass tilt-card p-8 rounded-3xl flex flex-col gap-6 group bg-white justify-between min-h-[320px]">
            <div class="flex flex-col gap-4">
                <span class="text-xs font-semibold text-accent uppercase tracking-widest">/02 &bull; KREASI MILENIA</span>
                <h3 class="font-display font-bold text-2xl text-slate-900 group-hover:text-accent transition-colors">Event & Live Stream</h3>
                <p class="text-slate-500 text-sm font-light leading-relaxed">
                    Planning and executing hybrid MICE events, offline conventions, media gatherings, and full stage production scaling from local to international levels.
                </p>
            </div>
            <img src="{{ asset('images/kreasi_logo.png') }}" alt="Kreasi Milenia" class="h-11 w-auto object-contain self-start grayscale group-hover:grayscale-0 transition-all opacity-60 group-hover:opacity-100">
        </div>

        <!-- Unit 3 -->
        <div class="glass tilt-card p-8 rounded-3xl flex flex-col gap-6 group bg-white justify-between min-h-[320px]">
            <div class="flex flex-col gap-4">
                <span class="text-xs font-semibold text-accent uppercase tracking-widest">/03 &bull; SINEMARCH & TECH</span>
                <h3 class="font-display font-bold text-2xl text-slate-900 group-hover:text-accent transition-colors">IT & Media Analytics</h3>
                <p class="text-slate-500 text-sm font-light leading-relaxed">
                    Empowered by Gagasan Tech for software/web development and Smart Monalisa for media monitoring tools and public relations insights.
                </p>
            </div>
            <div class="flex items-center gap-4 self-start">
                <img src="{{ asset('images/gagasan_logo.png') }}" alt="Gagasan Tech" class="h-11 w-auto object-contain grayscale group-hover:grayscale-0 transition-all opacity-60 group-hover:opacity-100">
                <img src="{{ asset('images/division_3.png') }}" alt="Sinemarch" class="h-11 w-auto object-contain grayscale group-hover:grayscale-0 transition-all opacity-60 group-hover:opacity-100">
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Showcase (Spora Case Study style) -->
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="flex items-center justify-between mb-16 reveal">
            <div>
                <span class="text-xs uppercase tracking-widest font-bold text-accent">Selected Case Studies</span>
                <h2 class="font-display font-extrabold text-4xl sm:text-5xl text-slate-900 mt-2">CAMPAIGNS & INTEGRATED PR</h2>
            </div>
            <a href="/case-study" class="text-sm font-semibold text-slate-500 hover:text-accent transition-colors">See All &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal-stagger">
            <!-- Case Study 1 -->
            <a href="/case-study?tab=social" class="glass rounded-3xl overflow-hidden flex flex-col h-full bg-white group hover:-translate-y-1 transition-all duration-300">
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-sosmedmanagement.jpg" alt="Kementerian Luar Negeri RI" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-grow">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">Social Media</span>
                    <hr class="border-slate-100 my-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 leading-tight">Disseminating Digital Diplomacy</h3>
                </div>
            </a>

            <!-- Case Study 2 -->
            <a href="/case-study?tab=social" class="glass rounded-3xl overflow-hidden flex flex-col h-full bg-white group hover:-translate-y-1 transition-all duration-300">
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-sosmedmanagement-ombudsman.jpg" alt="Ombudsman Republik Indonesia" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-grow">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">Social Media</span>
                    <hr class="border-slate-100 my-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 leading-tight">Public Service Complaints Channels</h3>
                </div>
            </a>

            <!-- Case Study 3 -->
            <a href="/case-study?tab=social" class="glass rounded-3xl overflow-hidden flex flex-col h-full bg-white group hover:-translate-y-1 transition-all duration-300">
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-29.jpg" alt="SKK Migas" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-grow">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">Social Media</span>
                    <hr class="border-slate-100 my-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 leading-tight">Upstream Oil & Gas Engagement</h3>
                </div>
            </a>

            <!-- Case Study 4 -->
            <a href="/case-study?tab=crisis" class="glass rounded-3xl overflow-hidden flex flex-col h-full bg-white group hover:-translate-y-1 transition-all duration-300">
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-20-1-1.jpg" alt="PT Semen Indonesia Tbk" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-grow">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">Crisis & Reputation</span>
                    <hr class="border-slate-100 my-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 leading-tight">Positive Corporate Campaign Strategy</h3>
                </div>
            </a>

            <!-- Case Study 5 -->
            <a href="/case-study?tab=research" class="glass rounded-3xl overflow-hidden flex flex-col h-full bg-white group hover:-translate-y-1 transition-all duration-300">
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-20-1-768x384.jpg" alt="Bank Syariah Indonesia" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-grow">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">Media Research</span>
                    <hr class="border-slate-100 my-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 leading-tight">Sharia Merger Sentiment Analysis</h3>
                </div>
            </a>

            <!-- Case Study 6 -->
            <a href="/case-study?tab=research" class="glass rounded-3xl overflow-hidden flex flex-col h-full bg-white group hover:-translate-y-1 transition-all duration-300">
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-34-1-1.jpg" alt="PT Profesional Telekomunikasi Indonesia" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="p-6 flex flex-col gap-3 flex-grow">
                    <span class="text-xs font-semibold text-accent uppercase tracking-widest">Media Research</span>
                    <hr class="border-slate-100 my-1">
                    <h3 class="font-display font-bold text-lg text-slate-900 leading-tight">Infrastructure Issues Mapping</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Trust Badge / ISO Section -->
<section class="py-20 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 text-center">
    <div class="max-w-2xl mx-auto flex flex-col items-center gap-6 reveal">
        <h2 class="font-display font-bold text-3xl text-slate-900">ACCREDITED & CERTIFIED REPUTATION</h2>
        <p class="text-slate-500 text-sm font-light leading-relaxed typewriter-once" data-speed="20">
            As part of our commitment to quality communication services, Gcomm Indonesia is a registered member of APPRI (Asosiasi Perusahaan Public Relations Indonesia) and holds the ISO 9001:2018 certification for Quality Management.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-8 mt-4 reveal-stagger">
            <div class="glass px-6 py-4 rounded-2xl flex items-center gap-4 bg-white shimmer">
                <img src="{{ asset('images/appri_member_badge.png') }}" alt="APPRI Member Logo" class="h-12 w-auto object-contain">
                <div class="text-left">
                    <span class="text-xs font-bold uppercase tracking-widest text-accent block">APPRI Member</span>
                    <span class="text-slate-400 text-[10px]">Official Association</span>
                </div>
            </div>
            <div class="glass px-6 py-4 rounded-2xl flex items-center gap-4 bg-white shimmer">
                <img src="{{ asset('images/iso_9001_badge.png') }}" alt="ISO 9001:2018 Certification" class="h-12 w-auto object-contain">
                <div class="text-left">
                    <span class="text-xs font-bold uppercase tracking-widest text-accent block">ISO 9001:2018</span>
                    <span class="text-slate-400 text-[10px]">Quality Management Certified</span>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
