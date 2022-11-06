   @include('frontend.partial.header');
        <!-- header end-->
        <main class="main">
            <!-- promo start-->
            <section class="promo " style="margin-top: 61px; ">

                <div class="owl-carousel owl-theme">
                    @foreach ($banners as $banner)
                        @if ($banner->status == 1)
                            <div class="item">
                                <img src="{{asset('frontend/img/')}}/{{$banner->bannerimage}}" alt="" media="(min-width: 800px)" >
                            </div>
                        @endif
                    @endforeach
                    </div>



















                <!-- promo socials start-->
                <ul class="promo-socials ">
                    <li class="promo-socials__item "><a class="promo-socials__link " href="# "><i class="fa fa-instagram "
                                aria-hidden="true "></i></a></li>


                    <li class="promo-socials__item "><a class="promo-socials__link " href="# "><i class="fa fa-facebook "
                                aria-hidden="true "></i></a></li>
                </ul>
                <!-- promo socials end-->
                <!-- promo pannel start-->

                <!-- promo pannel end-->
                <!-- slider nav start-->
                <div class="slider__nav slider__nav--promo ">
                    <div class="promo-slider__count "></div>
                    <div class="slider__arrows ">
                        <div class="slider__prev "><i class="fa fa-chevron-left " aria-hidden="true "></i>
                        </div>
                        <div class="slider__next "><i class="fa fa-chevron-right " aria-hidden="true "></i>
                        </div>
                    </div>
                </div>
                <!-- slider nav end-->

            </section>
            <!-- promo end-->
            <!-- about us start-->
            <section class="section about-us" style="padding:56px 0">
					<div class="container">


						<div class="row align-items-center">

							<div class="col-lg-07 col-xl-07 offset-xl-1">
								<div class="heading heading--primary" style="text-decoration: underline;"><!--<span class="heading__pre-title">About Us</span>-->
									<h2 class="heading__title"><span>Mission </span></h2>
								</div>
								<!--<p><strong>Thresher shark rudd African lungfish silverside,
								Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish."</strong></p>-->

                                    @foreach ($mission_vision as $mission)
                                    <p>{{$mission->mission}}</p><br>
                                    @endforeach
                                    </br>


									<div style="text-decoration: underline;"><h2 class="heading__title"><span>Vision </span></h2></div>


                                    @foreach ($mission_vision as $vision)
                                    <p>{{$vision->vision}}</p>
                                    @endforeach


							</div>
														<div class="col-lg-4 col-xl-4">

							</div>
						</div>


					</div>
				</section>

            <!-- about us end-->

              <section class="section causes-inner">
                    <div class="container">
                        <div class="row offset-margin">
                            <div class="col-sm-12 text-center" style="text-decoration: underline;">
                            <div class="heading heading--primary">
                                <h2 class="heading__title no-margin-bottom"><span>{{__('menu.ourrunningprojects')}}</span></h2>
                                </br>
                            </div>
                        </div>
                        @foreach ($running_project as $project)
                                <div class="col-md-6 col-lg-4">
                                    <div class="causes-item causes-item--primary">
                                        <div class="causes-item__body">
                                            <div class="causes-item__top" style="text-align: center;">
                                                <h6 class="causes-item__title"> <a href="cause-details.html">{{$project->project_name}}</a></h6>
                                                <p></p>
                                            </div>
                                            <div>
                                                <p>{{$project->project_desp}}</p>
                                            </div>

                                        </div><a class="button causes-item__button button--primary" target="_blank" href="">See Details</a>
                                    </div>
                                </div>
                        @endforeach




                        </div>
                    </div>

                </section>


            <!-- icons section start-->

            <!-- icons section end-->



            <!-- causes start-->




            <!-- text section end-->
            <!-- testimonials style-2 start-->

            <!-- testimonials style-2 end-->
            <!-- blog start-->

            <!-- blog end-->
            <!-- donors start-->

            <!-- donors end-->

        </main>


        <style>

            /*Social Feeds*/

            section.social_feeds {
                background-color: #20212b;
            }

            section.social_feeds h2 {
                color: #fff;
                padding-top: 80px;
                padding-bottom: 50px;
            }

            section.social_feeds h5 {
                color: #fff;
            }

            section.social_feeds h5 {
                color: #fff;
                padding-bottom: 10px;
            }

            section.social_feeds {
                background-color: #20212b;
                padding-bottom: 50px;
            }

            div#instafeed-container a {
                width: 33%;
                display: block !important;
                float: left;
                height: auto;
                padding: 10px;
            }

            div#instafeed-container a img {
                width: 100%;
            }

            div#instafeed-container {
                display: block !important;
                overflow: hidden;
            }
        </style>

       <!--  <section class="social_feeds" style="background-color:#717571">
            <div class="container">
            <h2 class="heading__title no-margin-bottom text-center"><span>Social</span>
                                    <span>Feeds</span></h2>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5 class="text-center"><i class="fa fa-facebook-square"></i>&nbsp;Facebook Feed</h5>
                        <div class="fb-page" data-href="https://www.facebook.com/" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/www.impactfoundationbd.org/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/">Aurko Foundation</a></blockquote></div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center"><i class="fa fa-instagram"></i>&nbsp;Instagram Feed</h5>

                        <script src="../static.elfsight.com/platform/platform.js" defer></script>
<div class="elfsight-app-44a8e829-8dcb-485f-a280-c01782c84d30"></div>
                    </div>
                </div>
            </div>
        </section> -->

        <style>

        .modal-content {
            width: 630px;
            }
        </style>
<!-- <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Aurko Foundation Official Notice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

               <img src="frontend/img/JTAnniversary.jpg">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
                <button><a class="aside-menu__link" href="locale/bn">Bangla

                                        </a></button>
            </div>
        </div>
    </div>
</div> -->
        <!-- footer start-->
        @include('frontend.partial.footer');
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
