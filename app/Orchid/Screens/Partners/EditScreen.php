<?php

namespace App\Orchid\Screens\Partners;

use App\Models\Partner;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EditScreen extends Screen
{
    private Partner $partner;

    public function name(): ?string
    {
        return Section::where('slug', 'partners')->first()->title;
    }

    public function query(Partner $partner): iterable
    {
        $this->partner = $partner;

        return [
            'partner' => $this->partner->toArray()
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Picture::make('partner.image_path')
                    ->storage('public')
                    ->targetRelativeUrl()
                    ->title('Картинки')
                    ->required(),
                Input::make('partner.link')
                    ->placeholder('Введите ссылку')
                    ->title('Ссылка'),
            ])
        ];
    }

    public function save(Partner $partner, Request $request)
    {
        $partner->update($request->input('partner'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.partners.index');
    }

    public function remove(Partner $partner)
    {
        $partner->delete();

        Toast::info('Удалено!');

        return redirect()->route('platform.partners.index');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Remove'))
                ->method('remove'),
            Link::make(__('Cancel'))
                ->href(route('platform.partners.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

