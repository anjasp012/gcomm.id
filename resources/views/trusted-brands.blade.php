@extends('layouts.layout')

@section('title', 'Trusted by Leading Brands | Gcomm PR Agency Indonesia')
@section('meta_description', 'Gcomm is proud to be trusted by Indonesia\'s leading ministries, government institutions, state-owned enterprises (BUMN), and top private corporations.')

@section('content')
<!-- Hero Section -->
<section class="pt-36 pb-20 relative px-6 overflow-hidden hero-grid bg-slate-950 border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/header.png') }}" class="w-full h-full object-cover opacity-85" alt="Brands Background">
        <!-- Dark overlay to ensure text readability -->
        <div class="absolute inset-0 bg-slate-950/65"></div>
        <!-- Smooth bottom fade -->
    </div>
    
    <div class="max-w-4xl mx-auto text-center z-10 relative animate-fade-in">
        <span class="text-xs uppercase tracking-widest font-bold text-blue-400">Our Partnerships</span>
        <h1 class="font-display font-extrabold text-5xl sm:text-6xl text-white mt-4 mb-6">TRUSTED BY LEADING BRANDS</h1>
        <p class="max-w-2xl mx-auto text-slate-200 text-base sm:text-lg font-light leading-relaxed typewriter-once" data-speed="22">
            Collaborating with key government institutions, state ministries, national enterprises, and private corporations.
        </p>
    </div>
</section>

<!-- Combined Brand Logos -->
<section class="py-24 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 animate-fade-in mb-12">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 items-center">
        <!-- Ministry of Foreign Affairs (Kemlu) -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522126693_Kemlu-150x150.jpg') }}" alt="Ministry of Foreign Affairs" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kementerian Luar Negeri</span>
        </div>
        <!-- Kominfo -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522124379_Kominfo-150x150.jpg') }}" alt="Kementerian Kominfo" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kemkominfo</span>
        </div>
        <!-- OJK -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522124468_OJK-150x150.jpg') }}" alt="OJK" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Otoritas Jasa Keuangan</span>
        </div>
        <!-- KPU -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522126884_KPU-150x150.jpg') }}" alt="KPU" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">KPU RI</span>
        </div>
        <!-- SKK Migas -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522121788_SKK_Migas-150x150.jpg') }}" alt="SKK Migas" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">SKK Migas</span>
        </div>
        <!-- Kemendikbud -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522816177_Kemendikbud-150x150.jpg') }}" alt="Kemendikbud" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kemendikbud</span>
        </div>
        <!-- BKKBN -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522829300_BKKBN-1-150x150.jpg') }}" alt="BKKBN" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">BKKBN</span>
        </div>
        <!-- KKP -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522816425_KKP-150x150.jpg') }}" alt="KKP" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kementerian Kelautan & Perikanan</span>
        </div>
        <!-- Kemenpar -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522814774_Kemenpar-150x150.jpg') }}" alt="Kemenpar" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kemenparekraf</span>
        </div>
        <!-- Kementan -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522814151_Kementan-150x150.jpg') }}" alt="Kementan" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kementerian Pertanian</span>
        </div>
        <!-- Kemenpora -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522813992_Kemenpora-150x150.jpg') }}" alt="Kemenpora" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kemenpora</span>
        </div>
        <!-- Kemenag -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522121910_Kemenag-150x150.jpg') }}" alt="Kemenag" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Kementerian Agama</span>
        </div>
        <!-- BNPB -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1543229537_BNPB_logo-150x150.jpg') }}" alt="BNPB" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">BNPB</span>
        </div>
        <!-- BKPM -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522117629_BKPM-150x150.png') }}" alt="BKPM" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">BKPM</span>
        </div>
        <!-- BP3TI -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522119563_BP3TI-150x150.png') }}" alt="BP3TI" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">BP3TI</span>
        </div>
        <!-- IPB University -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522126581_IPB-150x150.jpg') }}" alt="IPB University" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">IPB University</span>
        </div>
        <!-- Bank Mandiri -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522118538_Bank_Mandiri-150x150.png') }}" alt="Bank Mandiri" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Bank Mandiri</span>
        </div>
        <!-- BRI -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522817676_BRI-150x150.jpg') }}" alt="Bank BRI" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Bank BRI</span>
        </div>
        <!-- BNI -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522816953_BNI-150x150.jpg') }}" alt="Bank BNI" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Bank BNI</span>
        </div>
        <!-- Sumitomo Bank -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522815740_Sumito_Bank-150x150.jpg') }}" alt="Sumitomo Bank" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Sumitomo Bank</span>
        </div>
        <!-- AXA Mandiri -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522830433_AXA_Mandiri-150x150.jpg') }}" alt="AXA Mandiri" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">AXA Mandiri</span>
        </div>
        <!-- Petronas -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522830055_Petronas-150x150.jpg') }}" alt="Petronas" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Petronas</span>
        </div>
        <!-- PHE ONWJ -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522830226_PHE_ONWJ-150x150.jpg') }}" alt="PHE ONWJ" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Pertamina PHE ONWJ</span>
        </div>
        <!-- Timah -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522135460_Timah-150x150.jpg') }}" alt="PT Timah" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">PT Timah Tbk</span>
        </div>
        <!-- Semen Indonesia -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522127308_Semen_Indonesia-150x150.jpg') }}" alt="Semen Indonesia" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">SIG (Semen Indonesia)</span>
        </div>
        <!-- Indosat Ooredoo -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522813792_Indosat-150x150.jpg') }}" alt="Indosat Ooredoo" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Indosat Ooredoo</span>
        </div>
        <!-- Agung Podomoro Land -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522135241_Agung_Podomoro-150x150.jpg') }}" alt="Agung Podomoro Land" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Agung Podomoro Land</span>
        </div>
        <!-- Korindo -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522135322_Korindo-150x150.jpg') }}" alt="Korindo Group" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Korindo Group</span>
        </div>
        <!-- JICT -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522122287_JICT-150x150.jpg') }}" alt="JICT" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">JICT</span>
        </div>
        <!-- CFLD -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522135241_Agung_Podomoro-150x150.jpg') }}" alt="CFLD" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">CFLD Indonesia</span>
        </div>
        <!-- Artha Graha Network -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522117423_Arta_Graha-150x150.png') }}" alt="Artha Graha Network" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Artha Graha Network</span>
        </div>
        <!-- PT Chitose Internasional Tbk -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <div class="font-display font-semibold text-xs text-slate-600 text-center uppercase tracking-wider group-hover:text-accent transition-colors">PT Chitose Internasional Tbk</div>
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Chitose Indonesia</span>
        </div>
        <!-- KAA 2015 -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522815066_KAA_2015-150x150.jpg') }}" alt="Asian-African Summit 2015" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">KAA 2015</span>
        </div>
        <!-- Indonesia Baik -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522135136_Indonesia_Baik-150x150.jpg') }}" alt="Indonesia Baik" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Indonesia Baik</span>
        </div>
        <!-- Demi Indonesia -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522133075_Demi_Indonesia-150x150.jpg') }}" alt="Demi Indonesia" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Demi Indonesia</span>
        </div>
        <!-- ICMI -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1497941016_icmi-150x125.jpg') }}" alt="ICMI" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">ICMI</span>
        </div>
        <!-- Dahlan Iskan / Demi Indonesia Forum -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522136847_Dahlan-150x150.jpg') }}" alt="Dahlan Iskan Initiative" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Dahlan Iskan Forum</span>
        </div>
        <!-- JIS -->
        <div class="glass p-3 rounded-2xl bg-white flex flex-col items-center justify-center h-32 group">
            <img src="{{ asset('images/wp-uploads/1522127023_JIS-150x150.jpg') }}" alt="JIS" class="max-h-16 w-auto object-contain transition-all duration-300">
            <span class="text-[10px] text-slate-400 mt-2 font-medium text-center hidden group-hover:block transition-all">Jakarta Intercultural School</span>
        </div>
    </div>
</section>
@endsection

