<?php

namespace App\Orchid\Screens\Gallery;

use App\Models\Gallery;
use App\Models\Review;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DestroyScreen extends Screen
{
    public function query(Gallery $gallery): iterable
    {
        return [
            'gallery' => $gallery->toArray()
        ];
    }

    public function name(): ?string
    {
        return Section::where('slug', 'gallery')->first()->title;
    }

    public function save(Gallery $gallery, Request $request)
    {
        $gallery->update($request->input('gallery'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.gallery.index');
    }

    public function remove(Gallery $gallery)
    {
        $gallery->delete();

        Toast::info('Удалено!');

        return redirect()->route('platform.gallery.index');
    }

    public function commandBar(): iterable
    {
        return [
            Button::make(__('Remove'))
                ->method('remove'),
            Link::make(__('Cancel'))
                ->href(route('platform.gallery.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Picture::make('gallery.path')
                    ->targetRelativeUrl()
                    ->title('Картинки')
                    ->required(),
            ])
        ];
    }
}
