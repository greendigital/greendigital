<?php 
/*
*
*	Template Name: Página de Franquias
*	
*	Desenvolvedor: Luiz Servelo
*	Data: 30-08-2016
*/
?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
.modal-backdrop{
	display: none;
}
	.mk-zindex-fix{
		display: none;
	}
	#banner .banner{
		position: relative;
		height: 500px;
		width: 100%;
		background: red;
		background-size: cover !important;
		background-position: center center !important;   
	}
	#banner .banner .caption{
		position: absolute;
		top: 45%;
	    left: 50%;
		transform: translateX(-50%);
	}
	#banner .banner .caption h2{
		color: #fff;
		font-size: 35px;
	}
	.linha{
		height:3px;
		width: 100%;
		background: rgba(217,239,149, 0.8);
	}
	#blocos{
		padding: 50px 0;
		background: #323232;
	}
	#blocos .bloco{
		width: 100%;
		height: 600px;
		border: 1px solid #d2d2d2;
		padding: 15px;
		border-radius: 15px;
	}
	#blocos .bloco img{
		width: auto;
		height: 150px;
	}
	#blocos .bloco h3{
		color: #89a94e;
		font-size: 31px;
		text-align: center;
	}
	#blocos .bloco .linha{
		height: 1px;
		background: #d2d2d2;
		margin-bottom: 9px;
	}
	#blocos .bloco p{
		font-weight: 400;
		color: #d2d2d2;
	}
	.botao{
		position: absolute;
	    bottom: 15px;
	    left: 50%;
	    transform: translateX(-50%);
	    color: #fff;
	    background: #8aaa4f;
	    font-size: 16px;
	    font-weight: 600;
	    border: 0px;
	    padding: 10px 15px;
	    border-radius: 5px;
	    transition:.3s;
	}

	.botao:hover{
		transition:.3s;
		opacity: .7;
	}

	@media(min-width: 1200px){
		.container{
			width: 1200px;
		}
		.col-md-4{
			padding: 0 40px;
		}
		
		/*.main_menu{
			margin-top: 30px !important;
		}
		.sub-menu{
			top: 30px !important;
		}
		.mk-header-holder{
			background: #fff;
		}*/
		nav ul li a{
			    height: 100%;
			    position: relative;
			    top: 50%;
			    transform: translateY(-15%);
		}
	}
	@media(max-width: 680px){
		#banner .banner{
			position: relative;
			height: 300px;
			width: 100%;
			background: red;
			background-size: cover !important;
			background-position: center center !important;   
		}
		#banner .banner .caption{
			position: absolute;
			top: 40%;
		    left: 50%;
			transform: translateX(-50%);
		}
		#banner .banner .caption h2{
			color: #fff;
			font-size: 20px;
			text-align: center;
		}
		#blocos .bloco{
			width: 100%;
			height: auto;
			border: 1px solid #d2d2d2;
			padding: 15px;
			border-radius: 15px;
			margin-bottom: 30px;
			padding-bottom:60px;
		}
		#blocos .bloco img{
			height: 80px;
			width: auto;
		}
	}
</style>
<?php get_header(); ?>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php the_post(); ?>

<main>
	<section id="banner">
		<div style="background: url(<?php the_field('banner-franquia'); ?>)" class="banner">
			<div class="container">
				<div class="caption">
					<h2><?php the_title(); ?></h2>
					<div align="center">
						<div class="linha"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="blocos">
		<div class="container">
			<div class="col-md-4">
				<div class="bloco">
					<div align="center">
						<img src="<?php the_field('imagem-bloco1'); ?>">
					</div>
					<h3><?php the_field('titulo-bloco1'); ?></h3>
					<div class="linha"></div>
					<?php the_field('descricao-bloco1'); ?>
					<a href="<?php the_field('link-bloco1'); ?>" target="_blank">
						<button class="botao">Saiba mais</button>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bloco">
					<div align="center">
						<img src="<?php the_field('imagem-bloco2'); ?>">
					</div>
					<h3><?php the_field('titulo-bloco2'); ?></h3>
					<div class="linha"></div>
					<?php the_field('descricao-bloco2'); ?>
					
					<a href="<?php the_field('link-bloco2'); ?>" target="_blank">
						<button class="botao">Cadastre-se</button>
					</a>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="bloco">
					<div align="center">
						<img src="<?php the_field('imagem-bloco3'); ?>">
					</div>
					<h3><?php the_field('titulo-bloco3'); ?></h3>
					<div class="linha"></div>
					<?php the_field('descricao-bloco3'); ?>
					<a href="<?php the_field('link-bloco3'); ?>" target="_blank">
						<button class="botao">Cadastre-se</button>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
					<script>
						hbspt.forms.create({
						portalId: "5185692",
						formId: "57d1906b-90c7-4e72-8336-5939996d5364"
					});
					</script>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
					<script>
						hbspt.forms.create({
						portalId: "5185692",
						formId: "d4e18b79-9924-4e6e-a88f-dbc4067537a4"
					});
					</script>
	      </div>
	    </div>
	  </div>
	</div>
</main>
<?php get_footer(); ?>