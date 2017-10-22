@extends('layouts.master')

@section('content')

  @foreach($messages as $message)
    <div class="col-md-2 messages__card">
      <a href="/messages/{{ $message->video_id }}">
       <img src="https://i.ytimg.com/vi/{{ $message->video_id }}/hqdefault.jpg" alt="">
      </a>
    </div>
    <div class="col-md-2 messages__card">
      <p class="text-center">
        {!! implode('</p><p class="text-center">', array_filter(explode("\n", $message->video_description))) !!}
      </p>
    </div>
  @endforeach

    {{-- <div class="home__container home__message clearfix">
      <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <h2 class="home__message-title">주일 설교영상</h2>
        <iframe class="home__message-iframe" width="100%" height="500" src="https://www.youtube.com/embed/{{ $ytvid->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
        <hr class="divider divider--green">
        <div class="home__message-desc text-center kor-main">
          {!! $ytvid_description !!}
        </div>
      </div>
    </div> --}}

@endsection
