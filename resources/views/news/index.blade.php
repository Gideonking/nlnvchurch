@extends('layouts.master')

@section('content')

  <div class="album__banner text-center bg--offwhite">
    <h1 class="nlnv__heading kor-main">교회 소식</h1>
    <hr class="divider divider--green">
  </div>

  @include('news.cards')

@endsection
