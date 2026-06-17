<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Filament\Support\Facades\FilamentView::registerRenderHook(
            \Filament\View\PanelsRenderHook::HEAD_END,
            fn (): string => \Illuminate\Support\Facades\Blade::render('<style>
                /* Soft Background */
                .fi-body { background-color: #f8fafc; }
                /* Rounder corners for panels */
                .fi-ta-content { border-radius: 1rem !important; overflow: hidden; border: none; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.05); }
                /* Topbar transparent */
                .fi-topbar { background-color: rgba(255, 255, 255, 0.8) !important; backdrop-filter: blur(10px); border-bottom: 1px solid #e2e8f0; }
                /* Custom active state for sidebar */
                .fi-sidebar-item-active > a { background-color: #2d56a3 !important; border-radius: 0.75rem !important; }
                .fi-sidebar-item-active > a * { color: white !important; }
            </style>')
        );
    }
}
