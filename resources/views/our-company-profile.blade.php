@extends('layouts.layout')

@section('title', 'Our Company Profile | Gcomm PR Agency Indonesia')
@section('meta_description', 'Download the official Gcomm Company Profile (PDF) to learn about our services, crisis communications expertise, and client portfolio.')

@section('content')
<!-- Hero Section -->
<section class="pt-36 pb-20 relative px-6 overflow-hidden hero-grid bg-slate-950 border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-85" alt="Company Profile Background">
        <!-- Dark overlay to ensure text readability -->
        <div class="absolute inset-0 bg-slate-950/65"></div>
        <!-- Smooth bottom fade -->
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Credentials</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">OUR COMPANY PROFILE</h1>
        <p class="max-w-2xl mx-auto text-slate-200 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Gain deeper insights into our communication ecosystems, crisis management methodologies, and expert networks.
        </p>
    </div>
</section>

<!-- Download & Document Details Section -->
<section class="py-24 max-w-5xl mx-auto px-6 animate-fade-in">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
        <!-- PDF Icon/Visual (Left Column) -->
        <div class="md:col-span-5 flex justify-center">
            <div class="relative w-64 h-80 rounded-2xl bg-white border border-slate-200/80 shadow-xl flex flex-col justify-between p-8 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <!-- Decorative Red Tag like PDF -->
                <div class="absolute top-0 right-0 bg-[#ea4335] text-white px-4 py-1.5 text-[10px] font-bold uppercase tracking-wider rounded-bl-xl shadow-md">
                    PDF Document
                </div>
                
                <div class="mt-8 flex flex-col gap-2">
                    <!-- File Icon -->
                    <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center text-[#ea4335]">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="font-display font-extrabold text-lg text-slate-800 leading-snug mt-4">GCOMM.id Company Profile</span>
                    <span class="text-xs text-slate-400">Published: 2025</span>
                </div>
                
                <!-- Download Prompt inside card -->
                <a href="{{ asset('documents/COMPANY-PROFILE_GCOMM.id_2025.pdf') }}" target="_blank" class="w-full text-center py-3 bg-[#ea4335] text-white text-xs font-semibold uppercase tracking-wider rounded-xl hover:bg-[#d63225] transition-colors">
                    Preview PDF
                </a>
            </div>
        </div>

        <!-- Document Description & Download Button (Right Column) -->
        <div class="md:col-span-7 flex flex-col gap-6">
            <h2 class="font-display font-extrabold text-3xl text-slate-900 leading-tight">DOWNLOAD OFFICIAL CREDENTIALS</h2>
            <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
                Our complete company profile offers an extensive overview of Gcomm's operational units, standards of communication, and our proprietary crisis containment frameworks. It is designed to provide BUMN leaders, corporate councils, and ministries with a comprehensive blueprint of how we construct public relations campaigns.
            </p>
            
            <div class="flex flex-col gap-3 border-l-2 border-accent pl-4 my-2">
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-widest">What's Inside</span>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2 text-sm text-slate-600 font-light">
                    <li class="flex items-center gap-2">&bull; Corporate History & Structure</li>
                    <li class="flex items-center gap-2">&bull; Crisis Management Systems</li>
                    <li class="flex items-center gap-2">&bull; PR & Communication Models</li>
                    <li class="flex items-center gap-2">&bull; ISO 9001:2018 Standards</li>
                    <li class="flex items-center gap-2">&bull; Active Client Case Studies</li>
                    <li class="flex items-center gap-2">&bull; Strategic Operations & Units</li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 mt-4">
                <a href="{{ asset('documents/COMPANY-PROFILE_GCOMM.id_2025.pdf') }}" target="_blank" class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full text-sm font-semibold uppercase tracking-wider text-white bg-accent hover:bg-[#035ab2] transition-colors shadow-lg hover:shadow-xl">
                    <!-- Download SVG Icon -->
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download Company Profile
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
