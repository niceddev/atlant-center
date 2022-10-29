<section class="main" style="background-image: url('{{ asset($main->image_path) }}');">
    <div class="main__container _container">
        <div class="main__body">
            <h1 class="main__title">{{ $main->getTranslation('title', session()->get('lang', 'ru')) }}</h1>
            <div class="main__text">{!! $main->getTranslation('description', session()->get('lang', 'ru')) !!}</div>
            <button data="popup" class="main__btn popup-link">{{ $main->getTranslation('button_title', session()->get('lang', 'ru')) }}</button>
            <button class="main__video video">
                <div class="video__icon"></div>
                <div class="video__label">Смотреть видео</div>
            </button>
        </div>
    </div>
</section>

<div class="popup" id="popup">
    <div class="popup__container">
        <div class="popup__body">
            <div class="popup__title"{{ $main->getTranslation('button_title', session()->get('lang', 'ru')) }}></div>
            <div class="popup__form form">
                <form action="{{ route('sendMail') }}" method="GET" class="form__body">
                    <div class="form__item">
                        <label for="name">Ваше имя</label>
                        <input name="name" type="text" id="name" required>
                    </div>
                    <div class="form__item">
                        <label for="phone">Номер телефона</label>
                        <input name="phone" type="text" id="phone" required>
                    </div>
                    <div class="form__item">
                        <label for="message">Текст</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <button type="submit">Отправить</button>
                </form>
            </div>
            <button class="popup__close close-popup"><img src="img/icons/close.svg" alt=""></button>
        </div>
    </div>
</div>
