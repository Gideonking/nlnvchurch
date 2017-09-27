@extends('layouts.master')

@section('content')
  <div class="col-sm-8">
    <h1>Sign In</h1>
    <form action="/login" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input class="form-control" type="email" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
      @include('layouts.errors')
    </form>
  </div>
@endsection
