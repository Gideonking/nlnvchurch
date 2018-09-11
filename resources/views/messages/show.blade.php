@extends('layouts.master')

@section('content')

  <div class="home__container home__container--sm home__message home__message--single clearfix">
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
      <h2 class="home__message-title">{{ $message_date }}</h2>
      <iframe class="home__message-iframe" width="100%" height="500" src="https://www.youtube.com/embed/{{ $message->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
      @if(!is_null($series))
        <div class="text-center">
          <a class="home__message-series nlnv__btn kor-main js-transition" href="/series/{{ $series->id }}"><i class="fa fa-hashtag" aria-hidden="true"></i> <span class="home__message-series-title">{{ $series->title }} 시리즈 더보기</span></a>
        </div>
      @endif
      <hr class="divider divider--green">
      <div class="home__message-desc text-center kor-main">
        <p>{!! implode('<p class="text-center">', array_filter(explode("\n", $message->video_description))) !!}</p>
      </div>
    </div>
  </div>

@endsection
