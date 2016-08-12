<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv='content-language' content='vi'>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="@yield('icon')"/>
<meta name="description" content="@yield('description')"/>
<meta http-equiv='content-language' content='vi' />
<meta property="og:locale" content="vi_VN"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="@yield('site-name')"/>
<meta property="og:title" content="@yield('meta-title')"/>
<meta property="og:description" content="@yield('meta-description')"/>
<meta property="og:image" content="@yield('meta-image')"/>
<title>@yield('title')</title>
<link defer href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link defer href="{{asset('frontend/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
<link defer href="{{asset('frontend/common.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
</body>
<!-- Header start-->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('frontend/images/logo.png')}}" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">DICH VU</a></li>
                    <li><a href="#">DU AN</a></li>
                    <li><a href="#">TRIET LY</a></li>
                    <li><a href="#">CUA HANG</a></li>
                    <li><a href="#">LIEN HE</a></li>
                    <li><a href="#">VE CHUNG TOI</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </div>
</nav>
<!--         End footer          -->

<!--         Start content          -->
<div class="container-fluid">
        @yield('content')
</div>
<!--         End content          -->

<!--         Star footer          -->

<!--         End content          -->
</html>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script defer type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script>
