@extends('layouts.master')

@section('content')

  <div class="album__banner text-center bg--offwhite">
    <h1 class="nlnv__heading kor-main">사진첩</h1>
    <hr class="divider divider--green">
  </div>

  <div class="album__container bg--offwhite">
    <div class="album__wrapper">
      @foreach($albums as $album)
        <?php
          $photos = $album->photos;
          $photo_thumbnail = $photos->where('photo_thumbnail', 1)->pluck('path')[0];
        ?>
        <div class="album__card col-xs-12 col-sm-6 col-md-4">
          <a href="/album/{{ $album->id }}" class="album__card-inner js-transition">
            <div class="album__card-img-wrapper">
              <i class="album__card-icon fa fa-picture-o" aria-hidden="true"></i>
              <img class="album__card-img" src="/images/albums/{{ $album->date . $album->slug }}/{{ $photo_thumbnail }}" alt="">
            </div>
            <div class="album__card-content">
              <h2 class="album__card-title kor-main">{{ $album->title }}</h2>
              <p class="album__card-info">
                <span class="album__card-count text--green">{{ count($photos) }} Photos</span>
                /
                <span class="album__card-date">{{ date_format(date_create($album->date), "M j, Y") }}</span>
              </p>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

@endsection
