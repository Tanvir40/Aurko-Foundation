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
										<h1 class="promo-primary__title"><span>Video Gallery</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog start-->
				<style>
                .galleryzoom:hover {



}

                </style>
				<section class="section blog background--brown">
					<div class="container">
						<div class="row offset-margin">



							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="col-md-6 col-lg-5 col-xl-4">
								<iframe width="353" height="380" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
								<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="col-md-6 col-lg-5 col-xl-4">
								<iframe width="353" height="380" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
								<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="col-md-6 col-lg-5 col-xl-4">
								<iframe width="353" height="380" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
								<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="col-md-6 col-lg-5 col-xl-4">
								<iframe width="353" height="380" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
								<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="col-md-6 col-lg-5 col-xl-4">
								<iframe width="353" height="380" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
								<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="col-md-6 col-lg-5 col-xl-4">
								<iframe width="353" height="380" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
