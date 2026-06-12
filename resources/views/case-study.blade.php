@extends('layouts.layout')

@section('title', 'Case Studies & Success Stories | Gcomm PR Agency Indonesia')

@section('content')
<!-- Hero Case Studies -->
<section class="pt-36 pb-20 relative px-6 overflow-hidden bg-slate-950">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-30 parallax-img" alt="Case Studies Background">
        <div class="absolute inset-0 bg-slate-950/[1%]"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Proven Results</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">CASE STUDIES & SUCCESS STORIES</h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Discover how we build brand visibility, protect corporate reputations, and analyze media sentiment for leading Indonesian institutions and corporations.
        </p>
    </div>
</section>

<!-- Tabs & Case Studies Section -->
<section class="py-20 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12" x-data="{ activeTab: new URLSearchParams(window.location.search).get('tab') || 'social' }">
    <!-- Category Tabs Navigation -->
    <div class="flex flex-wrap justify-center gap-4 mb-16">
        <button 
            @click="activeTab = 'social'"
            :class="activeTab === 'social' ? 'bg-[#2d56a3] text-white' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-200'"
            class="px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300 shadow-md cursor-pointer"
        >
            Social Media Management
        </button>
        <button 
            @click="activeTab = 'crisis'"
            :class="activeTab === 'crisis' ? 'bg-[#2d56a3] text-white' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-200'"
            class="px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300 shadow-md cursor-pointer"
        >
            Crisis & Reputation Management
        </button>
        <button 
            @click="activeTab = 'research'"
            :class="activeTab === 'research' ? 'bg-[#2d56a3] text-white' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-200'"
            class="px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300 shadow-md cursor-pointer"
        >
            Media Research
        </button>
    </div>

    <!-- Case Studies Container -->
    <div>
        <!-- TAB: SOCIAL MEDIA MANAGEMENT -->
        <div x-show="activeTab === 'social'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="flex flex-col gap-8">
            <!-- Project 1: SKK Migas -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-6">
                <!-- Header -->
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-accent">SKK Migas</span>
                    <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Upstream Oil & Gas Industries</h2>
                </div>
                <!-- Photo Grid: 3 boxes side by side -->
                <div class="grid grid-cols-3 gap-4">
                    <a href="https://www.instagram.com/p/DYONKT7GAkm/?img_index=1" target="_blank" class="block overflow-hidden rounded-2xl shadow-md hover:scale-[1.03] hover:shadow-xl transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/image-29.jpg') }}" alt="SKK Migas 1" class="w-full aspect-square object-cover">
                    </a>
                    <a href="https://www.instagram.com/p/DWxUEUAD82t/" target="_blank" class="block overflow-hidden rounded-2xl shadow-md hover:scale-[1.03] hover:shadow-xl transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/image-30.jpg') }}" alt="SKK Migas 2" class="w-full aspect-square object-cover">
                    </a>
                    <a href="https://www.instagram.com/reel/DT1-6H6Ehcz/" target="_blank" class="block overflow-hidden rounded-2xl shadow-md hover:scale-[1.03] hover:shadow-xl transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/image-31.jpg') }}" alt="SKK Migas 3" class="w-full aspect-square object-cover">
                    </a>
                </div>
                <!-- Description -->
                <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                    <p>
                        <strong>Description:</strong> Satuan Kerja Khusus Pelaksana Kegiatan Usaha Hulu Minyak dan Gas Bumi (SKK Migas) is tasked with managing upstream oil and gas business activities in Indonesia under Cooperation Contracts (KKS). Our primary focus is to transform complex industrial data into human-centric narratives to boost public engagement and strengthen societal trust.
                    </p>
                    <p>
                        <strong>Scope of Work:</strong> We managed SKK Migas's multi-platform digital ecosystem (including Instagram, Facebook, Twitter/X, Threads, YouTube, and TikTok). Enhancing two-way interaction through digital activation (such as interactive quizzes and 'Temu Netizen' community gatherings), managing live on-site coverage, and optimizing targeted digital ads.
                    </p>
                    <!-- Social Media Channels -->
                    <div class="flex items-center gap-3 mt-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mr-1">Official Channels:</span>
                        <a href="https://www.instagram.com/humasskkmigas/" target="_blank" class="w-8 h-8 rounded-full bg-[#f1f5f9] hover:bg-[#2d56a3] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://x.com/humasskkmigas" target="_blank" class="w-8 h-8 rounded-full bg-[#f1f5f9] hover:bg-[#2d56a3] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Twitter">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Key Results -->
                <div class="border-t border-slate-100 pt-6">
                    <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3">Key Results Summary</span>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="text-3xl font-display font-black text-[#0d81c8] block">118.201</span>
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Instagram Follower Growth</span>
                        </div>
                        <div>
                            <span class="text-3xl font-display font-black text-[#0d81c8] block">650K+</span>
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Peak single-month performance</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2: Ditjen Amerop -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">Ditjen Amerop Kementerian Luar Negeri</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Government & Public Diplomacy</h2>
                       
                           
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> The Directorate General of American and European Affairs (Ditjen Amerop) is a strategic component of the Ministry of Foreign Affairs of the Republic of Indonesia. Our primary focus is to elevate Indonesia's digital diplomacy by translating complex geopolitical updates, bilateral agreements and diplomatic engagements into engaging, visually striking, and high-impact digital narratives.
                            </p>
                            <p>
                                <strong>Scope of Work:</strong> We enhanced Ditjen Amerop’s digital diplomacy and public outreach across the American and European regions by conducting in-depth research and strategic editorial planning aligned with Indonesia's foreign policy objectives.
                            </p>
                            <!-- Social Media Channels -->
                            <div class="flex items-center gap-3 mt-2">
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mr-1">Official Channels:</span>
                                <a href="https://www.instagram.com/ditjen_amerop/" target="_blank" class="w-8 h-8 rounded-full bg-[#f1f5f9] hover:bg-[#2d56a3] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Instagram">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3">Key Results Summary</span>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <span class="text-3xl font-display font-black text-[#0d81c8] block">3.162</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Instagram Follower Growth</span>
                            </div>
                            <div>
                                <span class="text-3xl font-display font-black text-[#0d81c8] block">3.45%</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Peak engagement rate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                    <a href="https://www.instagram.com/p/DYrCI1WGph0/?img_index=1" target="_blank" class="block overflow-hidden rounded-2xl shadow hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/img-casestudy-sosmedmanagement.jpg') }}" alt="Ditjen Amerop 1" class="w-full h-full object-cover aspect-square">
                    </a>
                    <a href="https://www.instagram.com/p/DYFtD8pEVrI/?img_index=1" target="_blank" class="block overflow-hidden rounded-2xl shadow hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/img-casestudy-media-kemenlu-1.jpg') }}" alt="Ditjen Amerop 2" class="w-full h-full object-cover aspect-square">
                    </a>
                    <a href="https://www.instagram.com/reel/DLCUqw6hiDW/" target="_blank" class="block overflow-hidden rounded-2xl shadow hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/img-casestudy-media-kemenlu-2.jpg') }}" alt="Ditjen Amerop 3" class="w-full h-full object-cover aspect-square">
                    </a>
                    <a href="https://www.instagram.com/ditjen_amerop/" target="_blank" class="block overflow-hidden rounded-2xl shadow hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('images/wp-uploads/img-casestudy-media-kemenlu-3.jpg') }}" alt="Ditjen Amerop 4" class="w-full h-full object-cover aspect-square">
                    </a>
                </div>
            </div>

            <!-- Project 3: Kemhan RI -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-accent">Kementerian Pertahanan Republik Indonesia (Kemhan RI)</span>
                    <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Government, National Security & Public Affairs</h2>
                       <div class="grid grid-cols-3 gap-4 mb-6">
                    <a href="" target="_blank" class="block overflow-hidden rounded-2xl shadow-md hover:scale-[1.03] hover:shadow-xl transition-all duration-300">
                        <img src="/images/kementerian.webp" alt="SKK Migas 1" class="w-full aspect-square object-cover">
                    </a>
                    <a href="" target="_blank" class="block overflow-hidden rounded-2xl shadow-md hover:scale-[1.03] hover:shadow-xl transition-all duration-300">
                        <img src="/images/kementerian2.webp" alt="SKK Migas 2" class="w-full aspect-square object-cover">
                    </a>
                    <a href="" target="_blank" class="block overflow-hidden rounded-2xl shadow-md hover:scale-[1.03] hover:shadow-xl transition-all duration-300">
                        <img src="/images/kementerian3.webp" alt="SKK Migas 3" class="w-full aspect-square object-cover">
                    </a>
                </div>
                    <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                        <p>
                            <strong>Description:</strong> The Ministry of Defense of the Republic of Indonesia (Kemhan RI) is responsible for national defense management, military readiness, and safeguarding the country's sovereignty. Our primary focus is to elevate Kemhan’s digital landscape by translating complex national security updates into clear, high-impact, and trusted public narratives.
                        </p>
                        <p>
                            <strong>Scope of Work:</strong> We optimized Kemhan RI’s digital ecosystem and public outreach by developing a comprehensive communication framework aligned with national defense priorities. Our team managed strategic content production and executed meticulous media monitoring to track public sentiment.
                        </p>
                        <!-- Social Media Channels -->
                        <div class="flex items-center gap-3 mt-2">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mr-1">Official Channels:</span>
                            <a href="https://www.instagram.com/kemhanri/" target="_blank" class="w-8 h-8 rounded-full bg-[#f1f5f9] hover:bg-[#2d56a3] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Instagram">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            <a href="https://x.com/kemhan_ri" target="_blank" class="w-8 h-8 rounded-full bg-[#f1f5f9] hover:bg-[#2d56a3] hover:text-white flex items-center justify-center text-slate-600 transition-all duration-300" aria-label="Twitter">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-slate-100 pt-6 mt-4">
                    <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3 font-display">Key Results Summary</span>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="text-3xl font-display font-black text-[#0d81c8] block">684,830</span>
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Instagram Follower Growth</span>
                        </div>
                        <div>
                            <span class="text-3xl font-display font-black text-[#0d81c8] block">2.7M</span>
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Peak Content Reach</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4: Ombudsman -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">Ombudsman Republik Indonesia</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Optimizing Public Service Complaints Channels</h2>
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> Ombudsman RI supervises the implementation of public services across state administrators, BUMN, and private bodies assigned to administer public facilities. They aimed to share daily supervisory updates and gather public complaints directly via social networks.
                            </p>
                            <p>
                                <strong>Problem:</strong> The public remained largely unaware of how to file complaints about inadequate public services. Optimization was required to educate citizens on the Ombudsman's vital supervisory role and function.
                            </p>
                        </div>
                    </div>
                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3">Key Results Summary</span>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            <div>
                                <span class="text-2xl font-display font-black text-[#0d81c8] block">+21,924</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Instagram Followers</span>
                            </div>
                            <div>
                                <span class="text-2xl font-display font-black text-[#0d81c8] block">1.28M+</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">IG Impressions</span>
                            </div>
                            <div>
                                <span class="text-2xl font-display font-black text-[#0d81c8] block">+34,424</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Twitter Followers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 grid grid-cols-3 gap-4">
                    <img src="{{ asset('images/wp-uploads/img-casestudy-sosmedmanagement-ombudsman.jpg') }}" alt="Ombudsman CS 1" class="col-span-3 w-full h-48 object-cover rounded-2xl shadow">
                    <img src="{{ asset('images/wp-uploads/image-27.jpg') }}" alt="Ombudsman CS 2" class="col-span-1.5 w-full h-32 object-cover rounded-2xl shadow">
                    <img src="{{ asset('images/wp-uploads/image-28.jpg') }}" alt="Ombudsman CS 3" class="col-span-1.5 w-full h-32 object-cover rounded-2xl shadow">
                </div>
            </div>

        </div>

        <!-- TAB: CRISIS & REPUTATION MANAGEMENT -->
        <div x-show="activeTab === 'crisis'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="flex flex-col gap-8">
            <!-- Project 1: Semen Indonesia -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">PT Semen Indonesia (Persero) Tbk (SIG)</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Positive Campaign Strategy</h2>
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> PT Semen Indonesia Tbk is the largest state-owned cement manufacturer and holding company in Indonesia. They sought to bolster corporate reputation and manage key industry conversations.
                            </p>
                            <p>
                                <strong>Our Strategy:</strong> We structured a comprehensive positive campaign framework, driving custom content production to highlight corporate responsibility, sustainability, and market leadership metrics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                    <img src="{{ asset('images/wp-uploads/image-20-1-1.jpg') }}" alt="SIG CS 1" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                    <img src="{{ asset('images/wp-uploads/image-35.jpg') }}" alt="SIG CS 2" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                </div>
            </div>

            <!-- Project 2: IPB University -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white flex flex-col gap-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-accent">IPB University</span>
                    <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Sentiment & Issue Monitoring</h2>
                    <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                        <p>
                            <strong>Description:</strong> IPB University is a leading state agricultural university in Bogor, Indonesia. To protect academic prestige and public credibility, they required real-time analysis of digital conversations and news media sentiments.
                        </p>
                        <p>
                            <strong>Strategy & Actions:</strong> We implemented weekly issue audits, separating positive and negative conversations using advanced monitoring tools. We amplified positive research stories and structured targeted paid campaign ads to balance public discourse.
                        </p>
                    </div>
                </div>
                <div class="border-t border-slate-100 pt-6 mt-4">
                    <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3 font-display">Services Executed</span>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-1.5 rounded-full bg-accent/5 text-accent text-xs font-bold uppercase tracking-wider">Positive Campaign</span>
                        <span class="px-4 py-1.5 rounded-full bg-accent/5 text-accent text-xs font-bold uppercase tracking-wider">Content Amplification</span>
                        <span class="px-4 py-1.5 rounded-full bg-accent/5 text-accent text-xs font-bold uppercase tracking-wider">Weekly Issue Monitoring</span>
                        <span class="px-4 py-1.5 rounded-full bg-accent/5 text-accent text-xs font-bold uppercase tracking-wider">Sentiment Analysis</span>
                        <span class="px-4 py-1.5 rounded-full bg-accent/5 text-accent text-xs font-bold uppercase tracking-wider">Paid Ads</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB: MEDIA RESEARCH -->
        <div x-show="activeTab === 'research'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="flex flex-col gap-8">
            <!-- Project 1: BSI -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">Bank Syariah Indonesia (BSI)</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Sharia Merger Sentiment Analysis</h2>
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> Bank Syariah Indonesia is the largest state-owned Islamic bank in Indonesia, officially formed in 2021 as a merger of state-owned sharia banking institutions.
                            </p>
                            <p>
                                <strong>Our Strategy:</strong> We set up extensive sentiment research covering public perceptions across media networks. We indexed and monitored digital mentions to generate actionable reports advising next-step messaging strategies.
                            </p>
                        </div>
                    </div>
                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3">Key Research Metrics</span>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <span class="text-3xl font-display font-black text-[#0d81c8] block">10,000+</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Mentions Monitored</span>
                            </div>
                            <div>
                                <span class="text-3xl font-display font-black text-[#0d81c8] block">Real-time</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Sentiment Analysis</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <img src="{{ asset('images/wp-uploads/image-20-1-768x384.jpg') }}" alt="BSI CS" class="w-full h-64 object-cover rounded-2xl shadow">
                </div>
            </div>

            <!-- Project 2: Protelindo -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">PT Profesional Telekomunikasi Indonesia (Protelindo)</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Infrastructure Issues Mapping</h2>
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> Protelindo is the largest independent owner and operator of wireless communications towers in Indonesia, managing vital infrastructural connections.
                            </p>
                            <p>
                                <strong>Our Strategy:</strong> We conducted issue mapping (covering both positive and negative public discussions) and compiled strategic recommendation briefs to improve public branding and stakeholder relationships.
                            </p>
                        </div>
                    </div>
                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-3 font-display">Research Scale</span>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <span class="text-3xl font-display font-black text-[#0d81c8] block">100+</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Monthly news analyzed</span>
                            </div>
                            <div>
                                <span class="text-3xl font-display font-black text-[#0d81c8] block">Active</span>
                                <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Issue Mapping</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <img src="{{ asset('images/wp-uploads/image-34-1-1.jpg') }}" alt="Protelindo CS" class="w-full h-64 object-cover rounded-2xl shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AlpineJS CDN for easy tabs implementation -->
<script src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
<!-- Image Lightbox Modal -->
<div id="cs-lightbox" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0.85);backdrop-filter:blur(8px);cursor:zoom-out;justify-content:center;align-items:center;" onclick="this.style.display='none'">
    <button onclick="event.stopPropagation();document.getElementById('cs-lightbox').style.display='none'" style="position:absolute;top:24px;right:24px;width:44px;height:44px;border-radius:50%;background:rgba(255,255,255,0.15);border:none;color:#fff;font-size:24px;cursor:pointer;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(4px);transition:background 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.15)'">&times;</button>
    <img id="cs-lightbox-img" src="" alt="" style="max-width:90vw;max-height:90vh;object-fit:contain;border-radius:12px;box-shadow:0 25px 50px rgba(0,0,0,0.5);animation:csLbIn 0.3s ease;">
</div>

<style>
    .glass img {
        cursor: pointer;
        transition: transform 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.35s ease;
    }
    .glass img:hover {
        transform: scale(1.08);
        box-shadow: 0 20px 40px rgba(0,0,0,0.18);
        z-index: 10;
        position: relative;
    }
    @keyframes csLbIn {
        from { opacity: 0; transform: scale(0.85); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.glass img').forEach(function(img) {
            img.addEventListener('click', function() {
                if (this.closest('a')) return;
                var lb = document.getElementById('cs-lightbox');
                var lbImg = document.getElementById('cs-lightbox-img');
                lbImg.src = this.src;
                lbImg.alt = this.alt;
                lb.style.display = 'flex';
            });
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.getElementById('cs-lightbox').style.display = 'none';
            }
        });
    });
</script>

@endsection
