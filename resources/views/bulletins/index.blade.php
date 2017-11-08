@extends('layouts.master')

@section('content')

  <div class="news__banner text-center bg--offwhite">
    <h1 class="nlnv__heading kor-main">교회 주보</h1>
    <hr class="divider divider--green">
    <a class="nlnv__btn kor-main margin-top-none js-transition" href="/news"><i class="fa fa-chevron-left" aria-hidden="true"></i> 돌아가기</a>
  </div>

  <div class="news__container clearfix text-center bg--offwhite">
    <div class="col-md-12 col-lg-10 col-lg-offset-1 text-center margin-top-xl">
      @foreach($bulletins as $bulletin)
        <div class="col-sm-3 col-xs-6 bulletin__card">
            <a href="/files/bulletin/{{ $bulletin->file }}.pdf" class="bulletin__card-img-wrap" target="_blank">
              <i class="bulletin__card-icon fa fa-download" aria-hidden="true"></i>
              <img class="bulletin__card-img js-lazy" src="/files/bulletin/thumbnails/{{ $bulletin->thumbnail }}.jpg">
            </a>
            <p class="bulletin__card-title kor-main">{{ date_format(date_create($bulletin->file), "M j, Y") }}</p>
            <p class="bulletin__card-title kor-main">{{ $bulletin->version }}</p>
        </div>
      @endforeach
    </div>
  </div>

@endsection
