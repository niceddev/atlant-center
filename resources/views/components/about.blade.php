<section class="about">
    <div class="about__container _container">
        <div class="about__body">
            <h5 class="about__title">{{ $aboutData->getTranslation('title', 'ru') }}</h5>
            <div class="about__text">
                <p>Главная идея спортивно реабилитационного центра – это объединить лучших специалистов, которые
                    регулярно проходят обучение в Европе, и самое современное медицинское оборудование, аналогов
                    которого до сих пор не было в Казахстане.</p>
                <p>Спортивно-реабилитационный центр «Атлант» работает на принципах доказательной медицины. Это означает,
                    что в лечении применяются исключительно методики, доказавшие свою эффективность в международной
                    медицинской практике.</p>
                <p class="about__label">Наши двери открыты для:</p>
                <ul class="about__list">
                    <li>профессиональных спортсменов;</li>
                    <li>спортсменов – любителей;</li>
                    <li>людей с заболеваниями опорно-двигательной системы;</li>
                    <li>людей всех возрастов, ведущих активный образ жизни и заинтересованных в профилактике заболеваний
                        ОДС.
                    </li>
                </ul>
                {!!
                    $aboutData->getTranslation('description', 'ru')
                !!}
            </div>
        </div>
    </div>
</section>