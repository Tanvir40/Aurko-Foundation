<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            Login
        </title>
        <link href="{{asset('backend/login/content/bootstrap.css')}}" rel="stylesheet" />
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <style type="text/css">
            .img-responsive {
                display: block;
                max-width: 100%;
                height: auto;
            }
            .header {
                height: 57px;
                text-align: center;
                color: #fff;
                border-bottom: 1px solid #179B81;
                background-color: #345698;
            }
            .header img {
                width: 100%;
            }
            .footer {
                border-top: 1px solid #179B81;
                color: #999;
                /*border-color: #dee4e7;*/
                text-align: center;
                margin: 0 -15px -25px;
                font-size: 13px;
                justify-content: center;
            }
            .footer a {
                color: #999;
            }
            .hint-text {
                text-align: right;
                padding-top: 5px;
                font-size: 13px;
                color: #179B81;
            }
            #loginBtn {
                width: 100%;
                /*background-color:#179B81;*/
                background-color: #345698;
                font-weight: bold;
                float: right;
            }
            .main {
                background-color: #ffffff;
                /*//box-shadow: 5px 5px 10px -4px #000;*/
                /*// box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
                box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
                padding-top: .5%;
                border-radius: 10px;
                height: 409px;
                width: 44%;
                padding-top: 0px;
                top: 0px;
                left: 0px;
            }
        </style>
    </head>
    <body style="background-color: #E6E6E6">
        <div class="container-fluid">
            <script src="{{asset('backend/login/Scripts/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('backend/login/Scripts/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('backend/login/Scripts/respond.min.js')}}" type="text/javascript"></script>
            <div class="aspNetHidden">
                <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="" />
            </div>
            <div class="row">
                <img alt="" class="img-responsive" src="{{asset('image/Anser VDP.jpg')}}" style="width: 100%; max-height: 125px;" />
            </div>
            <!-- <div class="row" style="padding-right: 1.2%; background-color: #839ED3; height: 35px">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="HyperLink6" class="mlia btn btn-default btn-link" href="#" target="_blank" style="color:Black;font-weight:bold;height: 35px; padding-top: 7px;"> Home</a>
                    </li>
                   
                    <li>
                        <a id="HyperLink8" class="btn btn-default btn-link" href="#" target="_blank" style="color:Black;font-weight:bold;height: 35px; padding-top: 7px;">About Us</a>
                    </li>
                    <li>
                        <a id="HyperLink9" class="btn btn-default btn-link" href="#" target="_blank" style="color:Black;font-weight:bold;height: 35px; padding-top: 7px;">Contact Us</a>
                    </li>
                    <li>
                        <a id="HyperLink10" class="btn btn-default btn-link" href="#" target="_blank" style="color:Black;font-weight:bold;height: 35px; padding-top: 7px;">User Mannual System</a>
                    </li>
                </ul>
            </div> -->
            <div class="row" style="margin-left:475px">
                <h1> MANAGEMENT INFORMATION SYSTEM</h1>
            </div>
            <div class="row" style="padding-top: 1%; background-color: #E6E6E6; padding-bottom: 5%;">
                <div id="mainBody" class="col-md-4 col-md-offset-4 main">
                    <div class="row header">
                        <h4 style="margin-left: 9px; text-align: left">* সঠিক ভাবে ব্যবহারের জন্য মজিলা ফায়ারফক্স/গুগল ক্রোম ব্রাউজার ব্যবহার করুন।</h4>
                        
                    </div>
                    <div class="row" style="padding-top: 2.5%; text-align:center; color: #2D4C85; font-family: 'Times New Roman', Times, serif">
                        <h4>MIS LOGIN </h4>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row" style="">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="col-md-12" style="margin-bottom: 2px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="User Email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12" style="margin-top: 2px; margin-bottom: 2px;">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password" />
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12" style="margin-top: 2px; margin-bottom: 2px; padding-right: 75%">
                                        <div id="upa" style="margin-left: 175px">
                                            <button type="submit" class="btn btn-primary" name="submit">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                    <div id="msgBox" class="row" style="text-align: center">
                        <div id="hihi">
                            <span id="lblMgs" style="color:Red;font-weight:bold;"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div id="upr" style="display:none;">
                        <div class="div1" style="margin-top: -55%; float: right">
                            <img id="progImage" src="image/status.gif" alt="Process" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
            <div class="container-fluid">
                <div class="col-md-6 text-left" style="font-family: 'Courier New', Courier, monospace;">
                    &nbsp;Designed and developed by Engineers Department, ANSAR & VDP.
                </div>
                <div class="col-md-6 text-right" style="font-family: 'Courier New', Courier, monospace;">
                    ANSAR & VDP, Bangladesh. &nbsp;&nbsp;
                </div>
            </div>
        </div>
    </body>
</html>