<?php

namespace App\Orchid\Screens\Reviews;

use App\Models\Review;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;

class CreateScreen extends Screen
{
    public function name(): ?string
    {
        return Section::where('slug', 'reviews')->first()->title;
    }

    public function query(): iterable
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('reviews.full_name')
                    ->placeholder('Введите имя клиента')
                    ->title('Имя клиента')
                    ->required(),
                Input::make('reviews.info')
                    ->placeholder('Кратко о клиенте')
                    ->title('Доп. инфа'),
                Quill::make('reviews.content')
                    ->toolbar(['text', 'color', 'header', 'list', 'format'])
                    ->placeholder('Текст отзыва')
                    ->title('Отзыв')
                    ->required(),
            ])
        ];
    }

    public function save(Request $request)
    {
        Review::create($request->input('reviews'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.reviews.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.reviews.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

