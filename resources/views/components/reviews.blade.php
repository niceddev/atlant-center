<section class="review">
    <div class="review__container _container">
        <div class="review__body">
            <h5 class="review__title">{{ $sections['reviews']->getTranslation('title', 'ru') }}</h5>
            <ul class="review__list">
                @foreach($reviews as $review)
                    <li class="review__items">
                        <div class="review__block">
                            <div class="review__text">{{ $review->content }}</div>
                            <div class="review__name">{{ $review->full_name }}</div>
                            <div class="review__work">{{ $review->info }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
