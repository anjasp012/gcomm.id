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
        <div x-show="activeTab === 'social'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="flex flex-col gap-16">
            <!-- Project 1: SKK Migas -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">SKK Migas</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Upstream Oil & Gas Industries</h2>
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> Satuan Kerja Khusus Pelaksana Kegiatan Usaha Hulu Minyak dan Gas Bumi (SKK Migas) is tasked with managing upstream oil and gas business activities in Indonesia under Cooperation Contracts (KKS). Our primary focus is to transform complex industrial data into human-centric narratives to boost public engagement and strengthen societal trust.
                            </p>
                            <p>
                                <strong>Scope of Work:</strong> We managed SKK Migas’s multi-platform digital ecosystem (including Instagram, Facebook, Twitter/X, Threads, YouTube, and TikTok). Enhancing two-way interaction through digital activation (such as interactive quizzes and 'Temu Netizen' community gatherings), managing live on-site coverage, and optimizing targeted digital ads.
                            </p>
                        </div>
                    </div>
                    <div class="border-t border-slate-100 pt-6 mt-6">
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
                <div class="lg:col-span-5 grid grid-cols-3 gap-4">
                    <a href="https://www.instagram.com/p/DYONKT7GAkm/?img_index=1" target="_blank" class="col-span-2 row-span-2 block aspect-square overflow-hidden rounded-3xl shadow-lg group">
                        <img src="{{ asset('images/skk_ig_1.png') }}" alt="SKK Migas Instagram Infographic" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                    </a>
                    <a href="https://www.instagram.com/p/DWxUEUAD82t/" target="_blank" class="col-span-1 block aspect-square overflow-hidden rounded-2xl shadow-md group">
                        <img src="{{ asset('images/skk_ig_2.png') }}" alt="SKK Migas Instagram Digital Activation Quiz" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                    </a>
                    <a href="https://www.instagram.com/reel/DT1-6H6Ehcz/" target="_blank" class="col-span-1 block aspect-square overflow-hidden rounded-2xl shadow-md group">
                        <img src="{{ asset('images/skk_ig_3.png') }}" alt="SKK Migas Instagram Temu Netizen Reel" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                    </a>
                </div>
            </div>

            <!-- Project 2: Kemenlu -->
            <div class="glass p-8 sm:p-12 rounded-3xl bg-white grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 flex flex-col gap-6 justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-accent">Kementerian Luar Negeri RI</span>
                        <h2 class="font-display font-extrabold text-3xl text-slate-900 mt-2 mb-6">Disseminating Digital Diplomacy</h2>
                        <div class="flex flex-col gap-4 text-slate-600 font-light leading-relaxed">
                            <p>
                                <strong>Description:</strong> The Ministry of Foreign Affairs of the Republic of Indonesia (Kemlu RI) is responsible for conducting foreign relations. They wanted to spread awareness about diplomacy and international affairs to Indonesian citizens through creative social media channels.
                            </p>
                            <p>
                                <strong>Problem:</strong> Kemlu RI's social media accounts struggled to attract public engagement. They needed to make policies, events, and foreign achievements transparent and relatable, so citizens could assess the impact of diplomacy.
                            </p>
                        </div>
                    </div>
                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <span class="text-xs uppercase tracking-widest font-bold text-slate-400 block mb-2">Key Metric Result</span>
                        <span class="text-4xl font-display font-black text-[#0d81c8]">386,982 Views</span>
                    </div>
                </div>
                <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-sosmedmanagement.jpg" alt="Kemlu CS 1" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-media-kemenlu-1.jpg" alt="Kemlu CS 2" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-media-kemenlu-2.jpg" alt="Kemlu CS 3" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-media-kemenlu-3.jpg" alt="Kemlu CS 4" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                </div>
            </div>

            <!-- Project 2: Ombudsman -->
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
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/img-casestudy-sosmedmanagement-ombudsman.jpg" alt="Ombudsman CS 1" class="col-span-3 w-full h-48 object-cover rounded-2xl shadow">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-27.jpg" alt="Ombudsman CS 2" class="col-span-1.5 w-full h-32 object-cover rounded-2xl shadow">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-28.jpg" alt="Ombudsman CS 3" class="col-span-1.5 w-full h-32 object-cover rounded-2xl shadow">
                </div>
            </div>

        </div>

        <!-- TAB: CRISIS & REPUTATION MANAGEMENT -->
        <div x-show="activeTab === 'crisis'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="flex flex-col gap-16">
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
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-20-1-1.jpg" alt="SIG CS 1" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-35.jpg" alt="SIG CS 2" class="w-full h-full object-cover rounded-2xl aspect-square shadow">
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
        <div x-show="activeTab === 'research'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" class="flex flex-col gap-16">
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
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-20-1-768x384.jpg" alt="BSI CS" class="w-full h-64 object-cover rounded-2xl shadow">
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
                    <img src="https://gcomm.id/wp-content/uploads/2023/03/image-34-1-1.jpg" alt="Protelindo CS" class="w-full h-64 object-cover rounded-2xl shadow">
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
