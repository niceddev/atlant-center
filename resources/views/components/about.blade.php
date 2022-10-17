<section class="about">
    <div class="about__container _container">
        <div class="about__body">
            <h5 class="about__title" id="{{ $sections['about']->slug }}">{{ $sections['about']->getTranslation('title', session()->get('lang', 'ru')) }}</h5>
            <div class="about__text">
                {!! $about->getTranslation('description', session()->get('lang', 'ru')) !!}
                <p class="about__label">{{ $about->getTranslation('list_title', session()->get('lang', 'ru')) }}</p>
                <ul class="about__list">
                    {!! $about->getTranslation('list', session()->get('lang', 'ru')) !!}
                </ul>
            </div>
        </div>
    </div>
</section>
