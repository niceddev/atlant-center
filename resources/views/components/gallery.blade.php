<section class="gallery">
    <div class="gallery__container _container">
        <h5 class="gallery__title" id="{{ $sections['gallery']->slug }}">{{ $sections['gallery']->getTranslation('title', session()->get('lang', 'ru')) }}</h5>
        <div class="gallery__body">
            <ul class="gallery__list">
                @foreach($gallery as $image)
                    <li data="img-{{ $image->id }}" class="gallery__items popup-link">
                        <a href="" class="gallery__item">
                            <img src="{{ $image->path }}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

@foreach($gallery as $image)
    <div class="popup" id="img-{{ $image->id }}">
        <div class="popup__container">
            <img src="{{ $image->path }}" alt="">
        </div>
    </div>
@endforeach
