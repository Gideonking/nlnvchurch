@extends('layouts.master')

@section('content')
  <div class="home__banner">
    <div class="home__banner-text-container">
      <h1 class="home__banner-text">
        <span class="home__banner-text--top">A church that <span class="home__banner-text--accent">plants</span> churches</span>
        <span class="home__banner-text--bottom">for the <span class="home__banner-text--accent">next</span> generation</span>
        <span class="home__banner-text--sub">New Life New Vision Church</span>
      </h1>
    </div>
  </div>

  <div class="home__container home__service clearfix">
    <div class="col-lg-8 col-lg-offset-2 text-center">
      <h2 class="nlnv__heading">Service Times</h2>
      <hr class="divider divider--green">
      <p class="home__service-times"><b>Sunday Service:</b> 10:00AM &amp; 12:00PM</p>
      <p class="home__service-times"><b>Wednesday Prayer:</b> 6:30PM</p>
      <p class="home__service-times"><b>Weekday Prayer:</b> 5:30AM (Tue-Fri) &amp; 6:30AM (Sat)</p>
      <div class="home__join">
        <h2 class="home__join-title">Come <span class="accent--light">Join</span> Us!</h2>
        <h3 class="home__join-time"></h3>
        <p class="home__join-label">DAYS HRS MINS SECS</p>
        <p class="home__join-for">For Sunday Service</p>
      </div>
    </div>
  </div>

  <div class="home__container home__message clearfix">
    <div class="col-lg-8 col-lg-offset-2">
      <h2 class="home__message-title">Latest Messages</h2>
      <a class="home__message-btn" href="#">Watch More</a>
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ $ytvidid }}?rel=0" frameborder="0" allowfullscreen></iframe>
      <hr class="divider divider--green">
      <div class="home__message-desc text-center">
        <p>Series "The Fruit of the Spirit" - Love</p>
        <p>October 8, 2017</p>
        <p>Pastor Peter Choi</p>
      </div>
    </div>
  </div>

  <div class="home__container home__container--blue clearfix">
    <div class="col-lg-10 col-lg-offset-1 text-center">
      <h2 class="nlnv__heading">Events</h2>
      <hr class="divider divider--gold divider--margin-b-lg">
      {{-- Single Event Card 1 --}}
      <div class="col-lg-4">
        <div class="card__container">
          <div class="card__thumbnail">
            <div class="card__image" style="background-image: url(images/events/korean-school.jpg);"></div>
          </div>
          <div class="card__content">
            <div class="card__category">9.23.2017</div>
            <h1 class="card__title">NLNV Korean School</h1>
            <h2 class="card__subtitle">Fall 2017 Class Begins!</h2>
            <div class="card__description">
              <p>Every Saturday 9:30AM - 11:30AM</p>
            </div>
            <div class="card__cta">
              <a class="text-link" href="#">View Detail</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Single Event Card 2 --}}
      <div class="col-lg-4">
        <div class="card__container">
          <div class="card__thumbnail">
            <div class="card__image" style="background-image: url(images/events/homeless-ministry.jpg);"></div>
          </div>
          <div class="card__content">
            <div class="card__category">Daily</div>
            <h1 class="card__title">Homeless Ministry</h1>
            <h2 class="card__subtitle">Share the love of God.</h2>
            <div class="card__description">
              <p>To reach the homeless men and women in our community and share with them the love of God.</p>
            </div>
            <div class="card__cta">
              <a class="text-link" href="#">View Detail</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Single Event Card 3 --}}
      <div class="col-lg-4">
        <div class="card__container">
          <div class="card__thumbnail">
            <div class="card__image" style="background-image: url(images/events/read-bible.jpg);"></div>
          </div>
          <div class="card__content">
            <div class="card__category">Daily</div>
            <h1 class="card__title">Daily Bible Reading</h1>
            <h2 class="card__subtitle">Read the word of God.</h2>
            <div class="card__description">
              <p>Daily encouragement from God's word by reading 3 chapters per day.</p>
            </div>
            <div class="card__cta">
              <a class="text-link" href="#">View Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="welcome-card-container">
    <div class="col-md-12 col-lg-10 col-lg-offset-1 card-container welcome-card--events">
      <div class="card-title">
        <h2>Events</h2>
      </div>
      <div class="slider">
        <div>
          <div class="events-section events-section--image col-md-6" style="background-image: url(/images/events/korean-school.jpg);"></div>
          <div class="events-section events-section--content col-md-6">
            <h3 class="events-title">NLNV Korean School Begins</h3>
            <hr class="divider divider--darkgreen">
            <div class="events-desc">
              <p>9.23.2017</p>
              <p>Every Saturday 9:30AM - 11:30AM</p>
            </div>
            <a class="events-btn" href="#">LEARN MORE</a>
          </div>
        </div>
        <div>
          <div class="events-section events-section--image col-md-6" style="background-image: url(/images/events/homeless-ministry.jpg);"></div>
          <div class="events-section events-section--content col-md-6">
            <h3 class="events-title">Homeless Ministry</h3>
            <hr class="divider divider--darkgreen">
            <div class="events-desc">
              <p>To reach the homeless men and women in our community and share with them the love of God.</p>
              <p></p>
            </div>
            <a class="events-btn" href="#">LEARN MORE</a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="connect__container">
    <div class="connect__wrapper">
      <h2 class="nlnv__heading">Connect with us</h2>
      <hr class="divider divider--darkgreen">
      <div class="connect__icon-wrapper">
        <a class="connect__icon" href="mailto:nlnvchurch@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a class="connect__icon" href="tel:310-991-6544"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a class="connect__icon" href="https://www.facebook.com/pages/New-Life-New-Vision-Church/754157684605483" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="connect__icon" href="https://www.youtube.com/channel/UCdmLI5xDRzZmNVAch8HCyGg" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
@endsection
