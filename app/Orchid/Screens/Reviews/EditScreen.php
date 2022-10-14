<?php

namespace App\Orchid\Screens\Reviews;

use App\Models\Review;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EditScreen extends Screen
{
    private Review $review;

    public function name(): ?string
    {
        return Section::where('slug', 'reviews')->first()->title;
    }

    public function query(Review $review): iterable
    {
        $this->review = $review;

        return [
            'review' => $this->review->toArray()
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('review.full_name')
                    ->placeholder('Введите имя клиента')
                    ->title('Имя клиента')
                    ->required(),
                Input::make('review.info')
                    ->placeholder('Кратко о клиенте')
                    ->title('Доп. инфа'),
                Quill::make('review.content')
                    ->placeholder('Текст отзыва')
                    ->title('Отзыв')
                    ->required(),
            ])
        ];
    }

    public function save(Review $review, Request $request)
    {
        $review->update($request->input('review'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.reviews.index');
    }

    public function remove(Review $review)
    {
        $review->delete();

        Toast::info('Удалено!');

        return redirect()->route('platform.reviews.index');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Remove'))
                ->method('remove'),
            Link::make(__('Cancel'))
                ->href(route('platform.reviews.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

