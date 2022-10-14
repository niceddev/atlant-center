<?php

namespace App\Orchid\Screens\Contacts;

use App\Models\Contact;
use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    public function name(): ?string
    {
        return Section::where('slug', 'contacts')->first();
    }

    public function query(): iterable
    {
        return [
            'contact' => Contact::get()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->href(route('platform.gallery.create')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('gallery')
        ];
    }
}
