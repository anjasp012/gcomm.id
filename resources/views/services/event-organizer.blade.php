@extends('layouts.layout')

@section('title', 'Event Organizer & Live Production | Gcomm PR Agency Indonesia')

@section('content')
<section class="pt-36 pb-20 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30 parallax-img" alt="Service Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">MICE & Execution</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">EVENT ORGANIZER</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Events could be your branding strategy and give many insights to your company. We have experienced holding an event on so many levels. Local, national, and international events, we are ready to help!
        </p>
    </div>
</section>

<section class="py-20 max-w-5xl mx-auto px-6">
    <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-10">
        <div class="flex flex-col gap-6 text-slate-600 font-light leading-relaxed text-base sm:text-lg">
            <p>
                We organize every event based on your request. Plan, arrange, promote, and execute events in the most creative way. We are also open to discussion, ideation, and collaborations from every client. Because we understand that to make a wonderful event, we need cooperation from you as our client, and us, as the executor.
            </p>
            <p>
                With our online-offline preparation scheme, you can enjoy preparing your event no matter where you are. You can track everything online, meet people and vendors online, and schedule offline meetings if needed. It’s simple, easy, and flexible for everyone!
            </p>
        </div>

        <div class=" ">
            <h2 class="font-display font-extrabold text-3xl text-slate-900 leading-tight mb-8">What We Offer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-slate-600 font-light leading-relaxed text-sm sm:text-base">
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Gala Dinner</h3>
                        <p class="text-sm text-slate-500">Creating spectacular corporate and private evening events.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">MICE</h3>
                        <p class="text-sm text-slate-500">Meetings, Incentives, Conferences, and Exhibitions planning and management.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Product Launch</h3>
                        <p class="text-sm text-slate-500">Exciting, high-impact product launches that generate news coverage.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Company’s Event</h3>
                        <p class="text-sm text-slate-500">Corporate team gatherings, employee events, and anniversary celebrations.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Government’s Event</h3>
                        <p class="text-sm text-slate-500">Strictly planned official protocols, launches, and seminars.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Hybrid Event</h3>
                        <p class="text-sm text-slate-500">Seamless integration of offline locations with interactive online audiences.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 md:col-span-2">
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-sm">✓</span>
                    <div>
                        <h3 class="font-display font-bold text-lg text-slate-900 mb-1">Live Streaming</h3>
                        <p class="text-sm text-slate-500">HD multi-camera broadcasting and staging support.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-4 text-center">
            <a href="/contact-us" class="inline-block px-8 py-4 rounded-full text-xs font-bold uppercase tracking-widest text-white bg-accent hover:bg-[#035ab2] transition-colors shadow-lg shadow-accent/20">
                Plan Your Next Event &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
