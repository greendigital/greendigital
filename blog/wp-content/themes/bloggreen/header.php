<html>
	<head>
		<meta charset="utf-8">
		<title>Green Digital | Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Aqui insiro os Estilos -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/assets/fa/css/font-awesome.min.css">
		<link href="<?php echo get_template_directory_uri (); ?>/assets/css/owl.carousel.css" rel="stylesheet">
    	<link href="<?php echo get_template_directory_uri (); ?>/assets/css/owl.theme.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/assets/css/style.css">
		<link rel="shortcut icon" href="http://www.greendigital.com.br/wp-content/uploads/2015/02/icone-greendigital.png">

		<!-- Aqui insiro os scripts JS -->

		<script type="text/javascript" src = "<?php echo get_template_directory_uri (); ?>/assets/js/jquery.js"></script>
		<script type="text/javascript" src = "<?php echo get_template_directory_uri (); ?>/assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src = "<?php echo get_template_directory_uri (); ?>/assets/js/prettify.js"></script>
		<script type="text/javascript" src = "<?php echo get_template_directory_uri (); ?>/assets/js/functions.js"></script>

	</head>
	<body class="corpo">
		<h1 style="margin: 0px;"><div class="notShow">Green Digital Blog</div></h1>
		<header>
			<section id = "header" style="background: url(http://www.greendigital.com.br/wp-content/uploads/2015/03/banner3.jpg)">
				<h2 style="margin: 0px;"><div class="notShow">Menu de Navegação</div></h2>
				<div class="container">
					<div class="col-md-1 col-sm-4 col-xs-3 col-lg-1">
						<div class="menuBox">
							<i class="fa fa-bars"></i>
						</div>
					</div>
					<div class="col-md-2 col-md-offset-4 col-lg-2 col-lg-offset-4 col-sm-2 col-sm-offset-1 col-xs-4 col-xs-offset-1">
						<div class="logo">
							<a href="<?php echo site_url();?>">
								<img src="<?php echo get_template_directory_uri (); ?>/assets/imagens/logo.png" class="img-responsive">
							</a>
						</div>
					</div>
					<div class="col-md-1 col-md-offset-4 col-lg-1 col-lg-offset-4 col-sm-1 col-sm-offset-4 col-xs-1 col-xs-offset-2 noPaddingMobile" >
						<div class="searchBox" >
							<i class="fa fa-search"></i>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="menuCollapse scrollCollapseNone">
							<ul>
							<?php  
							$cats = get_categories();

							//echo "<pre>";
							//var_dump($cats);
							//echo "</pre>";
							foreach ($cats as $cat) { 
								$link = site_url().'/categorias'.'/'.$cat->slug;
								$color = $cat->description;
							?>
								<a href = "<?php echo $link;?>">
									<li style = "text-transform: uppercase; <?php echo $color;?>"><?php echo $cat->cat_name;?></li>
								</a>
							<?php } ?>

								
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2 col-sm-5 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<div class="searchCollapse scrollCollapseNone">
							<?php get_search_form();?>
						</div>
					</div>

				</div>
			</section>
		</header>

		<?php wp_head();?>