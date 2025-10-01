@include('frontend.partial.header')

			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('frontend/img/backgroundimage.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/backgroundimage.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container" >
						<div class="row">
							<div class="col-auto">
								<div class="align-container" style="text-align:center;">
									<div class="align-container__item" >
										<h1 class="promo-primary__title"><span>Advisory Board</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog start-->
				<section class="section blog background--brown">

					<div class="container">
						<div class="row" style="text-align:center;">

                            @foreach ($advisorycommittee as $advisorycommitte)
							<div class="col-md-12 col-lg-5 col-xl-4" >
								<div class="blog-item blog-item--style-1" style="text-align:center">
									<div class="blog-item__img">
									<a href="https://tanvirhasan.dev/images/me.jpeg" data-fancybox="gallery">
									<img class="img--bg" src="https://tanvirhasan.dev/images/me.jpeg" alt="img"/>
                                        </a>
									</div>
									<p>{{$advisorycommitte->name}}</p>
									<p> {{$advisorycommitte->position}}</p>
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
