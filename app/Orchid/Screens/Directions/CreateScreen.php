<?php

namespace App\Orchid\Screens\Directions;

use App\Models\Direction;
use App\Models\Section;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Picture;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;

class CreateScreen extends TranslationsScreen
{
    public function name(): ?string
    {
        return Section::where('slug', 'directions')->first()->title;
    }

    public function query(): iterable
    {
        return [];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('directions.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('directions.description')
                ->placeholder('Введите описание')
                ->title('Описание')
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('icon_path')
                    ->storage('public')
                    ->title('Прикрепите иконку')
            ])
        ];
    }

    public function save(Request $request)
    {
        Direction::create($request->input('directions'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.directions.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.directions.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

