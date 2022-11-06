@include('frontend.partial.header')

			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('frontend/img/backgroundimage.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/backgroundimage.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<h1 class="promo-primary__title"><span>Eid Gift Distribution 2022</span></h1>
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

                            @foreach ($eiddistributiongift2022 as $photo)
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<a href="{{asset('frontend/img/PhotoGallery/eiddistributiongift2022')}}/{{$photo->photo}}" data-fancybox="gallery">
									<img class="img--bg" src="{{asset('frontend/img/PhotoGallery/eiddistributiongift2022')}}/{{$photo->photo}}" alt="img"/>
                                        </a>
									</div>

								</div>
							</div>
                            @endforeach




						</div>

					</div>
				</section>
				<!-- blog end-->
				<!-- bottom bg start-->

				<!-- bottom bg end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer')
