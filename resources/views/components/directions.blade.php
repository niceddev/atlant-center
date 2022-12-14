<section class="activities">
    <div class="activities__container _container">
        <h5 class="activities__title" id="{{ $sections['directions']->slug }}">{{ $sections['directions']->getTranslation('title', session()->get('lang', 'ru')) }}</h5>
        <div class="activities__body">
            <ul class="activities__list">
                @foreach($directions as $direction)
                    <li class="activities__item">
                        <div class="activities__block block">
                            <div class="block__info">
                                <div class="block__lable">{!! $direction->getTranslation('title', session()->get('lang', 'ru')) !!}</div>
                                <div class="block__text">{!! $direction->getTranslation('description', session()->get('lang', 'ru')) !!}</div>
                            </div>
                            <div class="block__icon"><img src="{{ $direction->icon_path }}" alt=""></div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
