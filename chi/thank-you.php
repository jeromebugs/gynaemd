<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<link href="dist/icon/favicon.png" rel="icon" type="img/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>感谢您 | GynaeMD - 妇产科及美疗诊所| Symbol & Philosophy</title>
<meta name="description" content=""/>

<link rel="canonical" href="<?php echo lang_homepage_url('chi') ?>thank-you.html" />

<link rel="alternate" href="<?php echo lang_homepage_url() ?>thank-you.html" hreflang="x-default" />
<link rel="alternate" href="<?php echo lang_homepage_url() ?>thank-you.html" hreflang="en" />
<link rel="alternate" href="<?php echo lang_homepage_url('chi') ?>thank-you.html" hreflang="zh" />
<link rel="alternate" href="<?php echo lang_homepage_url('ind') ?>thank-you.html" hreflang="id" />

<?php include('template-part/styles.php') ?>

<style type="text/css">
	@font-face {
		font-family: 'Futura';
		src: url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.eot');
		src: url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.eot?#iefix') format('embedded-opentype'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.woff2') format('woff2'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.woff') format('woff'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.ttf') format('truetype'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.svg#FuturaBT-Light') format('svg');
		font-weight: 300;
		font-style: normal;
	}
</style>

<!-- Google Code for Enquiry for GynaeMD Conversion Page --><script type="text/javascript">/* <![CDATA[ */var google_conversion_id = 965951313;var google_conversion_language = "en";var google_conversion_format = "3";var google_conversion_color = "ffffff";var google_conversion_label = "ueBpCLfzxQgQ0f7MzAM";var google_remarketing_only = false;/* ]]> */</script><script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script><noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/965951313/?label=ueBpCLfzxQgQ0f7MzAM&guid=ON&script=0"/></div></noscript>

</head>

<body>

<!-- HEADER CONTAINER -->
<div id="header" class="chi-lang">

	<div class="header-inner">

		<div class="top-language-switcher">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php include('template-part/language-switcher.php') ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">

			<div class="upper-header">
				<div class="navbar-fix">

					<a href="<?php echo homepage_url() ?>" class="logo-link">
						<img src="<?php echo homepage_url() ?>dist/images/logo.png" class="img-responsive">
					</a>

					<div class="clearfix"></div>

					<div class="nav-header-wrapper">
						<div class="nav-header">
						
							<?php include('template-part/navigation.php') ?>

						</div>
					</div>

				</div>

			</div>

		</div>

		<div class="container">
			<div class="banner-wrapper" style="">
				<img src="<?php echo homepage_url() ?>dist/images/bottom_flower_vines.png" class="flower-vines">
				
				<img src="<?php echo homepage_url() ?>dist/images/banner-1-cn.jpg" class="img-responsive img-full desktop-banner hidden-sm hidden-xs">
				<img src="<?php echo homepage_url() ?>dist/images/banner-1-cn-mobile.jpg" class="img-responsive img-full mobile-banner hidden-md hidden-lg">
			</div>
		</div>
		
	</div>

</div>
<!-- END HEADER CONTAINER -->


<!-- PAGE CONTENT CONTAINER -->
<div id="page-content-wrapper" class="chi-lang">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-push-4">

				<!-- page-title -->
				<h1 class="page-title">感谢您</h1>
				<!-- end .page-title -->
				
				<!-- .page-content -->
				<div class="page-content">
					<p>感谢您的兴趣。</p>
					<p>我们会尽快回复您的问题。</p>
				</div>
				<!-- end .page-content -->

			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-md-pull-8">
				
				<div class="sidebars">

					<?php include 'template-part/call-button-sidebar.php' ?>

					<?php include 'template-part/contact-us-form-chi-sidebar.php' ?>

					<?php include 'template-part/contact-info-chi-sidebar.php' ?>

				</div>

			</div>

		</div>
	</div>
</div>
<!-- END PAGE CONTENT CONTAINER -->

<?php include 'footer.php' ?>