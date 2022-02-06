<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
        <title>Marine Business</title>
        <meta name="description" content="Trucking is transportation and Logistics website template">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css"/><!-- animations -->
        <link rel='stylesheet' href='<?= base_url(); ?>assets/owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/color-default.css"/><!-- template main color -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker3.css"/>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dropzone.min.css">

        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Font icons -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
        
        <link rel="stylesheet" href="<?= base_url(); ?>assets/style-switcher/styleSwitcher.css"/><!-- styleswitcher -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css"/>
        
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/basic.min.css">	
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css">	
        <style type="text/css">
        	.gritter-title {
			    color: #fff;
			}
			.gritter-item p {
			    color: #fff;
			}
        	.main-nav {
        		margin-top: 0px;

        	}
        </style>
    </head>
    
    <body>
        <!-- <section id="style-switcher">
            <section id="styles-container">
                <section>
                    <h4>header styles</h4>
                    <ul class="header-list clearfix">
                        <li class="active">
                            <a href="index.html">style 01</a>
                            
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header01.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-default-top-bar.html">style 02</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header02.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index08.html">style 03</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header03.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-simple-dark-bar.html">style 04</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header04.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-simple-dark.html">style 05</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header05.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-menu-bottom.html">style 06</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header06.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-menu-bottom-dark.html">style 07</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header07.jpg" alt="header 01"/>
                        </li>
                    </ul>
                </section>
                
                <section>
                    <h4>color styles</h4>
                    
                    <ul class="styles-list">
                        <li class="color-default"></li>
                        <li class="color-blueaqua"></li>
                        <li class="color-bluegreen"></li>
                        <li class="color-blueorange"></li>
                        <li class="color-bluered"></li>
                        <li class="color-blue"></li>
                        <li class="color-aqua"></li>
                        <li class="color-green"></li>
                        <li class="color-orange"></li>
                        <li class="color-red"></li>
                    </ul>
                </section>
                
                <section>
                    <h4>layouts</h4>
                    <ul class="header-list clearfix">
                        <li class="active">
                            <a href="index.html">style 01</a>                            
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout01.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index02.html">style 02</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout02.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index03.html">style 03</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout03.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index04.html">style 04</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout04.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index05.html">style 05</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout05.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index06.html">style 06</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout06.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index07.html">style 07</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout07.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index08.html">style 08</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout08.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index09.html">style 09</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout09.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index10.html">style 10</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout10.jpg" alt="header 01"/>
                        </li>
                    </ul>
                </section>
            </section>
            <a href="#" id="styles-button"><div id="switcher-logo"></div></a>
        </section>
 -->
        <div class="header-wrapper" style="top: 0px;left:0">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style02">
                <!-- .container start -->
                <div class="">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="index.html">
                                                <img src="<?= base_url(); ?>assets/img/logo.png" alt="Trucking Transportation and Logistics HTML Template"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown current-menu-item">
                                                <a href="<?= base_url(); ?>">Home</a>
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown">
                                                <a href="<?= base_url('profil'); ?>">Profile</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('profil'); ?>">Tracking</a>
                                            </li>                                            

                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="news-list.html">News list</a></li>
                                                    <li><a href="news-masonry.html">News masonry</a></li>
                                                    <li><a href="news-standard.html">News standard</a></li>
                                                    <li><a href="news-single.html">News single</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown">
                                                <a href="#" >Bantuan</a>
                                            </li>
                                            
                                            <li class="advertise-fast" id="top-advertise-button">
										        <a href="/submit"><i class="fa fa-bullhorn fa-md tada"></i>Pasang Iklan Gratis</a>   
										        <div class="shine"></div>
										    </li>
										    <?php if(empty($this->session->userdata('email'))) { ?>
                                            <li>
                                                <a href="<?= base_url('register'); ?>" >Daftar</a>
                                            </li>
                                            <?php } else { ?>
                                            <li class="dropdown">

                                            	<span class="meta">
					                                <span class="avatar"><img src="https://d3sknresuoj0kc.cloudfront.net/noprofile40.jpeg" class="img-circle" alt=""></span>
					                                <div class="text hidden-xs hidden-sm pl5">
					                                      <?php echo $this->session->userdata('nama') ?>                            
					                                </div>

					                            </span>					                            
					                            <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('setting') ?>">Pengaturan</a></li>
                                                    <li><a href="<?= base_url('register/keluar') ?>">Logout</a></li>
                                                </ul>
                                            </li>            
                                            <?php } ?>                                
                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="<?= base_url(); ?>">Home</a>               
                                                </li>

                                                <li>
                                                    <a href="<?= base_url('profil'); ?>">Profil</a>                                                    
                                                </li>

                                                <li>
                                                    <a href="<?= base_url('profil'); ?>">Tracking</a>
                                                </li>

                                                <li>
                                                    <a href="#" >Blog</a>
                                                </li>

                                                <li>
                                                    <a href="#" >Bantuan</a>
                                                </li>

                                                <li class="advertise-fast" id="top-advertise-button">
											        <a href="/submit"><i class="fa fa-bullhorn fa-md tada"></i>Pasang Iklan Gratis</a>   
											        <div class="shine"></div>
											    </li>
											    <?php if(empty($this->session->userdata('email'))) { ?>
	                                            <li>
	                                                <a href="<?= base_url('register'); ?>" >Daftar</a>
	                                            </li>
	                                            <?php } else { ?>
	                                            <li class="dropdown">
	                                            	<a href="#">Pengaturan</a>
						                            <ul class="dl-submenu">
	                                                    <li><a href="<?= base_url('setting') ?>">Pengaturan</a></li>
	                                                    <li><a href="<?= base_url('register/keluar') ?>">Logout</a></li>
	                                                </ul>
	                                            </li>            
	                                            <?php } ?>   
                                              
                                            </ul><!-- .dl-menu end -->
                                        </div>
                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />                        
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper end -->
       
        
        <?php 
        if ($this->router->fetch_class() != 'home'){            
            $this->load->view($main); 
        }
        else {                 	
        	$this->load->view('home/index'); 
        } 
        ?>             

        <div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">
                                    <h3>newsletter subscribe</h3>
                                </div>

                                <p>
                                    Subscribe to our newsletter and we will 
                                    inform you about newest projects and promotions.
                                </p>

                                <br />

                                <form class="newsletter">
                                    <input class="email" type="email" placeholder="Your email...">
                                    <input type="submit" class="submit" value="">
                                </form>
                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                    <li><a href="about01.html">About us</a></li>
                                    <li><a href="company-history.html">Company history</a></li>
                                    <li><a href="events.html">Company Events</a></li>
                                    <li><a href="supply-chain-management.html">Supply chain management</a></li>
                                    <li><a href="warehousing.html">Warehousing</a></li>                                   
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Industry solutions</h3>
                                </div>

                                <ul>
                                    <li><a href="overland-transportation.html">Overland transportation</a></li>
                                    <li><a href="air-freight.html">Air freight</a></li>
                                    <li><a href="ocean-freight.html">Ocean freight</a></li>
                                    <li><a href="large-projects.html">Large projects</a></li>
                                    <li><a href="rail-transportation.html">Rail international shipping</a></li>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
                                    Komplek Ruko Marakash Square<br>
                                    Blok-E.10 No.9 Kab.Bekasi – Indonesia,
                                </address>

                                <span class="text-big">
                                    021-88387229
                                </span>
                                <br />

                                <a href="mailto:">operation@jmmaritim.com</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->
            

            <!-- <a href="#" class="scroll-up">Scroll</a> -->
        </div><!-- #footer-wrapper end -->

        <script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
        <!-- <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script> -->
        <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap-v4.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap4.min.js"></script> -->
        <script src="<?= base_url(); ?>assets/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="<?= base_url(); ?>assets/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="<?= base_url(); ?>assets/masterslider/masterslider.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
        <script src="<?= base_url(); ?>assets/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="<?= base_url(); ?>assets/style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="<?= base_url(); ?>assets/js/include.js"></script><!-- custom js functions -->
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/uou-accordions.js"></script>
        <script src="<?= base_url(); ?>assets/js/uou-tabs.js"></script>
        <script src="<?= base_url(); ?>assets/js/validator.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.smartWizard.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.gritter.min.js"></script>		
		<script src="<?= base_url(); ?>assets/js/jquery.price_format.min.js"></script>

		
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                var wow = new WOW({
				    animateClass: 'animated',
				    offset:100,
				    callback:function(box) {}
				  });
				  wow.init();


		    	$(".custom-select").each(function(){
		            $(this).wrap("<span class='select-wrapper'></span>");
		            $(this).after("<span class='holder'></span>");
		        });
		        $(".custom-select").change(function(){
		            var selectedOption = $(this).find(":selected").text();
		            $(this).next(".holder").text(selectedOption);
		        }).trigger('change');

                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };
                
                $(document).ready(equalHeight);
                $(window).resize(equalHeight);

                // MASTER SLIDER START 
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 500, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                // CLIENTS CAROUSEL START 
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });

                // TESTIMONIAL CAROUSELS START
                $('#testimonial-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    autoheight: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            autoHeight: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
        <script type="text/javascript">
   			$.ajaxSetup({
			    data: {
		            csrf_token: <?php echo "'". $this->security->get_csrf_hash()."'" ?>
		        }
			});			
	           
	        $(document).ready(function(){	        	

	            $('#datetimepicker10').datepicker({
	            	autoclose: true,     
	                // viewMode: 'years',
	                // minViewMode: "years",
	                format: 'yyyy-mm-dd'
	            });
	            $('#datetimepicker11').datepicker({
	            	autoclose: true,     
	                // viewMode: 'years',
	                // minViewMode: "years",
	                format: 'yyyy-mm-dd'
	            });
	            // Toolbar extra buttons
	            var btnFinish = $('<button></button>').text('Finish')
	                                             .addClass('btn btn-info hidden')
	                                             .attr('id','btn-finish')
	                                             .on('click', function(){ 
	                                                    if( !$(this).hasClass('disabled')){ 
	                                                        var elmForm = $("#myForm");
	                                                        if(elmForm){
	                                                            elmForm.validator('validate'); 
	                                                            var elmErr = elmForm.find('.has-error');
	                                                            if(elmErr && elmErr.length > 0){
	                                                                alert('Oops we still have error in the form');
	                                                                return false;    
	                                                            }else{	                                                            
	                                                                //elmForm.submit();
	                                                                
	                                                                var post = $('form#myForm').serialize();
	                                                                $.ajax({
															            type:"post",
															            data:post,
															            url:"<?php echo base_url(); ?>setting/simpan_data",
															            cache:false,
															            dataType: 'json',
															            success: function(data){
															            	if(data.error==false){									
															            		document.cookie = 'csrf_cookie_name=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';	
															            		
																				window.location.href= window.location.origin+"/"+window.location.pathname.split('/')[1] + '/iklan' ;
															            	}
															               
															            },
															            error: function(){
															                console.log("Error");

															            }
															        });
	                                                             	return false;  
	                                                            }
	                                                        }
	                                                    }
	                                                });
	            var btnCancel = $('<button></button>').text('Cancel')
	                                             .addClass('btn btn-danger')
	                                             .on('click', function(){ 
	                                                    $('#smartwizard').smartWizard("reset"); 
	                                                    $('#myForm').find("input, textarea").val(""); 
	                                                });                         
	            
	            
	            
	            // Smart Wizard
	            $('#smartwizard').smartWizard({ 
	                    selected: 0, 
	                    theme: 'dots',
	                    transitionEffect:'fade',
	                    toolbarSettings: {toolbarPosition: 'bottom',
	                                      toolbarExtraButtons: [btnFinish]
	                                    },
	                    anchorSettings: {
	                                markDoneStep: true, // add done css
	                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
	                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
	                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
	                            }
	                 });
	            
	            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
	                var elmForm = $("#form-step-" + stepNumber);
	                // stepDirection === 'forward' :- this condition allows to do the form validation 
	                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
	                if(stepDirection === 'forward' && elmForm){
	                    elmForm.validator('validate'); 
	                    var elmErr = elmForm.children('.has-error');
	                    if(elmErr && elmErr.length > 0){
	                        // Form validation failed
	                        return false;    
	                    }
	                }
	                return true;
	            });
	            
	            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
	                // Enable finish button only on last step
	                if(stepNumber == 2){ 
	                    $('#btn-finish').removeClass('hidden');  
	                }else{
	                    $('#btn-finish').addClass('hidden');
	                }
	            });                               
	            
	              
	        });   
    	</script>  
    	<script>
    		<?php $this->load->view($script); ?>
    	</script>
    	
    </body>
</html>
