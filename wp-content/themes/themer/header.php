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

<!-- header -->
			<header class="header clear" role="banner">
				<div class="container">

					<nav class="navbar navbar-default container" data-spy="affix" data-offset-top="500">
						<div class="row">
							<div class=" col-md-2 col-lg-1 col-sm-offset-10 col-lg-offset-11">
								<a href="#" id="sign-in">Sign In</a>
							</div>
						</div>

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="row">
								<div class="col-md-3">
								<div class="navbar-header">
									<div class="row">
										<div class="col-xs-10 col-sm-12">
											<a class="navbar-brand" href="<?php echo home_url(); ?>">
												<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
												<img src="http://localhost:8080/wp-content/uploads/2015/02/h2obrand1.png" alt="Logo" class="logo-img">
											</a>
										</div>
										<div class="col-xs-2 col-sm-12">
											<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
									</div>
								</div>
								</div>
								<div class="col-md-9">
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="nav-collapse">
									<ul class="nav navbar-nav">
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
								</div>
							</div>
						</div><!-- /.container-fluid -->
					</nav>

				</div>
			</header>

