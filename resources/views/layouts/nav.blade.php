<nav class="nav">
  <a class="nav__link nav__link-logo" href="/">
    <p class="nav__text">NL<br>NV</p>
  </a>
  <a class="nav__link" href="#">
    <i class="nav__icon fa fa-pagelines" aria-hidden="true"></i>
    <p class="nav__text">About</p>
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
    <p class="nav__text">Directions</p>
  </a>

  <a class="nav__social" title="Facebook" href="https://www.facebook.com/pages/New-Life-New-Vision-Church/754157684605483" target="_blank">
    <i class="fa fa-facebook-square" aria-hidden="true"></i>
  </a>
  <a class="nav__social" title="YouTube" href="https://www.youtube.com/channel/UCdmLI5xDRzZmNVAch8HCyGg" target="_blank">
    <i class="fa fa-youtube-play" aria-hidden="true"></i>
  </a>

  @if(auth()->check())
    <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
  @endif
</nav>
