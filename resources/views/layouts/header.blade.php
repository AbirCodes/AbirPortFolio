
<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>BRACU Blogs- Mock Up</title>

<!-- ////////////////////////////////// -->
<!-- //     Retina Bookmark Icon     // -->
<!-- ////////////////////////////////// -->
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/apple-icon.png')}}"/>

<!-- ////////////////////////////////// -->
<!-- //     Retina Bookmark Icon     // -->
<!-- ////////////////////////////////// -->
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/apple-icon.png')}}"/>

<!-- ////////////////////////////////// -->
<!-- //      Stylesheets Files       // -->
<!-- ////////////////////////////////// -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/media.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/revolution.css')}}" media="screen"/>
<link rel="stylesheet" href="{{asset('assets/css/media-slideshow.css')}}" media="screen"/>
<link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" media="screen,all" id="noscript"/>

<!-- ////////////////////////////////// -->
<!-- //     Google Webfont Files     // -->
<!-- ////////////////////////////////// -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700,300italic,400italic,700italic"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Rationale"/>

<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}"/>

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="{{asset('assets/js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.js')}}"></script>
<script src="{{asset('assets/js/superfish.js')}}"></script>
<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.li-scroller.1.0.js')}}"></script>
<script src="{{asset('assets/js/jquery.simpleWeather-2.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
<script src="{{asset('assets/js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js?v=2.0.6')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox-media.js?v=1.0.3')}}"></script>
<script src="{{asset('assets/js/jquery.donutchart.js')}}"></script>
<script src="{{asset('assets/js/jflickrfeed.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.twitter.js')}}"></script>
<script src="{{asset('assets/js/accordion-functions.js')}}" ></script>
<script src="{{asset('assets/js/theme-functions.js')}}"></script>
<script src="{{asset('assets/js/jquery.retina.js')}}"></script>
<script>
$(document).ready(function() {
//Retina Image
$('img.retina').retina('@2x');

//Slideshow
$('.banner-landing').revolution({
delay:9000,
startwidth:1040,
startheight:463,
onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
thumbHeight:50,
thumbAmount:3,
hideThumbs:0,
navigationType:"bullet",				// bullet, thumb, none
navigationArrows:"none",				// nexttobullets, solo (old name verticalcentered), none
navigationStyle:"round-old",			// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
navigationHAlign:"center",				// Vertical Align top,center,bottom
navigationVAlign:"bottom",				// Horizontal Align left,center,right
navigationHOffset:0,
navigationVOffset:35,
touchenabled:"on",						// Enable Swipe Function : on/off
stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
fullWidth:"on",
shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
})

});
</script>

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
	<div id="box-wrapper">
        <!-- header start here -->
        <header>

            <!-- top info start here -->
            <div id="top-info">
                <div class="row">
                    <div class="twelve column top-desc">
	                    <ul class="social-button">
	                        <li>
	                            <iframe id="facebookIframe" src="http://www.facebook.com/plugins/like.php?href=http://www.indonez.com/&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21"></iframe>
                            </li>
                            <li>
	                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://dev.twitter.com" data-via="indoneztheme" data-lang="en">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- top info end here -->

            <div class="row">
                <div class="twelve column">

                    <div id="left-header">
                        <!-- logo start here -->
                        <div id="logo">
                            <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="main-logo" class="retina"/></a>
                        </div>
                        <!-- logo end here -->
                    </div>

                    <div id="right-header">
                        <div id="mainmenu-wrapper">
                            <div class="left-menu">

                                <!-- navigation start here -->
                                <nav id="mainmenu">
                                    <ul id="menu">
                                        <li class="dropdown selected"><a href="index.html">Home</a>
                                            {{-- <ul>
                                                <li><a href="index-magazine.html">home magazine</a></li>
                                                <li><a href="index-portfolio.html">home portfolio</a></li>
                                                <li><a href="index-landing.html">home landing</a></li>
                                                <li class="selected"><a href="index-blog.html">home bloging</a></li>
                                                <li><a href="index-store.html">home store</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="dropdown"><a href="#">Elements</a>
                                            <ul>
                                                <li><a href="column.html">column</a></li>
                                                <li><a href="tables.html">tables</a></li>
                                                <li><a href="button-list.html">button &amp; list</a></li>
                                                <li><a href="icons.html">icon list</a></li>
                                                <li><a href="icon-use.html">icon use</a></li>
                                                <li><a href="typography.html">typography</a></li>
                                                <li><a href="note-promo.html">note &amp; promo box</a></li>
                                                <li><a href="tab-accordion.html">tab &amp; accordion</a></li>
                                                <li><a href="alert-progress.html">alert &amp; progress</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about.html">about us</a></li>
                                                <li><a href="services.html">our services</a></li>
                                                <li><a href="pricing-plan.html">pricing plan</a></li>
                                                <li><a href="testimonials.html">client testimonials</a></li>
                                                <li><a href="team.html">our team</a></li>
                                                <li><a href="sitemap.html">flux sitemap</a></li>
                                                <li><a href="faq.html">faq page</a></li>
                                                <li><a href="404.html">404 error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="{{ url('/admin') }}">Admin</a></li>
                                    </ul>
                                </nav>
                                <!-- navigation end here -->

                            </div>

                            <div class="right-menu" id="top-search">
                                <a class="trigger" href="#"><i class="icon-search"></i></a>
                                <div class="search-panel">
                                    <ul>
                                        <li>
                                        <form id="search" action="#" method="get">
                                            <fieldset class="search-fieldset">
                                                <input type="text" id="search-form" value="type and hit enter" onblur="if (this.value == ''){this.value = 'type and hit enter'; }" onfocus="if (this.value == 'type and hit enter') {this.value = ''; }" />
                                            </fieldset>
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </header>
        <!-- header end here -->

        <div class="content-body">
            @yield('content')
        </div>




        <!-- footer start here -->
        <footer>
            <div class="row">
                <div class="eight column">
                	<ul class="no-bullet footer-list smallmargin-top2">
                        <li><a href="#">Directory</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Press</a></li>
                            <li class="link-box"><a href="#"><i class="icon-postalt"></i>Get Support</a></li>
                    </ul>
                    <p>&copy; 2013 Lightning. All rights reserved. Theme by indonez.</p>
                </div>

                <div class="four column">
                	<ul class="social-list circle-social">
                        <li><a href="#"><i class="social-facebook"></i></a></li>
                        <li><a href="#"><i class="social-twitter"></i></a></li>
                        <li><a href="#"><i class="social-dribbble"></i></a></li>
                        <li><a href="#"><i class="social-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- footer end here -->
    </div>

<script>$('#noscript').remove();</script>
</body>
</html>
