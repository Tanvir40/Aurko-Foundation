<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/favicon.html" />
    <title>Aurko Foundation </title>
    <!-- styles-->
    <link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/frontend/css/styles.min.css" />
    <link rel="stylesheet" href="public/frontend/css/custom.css" />
    <style>
    .causes-item__body {
        min-height: 0px;
    }
    </style>
    <!-- web-font loader-->
    <script>   
    WebFontConfig = {

        google: {

            families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

        }

    }

    function font() {

        var wf = document.createElement('script')

        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
        wf.type = 'text/javascript'
        wf.async = 'true'

        var s = document.getElementsByTagName('script')[0]

        s.parentNode.insertBefore(wf, s)

    }

    font()
    </script>

    <style>
    span.aside-dropdown__close {
        height: 35px;
        width: 35px;
}
        .main-menu__sub-list {background-color: #193e21;
    }
    </style>
</head>

<body>
   <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="d1N7A1E4"></script>





    <div class="page-wrapper">
        <!-- aside dropdown start-->
        <div class="aside-dropdown">
            <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
                    <img src="public/frontend/img/svg/close.svg" class="img-fluid img-icon">
                </span>
                <div class="aside-dropdown__item d-lg-none d-block">

                    
                    <ul class="aside-menu">
                       <!--  <li class="aside-menu__item aside-menu__item--active"><a class="aside-menu__link"
                                href="javascript:void(0);"><span>Home</span></a>

                        </li> -->
                            
                                 <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="javascript:void(0);"><span>{{__('menu.who_we_are')}}
                                        </span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('ourpatron')}}"><span>{{__('menu.about_us')}}</span></a></li>
                                       <!--  <li><a href="{{asset('ourpatron')}}"><span>{{__('menu.ourteam')}}</span></a></li> -->
                                        <li><a href="{{asset('executivecommittee')}}"><span>{{__('menu.executivecommittee')}}</span></a></li>


                                        <li><a href="{{asset('advisorycommittee')}}"><span>{{__('menu.advisingboard')}}</span></a></li>
                                       
                                        <!-- <li><a href="{{asset('ourpartner')}}"><span>{{__('menu.ourpartners')}}</span></a></li>
                                        <li><a href="{{asset('ourstaff')}}"> <span>{{__('menu.our_staff')}}</span></a></li> -->
                                        <li><a href="{{asset('chairmanmessage')}}"><span>{{__('menu.messagechairman')}}</span></a></li>
                                       

                                    </ul>
                                    <!-- sub menu end-->
                                </li>
                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="javascript:void(0);"><span>{{__('menu.our_works')}}</span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('emergenceyaid')}}"><span>{{__('menu.emergencyaid')}}</span></a></li>
                                        <!-- <li><a href="{{asset('emergenceyaid')}}"><span>{{__('menu.reliefcharity')}}</span></a></li> -->
                                        <li><a href="{{asset('healthcare')}}"><span>{{__('menu.healthcare')}}</span></a></li>
                                        <li><a href="{{asset('education')}}"><span>{{__('menu.education')}}</span></a></li>
                                        <!--<li><a href="{{asset('rehabitationcare')}}"><span>{{__('menu.rehabitaioncare')}}</span></a></li>-->
                                        <li><a href="{{asset('skilldevelopment')}}"><span>{{__('menu.skilldevelopment')}}</span></a></li>
                                         <li><a href="{{asset('economicdevelopment')}}"><span>{{__('menu.economicdevelopment')}}</span></a></li>
                                         <li><a href="{{asset('covidprojects')}}"><span>{{__('menu.covid19')}}</span></a></li>
                                        
                                        
                                       

                                    </ul>
                                    <!-- sub menu end-->
                                </li>
                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="{{asset('noticeboard')}}"><span>{{__('menu.noticeboard')}}</span></a>
                                    <!-- sub menu start-->
                                    <!-- <ul class="main-menu__sub-list">
                                        <li><a href="about.html"><span>About IFB</span></a></li>
                                        <li><a href="cmessage.html"><span>Chairman`s Message</span></a></li>
                                        <li><a href="dmessage.html"><span>Director`s Message</span></a></li>
                                        <li><a href="trustee.html"><span>Board of Trustees</span></a></li>
                                        <li><a href="mgmtteam.html"><span>Management Team</span></a></li>
                                        <li><a href="majorintervention.html"><span>Major Intervention</span></a></li>
                                        <li><a href="workingarea.html"> <span>Working Area</span></a></li>
                                        <li><a href="{{asset('donors')}}"><span>Our Donnors</span></a></li>

                                    </ul> -->
                                    <!-- sub menu end-->
                                </li>


                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="javascript:void(0);"><span> {{__('menu.publication')}}</span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('articles')}}"><span>{{__('menu.articles')}}</span></a></li>
                                <li><a href="{{asset('paperandbooks')}}"><span>{{__('menu.paperandbooks')}}</span></a></li>
                                <li><a href="#"><span>{{__('menu.newsletter')}}</span></a></li>


                                    </ul>
                                    <!-- sub menu end-->
                                </li>

                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="{{asset('ongoingproject')}}"><span>{{__('menu.ongoingproject')}} </span></a>

                                </li>

                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="{{asset('news')}}"><span>{{__('menu.newsgallery')}}</span></a>

                                        <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('news')}}"><span>{{__('menu.newss')}}</span></a></li>
                                        <li><a href="{{asset('photogallery')}}"><span>{{__('menu.photo')}}</span></a>        </li>
                                        <li><a href="{{asset('videogallery')}}"> <span>{{__('menu.video')}}</span></a></li>
                                        

                                    </ul>

                                </li>



                                <li class="main-menu__item"><a class="main-menu__link"
                                        href="{{asset('contacts')}}"><span>{{__('menu.contacts')}}</span></a></li>
                                
                                <li class="aside-menu__item has-sub"><a class="aside-menu__link" href="locale/en">English <i
                                    class="fa fa-plus"></i>
                                <ul class="sub_item_list">
                                    <li class="aside-menu__item"><a class="aside-menu__link" href="locale/bn">Bangla
                                            
                                        </a></li>

                                   
                                </ul>
                            </a></li>

                            
                            </ul>
                </div>
                <div class="aside-dropdown__item">
                    
                    <!-- aside menu end-->
                    <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link"
                            href="mailto:aurkofoundation@gail.com">aurkofoundation@gmail.com</a></div>
                    <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a
                            class="aside-inner__link" href="tel:+180012345678">+8801842-495249</a></div>
                    <!--<div class="aside-inner"><span class="aside-inner__title">Fax numbers</span><a
                            class="aside-inner__link" href="tel:+880 2 9103840">+880 2 9103840</a></div>-->
                    <ul class="aside-socials">
                        <li class="aside-socials__item"><a class="aside-socials__link" href="https://www.instagram.com/impactbangaldesh/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

 
                        <li class="aside-socials__item"><a class="aside-socials__link"
                                href="https://www.instagram.com/impactbangaldesh/" target="_blank"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a></li>


                    </ul>
                </div>
                <div class="aside-dropdown__item"><a class="button button--squared" href="public/frontend/img/donate-us.jpg" data-fancybox="images"><span>Donate</span></a>
                       <li class="aside-menu__item has-sub"><a class="aside-menu__link" href="#">English <i
                                    class="fa fa-plus"></i>
                                <ul class="sub_item_list">
                                    <li class="aside-menu__item"><a class="aside-menu__link" href="gallery.html">Bangla
                                            
                                        </a></li>

                                   
                                </ul>
                            </a></li>
                </div>
            </div>
        </div>
        <!-- aside dropdown end-->
        <!-- header start-->
        <header class="header header--inner"  style="background-color:#b7f286">
            <div class="container-fluid">
                
                
                
                <div class="row no-gutters justify-content-between">
                    
                    <div class="col-auto d-flex align-items-center">
                          <div class="dropdown-trigger dropdown-trigger--inner">
                           <div class="col-auto d-flex align-items-center">
                        <div class="dropdown-trigger dropdown-trigger--inner d-none d-sm">
                            <div class="dropdown-trigger__item"></div>
                        </div>
                        
                    </div>
                        </div>
                      
                        <div class="header-logo" style="width:150px;">
                            <a class="header-logo__link" href="{{asset('/')}}"><img class="header-logo__img"
                                    src="public/frontend/img/profilePicture.jpeg
" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <!-- main menu start-->
                        <nav>
                            <ul class="main-menu main-menu--inner">
                            
                                 <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="javascript:void(0);"><span>{{__('menu.who_we_are')}}
                                        </span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('ourpatron')}}"><span>{{__('menu.about_us')}}</span></a></li>
                                       <!--  <li><a href="{{asset('ourpatron')}}"><span>{{__('menu.ourteam')}}</span></a></li> -->
                                        <li><a href="{{asset('executivecommittee')}}"><span>{{__('menu.executivecommittee')}}</span></a></li>


                                        <li><a href="{{asset('advisorycommittee')}}"><span>{{__('menu.advisingboard')}}</span></a></li>
                                       
                                        <!-- <li><a href="{{asset('ourpartner')}}"><span>{{__('menu.ourpartners')}}</span></a></li>
                                        <li><a href="{{asset('ourstaff')}}"> <span>{{__('menu.our_staff')}}</span></a></li> -->
                                        <li><a href="{{asset('chairmanmessage')}}"><span>{{__('menu.messagechairman')}}</span></a></li>
                                       

                                    </ul>
                                    <!-- sub menu end-->
                                </li>
                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="javascript:void(0);"><span>{{__('menu.our_works')}}</span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('emergenceyaid')}}"><span>{{__('menu.emergencyaid')}}</span></a></li>
                                        <!-- <li><a href="{{asset('emergenceyaid')}}"><span>{{__('menu.reliefcharity')}}</span></a></li> -->
                                        <li><a href="{{asset('healthcare')}}"><span>{{__('menu.healthcare')}}</span></a></li>
                                        <li><a href="{{asset('education')}}"><span>{{__('menu.education')}}</span></a></li>
                                        <!--<li><a href="{{asset('rehabitationcare')}}"><span>{{__('menu.rehabitaioncare')}}</span></a></li>-->
                                        <li><a href="{{asset('skilldevelopment')}}"><span>{{__('menu.skilldevelopment')}}</span></a></li>
                                         <li><a href="{{asset('economicdevelopment')}}"><span>{{__('menu.economicdevelopment')}}</span></a></li>
                                         <li><a href="{{asset('covidprojects')}}"><span>{{__('menu.covid19')}}</span></a></li>
                                        
                                        
                                       

                                    </ul>
                                    <!-- sub menu end-->
                                </li>
                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="{{asset('noticeboard')}}"><span>{{__('menu.noticeboard')}}</span></a>
                                    <!-- sub menu start-->
                                    <!-- <ul class="main-menu__sub-list">
                                        <li><a href="about.html"><span>About IFB</span></a></li>
                                        <li><a href="cmessage.html"><span>Chairman`s Message</span></a></li>
                                        <li><a href="dmessage.html"><span>Director`s Message</span></a></li>
                                        <li><a href="trustee.html"><span>Board of Trustees</span></a></li>
                                        <li><a href="mgmtteam.html"><span>Management Team</span></a></li>
                                        <li><a href="majorintervention.html"><span>Major Intervention</span></a></li>
                                        <li><a href="workingarea.html"> <span>Working Area</span></a></li>
                                        <li><a href="{{asset('donors')}}"><span>Our Donnors</span></a></li>

                                    </ul> -->
                                    <!-- sub menu end-->
                                </li>


                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="javascript:void(0);"><span> {{__('menu.publication')}}</span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('articles')}}"><span>{{__('menu.articles')}}</span></a></li>
                                <li><a href="{{asset('paperandbooks')}}"><span>{{__('menu.paperandbooks')}}</span></a></li>
                                <li><a href="#"><span>{{__('menu.newsletter')}}</span></a></li>


                                    </ul>
                                    <!-- sub menu end-->
                                </li>

                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="{{asset('ongoingproject')}}"><span>{{__('menu.ongoingproject')}} </span></a>

                                </li>

                                <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
                                        href="{{asset('news')}}"><span>{{__('menu.newsgallery')}}</span></a>

                                        <ul class="main-menu__sub-list">
                                        <li><a href="{{asset('news')}}"><span>{{__('menu.newss')}}</span></a></li>
                                        <li><a href="{{asset('photogallery')}}"><span>{{__('menu.photo')}}</span></a>        </li>
                                        <li><a href="{{asset('videogallery')}}"> <span>{{__('menu.video')}}</span></a></li>
                                        

                                    </ul>

                                </li>



                                <li class="main-menu__item"><a class="main-menu__link"
                                        href="{{asset('contacts')}}"><span>{{__('menu.contacts')}}</span></a></li>
                                
                                <li class="aside-menu__item has-sub"><a class="aside-menu__link" href="locale/en">English <i
                                    class="fa fa-plus"></i>
                                <ul class="sub_item_list">
                                    <li class="aside-menu__item"><a class="aside-menu__link" href="locale/bn">Bangla
                                            
                                        </a></li>

                                   
                                </ul>
                            </a></li>

                            
                            </ul>
                        </nav>
                        <!-- main menu end-->
                    </div>
                    <!--<div class="col-auto d-flex align-items-center" style="background-color:#39ce5b;">
                       

                        <a class="button button--squared" href="public/frontend/img/donate-us.jpg" data-fancybox="images"> <span>{{__('menu.donate_us')}}
                        </span></a>

                        <div class="dropdown-trigger dropdown-trigger--inner d-block d-sm-none">
                            <div class="dropdown-trigger__item"></div>
                        </div>
                    </div>-->
                </div>
            </div>
        </header>