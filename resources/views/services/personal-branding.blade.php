@extends('layouts.layout')

@section('title', 'Personal Branding | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-20 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30 parallax-img" alt="Service Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Executive Reputation</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">PERSONAL BRANDING</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            We help individuals become brands with purpose. In today’s digital and hyper-connected world, how you present yourself matters as much as what you do.
        </p>
    </div>
</section>

<section class="py-20 max-w-5xl mx-auto px-6">
    <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-10">
        <div class="flex flex-col gap-6 text-slate-600 font-light leading-relaxed text-base sm:text-lg">
            <p>
                Our Personal Branding service is designed to build your public image strategically—so you’re not just seen, but remembered. Whether you’re a corporate leader, public figure, creative professional, or entrepreneur, we help define your unique voice, craft your narrative, and ensure consistency across platforms.
            </p>
            <p>
                From visual identity and communication style to media presence and thought leadership—we align your personal values with public perception. Because personal branding is not about being someone else. It’s about being authentically you—with clarity, confidence, and strategy.
            </p>
        </div>

        <div class=" ">
            <h2 class="font-display font-extrabold text-3xl text-slate-900 leading-tight mb-8">What We Offer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-slate-600 font-light leading-relaxed text-sm sm:text-base">
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Narrative Crafting</h3>
                        <p class="text-sm text-slate-500">Defining your authentic voice and structuring your unique career narrative.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Visual Identity & Communication</h3>
                        <p class="text-sm text-slate-500">Aligning visual elements and communication style to establish visual presence.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Media Presence</h3>
                        <p class="text-sm text-slate-500">Securing relevant press coverage and public interview opportunities.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Thought Leadership</h3>
                        <p class="text-sm text-slate-500">Positioning your knowledge base across digital platforms and publications.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-4 text-center">
            <a href="/contact-us" class="inline-block px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-white bg-accent hover:bg-[#035ab2] transition-colors shadow-lg shadow-accent/20">
                Elevate Your Personal Brand &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
