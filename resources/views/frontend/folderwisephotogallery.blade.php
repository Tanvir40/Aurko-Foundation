@include('frontend.partial.header')

			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('frontend/img/backgroundimage.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/frontend/img/backgroundimage.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<h1 class="promo-primary__title"><span>Photo Gallery</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog start-->
				<section class="section blog background--brown"><img class="blog__bg" src="{{asset('frontend/img/events_inner-bg.png')}}" alt="img"/>
					<div class="container">
						<div class="row offset-margin">

						    <div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<a href="{{asset('sunamganjfloodreliefproject')}}">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/sunamganjfloodreliefproject')}}/{{$sunamganjfloodreliefproject->first()->photo}}" alt="img"/>
                                        </a>
									</div>
									Sunamganj Flood Relief Project
								</div>
							</div>

							<div class="col-md-6 col-lg-5 col-xl-4" style="text-align: center;">
								<div class="blog-item blog-item--style-1">

									<div class="blog-item__img">
									<a href="{{asset('eiddistributiongift2021')}}">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/eiddistributiongift2021')}}/{{$eiddistributiongift2021->first()->photo}}" alt="img"/>
                                        </a>
									</div>
									Eid Gift Distribution 2021
								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4" style="text-align: center;">
								<div class="blog-item blog-item--style-1">

									<div class="blog-item__img">
									<a href="{{asset('eiddistributiongift2022')}}">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/eiddistributiongift2022')}}/{{$eiddistributiongift2022->first()->photo}}" alt="img"/>
                                        </a>
									</div>
									Eid Gift Distribution 2022
								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4" style="text-align: center;">
								<div class="blog-item blog-item--style-1">

									<div class="blog-item__img">
									<a href="{{asset('freebloodgrouping')}}">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/freebloodgrouping')}}/{{$freebloodgrouping->first()->photo}}" alt="img"/>
                                        </a>
									</div>
									Free Blood Grouping
								</div>
							</div>

								<div class="col-md-6 col-lg-5 col-xl-4" style="text-align: center;">
								<div class="blog-item blog-item--style-1">

									<div class="blog-item__img">
									<a href="{{asset('freemaskdistribution')}}">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/freemaskdistribution')}}/{{$freemaskdistribution->first()->photo}}" alt="img"/>
                                        </a>
									</div>
									Free Mask Distribution
								</div>
							</div>
								<div class="col-md-6 col-lg-5 col-xl-4" style="text-align: center;">
								<div class="blog-item blog-item--style-1">

									<div class="blog-item__img">
									<a href="{{asset('iftarwithmaanibash')}}">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/iftarwithmaanibash')}}/{{$iftarwithmaanibash->first()->photo}}" alt="img"/>
                                        </a>
									</div>
									Iftar with Maa Nibash
								</div>
							</div>







						</div>

					</div>
				</section>
				<!-- blog end-->
				<!-- bottom bg start-->

				<!-- bottom bg end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer')
