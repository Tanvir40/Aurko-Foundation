@include('frontend.partial.header')

				<main class="main">
				<section class="promo-primary">
					<picture>
					<source srcset="{{asset('frontend/img/fff.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/fff.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<h1 class="promo-primary__title"><span>Donors</span> <span>& Partners</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- donors inner start-->
				<style>

.donors-list__item {
    width: 100%;
}

                </style>
				<section class="section donors-inner"><img class="donors-inner__bg" src="{{asset('frontend/img/donors_inner.png')}}" alt="img"/>
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><!--<span class="heading__pre-title">Donors</span>-->
									<h2 class="heading__title"><span>Who Help</span> <span>Us</span></h2>
									<!--<p>Tackling the necessity of safe water for all requires a cooperative and worldwide effort. Many philanthropists have chosen to take action in support of safe water by donating in support of One Drop's projects.</p>-->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<!-- donors slider start-->
								<div class="slider-holder">
									<div class="donors-slider donors-slider--style-2 offset-margin">
										<div class="donors-slider__item">
                                            <div class="donors-slider__img"><a href="https://impact.org.uk/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
                                            <div class="donors-slider__img"><a href="https://dak.org.au/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
                                            <div class="donors-slider__img"><a href="https://www.smiletrain.org/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><a href="https://www.altso.org/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><a href="https://bachaohelp.org/main" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>

										<div class="donors-slider__item">
											<div class="donors-slider__img"><a href="https://www.tlmbangladesh.org/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><a href="https://impactnorway.org/en/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><a href="https://www.wateraid.org/bd/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><a href="https://www.wateraid.org/bd/" target="_blank"><img src="{{asset('frontend/img/demo.jpg')}}" alt="donor"/></a></div>
										</div>

									</div>
								</div>
								<!-- donors slider end-->
							</div>
						</div>
						<style>

                    .pricing-list ul li{

    transition: .3s;
}

                .pricing-list ul li:hover{
    padding-left: 6px;
    transition: .3s;
}

                </style>
						<div class="row">
							<div class="col-6 causes-item__body pricing-list">


								<ul class="donors-list">
								<h2 class="heading__title text-center"><span></span> <span >International</span></h2>
									<li class="donors-list__item"><a class="donors-list__link" href="#"> AAAAAAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">AAAAAAAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#"> AAAAAAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#"> AAAAAAAAAAAAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">AAAAAAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">AAAAAAaAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">AAAAAAAAAA</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">AAAAAAAAAA</a></li>


								</ul>
							</div>
							<div class="col-6 causes-item__body pricing-list">

								<ul class="donors-list text-center">
								<h2 class="heading__title text-center"><span></span> <span >National</span></h2>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBBBB</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">ZBBBBBBBBBBBBB</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBB </a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBBBBB</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBBB</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBBBBB</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBBBB </a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBBBBBBB</a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBB </a></li>
									<li class="donors-list__item"><a class="donors-list__link" href="#">BBBBBBBBB</a></li>

								</ul>
							</div>
						</div>
					</div>
				</section>
				<!-- donors inner end-->
				<!-- info start-->
				<section class="section info no-padding-top">
					<div class="container">
						<div class="row align-items-start margin-bottom">
							<div class="col-xl-5">
								<div class="heading heading--primary"><!--<span class="heading__pre-title">Who we work with</span>-->
									<!--<h2 class="heading__title"><span>Donors</span> <span>& Partners</span></h2>-->
									<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>-->
								</div>
							</div>
							<div class="col-xl-6 offset-xl-1">
								<div class="row offset-margin">
									<!--<div class="col-12 col-md-6 text-md-left text-center">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">People We Helped on 2018</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter">200</span><span>k</span></div>
										</div>
									</div>-->
									<!--<div class="col-12 col-md-6 text-md-left text-center">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">Dollars We Collected</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter">65</span><span>bil</span></div>
										</div>
									</div>-->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="info__img"><img class="img--layout" src="public/frontend/img/firstbackground.jpg" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- info end-->
				<!-- info banner start-->

				<!-- info banner end-->
				<!-- text section start-->
				<section class="section text-section text-section--style-2"><img class="text-section__bg-right" src="public/frontend/img/text-section_right.png" alt="img"/>
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<h2 class="text-section__heading">Thank You</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
								<h3 class="text-section__title">To all our donors, <br/>partners and volunteers</h3>
								<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>-->
							</div>
						</div>
					</div>
				</section>
				<!-- text section end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer')
