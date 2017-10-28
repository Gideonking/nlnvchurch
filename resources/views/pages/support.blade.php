@extends('layouts.master')

@section('content')

<div class="support__container">
  <div class="support__slider">
    <div class="support__slide text-center js-lazy" data-src="/images/support/support-uvillage-bg.jpg">
      <div class="col-sm-6 col-offset-sm-3">
        <a href="http://www.uvillage.ca/" target="_blank">
          <img class="support__slide-logo js-lazy" data-src="/images/support/support-uvillage.png" alt="uVillage church">
        </a>
        <h2 class="support__slide-title kor-main">캐나다 유빌리지 교회<br>(U Village Church)</h2>
        <hr class="divider divider--darkgreen">
        <h3 class="support__slide-subtitle kor-main">협력 교회</h3>
        <div class="connect__icon-wrapper connect__icon-wrapper--dark connect__icon-wrapper--full">
          <a class="connect__icon" href="https://www.facebook.com/uvillagechurch" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="connect__icon" href="mailto:uVillagechurch@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
          <a class="connect__icon" href="https://vimeo.com/user61885246" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="support__slide text-center js-lazy" data-src="/images/support/support-namb-bg.jpg">
      <div class="col-sm-6 col-offset-sm-3">
        <a href="http://www.namb.net/" target="_blank">
          <img class="support__slide-logo js-lazy" data-src="/images/support/support-namb.jpg" alt="North America Mission Board">
        </a>
        <h2 class="support__slide-title">NAMB<br>(North America Mission Board)</h2>
        <hr class="divider divider--darkgreen">
        <h3 class="support__slide-subtitle kor-main">후원 단체</h3>
        <div class="connect__icon-wrapper connect__icon-wrapper--dark connect__icon-wrapper--full">
          <a class="connect__icon" href="https://www.facebook.com/NAMB.SBC" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="connect__icon" href="https://vimeo.com/namb" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
          <a class="connect__icon" href="https://twitter.com/NAMB_SBC" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="support__slide text-center js-lazy" data-src="/images/support/support-imb-bg.jpg">
      <div class="col-sm-6 col-offset-sm-3">
        <a href="http://www.imb.org/" target="_blank">
          <img class="support__slide-logo js-lazy" data-src="/images/support/support-imb.jpg" alt="International Mission Board">
        </a>
        <h2 class="support__slide-title">IMB<br>(International Mission Board)</h2>
        <hr class="divider divider--darkgreen">
        <h3 class="support__slide-subtitle kor-main">후원 단체</h3>
        <div class="connect__icon-wrapper connect__icon-wrapper--dark connect__icon-wrapper--full">
          <a class="connect__icon" href="https://www.facebook.com/imb.sbc/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="connect__icon" href="http://twitter.com/imb_sbc" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a class="connect__icon" href="https://www.youtube.com/user/IMBconnecting" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a class="connect__icon" href="https://www.pinterest.com/imbsbc/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
          <a class="connect__icon" href="https://www.instagram.com/imbmissions/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="support__navgination">
  <a href="#">
    Prev
  </a>
  <a href="#">
    Next
  </a>
</div>

@endsection
