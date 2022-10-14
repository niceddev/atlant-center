<?php

namespace App\Orchid\Screens\Services;

use App\Models\Section;
use App\Models\Service;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $services;

    public function __construct()
    {
        $this->services = Section::where('slug', 'services')->first();
    }

    public function name(): ?string
    {
        return $this->services->title;
    }

    public function query(): iterable
    {
        return [
            'services' => Service::get()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->href(route('platform.services.create')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('services')
        ];
    }
}
