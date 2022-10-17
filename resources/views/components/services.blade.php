<section class="services">
    <div class="services__container _container">
        <div class="services__top">
            <h5 class="services__title">{{ $sections['services']->getTranslation('title', 'ru') }}</h5>
            <div class="services__text">{{ $sections['services']->getTranslation('description', 'ru') }}</div>
        </div>
        <div class="services__body">
            <div class="services__block">
                <ul class="services__list">
                    @foreach($services as $key => $service)
                        <li data="{{ $key }}" class="services__item popup-link">
                            <a href="" class="services__link">
                                {{ $service->getTranslation('title', 'ru') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@foreach($services as $key => $service)
    <div class="popup" id="{{ $key }}">
        <div class="popup__container">
            <div class="popup__body servicepopup">
                <div class="servicepopup__image"><img src="{{ $service->banner }}" alt=""></div>
                <div class="servicepopup__title">{{ $service->getTranslation('title', 'ru') }}</div>
                <div class="servicepopup__text">
                    {!! $service->getTranslation('content', 'ru') !!}
                </div>
                <button class="popup__close close-popup"><img src="img/icons/close.svg" alt=""></button>
            </div>
        </div>
    </div>
@endforeach

