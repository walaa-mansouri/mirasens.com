<?php
$result= $_GET['status'];
if ($result=='OK')
		{
			$msg_txt = "Votre message a bien été envoyé<br /> Nous reviendrons vers vous sous peu !";
			$msg_image = 'assets/images/bg/result_ok.jpg';
}else
		{
			$msg_txt = "Votre message n'apas été envoyé<br /> Veuillez réessayer ultérieurement !<br>";
			$msg_image = 'assets/images/bg/result_no.jpg';
		}
?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MIRASENS </title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">                                                    <!--mot clé a remplir et séparer par des virgules-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Start script captcha -->
		  <script src="https://www.google.com/recaptcha/api.js?render=6LcerCwrAAAAACIgJGlMRhH0xXBp9LuYaaCOwqOq"></script>
		  <script>
			function onSubmit(token) {
			  document.getElementById("contact-form").submit();
			}

			function executeRecaptcha(e) {
			  e.preventDefault(); // Prevent default form submit
			  grecaptcha.ready(function() {
				grecaptcha.execute('6LcerCwrAAAAACIgJGlMRhH0xXBp9LuYaaCOwqOq', {action: 'submit'}).then(function(token) {
				  document.getElementById('recaptcha-token').value = token;
				  document.getElementById("contact-form").submit();
				});
			  });
			}
		  </script>
	 <!-- End script captcha -->
	
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/sal.css">
    <link rel="stylesheet" href="assets/css/plugins/feather.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets/css/plugins/jodit.min.css">

    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body class="rbt-header-sticky">


    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-default">
        <div class="rbt-sticky-placeholder"></div>
       
        <div class="rbt-header-wrapper header-space-betwween header-transparent header-sticky dark-header-transparent">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left">
                        <div class="logo logo-dark">
                            <a href="index.html">
							 <img src="assets/images/logo/transparent.png" >
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="index.html">
                                <img src="assets/images/dark/logo/logo-light.png" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>

                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#">Secteurs <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu menu-skin-dark">
                                        <div class="wrapper">
                                            <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                                <!-- Start sector 1    -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="secteur1_aquaculture.html"><img src="assets/images/secteurs/s01.jpg" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title">Smart aquaculture</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End sector 1  -->

                                                <!-- Start sector 2   -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="secteur2_agriculture.html"><img src="assets/images/secteurs/s02.jpg" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title">Smart agriculture</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End sector 2   -->

                                                <!-- Start sector 3   -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="secteur3_industry.html"><img src="assets/images/secteurs/s03.jpg" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title">Smart Industrie</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End sector 3   -->

                                                <!-- Start sector 4   -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="secteur4_logistics.html"><img src="assets/images/secteurs/s04.jpg" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                               <h4 class="title">Smart Logistics</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End sector 4  -->

                                              

                                                

                                                <!-- Start sector 7   -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="secteur7_building.html"><img src="assets/images/secteurs/s07.jpg" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title">Smart Building</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End sector 7   -->

                                               


                                                <!-- Start sector 10   -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="secteur10_fleet.html"><img src="assets/images/secteurs/s10.jpg" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title">Gestion de flottes</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End sector 10   -->

                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <!-- Start Menu Solutions  -->
								<li class="has-dropdown has-menu-child-item">
                                    <a href="#">Solutions
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown"><a href="solution1_fishflow.html">Plateforme FishFlow</a> </li>
                                        <li class="has-dropdown"><a href="solution2_miot.html">Plateforme M-IoT</a>    </li><li class="has-dropdown"><a href="solution3_sirgps.html">Plateforme SirGPS</a>    </li>
									    
                                       
                                    </ul>
                                </li>
                                <!-- End Menu Solutions  -->
								
								
								
								<!-- Start Menu Technologies  -->
								<li class="has-dropdown has-menu-child-item">
                                    <a href="technologies.html">Technologies
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="technologies_choisir.html">   Choisir vos capteurs </a></li>
                                        <li><a href="technologies_connecter.html"> Connecter vos objets </a></li>
                                        <li><a href="technologies_exploiter.html"> Exploiter vos données</a></li>
					                                            
                                    </ul>
                                </li>
                                <!-- End Menu Technologies  -->
							
                                <li class=" position-static">
                                    <a href="uses_cases.html">Cas d'usages </a>
                                    
                                </li>

                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Travailler avec MIRASENS
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown"><a href="mira_who.html">        Qui nous aidons  </a> </li>
                                        <li class="has-dropdown"><a href="mira_engagments.html"> Nos engagements  </a> </li>
                                        <li class="has-dropdown"><a href="contact.html">         Nous contacter   </a> </li>
                                        <li class="has-dropdown"><a href="postuler.html">        Postuler         </a> </li>


<!-- 									    <li class="has-dropdown"><a href="mira_ecosys.html">Notre ecosysteme</a> </li>
 -->                                        <!-- <li class="has-dropdown"><a href="mira_news.html">News</a>    </li> -->
<!-- 										<li class="has-dropdown"><a href="mira_faq.html">FAQ</a> </li>
 -->                                                                            </ul>
                                </li>
								
								
								
								

                              
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                       
                                

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar ml--5 d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
            
    </header>
    <!-- Mobile Menu Section -->
   


  <!-- Satrt Mobile Menu Section -->
  <div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <div class="logo logo-footer">
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="index.html">
                            <img src="assets/images/dark/logo/logo-light.png" alt="Education Logo Images">
                        </a>
                    </div>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Intégrateur de solutions d'ingénierie numérique</p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:conctact@mirasens.com"><i class="feather-mail"></i>conctact@mirasens.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>(+213) 560 555 300</a>
                </li>
            </ul>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">

                                   
                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="technologies.html">Secteurs  <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-3">
                        <div class="wrapper">
                            <div class="row row--15 single-dropdown-menu-presentation">
                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="secteur1_aquaculture.html">Smart aquaculture</a></li>
                                        <li><a href="secteur2_agriculture.html">Smart agriculture</a></li>
                                        <li><a href="secteur3_industry.html">Smart Industry</a></li>
                                        <li><a href="secteur4_logistics.html">Smart Logistics</a></li>
                                        <li><a href="secteur7_building.html">Smart Building</a></li>
                                        <li><a href="secteur10_fleet.html">Gestion de flottes</a></li>
                                        
                                    </ul>
                                </div>

                              


                            </div>
                          
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

             <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Solutions <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-3">
                        <div class="wrapper">
                            <div class="row row--15 single-dropdown-menu-presentation">
                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="solution1_fishflow.html">Plateforme FishFlow </a></li>
                                        <li><a href="solution2_miot.html">Plateforme M-IoT</a></li>
                                        
                                    </ul>
                                </div>

                              


                            </div>
                          
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>
                
                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="technologies.html">Technologies <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-3">
                        <div class="wrapper">
                            <div class="row row--15 single-dropdown-menu-presentation">
                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                    <li><a href="technologies_choisir.html">Choisir vos capteurs </a></li>
                                    <li><a href="technologies_connecter.html">Connecter vos objets</a></li>
                                    <li><a href="technologies_exploiter.html">Exploiter vos données</a></li>
                                    
                                    </ul>
                                </div>

                              


                            </div>
                          
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>
                
                    <li class="with-megamenu position-static">
                    <a href="uses_cases.html">Cas d'usages</a>
                   
                </li>
                
            
                
            
                
                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="mira_who.html">Travailler avec MIRASENS <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-3">
                        <div class="wrapper">
                            <div class="row row--15 single-dropdown-menu-presentation">
                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="mira_who.html">Qui nous aidons </a></li>
                                        <li><a href="mira_engagments.html">Nos engagements</a></li>
										<li><a href="contact.html">Nous contacter</a></li>
										<li><a href="postuler.html">Postuler</a></li>
										
<!--                                         <li><a href="mira_ecosys.html">Notre ecosysteme</a></li>
 -->                                     <!--    <li><a href="mira_news.html">News </a></li> -->
<!--                                         <li><a href="mira_faq.html">FAQ</a></li>
 -->                                        
                                    </ul>
                                </div>

                              


                            </div>
                          
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

            </ul>
        </nav>

        <div class="mobile-menu-bottom">
            <div class="rbt-btn-wrapper mb--20">
                <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="contact.html">
                    <span>Contacter nous</span>
                </a>
            </div>

            <div class="social-share-wrapper">
                <span class="rbt-short-title d-block">Nous suivre sur</span>
                <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                    <li><a href="https://www.facebook.com/">
                            <i class="feather-facebook"></i>
                        </a>
                    </li>
                    <li><a href="https://www.twitter.com">
                            <i class="feather-twitter"></i>
                        </a>
                    </li>
                    <li><a href="https://www.instagram.com/">
                            <i class="feather-instagram"></i>
                        </a>
                    </li>
                    <li><a href="https://www.linkdin.com/">
                            <i class="feather-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
	
	<!-- End Mobile Menu Section -->
	
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-slider-main-wrapper position-relative">
        <!-- Start Banner Area  -->
        <div class="swiper rbt-banner-activation rbt-slider-animation rbt-arrow-between">
            <div class="swiper-wrapper">
                <!-- Start Single Banner  -->
                <div class="swiper-slide">
                    <div class="rbt-banner-area rbt-banner-6 variation-03smaller bg_image bg_image--bg_result" data-gradient-overlay="6">
                       
                    </div>
                </div>
                <!-- End Single Banner  -->



            </div>

           

        </div>

        <div class="swiper rbt-swiper-thumb rbtmySwiperThumb">
            <div class="swiper-wrapper">
                
            </div>
        </div>
        <!-- End Banner Area  -->
    </div>

    <!-- Start Sector 1 description  -->
    <div class="rbt-about-area bg-color-white  pb_md--80 pb_sm--80 about-style-1">
        <div class="container">
		
		      <div class="col-lg-12">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                           <div class="section-title text-start">
                               
                                <h2 class="theme-gradient" style="text-align:center;"><br /><?php echo $msg_txt; ?>
								<img src="<?php echo $msg_image ?>" alt="Thumb">

								</h2>
							
                           
                            </div>
							
				    </div>
							
							
							
							

						</br></br></br>
						  

                    </div>
                </div>
		
		
		
           
		   
		
		
    </div>
  <!-- End About Area  -->
  
  
      <!-- End Sector 1 description  -->


    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->
    <footer class="rbt-footer footer-style-1 overflow-hidden">
        <div class="footer-top">
	</br>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="logo">
                                <div class="logo logo-footer">
                                </div>
        
                            
                            </div>
                            <div class="logo d-none logo-light">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-black - Copy.png" alt="Edu-cause">
                                </a>
                            </div>

                            <p class="description mt--20 color-white">We’re always in search for talented
                                and motivated people. Don’t be shy introduce yourself!
                            </p>

                            <ul class="social-icon social-default justify-content-start">
                                <li><a href="https://www.facebook.com/">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com">
                                        <i class="feather-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                        <i class="feather-instagram"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.linkdin.com/">
                                        <i class="feather-linkedin"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="contact.html">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Nous contacter</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div>
								
                        </div></br>
                    </div>
					
                    
                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h4 class="ft-title" style="color:white;">Secteurs</h4>
                                <ul class="ft-link">
                                    <li>
                                        <a href="secteur1_aquaculture.html">Smart Aquaculture</a>
                                    </li>
                                    <li>
                                        <a href="secteur2_agriculture.html">Smart Agriculture</a>
                                    </li>
                                    <li>
                                        <a href="secteur3_industry.html">Smart Industrie</a>
                                    </li>
									<li>
                                        <a href="secteur4_logistics.html">Smart Building</a>
                                    </li>
                                    <li>
                                        <a href="secteur7_building.html">Smart Logistique</a>
                                    </li>
									
                                    <li>
                                        <a href="secteur10_fleet.html">Gestion flottes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h4 class="ft-title" style="color:white;">Contactez-nous</h4>
                                 <ul class="ft-link">
                                    <li><span>Téléphone:</span> <a href="#">(+213) 560-555-300</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:contact@mirasens.com">contact@mirasens.com</a></li>
                                    <li><span>Adresse:</span> Dounia Parc, Dely Brahim,  </li>
									<li> Algiers, Algeria</li>
									<li> www.mirasens.com  </li>
                                </ul>
                            </div>
                        </div>

                   
                </div>
            </div>
        </div>
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-style-1 ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12"  >
                        <p style="color:white;">Copyright © 2025 <a  style="color:white;" href="https://www.mirasens.com">MIRASENS.</a> All Rights Reserved</p>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
	
	
        

    <!-- End Footer aera -->
    </main>

    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets/js/vendor/sal.js"></script>
    <!-- Dark Mode Switcher -->
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/swiper.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/plyr.js"></script>
    <script src="assets/js/vendor/jodit.min.js"></script>
    <script src="assets/js/vendor/Sortable.min.js"></script>



    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>