<section class="personal">
    <div class="personal__container _container">
        <div class="personal__top">
            <h5 class="personal__title">{{ $sections['doctors']->getTranslation('title', 'ru') }}</h5>
            <div class="personal__text">{{ $sections['doctors']->getTranslation('description', 'ru') }}</div>
        </div>
        <div class="personal__body">
            <div class="personal__slider">
                <ul class="personal__list">
                    @foreach($doctors as $key => $doctor)
                        <li class="personal__item">
                            <div data="doc-{{ $key }}" class="personal__cart popup-link">
                                <div class="personal__photo"><img src="img/p1.jpg" alt="" class="personal__img"></div>
                                <div class="personal__name">{{ $doctor->getTranslation('full_name', 'ru') }}</div>
                                <div class="personal__work">{{ $doctor->getTranslation('speciality', 'ru') }}</div>
                                <div class="personal__date">{{ $doctor->getTranslation('graphic', 'ru') }}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@foreach($doctors as $key => $doctor)
    <div class="popup" id="doc-{{ $key }}">
        <div class="popup__container">
            <div class="popup__body personalpopup">
                <div class="personalpopup__info">
                    <div class="personalpopup__image"><img src="{{ $doctor->photo }}" alt=""></div>
                    <div class="personalpopup__title">
                        <div class="personalpopup__name">{{ $doctor->getTranslation('full_name', 'ru') }}</div>
                        <div class="personalpopup__work">{{ $doctor->getTranslation('speciality', 'ru') }}</div>
                        <div class="personalpopup__date">{{ $doctor->getTranslation('graphic', 'ru') }}</div>
                    </div>
                </div>
                <div class="personalpopup__text">
                    {{ $doctor->getTranslation('biography', 'ru') }}
                </div>
                <button class="popup__close close-popup"><img src="img/icons/close.svg" alt=""></button>
            </div>
        </div>
    </div>
@endforeach
