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
    private Section $section;

    public function name(): ?string
    {
        return $this->section->title;
    }

    public function query(Section $section): iterable
    {
        $this->section = $section;

        return [
            'about' => $this->section->toArray()
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
                ->href(route('platform.about.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}
