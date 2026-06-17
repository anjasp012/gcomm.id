<?php
$file = __DIR__ . '/resources/views/our-experts-behind-the-success.blade.php';
$html = file_get_contents($file);

$originalCard = <<<'HTML'
        <div class="group relative flex w-[280px] h-[400px] bg-black rounded-[20px] overflow-hidden items-end justify-center transition-all duration-300 ease-out shadow-lg hover:shadow-2xl">
            <!-- Background Profile Image -->
            <div class="absolute -inset-5 w-[320px] h-[440px] bg-cover bg-center bg-no-repeat transition-all duration-500 ease-out group-hover:scale-105" style="background-image: url('{{ \Illuminate\Support\Facades\Storage::url($expert->image) }}')"></div>
            <!-- Dark Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-86 group-hover:opacity-35 transition-all duration-300 ease-out"></div>
            <!-- Text Content -->
            <div class="p-4 w-full text-center relative z-10 translate-y-[-15px] group-hover:translate-y-0 transition-transform duration-500 ease-out">
                <h3 class="text-white text-[18px] font-medium mt-2 text-center font-display">{{ $expert->name }}</h3>
                <p class="text-[#f1a41d] text-[16px] font-normal italic mt-0 text-center">{{ $expert->role }}</p>
            </div>
        </div>
HTML;

// Match the glass div that I accidentally inserted
$html = preg_replace('/<div class=\"glass p-6 md:p-8.*?<\/div>\s*<\/div>\s*<\/div>/s', $originalCard, $html);
file_put_contents($file, $html);
echo 'Fixed our-experts blade';
