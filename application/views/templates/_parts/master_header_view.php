<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="<?=$current_lang['language_code']?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php 
	$title = $Settings['company_name'];
	
	if(isset($page_title)){
		echo $page_title .":". $title;
	}else if(isset($item->translation[0]->page_title)){
		echo $item->translation[0]->page_title.": ".$title;
	}else{
		echo $title;
	}
?></title>
	<?php
	/*Meta keywords and description*/
	$keywords = $Settings['keywords'];
	$description = $Settings['description'];
	if(isset($item->keywords)){
		$keywords = $item->keywords;
	}
	
	if(isset($item->description)){
		$description = $item->description;
	}
		
	if(isset($item->image)){
		$og_image = $item->image;
	}else{
		$og_image = base_url().'assets/images/bg/cau-can-gio-2.jpg';
	}	
	
	echo "
	<!-- meta tag -->
	<meta name='keywords' content='".$keywords."' />
	<meta name='description' content='".$description."' />";
	
	$url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

	$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
	echo "
	<!-- Facebook -->
	
	<!-- meta og:title -->
	<meta property='og:title' content='".$title."' />
	    
	<!-- meta og:description -->
	<meta property='og:description' content='".$description."' />
	
	<!-- meta og:image -->
	<meta property='og:image' content='".$og_image."' />
	<meta property='og:image:alt' content='".$title."' />	 
	
	<!-- meta og:url -->
	<meta property='og:url' content='".$escaped_url."' />	
	
	<meta property='og:type' content='article'> 
		 
		 ";  
		    
		?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.jpg">
        
        <!-- Google Fonts
        ============================================ -->		
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet"> 
        
        <!-- All css files are included here
        ============================================ -->    
        <!-- Bootstrap CSS
        ============================================ -->		
        <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css');?>"> 
        
        <!-- icon font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


        
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url('assets/css/core.css');?>">
        
        <!-- Theme shortcodes/elements style
        ============================================ -->  
        <link rel="stylesheet" href="<?php echo site_url('assets/css/shortcode/shortcodes.css');?>">
        
        <!--  Theme main style
        ============================================ -->  
        <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">
        
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="<?php echo site_url('assets/css/responsive.css?r=9494949092');?>">  
        
		<!-- Style Customizer CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo site_url('assets/css/style-customizer.css');?>">
    	<link href="#" data-style="styles" rel="stylesheet">  
        
        <link rel="stylesheet" href="<?php echo site_url('assets/css/color/color-1.css');?>">
    	<link href="#" data-style="styles" rel="stylesheet"> 
    	
    	<link rel="stylesheet" href="<?php echo site_url('assets/css/animated.css');?>" />
    	 
        <!-- Modernizr JS -->
        <script src="<?php echo site_url('assets/js/vendor/modernizr-2.8.3.min.js');?>"></script> 
        
        <?php 
			echo $css_for_elements;
			echo $before_head;
		?>   
		
    </head>
<body>
	 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->  

        <!--Main Wrapper Start-->
        <div class="wrapper bg-white fix">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header class="header-area">
                    <div class="header-top bg-gray">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-6 hidden-xs">
                                	<div class="header-top-info">
                                		<i class="fas fa-phone-square"></i>
                                		<span class="ml-8">+0708 79 79 89</span>
                                	</div>
                                	<div class="header-top-info">
                                		<i class="fas fa-envelope-square"></i>
                                		<span class="ml-8">sale@thaotayland.com</span>
                                	</div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 header-right">
                                	<div class="pull_right">
										<div class="header-login-register">
											<!--<span><a href="create-agency.html">BẤT ĐỘNG SẢN THẢO TÂY</a></span>-->
											<ul class="login">
												<li>
													<a href="<?=base_url()?>product">BẤT ĐỘNG SẢN THẢO TÂY</a>
													
												</li>
											</ul>
											
										</div>
										<!--Search Form Start-->
										<div class="search-btn">
											<ul data-toggle="dropdown" class="header-search search-toggle">
												<li class="search-menu">
													<img src="assets/images/icons/search.png" alt="" class="p-img">
													<img src="assets/images/icons/search-hover.png" alt="" class="s-img">
												</li>
											</ul>
											<div class="search">
												<div class="search-form">
													<form id="search-form" action="#">
														<input type="search" placeholder="Search here..." name="search" />
														<button type="submit">
															<span><i class="fa fa-search"></i></span>
														</button>
													</form>                                
												</div>
											</div>
										</div>	
										<!--End of Search Form-->
                                	</div> 
                                	<!--Add Property Button Start-->
                                	<!--<a href="#" class="add-property-btn button text-uppercase mr-15 modal-view button" data-toggle="modal" data-target="#propertyModal">ADD Property</a>-->
                                	<!--Add Property Button End-->
                                </div>
                            </div>
                        </div>
                    </div>
                	<div id="sticky-header">
						<div class="container">
							<div class="row">
								<div class="col-md-3 col-xs-12">
									<div class="logo"><a href="<?=base_url()?>"><img src="<?php echo site_url('assets/images/logo/logo_thaotay.png')?>" width="200" alt="DomInno"></a></div>
								</div>
								<div class="col-md-9 hidden-sm hidden-xs">
									<div class="pull_right">
										<nav id="primary-menu">              
											<ul class="main-menu text-right">
												<li class="mega-parent active"><a href="<?=site_url()?>">TRANG CHỦ</a>
													<!--<div class="mega-menu-area">
														<ul class="single-mega-item">
															<li><a href="index.html">Slider Style 1</a></li>
														</ul>
													</div>-->
												</li>
												<li><a href="<?=base_url()?>">GIỚI THIỆU</a>
													<!--<ul class="dropdown">
														<li><a href="about-2.html">About Two Page</a></li>
													</ul>-->
												</li>
												<li><a href="<?=base_url()?>product">BẤT ĐỘNG SẢN </a>
																									</li>
																								<li><a href="<?=base_url()?>">TIN TỨC</a>
													
												</li>
												<li><a href="<?=base_url()?>">LIÊN HỆ</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="<?=base_url()?>">Trang chủ</a>
                                                   <!-- <ul class="sub-menu">
														<li><a href="index.html">Slider Style 1</a></li>
                                                    </ul>-->
                                                </li>
												<li><a href="<?=base_url()?>about">Giới thiệu</a>
                                                    <!--<ul class="sub-menu">
														<li><a href="about-2.html">About Two Page</a></li>
													</ul>-->
												</li>
                                                <li><a href="<?=base_url()?>product">Bất động sản</a>
                                                    <!--<ul class="sub-menu">
                                                        <li><a href="#">Slider Style</a>
                                                        	<ul class="sub-menu">
																<li><a href="slider-style-1.html">Slider Style 1</a></li>
																                                                        	</ul>
                                                        </li>
                                                        </li>
												
                                                <li><a href="<?=base_url()?>">Tin tức</a>
                                                   <!-- <ul class="sub-menu">
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>-->
                                                </li>
                                                <li><a href="<?=base_url()?>">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>					
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->  
                </header>
	

	