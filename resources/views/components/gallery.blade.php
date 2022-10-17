<section class="gallery">
    <div class="gallery__container _container">
        <h5 class="gallery__title">{{ $sections['gallery']->getTranslation('title', 'ru') }}</h5>
        <div class="gallery__body">
            <ul class="gallery__list">
                @foreach($gallery as $images)
                    <li class="gallery__items">
                        <a href="" class="gallery__item">
                            <img src="{{ $images->path }}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
