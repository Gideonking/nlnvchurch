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

  @if($ytvid)
    <div class="home__container home__message clearfix">
      <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <h2 class="home__message-title">주일 설교영상</h2>
        <a class="home__message-btn kor-main js-transition" href="/series"><i class="fa fa-film" aria-hidden="true"></i> 영상 더보기</a>
        <iframe class="home__message-iframe" width="100%" height="500" src="https://www.youtube.com/embed/{{ $ytvid->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
        <hr class="divider divider--green">
        <div class="home__message-desc text-center kor-main">
          {!! $ytvid_description !!}
        </div>
      </div>
    </div>
  @endif

  <div class="home__container home__container--blue clearfix">
    <div class="col-md-12 col-lg-10 col-lg-offset-1 text-center">
      <h2 class="nlnv__heading">교회 소식</h2>
      <hr class="divider divider--gold divider--margin-b-lg">
      @include('news.cards')
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
