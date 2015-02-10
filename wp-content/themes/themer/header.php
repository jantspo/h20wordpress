<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar">

<!-- wrapper -->
		<div class="container">

<!-- header -->
			<header class="header clear" role="banner">


				<div class="row">
					<div class="col-sm-3">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="http://localhost:8080/wp-content/uploads/2015/02/h2ooptimizer.png" alt="Logo" class="logo-img">
							</a>
						</div>
					</div>
					<div class="col-md-7" id="slogan">
						<img src="http://localhost:8080/wp-content/uploads/2015/02/h2oslogan.png" alt="Logo" class="logo-img">
					</div>

					<div class="col-sm-2">
						<div class="sign-in">
							<a href="">Sign In</a>
						</div>
					</div>
				</div>
<!--	NAVIGATION MENU			-->
				<nav class="navbar navbar-default" data-spy="affix" data-offset-top="80">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
<!--							<a class="navbar-brand" href="#">Brand</a>-->
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav container">
<!-- query page titles for bootstrap nav-->
							<?php	query_posts(array(
								'post_type' => 'page',
								'posts_per_page' => 10,
								'orderby' => 'menu_order',
								'order' => 'ASC'
								));
								?>
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<li><a data-scroll href="#<?php echo $post->post_name ?>"><?php echo $post->post_name; ?></a></li>
								<?php endwhile; endif; ?>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
<!-- /nav -->




			</header>
<!-- /header -->
