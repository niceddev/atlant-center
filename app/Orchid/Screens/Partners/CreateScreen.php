<?php

namespace App\Orchid\Screens\Partners;

use App\Models\Partner;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;

class CreateScreen extends Screen
{
    public function name(): ?string
    {
        return Section::where('slug', 'partners')->first()->title;
    }

    public function query(): iterable
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Picture::make('partners.image_path')
                    ->storage('public')
                    ->targetRelativeUrl()
                    ->title('Картинки')
                    ->required(),
                Input::make('partners.link')
                    ->placeholder('Введите ссылку')
                    ->title('Ссылка'),
            ])
        ];
    }

    public function save(Request $request)
    {
        Partner::create($request->input('partners'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.partners.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.partners.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}
