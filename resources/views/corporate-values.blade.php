@extends('layouts.layout')

@section('title', 'Corporate Values | Gcomm PR Agency Indonesia')
@section('meta_description', 'Discover the core values that guide Gcomm PR Agency: Professionalism, Good Communication, and Religious Values.')

@section('content')
<!-- Hero Section -->
<section class="pt-36 pb-20 relative px-6 overflow-hidden hero-grid bg-slate-950 border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-85" alt="Values Background">
        <!-- Dark overlay to ensure text readability -->
        <div class="absolute inset-0 bg-slate-950/65"></div>
        <!-- Smooth bottom fade -->
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Core Philosophy</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">CORPORATE VALUES</h1>
        <p class="max-w-3xl mx-auto text-blue-300 text-lg sm:text-xl font-medium tracking-wide italic leading-relaxed">
            “Trust, Professionalism, and Integrity are at the heart of everything we do.”
        </p>
    </div>
</section>

<!-- Values Grid -->
<section class="py-24 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 animate-fade-in">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Value 1: Professionalism -->
        <div class="glass p-8 rounded-3xl bg-white flex flex-col items-start gap-6">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-accent">
                <!-- Target/Dartboard SVG -->
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
            </div>
            <h3 class="font-display font-bold text-2xl text-slate-900">Professionalism</h3>
            <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
                We always stay focused on achieving targets, delivering the best service, and continuously growing together.
            </p>
        </div>

        <!-- Value 2: Good Communication -->
        <div class="glass p-8 rounded-3xl bg-white flex flex-col items-start gap-6">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-accent">
                <!-- Chat Bubbles SVG -->
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </div>
            <h3 class="font-display font-bold text-2xl text-slate-900">Good Communication</h3>
            <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
                We believe in the importance of compliance, politeness, and a spirit of sharing to build positive relationships.
            </p>
        </div>

        <!-- Value 3: Religious Values -->
        <div class="glass p-8 rounded-3xl bg-white flex flex-col items-start gap-6">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-accent">
                <!-- Heart/Compassion SVG -->
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </div>
            <h3 class="font-display font-bold text-2xl text-slate-900">Religious Values</h3>
            <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
                We value timely responses, strong relationships, and a caring attitude in helping one another.
            </p>
        </div>
    </div>
</section>
@endsection

