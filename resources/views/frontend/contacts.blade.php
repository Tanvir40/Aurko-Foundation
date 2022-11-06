@include('frontend.partial.header');

		<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="{{asset('frontend/img/unity.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/unity.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><!--<span class="promo-primary__pre-title">Helpo</span>-->
										<h1 class="promo-primary__title"><span>Contacts</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section contacts">
					<div class="container">
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('frontend/img/icon_1-1.png')}}" alt="img"/>
										<svg class="icon icon-item__icon icon--red">
											<use xlink:href="#location-pin"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Maa, Plot #39, (1st & 5th floor),
Road #01, Sector #02, Block F,
Aftabnagar, Dhaka-1212, Bangladesh
</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('frontend/img/icon_2-2.png')}}" alt="img"/>
										<svg class="icon icon-item__icon icon--orange">
											<use xlink:href="#phone-call"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Phone: <a class="icon-item__link" href="tel:+880 2 9103841-3">01674003737</a> </p>
										<!--<p>Fax: <a class="icon-item__link" href="tel:+880 2 9103840">+880 2 9103840</a></p>-->
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('frontend/img/icon_3-3.png')}}" alt="img"/>
										<svg class="icon icon-item__icon icon--green">
											<use xlink:href="#envelope"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<p>Email: <a class="icon-item__link" href="mailto:impact@dhaka.net">info@aurkofoundation.com</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="{{asset('frontend/img/icon_4-4.png')}}" alt="img"/>
										<svg class="icon icon-item__icon icon--blue">
											<use xlink:href="#share"></use>
										</svg>
									</div>
									<div class="icon-item__text">
										<!-- socials start-->
										<ul class="socials">
										<li class="socials__item"><a class="socials__link" href="https://www.facebook.com/www.aurkofoundation.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="https://www.instagram.com/aurkofoundation/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>



										</ul>
										<!-- socials end-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- contacts start-->
				<section class="section contacts no-padding-top">
					<div class="contacts-wrapper">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-xl-6">
								<div class="row">
                        <div class="col-12">
                        	@if ($message = Session::get('form_success'))
                            <div class="alert alert-success contact__msg"  role="alert">
                                {{ $message }}
                            </div>
                              @endif
                        </div>



                    </div>
						<form class="contact_form" action="{{ route('customer.form.save') }}" method="post">
                            @csrf


                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" required="" placeholder="" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" required="" placeholder="" type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Subject
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="subject" id="subject" required="" placeholder="" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your Phone Number
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" id="phone" name="phone" required="" placeholder="" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                How can we help you?
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Hi there, I would like to ..."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send Message">


                        </div>
                    </form>
								</div>
							</div>
						</div>
						<div class="contacts-wrapper__map" id="maps" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y" data-longitude="23.87570" data-latitude="90.46131" data-marker="img/marker.png">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116830.74191445747!2d90.32538702844154!3d23.784414301245683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c766b2e7e8a5%3A0x5262f9629e7edf2!2sAURKO%20Foundation!5e0!3m2!1sen!2sbd!4v1659517369730!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>



						</div>
					</div>
				</section>
				<!-- contacts end-->
				<!-- bottom bg start-->
				<section class="section causes-inner">
					<div class="container">
						<div class="row offset-margin">





						</div>
					</div>

				</section>
				<!-- bottom bg end-->
			</main>
			<!-- footer start-->
		@include('frontend.partial.footer');
