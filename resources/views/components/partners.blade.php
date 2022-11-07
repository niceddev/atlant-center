<section class="partners">
    <div class="partners__container _container">
        <h5 class="partners__title" id="{{ $sections['partners']->slug }}">{{ $sections['partners']->getTranslation('title', session()->get('lang', 'ru')) }}</h5>
        <div class="partners__body">
            <ul class="partners__list">
                @foreach($partners as $partner)
                    <li class="partners__items">
                        <a target="_blank" href="{{ $partner->link }}" class="partners__item">
                            <img src="{{ asset($partner->image_path) }}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
