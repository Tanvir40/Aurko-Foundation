@include('frontend.partial.header')

		<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('frontend/img/unnamed.jpg"')}} media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/unnamed.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><!--<span class="promo-primary__pre-title">Helpo</span>-->
										<h1 class="promo-primary__title"><span></span> <span>Publication</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- causes inner start-->
				<section class="section causes-inner">
					<div class="container">
						<div class="row offset-margin">
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Publications</a></h6>
											<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>-->
										</div>
										<div class="causes-item__img">
											<a href=""><img class="img--bg" src="{{asset('frontend/img/annual2019.jpg')}}" alt="img"/></a>
										</div>

									</div><a class="button causes-item__button button--primary" target="_blank" href="{{asset('frontend/pdf/IMPACT-Annual-Report-and-Accounts-2018-19-1.pdf')}}">See Details</a>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Publications-001</a></h6>
											<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>-->
										</div>
										<div class="causes-item__img">
											<img class="img--bg" src="{{asset('frontend/img/annual2019.jpg')}}" alt="img"/>
										</div>

									</div><a class="button causes-item__button button--primary" target="_blank" href="{{asset('frontend/pdf/IMPACT-Annual-Report-and-Accounts-2018-19-1.pdf')}}">See Details</a>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Publications-002</a></h6>
											<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>-->
										</div>
										<div class="causes-item__img">
											<img class="img--bg" src="{{asset('frontend/img/annual2019.jpg')}}" alt="img"/>
										</div>

									</div><a class="button causes-item__button button--primary" target="_blank" href="{{asset('frontend/pdf/IMPACT-Annual-Report-and-Accounts-2018-19-1.pdf')}}">See Details</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Publications-002</a></h6>
											<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>-->
										</div>
										<div class="causes-item__img">
											<img class="img--bg" src="{{asset('frontend/img/annual2019.jpg')}}" alt="img"/>
										</div>

									</div><a class="button causes-item__button button--primary" target="_blank" href="{{asset('frontend/pdf/IMPACT-Annual-Report-and-Accounts-2018-19-1.pdf')}}">See Details</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Publications-003</a></h6>
											<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>-->
										</div>
										<div class="causes-item__img">
											<img class="img--bg" src="{{asset('frontend/img/annual2019.jpg')}}" alt="img"/>
										</div>

									</div><a class="button causes-item__button button--primary" target="_blank" href="{{asset('frontend/pdf/IMPACT-Annual-Report-and-Accounts-2018-19-1.pdf')}}">See Details</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Publications-004</a></h6>
											<!--<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>-->
										</div>
										<div class="causes-item__img">
											<img class="img--bg" src="{{asset('frontend/img/annual2019.jpg')}}" alt="img"/>
										</div>

									</div><a class="button causes-item__button button--primary" target="_blank" href="{{asset('frontend/pdf/IMPACT-Annual-Report-and-Accounts-2018-19-1.pdf')}}">See Details</a>
								</div>
							</div>

						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-12">

								<ul class="pagination">
									<li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
									</li>
									<li class="pagination__item"><span>1</span></li>
									<li class="pagination__item pagination__item--active"><span>2</span></li>
									<li class="pagination__item"><span>3</span></li>
									<li class="pagination__item"><span>4</span></li>
									<li class="pagination__item"><span>5</span></li>
									<li class="pagination__item pagination__item--disabled">...</li>
									<li class="pagination__item"><span>12</span></li>
									<li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</section>
				<!-- causes inner end-->
				<!-- bottom bg start-->

				<!-- bottom bg end-->
			</main>
			@include('frontend.partial.footer')
