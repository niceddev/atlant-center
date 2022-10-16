<header class="header">
    <div class="header__container">
        <div class="header__body">
            <div class="header__logo">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="header__lang">
                @foreach(config('app.languages') as $key => $lang)
                    <select onchange="javascript:location.href = this.value;" class="lang__list">
                        <option selected value={{ url('/'. $key) }}>{{ $lang }}</option>
                    </select>
                @endforeach
            </div>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    @foreach($sections as $key => $title)
                        <li class="menu__items"><a href="#{{ $key }}" class="menu__item">{{ $title->getTranslation('title', 'ru') }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="header__links">
                <a href="tel:+77172728938" class="header__phone">
                    {{ $contacts->phone_number }}
                </a>
                <div class="header__social social">
                    <ul class="social__list">
                        <li class="social__items"><a href="" class="social__icon"><img src="img/icons/whatsapp.svg" alt=""></a></li>
                        <li class="social__items">
                            <a href="{{ $contacts->instagram_link }}" class="social__icon">
                                <img src="img/icons/instagram.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="icon-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
