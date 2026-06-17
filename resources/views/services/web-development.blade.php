@extends('layouts.layout')

@section('title', 'Web Development & IT Solutions | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-20 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30 parallax-img" alt="Service Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Tech & Software</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">WEB DEVELOPMENT</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Creating and hosting a website from zero to ‘ready to use’ and make your company have a proper website.
        </p>
    </div>
</section>

<section class="py-20 max-w-5xl mx-auto px-6">
    <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-10">
        <div class="flex flex-col gap-6 text-slate-600 font-light leading-relaxed text-base sm:text-lg">
            <p>
                We are experts at web development for more than 10 years, helping so many clients from government, university, and private companies.
            </p>
        </div>

        <div class=" ">
            <h2 class="font-display font-extrabold text-3xl text-slate-900 leading-tight mb-8">What We Offer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-slate-600 font-light leading-relaxed text-sm sm:text-base">
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Visual Design</h3>
                        <p class="text-sm text-slate-500">Creating modern, gorgeous, responsive, and functional design mockups.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Search Engine Optimization</h3>
                        <p class="text-sm text-slate-500">Structuring site hierarchy, loading speeds, and meta tags for high indexing.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Web Development</h3>
                        <p class="text-sm text-slate-500">Coding fast, robust websites from personal landing pages to large institutional portals.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Mobile Apps</h3>
                        <p class="text-sm text-slate-500">Developing mobile-friendly systems and apps to expand access.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-4 text-center">
            <a href="/get-in-touch" class="inline-block px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-white bg-accent hover:bg-[#035ab2] transition-colors shadow-lg shadow-accent/20">
                Start Your Tech Project &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
