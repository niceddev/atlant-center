<section class="personal">
    <div class="personal__container _container">
        <div class="personal__top">
            <h5 class="personal__title" id="{{ $sections['doctors']->slug }}">{{ $sections['doctors']->getTranslation('title', 'ru') }}</h5>
            <div class="personal__text">{{ $sections['doctors']->getTranslation('description', 'ru') }}</div>
        </div>
        <div class="personal__body">
            <div class="personal__slider swiper">
                <ul class="personal__list swiper-wrapper">
                    @foreach($doctors as $doctor)
                        <li class="personal__item swiper-slide">
                            <div data="doc-{{ $doctor->id }}" class="personal__cart popup-link">
                                <div class="personal__photo"><img src="{{ $doctor->photo }}" alt="" class="personal__img"></div>
                                <div class="personal__name">{{ $doctor->getTranslation('full_name', 'ru') }}</div>
                                <div class="personal__work">{{ $doctor->getTranslation('speciality', 'ru') }}</div>
                                <div class="personal__date">{!! $doctor->getTranslation('graphic', 'ru') !!}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@foreach($doctors as $doctor)
    <div class="popup" id="doc-{{ $doctor->id }}">
        <div class="popup__container">
            <div class="popup__body personalpopup">
                <div class="personalpopup__info">
                    <div class="personalpopup__image"><img src="{{ $doctor->photo }}" alt=""></div>
                    <div class="personalpopup__title">
                        <div class="personalpopup__name">{{ $doctor->getTranslation('full_name', 'ru') }}</div>
                        <div class="personalpopup__work">{{ $doctor->getTranslation('speciality', 'ru') }}</div>
                        <div class="personalpopup__date">{!! $doctor->getTranslation('graphic', 'ru') !!}</div>
                    </div>
                </div>
                <div class="personalpopup__text">
                    {!! $doctor->getTranslation('biography', 'ru') !!}
                </div>
                <button class="popup__close close-popup"><img src="img/icons/close.svg" alt=""></button>
            </div>
        </div>
    </div>
@endforeach
