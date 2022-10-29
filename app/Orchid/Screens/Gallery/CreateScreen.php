<?php

namespace App\Orchid\Screens\Gallery;

use App\Models\Gallery;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;

class CreateScreen extends Screen
{
    public function name(): ?string
    {
        return Section::where('slug', 'gallery')->first()->title;
    }

    public function query(): iterable
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Picture::make('gallery.path')
                    ->storage('public')
                    ->targetRelativeUrl()
                    ->title('Картинки')
                    ->required(),
            ])
        ];
    }

    public function save(Request $request)
    {
        Gallery::create($request->input('gallery'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.gallery.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.gallery.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

