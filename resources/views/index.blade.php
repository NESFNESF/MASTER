<!doctype html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->


<!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.min.js"></script>
        <script type="text/javascript" src="js/respond.min.js"></script>
	<![endif]-->

<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<title>LearnMate</title>

<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/mob_menu.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev/pe-icon-7-stroke.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev/navigation.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/rev/rev_responsive.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

<link href='https://fonts.googleapis.com/css?family=Raleway:800,500%7CLato:400,300,400italic,700,700italic,300italic,900italic,900,100,100italic%7CRoboto:400,500,600' rel='stylesheet' type='text/css' />
</head>
<body id="home" class="cms_index">

<header>
<nav>
<div class="container">
<div id="navbar" class="navbar navbar-default">
<div class="navbar-header col-md-2 col-sm-4 col-xs-4">
<a class="navbar-brand trigger" href="index.html" title="LearnMate"><img alt="Logo" src="{{ asset('images/logo_bk.png') }}"></a>
</div>
<div class="col-md-9 col-sm-7 col-xs-7 pull-xs-right">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
<div id="dl-menu" class="dl-menuwrapper">
<button class="dl-trigger visible-sm visible-xs"><i class="fa fa-bars"></i></button>
<ul class="dl-menu">
<li>
<h5 class="sp_module_title">{{ Auth::user()->name }} </h5>
</li>

<li><a href="{{ route('dashboard') }}" class="trigger">Mes cours</a> </li>

<li><a href="{{ route('profile.show') }}" class="trigger"> Mon profil</a> </li>

<li  onclick="event.preventDefault();  this.closest('form').submit();" ><a href="{{ route('logout') }}"  class="trigger">Déconnection</a> </li>

</ul>
</div>
</form>
 <form method="POST" action="{{ route('logout') }}">
       @csrf
<div class="main_menu_wrap">
<ul class="main_menu">



     <li><a href="{{ route('dashboard') }}" class="trigger">Accueil</a> </li>

     @if (Auth::user()->type_user == 1)
     <li><a class="trigger" href="{{ route('listeens') }}"> Enseignants<i class="fa fa-angle-down"></i></a>
        <ul class="submenu">

        <li><a href="{{ route('ajoutens') }}">Ajouter un enseignant</a></li>
        <li  ><a href="{{ route('listeens') }}"  >Liste des enseignants</a> </li>

        </ul>
        </li>

        <li><a class="trigger" href="{{ route('listeclasse') }}">Classes<i class="fa fa-angle-down"></i></a>
            <ul class="submenu">

            <li><a href="{{ route('ajoutclasse') }}">Ajouter une classe</a></li>
            <li  ><a href="{{ route('listeclasse') }}"  >Liste des classes</a> </li>

            </ul>
            </li>





     @endif

     @if (Auth::user()->type_user == 2)
     <li><a class="trigger" href="{{ route('listeens') }}"> Leçons<i class="fa fa-angle-down"></i></a>
        <ul class="submenu">

        <li><a href="{{ route('ajoutlecon') }}">Ajouter une leçon</a></li>
        <li ><a href="#"  >Liste des leçons<i class="fa fa-angle-right"></i></a>
            <ul class="sub_menu">
                @foreach (Auth::user()->classes()->get() as $class )

                <li><a href="{{ route('cour',$class->id) }}">{{ $class->nom }}</a></li>

                @endforeach

                </ul>


        </li>

        </ul>
        </li>

        <li><a class="trigger" href="#"> Forums<i class="fa fa-angle-down"></i></a>
            <ul class="submenu">

                 @foreach (Auth::user()->classes()->get() as $class )

                 <li><a href="{{ route('forum',$class->id) }}">Forum {{ $class->nom }}</a></li>

                 @endforeach


            </ul>
            </li>




     @endif




    <li><a class="trigger" href="{{ route('profile.show') }}"> {{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
        <ul class="submenu">

        <li><a href="{{ route('profile.show') }}">Mon profil</a></li>
        <li  onclick="event.preventDefault();  this.closest('form').submit();" ><a href="{{ route('logout') }}"  >Déconnection</a> </li>

        </ul>
        </li>









</ul>

</div>  </form>
</div>
</div>
</div>
</nav>
</header>


@yield('content')

<footer class="footer">
<div class="container">
<div class="row">

<div class="footer_link_wrapper">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<ul class="footer_list">
<li>
<div class="footer_logo"><img alt="Footer Logo" src="images/logo_wt.png"></div>
<div class="footer_txt"><p>The expert will give all the instructions in easy and compreensive way</p></div>
<div class="footer_email"><i class="fa fa-envelope"></i> <a href="mailto:abcxyz@abc.com">support@abcxyz.com</a></div>
<div class="footer_phone"><i class="fa fa-phone"></i> +1 800 123 1234</div>
<div class="social_links">
<a href="#" target="_blank" rel="external nofollow" title="Share it"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank" rel="external nofollow" title="Tweet it"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank" rel="external nofollow" title="Linked it"><i class="fa fa-linkedin"></i></a>
</div>
</li>
</ul>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<ul class="footer_list">
<li>
<h3>Latest News</h3>

</li>
</ul>
</div>
<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
<ul class="footer_list">
<li>
<h3>Links</h3>
<ul class="footer_sublist">
<li><a href="#" title="About">About</a></li>
<li><a href="#" title="Courses">Courses</a></li>
<li><a href="#" title="Blog">Blog</a></li>
<li><a href="#" title="Gallery">Gallery</a></li>
<li><a href="#" title="FAQ">FAQ</a></li>
<li><a href="#" title="Contact">Contact</a></li>
<li><a href="#" title="Become a Teacher">Become a Teacher</a></li>
</ul>
</li>
</ul>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padd_rnone">

</div>
</div>

</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 coppyright_txt"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </div>
<div class="time_available col-lg-3 col-md-3 col-sm-6 col-xs-6"><i class="fa fa-clock-o"></i> Mon - Sat &nbsp;&nbsp;(9am - 5pm) &nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="social col-lg-3 col-md-3 col-sm-6 col-xs-6">
<ul class="pull-right">
<li><a href="#">Sitemap</a></li>
<li><a href="#">Terms</a></li>
<li><a href="#">Privacy</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>


<div class="offcanvas_overlay"></div>



<script type="text/javascript" src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-plugin-collection.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.dlmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js-functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/flicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/rev_slider.js') }}"></script>
</body>
</html>



































































































































