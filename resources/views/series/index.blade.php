@extends('layouts.master')

@section('content')

  <div class="home__container home__container--sm home__message home__container--dark clearfix">
    <div class="col-md-6 col-md-offset-0 col-lg-5 col-lg-offset-1 margin-top-md margin-bottom-md">
      <div class="col-md-12">
        <iframe class="home__message-iframe home__message-iframe--sm" width="100%" height="500" src="https://www.youtube.com/embed/{{ $first_message->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6 col-lg-5 margin-top-md margin-bottom-md">
      <div class="col-md-12">
        <h2 class="home__message-title margin-top-none margin-bottom-none">{{ $first_message_date }}</h2>
        <hr class="divider divider--left divider--green">
        <div class="home__message-desc kor-main">
          <p>{!! implode('<p>', array_filter(explode("\n", $first_message->video_description))) !!}</p>
        </div>
        @if(!is_null($first_message->series))
          <a class="nlnv__btn kor-main" href="/series/{{ $first_message->series->id }}"><i class="fa fa-hashtag" aria-hidden="true"></i> {{ $first_message->series->title }} 시리즈 더보기</a>
        @endif
        <div>
          <a class="nlnv__btn nlnv__btn--solid kor-main" href="/messages"><i class="fa fa-hashtag" aria-hidden="true"></i> 모든 영상 보기</a>
        </div>
      </div>
    </div>
  </div>

  <div class="messages__container bg--offwhite clearfix">
    <div class="col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 text-center">
      <h2 class="nlnv__heading">{{ $section_title }}</h2>
      <hr class="divider divider--green">
    </div>
    <div class="col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1">
      @foreach($series as $single_series)
          <div class="col-sm-6 col-md-4 messages__card">
            <a class="js-lazy messages__card-inner" data-src="https://i.ytimg.com/vi/{{ $single_series->videos->first()->video_id }}/maxresdefault.jpg" href="/series/{{ $single_series->id }}">
              <div class="messages__card-content">
                <p class="messages__card-desc series__card-title kor-main text-center">{{ $single_series->title }}</p>
                <p class="messages__card-desc kor-main text-center">
                  @if ($loop->last)
                    말씀
                  @else
                    시리즈
                  @endif
                </p>
              </div>
            </a>
          </div>
      @endforeach
    </div>
  </div>

@endsection
