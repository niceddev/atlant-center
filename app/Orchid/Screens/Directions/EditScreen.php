<?php

namespace App\Orchid\Screens\Directions;

use App\Models\Direction;
use App\Models\Section;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;

class EditScreen extends TranslationsScreen
{
    private Direction $direction;

    public function name(): ?string
    {
        return Section::where('slug', 'directions')->first()->title;
    }

    public function query(Direction $direction): iterable
    {
        $this->direction = $direction;

        return [
            'direction' => $this->direction->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('direction.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('direction.description')
                ->placeholder('Введите описание')
                ->title('Описание')
        ];
    }

    public function save(Direction $direction, Request $request)
    {
        $direction->update($request->input('direction'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.directions.index');
    }

    public function remove(Direction $direction)
    {
        $direction->delete();

        Toast::info('Удалено!');

        return redirect()->route('platform.directions.index');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Remove'))
                ->method('remove'),
            Link::make(__('Cancel'))
                ->href(route('platform.directions.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}
