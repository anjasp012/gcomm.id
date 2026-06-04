@extends('layouts.layout')

@section('title', 'News & Insights | Gcomm PR Agency Indonesia')
@section('meta_description', 'Latest news, reputation strategies, and crisis communications insight from Gcomm Indonesia.')

@section('content')
<!-- Hero Section -->
<section class="pt-36 pb-24 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30" alt="News & Insights Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Insights</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">ARTIKEL & INSIGHTS</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Tips, strategi, dan cerita di balik layar dari tim pakar komunikasi Gcomm Indonesia.
        </p>
    </div>
</section>

<!-- Blog Section -->
<section class="py-24 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 animate-fade-in">
    <!-- Featured Article (Top Post) -->
    <div class="mb-16">
        <div class="glass p-8 sm:p-12 rounded-3xl bg-white border border-slate-200/60 shadow-xs hover:shadow-md transition-all duration-300">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 flex flex-col gap-4">
                    <div class="flex items-center gap-4 text-xs font-semibold text-accent uppercase tracking-wider">
                        <span class="px-3 py-1 bg-blue-50 text-accent rounded-full">Crisis Communication</span>
                        <span class="text-slate-400">June 4, 2026 &bull; 14 min read</span>
                    </div>
                    <h2 class="font-display font-extrabold text-2xl sm:text-4xl text-slate-900 leading-tight">
                        THE ROLE OF CRISIS COMMUNICATIONS IN THE SOCIAL MEDIA AGE
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
                        Indonesia's rapid digital growth demands instantaneous public containment. We explore how to respond to critical media issues quickly and accurately on digital platforms without setting off public escalations.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-accent hover:text-[#035ab2] transition-colors">
                            Baca Artikel <span class="text-lg">&rarr;</span>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 rounded-2xl overflow-hidden shadow-inner h-64 bg-slate-100 flex items-center justify-center">
                    <!-- SVG Abstract Graphic instead of empty placeholder -->
                    <svg class="w-20 h-20 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 4a2 2 0 012 2v4a2 2 0 01-2 2h-2m-6-12h8m-8 4h8M4 11h.01M4 15h.01" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Regular Grid List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Post 1 -->
        <div class="glass p-8 rounded-3xl bg-white flex flex-col justify-between h-full hover:-translate-y-1 transition-transform duration-300">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3 text-xs font-semibold text-accent uppercase tracking-wider">
                    <span class="px-2 py-0.5 bg-blue-50 text-accent rounded-full">Branding</span>
                    <span class="text-slate-400">May 3, 2026</span>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 group-hover:text-accent transition-colors leading-snug">
                    Personal Branding Strategies for Public Officials
                </h3>
                <p class="text-slate-600 text-sm font-light leading-relaxed typewriter-once" data-speed="22">
                    Building trust and leadership authority in the eyes of citizens by constructing authentic digital narratives and consistent messaging.
                </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-between items-center text-xs text-slate-400">
                <span>11 min read</span>
                <a href="#" class="font-bold text-accent hover:underline">Baca Artikel &rarr;</a>
            </div>
        </div>

        <!-- Post 2 -->
        <div class="glass p-8 rounded-3xl bg-white flex flex-col justify-between h-full hover:-translate-y-1 transition-transform duration-300">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3 text-xs font-semibold text-accent uppercase tracking-wider">
                    <span class="px-2 py-0.5 bg-blue-50 text-accent rounded-full">Digital PR</span>
                    <span class="text-slate-400">May 2, 2026</span>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 group-hover:text-accent transition-colors leading-snug">
                    Measuring PR Campaign Success with Digital Metrics
                </h3>
                <p class="text-slate-600 text-sm font-light leading-relaxed typewriter-once" data-speed="22">
                    Transitioning from basic media clipping tallies to monitoring actual public reach, message sentiment, and conversation conversion.
                </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-between items-center text-xs text-slate-400">
                <span>12 min read</span>
                <a href="#" class="font-bold text-accent hover:underline">Baca Artikel &rarr;</a>
            </div>
        </div>

        <!-- Post 3 -->
        <div class="glass p-8 rounded-3xl bg-white flex flex-col justify-between h-full hover:-translate-y-1 transition-transform duration-300">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3 text-xs font-semibold text-accent uppercase tracking-wider">
                    <span class="px-2 py-0.5 bg-blue-50 text-accent rounded-full">Media Relations</span>
                    <span class="text-slate-400">April 28, 2026</span>
                </div>
                <h3 class="font-display font-bold text-xl text-slate-900 group-hover:text-accent transition-colors leading-snug">
                    The Power of Real-time Media Sentiment Analytics
                </h3>
                <p class="text-slate-600 text-sm font-light leading-relaxed typewriter-once" data-speed="22">
                    How tracking real-time media reports and citizen discussions helps prevent communication failures and containment leaks.
                </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-between items-center text-xs text-slate-400">
                <span>14 min read</span>
                <a href="#" class="font-bold text-accent hover:underline">Baca Artikel &rarr;</a>
            </div>
        </div>
    </div>
</section>
@endsection

