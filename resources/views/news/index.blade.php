@extends('layouts.master')

@section('content')

  <div class="news__banner text-center bg--offwhite">
    <h1 class="nlnv__heading kor-main">교회 소식</h1>
    <hr class="divider divider--green">
    <a class="nlnv__btn kor-main margin-top-none js-scroll" href="#bulletin"><i class="fa fa-chevron-down" aria-hidden="true"></i> 주보 보기</a>
  </div>

  <div class="news__container bg--offwhite clearfix">
    <div class="col-md-12 col-lg-10 col-lg-offset-1 text-center">
      @include('news.cards')
    </div>
  </div>

  <div id="bulletin" class="news__container clearfix text-center bg--darkgrey text--white">
    <h1 class="nlnv__heading kor-main">교회 주보</h1>
    <hr class="divider divider--green">
    <a class="nlnv__btn kor-main margin-top-none js-transition" href="/bulletins"><i class="fa fa-chevron-right" aria-hidden="true"></i> 지난 주보 보기</a>
    <div class="col-md-12 col-lg-10 col-lg-offset-1 text-center margin-top-xl">
      @foreach($bulletins as $bulletin)
        <div class="col-sm-3 col-xs-6 bulletin__card">
            <a href="/files/bulletin/{{ $bulletin->file }}.pdf" class="bulletin__card-img-wrap" target="_blank">
              <i class="bulletin__card-icon fa fa-download" aria-hidden="true"></i>
              <img class="bulletin__card-img" src="/files/bulletin/thumbnails/{{ $bulletin->thumbnail }}.jpg">
            </a>
            <p class="bulletin__card-title kor-main">{{ date_format(date_create($bulletin->file), "M j, Y") }}</p>
            <p class="bulletin__card-title kor-main">{{ $bulletin->version }}</p>
        </div>
      @endforeach
    </div>
  </div>

@endsection
