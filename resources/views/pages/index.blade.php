@extends('layouts.master')

@section('content')
  <div class="home__banner">
    <div class="home__banner-text-container">
      <h1 class="home__banner-text">
        <span class="home__banner-text--sub kor-sub">다음 세대를 위해 교회를 개척하는 교회</span>
        <span class="home__banner-text--main">New Life<span class="break-414"> </span>New Vision<span class="break-414"> </span>Church</span>
      </h1>
      <a class="home__banner-arrow js-scroll" href="#first"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </div>
  </div>

  <div id="first" class="home__container home__service clearfix">
    <div class="col-lg-8 col-lg-offset-2 text-center">
      <h2 class="nlnv__heading kor-main">예배 안내</h2>
      <hr class="divider divider--green">
      <p class="home__service-times kor-main"><b>주일예배:</b> 10:00AM (1부) &amp; 12:00PM (2부)</p>
      <p class="home__service-times kor-main"><b>수요기도회:</b> 6:30PM</p>
      <p class="home__service-times kor-main"><b>새벽기도회:</b> 5:30AM (화-금) &amp; 6:30AM (토)</p>
      <div class="home__join">
        <h2 class="home__join-title">Come <span class="accent--light">Join</span> Us!</h2>
        <h3 class="home__join-time"></h3>
        <p class="home__join-label">DAYS HRS MINS SECS</p>
        <p class="home__join-for">For Sunday Service</p>
      </div>
    </div>
  </div>

  <div class="home__container home__message clearfix">
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
      <h2 class="home__message-title">주일 설교영상</h2>
      <a class="home__message-btn" href="#">Watch More</a>
      <iframe class="home__message-iframe" width="100%" height="500" src="https://www.youtube.com/embed/{{ $ytvidid }}?rel=0" frameborder="0" allowfullscreen></iframe>
      <hr class="divider divider--green">
      <div class="home__message-desc text-center kor-main">
        <p>성령의 열매 시리즈 #1 - 사랑</p>
        <p>October 8, 2017</p>
        <p>Pastor Peter Choi</p>
      </div>
    </div>
  </div>

  <div class="home__container home__container--blue clearfix">
    <div class="col-md-12 col-lg-10 col-lg-offset-1 text-center">
      <h2 class="nlnv__heading">교회 행사</h2>
      <hr class="divider divider--gold divider--margin-b-lg">
      {{-- Single Event Card 1 --}}
      <div class="card__col col-sm-6 col-md-4">
        <div class="card__container">
          <div class="card__thumbnail">
            <div class="card__image" style="background-image: url(images/events/korean-school.jpg);"></div>
          </div>
          <div class="card__content">
            <div class="card__category">9.23.2017</div>
            <h1 class="card__title kor-main">NLNV 한글학교</h1>
            <h2 class="card__subtitle">Fall 2017 Class Begins!</h2>
            <div class="card__description">
              <p class="kor-main">매주 토요일 9:30AM - 11:30AM</p>
            </div>
            <div class="card__cta">
              <a class="card__btn kor-main" href="#">자세히보기</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Single Event Card 2 --}}
      <div class="card__col col-sm-6 col-md-4">
        <div class="card__container">
          <div class="card__thumbnail">
            <div class="card__image" style="background-image: url(images/events/homeless-ministry.jpg);"></div>
          </div>
          <div class="card__content">
            <div class="card__category">Daily</div>
            <h1 class="card__title kor-main">홈리스 사역</h1>
            <h2 class="card__subtitle">Share the love of God.</h2>
            <div class="card__description">
              <p class="kor-main">홈리스 사역은 홈리스들의 영적인 갈급함을 풀어줌으로 인하여 그들의 삶의 목적이 바뀌어 세상에 빛과 소금과 같은 존재로 바뀔 수 있도록 도와주는 사역입니다.</p>
            </div>
            <div class="card__cta">
              <a class="card__btn kor-main" href="#">자세히보기</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Single Event Card 3 --}}
      <div class="card__col col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
        <div class="card__container">
          <div class="card__thumbnail">
            <div class="card__image" style="background-image: url(images/events/read-bible.jpg);"></div>
          </div>
          <div class="card__content">
            <div class="card__category">Daily</div>
            <h1 class="card__title kor-main">함께 성경읽기</h1>
            <h2 class="card__subtitle">Read the word of God.</h2>
            <div class="card__description">
              <p class="kor-main">매일 하루에 3장씩 성경을 읽으므로 하나님의 말씀을 사모합시다.</p>
            </div>
            <div class="card__cta">
              <a class="card__btn kor-main" href="#">자세히보기</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="connect__container">
    <div class="connect__wrapper">
      <h2 class="nlnv__heading">Connect with us</h2>
      <hr class="divider divider--darkgreen">
      <div class="connect__icon-wrapper">
        <a class="connect__icon" href="mailto:nlnvchurch@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a class="connect__icon" href="tel:310-991-6544"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a class="connect__icon" href="https://www.facebook.com/pages/New-Life-New-Vision-Church/754157684605483" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="connect__icon" href="https://www.youtube.com/channel/UCdmLI5xDRzZmNVAch8HCyGg" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
@endsection
