@extends('layouts.layout')

@section('title', $news->title . ' | Gcomm PR Agency Indonesia')
@section('meta_description', Str::limit(strip_tags($news->content), 150))

@section('content')

<!-- Header Image Section (Nempel di atas) -->
<section class="relative w-full h-[60vh] min-h-[400px] max-h-[700px] bg-slate-900 overflow-hidden">
    @if($news->image)
        <img src="{{ \Illuminate\Support\Facades\Storage::url($news->image) }}" class="w-full h-full object-cover" alt="{{ $news->title }}">
    @else
        <div class="w-full h-full bg-gradient-to-br from-slate-900 to-slate-800"></div>
    @endif
    <!-- Slight dark gradient at the top so the white navbar text remains readable over any image -->
    <div class="absolute top-0 left-0 right-0 h-40 bg-gradient-to-b from-black/60 to-transparent pointer-events-none"></div>
</section>

<!-- Content Section -->
<section class="pt-16 pb-16 max-w-3xl mx-auto px-6">
    
    <!-- Title & Meta -->
    <div class="mb-12 text-center sm:text-left">
        <div class="flex items-center justify-center sm:justify-start gap-3 text-xs font-bold text-accent uppercase tracking-widest mb-4">
            <span>{{ \Carbon\Carbon::parse($news->published_at ?? $news->created_at)->format('F j, Y') }}</span>
        </div>
        <h1 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-slate-900 leading-tight">
            {{ $news->title }}
        </h1>
    </div>

    <!-- Article Content -->
    <div class="prose prose-lg prose-slate prose-headings:font-display prose-headings:font-bold prose-a:text-accent hover:prose-a:text-blue-700 max-w-none text-slate-600 leading-relaxed">
        {!! $news->content !!}
    </div>
    
    <div class="mt-16 mb-10 border-t border-slate-200"></div>
    
    <!-- Share Buttons (Simple like requested image) -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-start gap-4 sm:gap-6 mb-16">
        <span class="text-xs font-bold text-slate-400 tracking-[0.2em] uppercase pt-1">SHARE</span>
        <div class="flex flex-wrap items-center gap-3">
            <!-- WhatsApp -->
            <a href="https://api.whatsapp.com/send?text={{ urlencode($news->title . ' ' . url()->current()) }}" target="_blank" class="flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-medium hover:bg-slate-100 transition-colors border border-slate-100">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                WhatsApp
            </a>
            <!-- X (Twitter) -->
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}" target="_blank" class="flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-medium hover:bg-slate-100 transition-colors border border-slate-100">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                X
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($news->title) }}" target="_blank" class="flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-medium hover:bg-slate-100 transition-colors border border-slate-100">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                LinkedIn
            </a>
            <!-- Copy Link -->
            <button onclick="copyToClipboard('{{ url()->current() }}', this)" class="flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-medium hover:bg-slate-100 transition-colors border border-slate-100 justify-center">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                </svg>
                <span class="copy-text">Copy Link</span>
            </button>
        </div>
    </div>

    <!-- Script for Copy to Clipboard Fallback & UI -->
    <script>
    function copyToClipboard(text, btn) {
        const textSpan = btn.querySelector('.copy-text');
        const originalText = "Copy Link";

        const showSuccess = () => {
            textSpan.innerText = "Copied!";
            btn.classList.add("text-accent", "bg-blue-50", "border-blue-100");
            setTimeout(() => {
                textSpan.innerText = originalText;
                btn.classList.remove("text-accent", "bg-blue-50", "border-blue-100");
            }, 2000);
        };

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(showSuccess);
        } else {
            // Fallback for non-HTTPS environments (like local Laragon without SSL)
            let textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.left = "-999999px";
            textArea.style.top = "-999999px";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            try {
                document.execCommand('copy');
                showSuccess();
            } catch (err) {
                console.error('Gagal menyalin:', err);
            }
            document.body.removeChild(textArea);
        }
    }
    </script>

</section>

<!-- Related News (Gcomm Theme) -->
@if($relatedNews->count() > 0)
<section class="py-20 relative px-6 bg-slate-50/50">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4 reveal">
            <div>
                <span class="text-xs font-bold text-accent uppercase tracking-widest">Baca Juga</span>
                <h3 class="font-display font-extrabold text-3xl sm:text-4xl text-slate-900 mt-2">Artikel Terkait</h3>
            </div>
            <a href="/news" class="px-6 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-slate-600 bg-white border border-slate-200 hover:border-accent hover:text-accent transition-colors">
                Lihat Semua Insight
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal-stagger">
            @foreach($relatedNews as $item)
            <a href="/news/{{ $item->slug }}" class="block glass p-8 rounded-3xl bg-white flex flex-col justify-between h-full hover:-translate-y-1 transition-transform duration-300 group border border-slate-100">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3 text-xs font-semibold text-accent uppercase tracking-wider">
                        <span class="text-slate-400">{{ \Carbon\Carbon::parse($item->published_at ?? $item->created_at)->format('M j, Y') }}</span>
                    </div>
                    <h3 class="font-display font-bold text-xl text-slate-900 group-hover:text-accent transition-colors leading-snug">
                        {{ $item->title }}
                    </h3>
                    <div class="text-slate-600 text-sm font-light leading-relaxed">
                        {!! Str::limit(strip_tags($item->content), 120) !!}
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex justify-between items-center text-xs text-slate-400">
                    <span class="font-bold text-accent">Baca Artikel &rarr;</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
