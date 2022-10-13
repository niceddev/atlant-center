<?php

namespace App\Orchid\Screens\About;

use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    public function name(): ?string
    {
        return 'О нас';
    }

    public function query(): iterable
    {
        return [
            'description' => Section::where('slug', 'about')->value('description')
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Edit'))
                ->icon('icon-plus')
                ->href(route('platform.about.edit')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('components.about-component')
        ];
    }
}
