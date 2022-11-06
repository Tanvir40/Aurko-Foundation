<footer class="footer" style="background-color:#116f2b">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                       <div class="footer-logo"><a class="footer-logo__link" href="#"><img
                                    class="footer-logo__img" src="{{asset('frontend/img/profilePicture.jpeg')}}" alt="logo" /></a></div>

                        <ul class="footer-socials">
                            <li class="footer-socials__item"><a class="footer-socials__link"
                                    href="https://www.facebook.com/AURKO.Foundation/"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link"
                                    href="https://www.facebook.com/AURKO.Foundation/" target="_blank"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>

                        </ul>
                        <!-- footer socials end-->
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <h4 class="footer__title">{{__('menu.officeaddress')}}</h4>
                        <div class="footer-contacts">
                            <p class="footer-contacts__address">Maa, Plot #39, (1st & 5th floor),
                                Road #01, Sector #02, Block F,
                                Aftabnagar, Dhaka-1212,
                                <br />Bangladesh.</p>

                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <h4 class="footer__title">{{__('menu.quickcontacts')}}</h4>
                        <div class="footer-contacts">
                            <p class="footer-contacts__phone">Phone: <a href="tel:+880 01701677777"> 01674003737</a>
                            </p>

                            <!--<p class="footer-contacts__phone">Fax: <a href="tel:+880 2 9103840">+880 2 9103840</a></p>-->
                            <p class="footer-contacts__mail">Email: <a
                                    href="">info@aurkofoundtion.com</a></p>
                        </div>
                    </div>
                   <!-- <div class="col-sm-6 col-lg-3">
                        <h4 class="footer__title">{{__('menu.donatfotter')}}</h4>
                        <p>Help Us Change the Lives in World</p><a class="button footer__button button--filled"
                            href="public/frontend/public/frontend/img/donate-us.jpg" data-fancybox="images">{{__('menu.donatfotter')}}</a>
                    </div>-->
                </div>
                <div class="row align-items-baseline">
                    <div class="col-md-6">
                        <p class="footer-copyright">© 2022 Aurko Foundation || Technical Support: <a href="http://mubinltd.net"
                                target="_blank">Mubin Ltd.</a></p>
                    </div>
                    <!--<div class="col-md-6">
							<div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and Condition</a></div>
						</div>-->
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
    <!-- libs-->


    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('frontend/js/libs.min.js"')}}></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script>
        $('.new-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: false,
            nav: true
        })

        $(window).on('load',function(){
    var delayMs = 1500; // delay in milliseconds

    setTimeout(function(){
        $('#myModal').modal('show');
    }, delayMs);
});
    </script>
    <!-- scripts-->
    <script src="{{asset('frontend/js/common.min.js')}}"></script>




    <button id="myBtn" onclick="topFunction()"  title="Go to top"><i class="fa fa-chevron-left " aria-hidden="true"></i></button>
</body>


</html>


