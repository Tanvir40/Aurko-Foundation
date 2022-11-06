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
										<h1 class="promo-primary__title"><span>Paper &</span> <span>Books</span></h1>
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
