@extends('layouts.master')

@section('content')

  <div class="photo__banner text-center bg--offwhite">
    <h1 class="nlnv__heading kor-main">{{ $album_title }}</h1>
    <hr class="divider divider--green">
    <a class="nlnv__btn kor-main margin-top-none js-transition" href="/album"><i class="fa fa-chevron-left" aria-hidden="true"></i> 돌아가기</a>
  </div>

  <div class="photo__container bg--offwhite">
    <div class="photo__wrapper">
      @foreach($photos as $photo)
        <a href="{{ $album_url . $photo->path }}" class="photo__popup">
          <img src="{{ $album_url . $photo->path }}" />
        </a>
      @endforeach
    </div>
  </div>

@endsection
