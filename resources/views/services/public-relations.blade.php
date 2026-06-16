@extends('layouts.layout')

@section('title', 'Public Relations & Media Relations | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-20 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30 parallax-img" alt="Service Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Core Expertise</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">PUBLIC RELATIONS</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            PR is our core expertise. We offer various solutions to your public relations matter. We can be your consultant, your partner, your friend to talk about how you build your reputation in public. We build brand visibility and how the media shapes your company.
        </p>
    </div>
</section>

<section class="py-20 max-w-5xl mx-auto px-6">
    <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-10">
        <div class="flex flex-col gap-6 text-slate-600 font-light leading-relaxed text-base sm:text-lg">
            <p>
                We have a lot of experience working with relationships, and we’re confident that our skills can help you achieve success in conversations and even influence public policy. We know how to get along with people and build trust, which is essential for getting your message across and influencing others.
            </p>
            <p>
                Our team of senior level public relations consultants has a wealth of editorial and creative skills that have been honed over years of providing PR services to some of the world’s top businesses and brands. We’re experts at working with both high-growth brands and early-stage companies, and we’re committed to helping them reach their goals.
            </p>
        </div>

        <div class=" ">
            <h2 class="font-display font-extrabold text-3xl text-slate-900 leading-tight mb-8">What We Offer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-slate-600 font-light leading-relaxed text-sm sm:text-base">
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Press Release Dissemination</h3>
                        <p class="text-sm text-slate-500">Writing and spreading news across major local and national media networks.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Strategic Brand Positioning</h3>
                        <p class="text-sm text-slate-500">Crafting a unique voice and angle for your brand in the target market.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Media Relations</h3>
                        <p class="text-sm text-slate-500">Developing strong, ongoing partnerships with journalists and editors.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Brand and Product Launches</h3>
                        <p class="text-sm text-slate-500">Generating initial buzz and news coverage for new product arrivals.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Media Training</h3>
                        <p class="text-sm text-slate-500">Preparing corporate executives for interviews and public appearances.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Press Conference</h3>
                        <p class="text-sm text-slate-500">Managing press events, invites, and media kits from end to end.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 md:col-span-2">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Campaign Ideation</h3>
                        <p class="text-sm text-slate-500">Developing creative, shareable public relation campaigns to amplify reputation.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-4 text-center">
            <a href="/get-in-touch" class="inline-block px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-white bg-accent hover:bg-[#035ab2] transition-colors shadow-lg shadow-accent/20">
                Discuss Your PR Needs &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
