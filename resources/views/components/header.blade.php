<header class="header">
    <div class="header__container">
        <div class="header__body">
            <div class="header__logo">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="header__lang">
                <div class="lang"><a href="">ru</a> </div>
                <ul class="lang__list">
                    <li class="lang__items"><a href="">kz</a></li>
                    <li class="lang__items"><a href="">eng</a> </li>
                </ul>
            </div>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    @foreach($sections as $section)
                        <li class="menu__items"><a href="" class="menu__item">{{ $section->title }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="header__links">
                <a href="tel:+77172728938" class="header__phone">+7 (7172) 72 89 38</a>
                <div class="header__social social">
                    <ul class="social__list">
                        <li class="social__items"><a href="" class="social__icon"><img src="img/icons/whatsapp.svg" alt=""></a></li>
                        <li class="social__items"><a href="" class="social__icon"><img src="img/icons/instagram.svg" alt=""></a></li>
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
