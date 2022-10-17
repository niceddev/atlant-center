<section class="about">
    <div class="about__container _container">
        <div class="about__body">
            <h5 class="about__title" id="{{ $sections['about']->slug }}">{{ $sections['about']->getTranslation('title', 'ru') }}</h5>
            <div class="about__text">
                {!! $about->getTranslation('description', 'ru') !!}
                <p class="about__label">{{ $about->getTranslation('list_title', 'ru') }}</p>
                <ul class="about__list">
                    {!! $about->getTranslation('list', 'ru') !!}
                </ul>
            </div>
        </div>
    </div>
</section>
