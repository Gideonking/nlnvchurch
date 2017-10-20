<?php
  $directoryURI = $_SERVER['REQUEST_URI'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('/', $path);
  $active_page = $components[1];
?>

<div class="nav__overlay"></div>
<nav class="nav">
  <a class="nav__link nav__link-mobile" href="#">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </a>
  <a class="nav__link nav__link-logo <?php if($active_page === '') echo 'active'; ?>" href="/">
    <p class="nav__text">NL<br>NV</p>
  </a>
  <a class="nav__link <?php if($active_page === 'about') echo 'active'; ?>" href="/about">
    <i class="nav__icon fa fa-pagelines" aria-hidden="true"></i>
    <p class="nav__text kor-main">교회소개</p>
  </a>
  <a class="nav__link <?php if($active_page === 'messages') echo 'active'; ?>" href="/messages">
    <i class="nav__icon fa fa-quote-right" aria-hidden="true"></i>
    <p class="nav__text kor-main">설교영상</p>
  </a>
  <a class="nav__link <?php if($active_page === 'news') echo 'active'; ?>" href="/news">
    <i class="nav__icon fa fa-bullhorn" aria-hidden="true"></i>
    <p class="nav__text kor-main">교회소식</p>
  </a>
  <a class="nav__link <?php if($active_page === 'gallery') echo 'active'; ?>" href="/gallery">
    <i class="nav__icon fa fa-camera-retro" aria-hidden="true"></i>
    <p class="nav__text kor-main">사진첩</p>
  </a>
  <a class="nav__link <?php if($active_page === 'support') echo 'active'; ?>" href="/support">
    <i class="nav__icon fa fa-heart" aria-hidden="true"></i>
    <p class="nav__text kor-main">협력/후원</p>
  </a>
  <a class="nav__link <?php if($active_page === 'directions') echo 'active'; ?>" href="/directions">
    <i class="nav__icon fa fa-map-signs" aria-hidden="true"></i>
    <p class="nav__text kor-main">찾아오시는길</p>
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
