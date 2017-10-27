@extends('layouts.master')

@section('content')

  <div class="about__banner text-center">
    <h1 class="nlnv__heading kor-main">교회 소개</h1>
    <hr class="divider divider--blue">
  </div>
  <div class="about__tab-section">
  	<ul class="about__tab-lists">
  		<li class="about__tab-list active kor-main">비전</li>
  		<li class="about__tab-list kor-main">인사말</li>
  		<li class="about__tab-list kor-main">섬기는 분들</li>
  	</ul>
  	<ul class="about__tab-contents">
  		<li class="about__tab-content about__tab-content--vision active">
  			<div class="about__tab-content-wrapper kor-main">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <p class="nlnv__subheading divider--wrap text--gold">뉴라이프 뉴비젼 교회는 "다음 세대를 위해 교회를 개척하는 교회" 라는 사명을 갖고 계속적인 교회 개척을 목표로 사역하는 교회입니다.</p>
              <i class="about__vision-icon fa fa-handshake-o" aria-hidden="true"></i>
              <p>다음 세대를 준비하는 교회</p>
              <p>"A church that plans for the next generation"</p>
              <hr class="divider">
              <i class="about__vision-icon fa fa-child" aria-hidden="true"></i>
              <p>다음 세대를 이끌어갈 리더를 세우는 교회</p>
              <p>"A church that raises leaders for the next generation"</p>
              <hr class="divider">
              <i class="about__vision-icon fa fa-globe" aria-hidden="true"></i>
              <p>다음 세대를 위해 선교하는 교회</p>
              <p>"A church that spreads the gospel for the next generation"</p>
              <hr class="divider">
            </div>
          </div>
  			</div>
  		</li>
  		<li class="about__tab-content about__tab-content--pastor">
  			<div class="about__tab-content-wrapper kor-main">
          <div class="row">
            <div class="col-md-3 col-md-offset-2">
              <img class="about__tab-image margin-bottom-xl" src="images/about/nlnv-about-pastor.jpg" alt="">
            </div>
            <div class="col-md-5">
              <p class="nlnv__subheading divider--wrap text--gold">환영합니다!</p>
              <div class="about__tab-introduction">
                <p>New Life New Vision 교회를 방문해 주시는 여러분 모두를 환영합니다.</p>
                <p>우리 뉴라이프 뉴비전 교회는 미국 최대의 복음주의 교단인 남침례교단 (Southern Baptist Convention)에 속해 있습니다. 우리 교회는 "다음 세대를 위해 교회를 개척하는 교회" 라는 사명을 갖고 지속적인 교회 개척을 목표로 사역하는 교회입니다.</p>
                <p>저는 우리 교회가 따뜻함이 넘치는 교회, 하나님이 기뻐하시는 열매를 풍성히 맺는 교회, 선한 영향력을 주는 교회, 삶 가운데 지친 영혼들이 힘을 공급받는 교회, 기도와 기적이 넘치는 교회가 되길 소망합니다.</p>
                <p>믿음 안에서 계속적인 만남이 있길 바라며...</p>
              </div>
              <p>In Him,<br>Peter 최 목사</p>
              <p class="nlnv__subheading divider--wrap text--gold margin-top-xl">약력</p>
              <p>UCLA B.A.</p>
              <p>Golden Gate Baptist Theological Seminary M.Div. / M.A.</p>
            </div>
          </div>
  			</div>
  		</li>
  		<li class="about__tab-content about__tab-content--leader">
  			<div class="about__tab-content-wrapper kor-main">
          <div class="row">
            <div class="col-md-4">
              <img class="about__tab-image" src="images/about/about-pastor.jpg" alt="">
              <p class="nlnv__subheading divider--wrap text--gold margin-top-sm">담임목사</p>
              <div class="about__tab-introduction margin-bottom-lg-max-desktop">
                <p>피터 최 (Peter B. Choi)</p>
                <a class="about__tab-icon text-link margin-right-sm" href="mailto:pbochoi@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                <a class="about__tab-icon text-link" href="tel:3109916544"><i class="fa fa-phone" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <img class="about__tab-image" src="images/about/about-missionary.jpg" alt="">
              <p class="nlnv__subheading divider--wrap text--gold margin-top-sm">섬김/행동 전도사</p>
              <div class="about__tab-introduction margin-bottom-lg-max-desktop">
                <p>황수용</p>
                <a class="about__tab-icon text-link" href="mailto:sooyong1982@naver.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <img class="about__tab-image" src="images/about/about-secretary.jpg" alt="">
              <p class="nlnv__subheading divider--wrap text--gold margin-top-sm">교육부 간사</p>
              <div class="about__tab-introduction">
                <p>함경수</p>
                <a class="about__tab-icon text-link" href="mailto:hamks@yahoo.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
  			</div>
  		</li>
  	</ul>
  </div>
  <div class="about__card-container">
    <div class="col-md-4 col-sm-6 about__card about__card--leader">
      <h3 class="nlnv__heading--sm kor-main">목장 리더</h3>
      <hr class="divider divider--blue">
      <p class="about__card-info kor-main">매주 (수)</p>
      <p class="about__card-info kor-main">7:30-8:30PM 교회 사무실</p>
    </div>
    <div class="col-md-4 col-sm-6 about__card about__card--faith">
      <h3 class="nlnv__heading--sm kor-main">믿음의 삶</h3>
      <hr class="divider divider--blue">
      <p class="about__card-info kor-main">매주 (목)</p>
      <p class="about__card-info kor-main">7:00-9:00PM 교회</p>
    </div>
    <div class="col-md-4 col-sm-6 about__card about__card--disciple">
      <h3 class="nlnv__heading--sm kor-main">제자의 삷</h3>
      <hr class="divider divider--blue">
      <p class="about__card-info kor-main">매주 (토)</p>
      <p class="about__card-info kor-main">9:30-11:30AM 교회</p>
    </div>
    <div class="col-md-4 col-sm-6 about__card about__card--bible">
      <h3 class="nlnv__heading--sm kor-main">성경 통독</h3>
      <hr class="divider divider--blue">
      <p class="about__card-info kor-main">매주 (금)</p>
      <p class="about__card-info kor-main">7:00-9:00PM 교회</p>
    </div>
    <div class="col-md-4 col-sm-6 about__card about__card--pray">
      <h3 class="nlnv__heading--sm kor-main">중보 기도</h3>
      <hr class="divider divider--blue">
      <p class="about__card-info kor-main">매주 (수)</p>
      <p class="about__card-info kor-main">6:30-7:30PM 본당</p>
    </div>
    <div class="col-md-4 col-sm-6 about__card about__card--school">
      <h3 class="nlnv__heading--sm kor-main">한글 학교</h3>
      <hr class="divider divider--blue">
      <p class="about__card-info kor-main">매주 (토)</p>
      <p class="about__card-info kor-main">9:30-11:30AM</p>
    </div>
  </div>

@endsection
