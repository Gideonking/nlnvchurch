@extends('layouts.master')

@section('content')

  <div class="album__banner text-center bg--offwhite">
    <h1 class="nlnv__heading kor-main">사진첩</h1>
    <hr class="divider divider--green">
  </div>

  <div class="album__container bg--offwhite">
    <div class="album__wrapper">
      @foreach($albums as $album)
        <div class="album__card col-xs-12 col-sm-6 col-md-4">
          <a href="/album/{{  $album->id }}" class="album__card-inner">
            <div class="album__card-img-wrapper">
              <i class="album__card-icon fa fa-picture-o" aria-hidden="true"></i>
              <img class="album__card-img" src="https://scontent-sjc2-1.xx.fbcdn.net/v/t1.0-9/22154419_1612635502091026_5963832553173417571_n.jpg?oh=7b8f6d465b2a4b7d98848be557009aea&oe=5AA16FCE" alt="">
            </div>
            <div class="album__card-content">
              <h2 class="album__card-title kor-main">{{ $album->title }}</h2>
              <p class="album__card-info">
                <span class="album__card-count text--green">23 Photos</span>
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
