@extends('layouts.layout')

@section('title', 'Our Experts Behind the Success | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-20 relative px-6 overflow-hidden hero-grid bg-slate-950 border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-85" alt="Our Experts Background">
        <!-- Dark overlay to ensure text readability -->
        <div class="absolute inset-0 bg-slate-950/65"></div>
        <!-- Smooth bottom fade -->
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Core Team</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">OUR EXPERTS BEHIND THE SUCCESS</h1>
        <p class="max-w-2xl mx-auto text-slate-200 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Backed by highly dedicated consultants, social media specialists, media relation leads, and digital marketing experts driving communications excellence.
        </p>
    </div>
</section>

<section class="py-20 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex justify-center">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px]">
        @foreach ($experts as $expert)
                <div class="group relative flex w-[280px] h-[400px] bg-black rounded-[20px] overflow-hidden items-end justify-center transition-all duration-300 ease-out shadow-lg hover:shadow-2xl">
            <!-- Background Profile Image -->
            <div class="absolute -inset-5 w-[320px] h-[440px] bg-cover bg-center bg-no-repeat transition-all duration-500 ease-out group-hover:scale-105" style="background-image: url('{{ \Illuminate\Support\Facades\Storage::url($expert->image) }}')"></div>
            <!-- Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-86 group-hover:opacity-35 transition-all duration-300 ease-out"></div>
            <!-- Text Content -->
            <div class="p-4 w-full text-center relative z-10 translate-y-[-15px] group-hover:translate-y-0 transition-transform duration-500 ease-out">
                <h3 class="text-white text-[18px] font-medium mt-2 text-center font-display">{{ $expert->name }}</h3>
                <p class="text-[#f1a41d] text-[16px] font-normal italic mt-0 text-center">{{ $expert->role }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
