@extends('layouts.layout')

@section('title', 'Social Media Management | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-20 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30 parallax-img" alt="Service Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Digital Content</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">SOCIAL MEDIA MANAGEMENT</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Every platform matters. Instagram, TikTok, Twitter, Facebook, Youtube media you should start to choose as your branding strategy.
        </p>
    </div>
</section>

<section class="py-20 max-w-5xl mx-auto px-6">
    <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-10">
        <div class="flex flex-col gap-6 text-slate-600 font-light leading-relaxed text-base sm:text-lg">
            <p>
                Social media has become the largest platform to share information, therefore skill of social media management is necessary. If you don’t have time and resources, G-Communications is willing to help and fulfill your lack.
            </p>
            <p>
                We assist from zero to something great. We arrange the concept of your social media, branding, what content will fit with your image, and how we create content that is shareable and getting more attention from your target audiences. At the end, you will get more engagement and escalate your brand awareness through social media.
            </p>
        </div>

        <div class=" ">
            <h2 class="font-display font-extrabold text-3xl text-slate-900 leading-tight mb-8">What We Offer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-slate-600 font-light leading-relaxed text-sm sm:text-base">
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Concept & Branding</h3>
                        <p class="text-sm text-slate-500">Arranging a creative concept that perfectly fits your corporate brand identity.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Content Creation</h3>
                        <p class="text-sm text-slate-500">Creating shareable, eye-catching visual content to grab audience attention.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Audience Engagement</h3>
                        <p class="text-sm text-slate-500">Building positive relationship loops and interactions with your followers.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Brand Awareness Escalation</h3>
                        <p class="text-sm text-slate-500">Driving targeted metrics to expand reach across digital platforms.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-4 text-center">
            <a href="/contact-us" class="inline-block px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-white bg-accent hover:bg-[#035ab2] transition-colors shadow-lg shadow-accent/20">
                Discuss Your Digital Strategy &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
