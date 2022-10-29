<section class="personal">
    <div class="personal__container _container">
        <div class="personal__top">
            <h5 class="personal__title" id="{{ $sections['doctors']->slug }}">{{ $sections['doctors']->getTranslation('title', session()->get('lang', 'ru')) }}</h5>
            <div class="personal__text">{{ $sections['doctors']->getTranslation('description', session()->get('lang', 'ru')) }}</div>
        </div>
        <div class="personal__body">
            <div class="personal__slider">
                <ul class="personal__list">
                    @foreach($doctors as $doctor)
                        <li class="personal__item">
                            <div data="doc-{{ $doctor->id }}" class="personal__cart popup-link">
                                <div class="personal__photo"><img src="{{ asset($doctor->photo) }}" alt="" class="personal__img"></div>
                                <div class="personal__name" style="font-weight: 600">{{ $doctor->getTranslation('full_name', session()->get('lang', 'ru')) }}</div>
                                <div class="personal__work">{{ $doctor->getTranslation('speciality', session()->get('lang', 'ru')) }}</div>
                                <div class="personal__date">{!! $doctor->getTranslation('graphic', session()->get('lang', 'ru')) !!}</div>
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
                    <div class="personalpopup__image"><img src="{{ asset($doctor->photo) }}" alt=""></div>
                    <div class="personalpopup__title">
                        <div class="personalpopup__name" style="font-weight: 600">{{ $doctor->getTranslation('full_name', session()->get('lang', 'ru')) }}</div>
                        <div class="personalpopup__work">{{ $doctor->getTranslation('speciality', session()->get('lang', 'ru')) }}</div>
                        <div class="personalpopup__date">{!! $doctor->getTranslation('graphic', session()->get('lang', 'ru')) !!}</div>
                    </div>
                </div>
                <div class="personalpopup__text">
                    {!! $doctor->getTranslation('biography', session()->get('lang', 'ru')) !!}
                </div>
                <button class="popup__close close-popup"><img src="img/icons/close.svg" alt=""></button>
            </div>
        </div>
    </div>
@endforeach
