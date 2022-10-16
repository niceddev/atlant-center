<?php

namespace App\Orchid\Screens\Gallery;

use App\Models\Gallery;
use App\Models\Section;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DestroyScreen extends Screen
{
    public function query(): iterable
    {
        return [];
    }

    public function name(): ?string
    {
        return Section::where('slug', 'gallery')->first()->title;
    }

    public function remove(int $id)
    {
        Gallery::find($id)->delete();

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
        ];
    }

    public function layout(): iterable
    {
        return [];
    }
}
