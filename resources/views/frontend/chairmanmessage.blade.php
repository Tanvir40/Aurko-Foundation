	@include('frontend.partial.header')

			<main class="main">
				<!--<section class="promo-primary">
					<picture>
						<source srcset="public/frontend/img/story-dtl-bnr-min.jpg" media="(min-width: 992px)"/><img class="img--bg" src="public/frontend/img/story-dtl-bnr-min.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span>Our</span> <span>Projects</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				 stories start-->
				<section class="section stories">
					<div class="container">
						<div class="row offset-70">

							<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
								<div class="stories-item" style="text-align:center; font-style:justify">
									<div class="row align-items-center flex-column-reverse flex-lg-row">
										<div class="col-lg-12 col-xl-12">
											<div class="heading heading--primary" >
												<h4 class="heading__title" style="font-size: 48px;"><span>Message From </span> <span>the Chairman</span></h4>
											</div>
											<p style="text-align: justify;">{{$chairmanmessage->first()->chairmanmessage}}

</p><!--<a class="button stories-item__button button--primary" href="storie-details.php">Read Story</a>-->
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- stories end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer')
