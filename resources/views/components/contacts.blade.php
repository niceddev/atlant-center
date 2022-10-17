<footer class="footer">
    <div class="footer__container _container">
        <div class="footer__body">
            <h5 class="footer__title" id="{{ $sections['contacts']->slug }}">{{ $sections['contacts']->getTranslation('title', session()->get('lang', 'ru')) }}</h5>
            <div class="contacts__flex">
                <img class="contacts__img" src="/img/map.jpg" alt="">
                <div class="footer__info">
                    <div class="footer__block contacts">
                        <h6 class="contacts__title">{{ __('common.our_contacts') }}</h6>
                        <div class="contacts__info">
                            <div class="contacts__adress">
                                <p>{{ $contacts->getTranslation('address', session()->get('lang', 'ru')) }}</p>
                                <a href="">Показать на карте</a>
                            </div>
                            <div class="contacts__phone"><a href="tel:{{ $contacts->phone_number }}">{{ $contacts->phone_number }}</a></div>
                            <div class="contacts__phone"><a href="">{{ $contacts->whatsapp_number }}</a></div>
                            <div class="contacts__mail"><a href="{{ $contacts->email }}">{{ $contacts->email }}</a></div>
                        </div>
                    </div>
                    <div class="footer__block contacts">
                        <h6 class="contacts__title">{{ __('common.opening_hours') }}</h6>
                        <div class="contacts__info">
                            <div class="contacts__time">
                                {!! $contacts->getTranslation('graphic', session()->get('lang', 'ru'))  !!}
                            </div>
                        </div>
                        <h6 class="contacts__title">{{ __('common.social_network') }}</h6>
                        <div class="contacts__info">
                            <div class="contacts__social">
                                <a href="" class="contacts__icon"><img src="img/icons/insta.svg" alt=""></a>
                                <a href="" class="contacts__icon"><img src="img/icons/whp.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p>Все права защищены © 2022 | Спортивная медицина в Астане.</p>
            <p>Сделано в <a href="">Smarty</a></p>
        </div>
    </div>
</footer>
