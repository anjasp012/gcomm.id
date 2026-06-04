@extends('layouts.layout')

@section('title', 'Get in Touch | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-24 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30" alt="Get in Touch Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Get in Touch</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">LET'S START A CONVERSATION</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Our communications analysts are ready to help you manage narratives, mitigate crisis, or design premium campaigns.
        </p>
    </div>
</section>

<!-- Contact Form & Info Grid -->
<section class="py-20 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12">
    <!-- Col 1: Contact details -->
    <div class="lg:col-span-5 flex flex-col gap-8">
        <div class="flex flex-col gap-2">
            <span class="text-xs uppercase tracking-widest font-bold text-accent">Office Address</span>
            <h2 class="font-display font-bold text-2xl text-slate-900">Graha G Indonesia</h2>
            <p class="text-slate-600 text-sm sm:text-base font-light leading-relaxed typewriter-once" data-speed="22">
                Jl. Nusantara No. 166C, Gandul, Kec. Cinere,<br>
                Depok City, West Java 16512
            </p>
        </div>

        <div class="flex flex-col gap-4 text-slate-600">
            <div class="flex items-center gap-4 py-3 border-b border-slate-200">
                <span class="text-xs font-bold uppercase tracking-wider text-accent w-16">Email</span>
                <span class="text-sm">marketing@gcomm.id</span>
            </div>
            <div class="flex items-center gap-4 py-3 border-b border-slate-200">
                <span class="text-xs font-bold uppercase tracking-wider text-accent w-16">Phone</span>
                <span class="text-sm">+62 821-1444-1699</span>
            </div>
            <div class="flex items-center gap-4 py-3 border-b border-slate-200">
                <span class="text-xs font-bold uppercase tracking-wider text-accent w-16">WhatsApp</span>
                <span class="text-sm">+62 819-1402-2594</span>
            </div>
        </div>

        <!-- Quick Chat Button -->
        <a href="https://wa.me/6282114441699" target="_blank" class="text-center px-6 py-4 rounded-full text-sm font-semibold uppercase tracking-wider text-white bg-[#25D366] hover:bg-[#1ebd59] transition-colors shadow-md">
            Connect via WhatsApp
        </a>
    </div>

    <!-- Col 2: Interactive Contact Form -->
    <div class="lg:col-span-7 glass p-8 sm:p-10 rounded-3xl bg-white">
        <h3 class="font-display font-bold text-2xl text-slate-900 mb-6">SEND A MESSAGE</h3>
        
        <form class="flex flex-col gap-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label for="name" class="text-xs font-semibold uppercase tracking-wider text-slate-500">Full Name</label>
                    <input type="text" id="name" placeholder="e.g. John Doe" class="w-full px-4 py-3 bg-[#f8fafc] border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:border-accent">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="institution" class="text-xs font-semibold uppercase tracking-wider text-slate-500">Institution / Company</label>
                    <input type="text" id="institution" placeholder="e.g. Ministry / BUMN / Corp" class="w-full px-4 py-3 bg-[#f8fafc] border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:border-accent">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label for="email" class="text-xs font-semibold uppercase tracking-wider text-slate-500">Email Address</label>
                    <input type="email" id="email" placeholder="e.g. john@instansi.go.id" class="w-full px-4 py-3 bg-[#f8fafc] border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:border-accent">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="phone" class="text-xs font-semibold uppercase tracking-wider text-slate-500">Phone Number / WA</label>
                    <input type="text" id="phone" placeholder="e.g. +628123456789" class="w-full px-4 py-3 bg-[#f8fafc] border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:border-accent">
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="message" class="text-xs font-semibold uppercase tracking-wider text-slate-500">Your Inquiry / Message Brief</label>
                <textarea id="message" rows="5" placeholder="Tell us about your strategic communications brief or reputation requirements..." class="w-full px-4 py-3 bg-[#f8fafc] border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:border-accent"></textarea>
            </div>

            <button type="submit" class="w-full px-6 py-4 bg-accent hover:bg-[#035ab2] transition-colors rounded-full text-sm font-semibold uppercase tracking-wider text-white shadow-md">
                Send Brief &rarr;
            </button>
        </form>
    </div>
</section>
@endsection
