<nav class="nav">
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-leaf" aria-hidden="true"></i>
    <p class="nav__text">About</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-users" aria-hidden="true"></i>
    <p class="nav__text">Staff</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-quote-right" aria-hidden="true"></i>
    <p class="nav__text">Messages</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-bullhorn" aria-hidden="true"></i>
    <p class="nav__text">News</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-calendar" aria-hidden="true"></i>
    <p class="nav__text">Events</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-camera-retro" aria-hidden="true"></i>
    <p class="nav__text">Gallery</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-heart" aria-hidden="true"></i>
    <p class="nav__text">Support</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-envelope" aria-hidden="true"></i>
    <p class="nav__text">Contact</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-map-signs" aria-hidden="true"></i>
    <p class="nav__text">Directions &amp; Times</p>
  </a>

  @if(auth()->check())
    <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
  @endif
</nav>
