<?php

namespace App\Orchid\Screens\About;

use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $about;

    public function __construct()
    {
        $this->about = Section::where('slug', 'about')->first();
    }

    public function name(): ?string
    {
        return $this->about->title;
    }

    public function query(): iterable
    {
        return [
            'description' => $this->about->description
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Edit'))
                ->icon('icon-pencil')
                ->href(route('platform.about.edit', $this->about->id)),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('components.about-component')
        ];
    }
}
