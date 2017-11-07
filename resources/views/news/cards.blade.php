@foreach($featured_news as $news)
  <div class="card__col col-sm-6 col-md-4">
    <div class="card__container">
      <div class="card__thumbnail">
        <div class="card__image" style="background-image: url(images/news/{{ $news->image }});"></div>
      </div>
      <div class="card__content">
        <div class="card__category">{{ $news->date }}</div>
        <h1 class="card__title kor-main">{{ $news->title }}</h1>
        <h2 class="card__subtitle">{{ $news->subtitle }}</h2>
        <div class="card__description">
          <p class="kor-main">{{ $news->description }}</p>
        </div>
        <div class="card__cta">
          <a class="card__btn kor-main open-popup-link" href="#popup-{{ $news->id }}"><i class="fa fa-search" aria-hidden="true"></i> 자세히보기</a>
        </div>
      </div>
    </div>
  </div>
  <div id="popup-{{ $news->id }}" class="white-popup mfp-hide">
    <h2 class="nlnv__heading margin-top-xs">{{ $news->title }}</h2>
    <img class="margin-top-sm margin-bottom-xs" src="images/news/{{ $news->image }}" alt="">
    <h3>{{ $news->description }}</h3>
    <h4 class="margin-top-sm margin-bottom-md text-line-height-15">{!! implode('<h4 class="margin-top-sm margin-bottom-md text-line-height-15">', array_filter(explode("\n", $news->details))) !!}</h4>
  </div>
@endforeach
