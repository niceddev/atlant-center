<?php

namespace App\Orchid\Screens\About;

use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use App\Orchid\Screens\Abstraction\TranslationsScreen;

class EditScreen extends TranslationsScreen
{
    public function name(): ?string
    {
        return 'О нас';
    }

    public function query(Section $section): iterable
    {
        return [
            'about' => $section->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('about.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('about.description')
                ->placeholder('Введите описание')
                ->title('Описание')
        ];
    }

    public function save(Request $request)
    {
        Section::where('slug', 'about')
            ->update($request->input('about'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.about.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->icon('icon-plus')
                ->href(route('platform.about.index')),
            Button::make(__('Save'))
                ->icon('icon-check')
                ->method('save'),
        ];
    }

}
