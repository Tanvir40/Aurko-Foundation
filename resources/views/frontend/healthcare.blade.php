@include('frontend.partial.header')


		<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('frontend/img/recent-ttl.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/recent-ttl.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><!--<span class="promo-primary__pre-title">Helpo</span>-->
										<h1 class="promo-primary__title"><span>Healthcare</span> <span></span></h1>
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
						<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">
                            @foreach ($healthcare as $health)
								<div class="causes-item causes-item--style-3">
									<div class="causes-item__body">
										<div class="row align-items-center">
											<div class="col-lg-5 col-xl-4">
												<div class="causes-item__img"><img class="img--bg" src="{{asset('frontend/img/project/health')}}/{{$health->photo}}" alt="img"/></div>
											</div>
											<div class="col-lg-7 col-xl-8">
												<!--<div class="causes-item__action">
													<div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery</div><a class="causes-item__link" href="#">Donate</a>
												</div>-->
												<div class="causes-item__top">
													<h6 class="causes-item__title"> <a href="#">{{$health->project_name}}</a></h6>
													<p>{{$health->project_desp}}

</p>
													<a class="tags__item" href="father-of-the-nation-birthday.html">Details</a>
												</div>

											</div>
										</div>
									</div>
								</div>
                                @endforeach
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
				<!--<section class="bottom-background background--brown">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>-->
				<!-- bottom bg end-->
			</main>
			@include('frontend.partial.footer')
