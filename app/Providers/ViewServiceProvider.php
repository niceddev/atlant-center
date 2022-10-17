<?php

namespace App\Providers;

use App\Models\Section;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        if (Schema::hasTable('sections')){
            View::share('sections', [
                'about' => Section::where('slug', 'about')->first(),
                'directions' => Section::where('slug', 'directions')->first(),
                'services' => Section::where('slug', 'services')->first(),
                'doctors' => Section::where('slug', 'doctors')->first(),
                'reviews' => Section::where('slug', 'reviews')->first(),
                'gallery' => Section::where('slug', 'gallery')->first(),
                'contacts' => Section::where('slug', 'contacts')->first(),
            ]);
        }
    }
}
