<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title><?= APP_NAME; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="<?= APP_NAME ?>" />
    <meta name="keywords" content="<?= APP_NAME ?>" />
    <meta name="author" content="<?= APP_NAME; ?>" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/datatables.css" />
	<link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/dropify.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" href="<?= ASSETS; ?>images/ggl-logo.png" type="image/x-icon">
    <script src="<?= ASSETS; ?>js/jquery-3.3.1.min.js"></script>
</head>

<body>

 <!-- preloader Start -->
 <div id="preloader">
        <div id="status">
            <img src="<?= ASSETS; ?>images/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="cursor"></div>
    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="index.html"> <?= APP_ABBRV; ?> </a></h2>
        <a href="#0" class="cd-close">Close</a>
         <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li> 
        
            <li><a href="#about"> about us </a></li>
            <li><a href="#plan"> investment plan </a></li>
			<li><a href="#faq"> FAQ </a></li>
		
        
            <li><a href="#contact"> contact us </a></li>
            <li><a href="<?= SIGNIN ?>"> login </a></li>
            <li><a href="<?= SIGNUP; ?>"> register </a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper float_left">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="<?= HOME; ?>">
                    <img src="<?= ASSETS; ?>images/ggl-logo.png" alt="logo" width="70px" style="transform: translateY(-4px);">
                    
                </a>
            </div>
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle inner_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="top_header_right_wrapper">
                <p><i class="flaticon-phone-contact"></i> (+91) 123 123 4567</p>
                <div class="header_btn">
                    <ul>
                        <li>
                            <a href="<?= SIGNUP; ?>"> Get started </a> </li>
                        <li>
                            <a href="<?= SIGNIN; ?>"> Login </a> </li>
                    </ul>


                </div>
            </div>

            <div class="cp_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">             
                   
                        <li><a href="#about" class="gc_main_navigation">about us</a></li>
                        <li><a href="#plan" class="gc_main_navigation">investment plan</a></li>  
						<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">pages <i class="fas fa-caret-down"></i></a>
                            <ul class="navi_2_dropdown">
                                <li class="parent">
                                    <a href="#faq"><i class="fas fa-caret-right"></i>FAQ</a>
                                </li>
                                <li>
                                    <a href="#testimonial"><i class="fas fa-caret-right"></i>Testimonies</a>
                                </li>
                                <li class="parent">
                                    <a href="<?= SIGNIN; ?>"><i class="fas fa-caret-right"></i>login</a>
                                </li>  
								<li class="parent">
                                    <a href="<?= SIGNUP; ?>"><i class="fas fa-caret-right"></i>register</a>
                                </li>   								
                            </ul>
                        </li>  
											
                      
                        <li><a href="#contact" class="gc_main_navigation">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- navi wrapper End -->
    
{{content}}

    <!-- footer section start-->
    <div class="footer_main_wrapper float_left">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                    <div class="wrapper_second_about">
                        <div class="wrapper_first_image">
                            <a href="index.html"><img src="<?= ASSETS; ?>images/ggl-logo.png" class="img-responsive" alt="logo" width="100px"/></a>
                        </div>
                        <p>We offer our investors mutually beneficial cooperation based on clear agreements.</p>
                        <div class="counter-section">
                            <div class="ft_about_icon float_left">
                                <i class="flaticon-user"></i>
                                <div class="ft_abt_text_wrapper">
                                    <p class="timer"> 62236</p>
                                    <h4>total member</h4>
                                </div>

                            </div>
                            <div class="ft_about_icon float_left">
                                <i class="flaticon-money-bag"></i>
                                <div class="ft_abt_text_wrapper">
                                    <p class="timer">27236</p>
                                    <h4>total deposited</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-12 col-sm-4">
                    <div class="wrapper_second_useful">
                        <h4>useful links </h4>

                        <ul>
                            <li><a href="#about"><i class="fa fa-angle-right"></i>About us</a>
                            </li>

                            <li><a href="#contact"><i class="fa fa-angle-right"></i>contact </a>
                            </li>
                         
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12 col-sm-4">
                    <div class="wrapper_second_useful wrapper_second_links">

                        <ul>
                            <li><a href="#faq"><i class="fa fa-angle-right"></i>FAQ </a>
                            </li>
                            <li><a href="#testimonial"><i class="fa fa-angle-right"></i>testimonies</a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 col-sm-12" id="contact">
                    <div class="wrapper_second_useful wrapper_second_useful_2">
                        <h4>contact  us</h4>

                        <ul>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=+13233642197&text=hello i am chatting from Glam Global Investment website" target="_blank"><i class="fab fa-whatsapp"></i>+1 323 3642 197</a>
                            </li>
                            <li><a href="mailto:support@glamgloballimited.com"><i class="fa fa-envelope"></i>support@glamgloballimited.com</a>
                            </li>

                            <li><i class="fa fa-map"></i>89 Jacolite Street BRIGADOON WA 6069, Australia
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="copyright_wrapper float_left">
                        <div class="copyright">
                            <p>Copyright <i class="far fa-copyright"></i> <?= date('Y'); ?> <a href="/"><?= APP_NAME; ?></a>. all right reserved </p>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- footer section end-->
    <!--custom js files-->
    <script>
        $(function () {
  $(document).scroll(function () {
    var $nav = $(".cp_navigation_wrapper");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

  });
});
    </script>
    <script src="<?= ASSETS; ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= ASSETS; ?>js/bootstrap.min.js"></script>
    <script src="<?= ASSETS; ?>js/modernizr.js"></script>
    <script src="<?= ASSETS; ?>js/jquery.menu-aim.js"></script>
    <script src="<?= ASSETS; ?>js/plugin.js"></script>
    <script src="<?= ASSETS; ?>js/jquery.countTo.js"></script>
	<script src="<?= ASSETS; ?>js/dropify.min.js"></script>
	 <script src="<?= ASSETS; ?>js/datatables.js"></script>
    <script src="<?= ASSETS; ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= ASSETS; ?>js/jquery.inview.min.js"></script>
    <script src="<?= ASSETS; ?>js/jquery.magnific-popup.js"></script>
    <script src="<?= ASSETS; ?>js/owl.carousel.js"></script>
    <script src="<?= ASSETS; ?>js/calculator.js"></script>
    <script src="<?= ASSETS; ?>js/custom.js"></script>
    <!-- custom js-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fc8a821a1d54c18d8efeef2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>



</html>
