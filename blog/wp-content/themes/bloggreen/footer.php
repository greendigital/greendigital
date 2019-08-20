<?php wp_footer();?>
		<footer id = "rodape">
			<div class="container">
				<div class="col-md-3 col-md-offset-1 footerCat" align="center">
					<img src="<?php echo get_template_directory_uri (); ?>/assets/imagens/logo.png" class="img-responsive">
				</div>
				<div class="col-md-2 footerCat" >
					<ul>Categorias
					<?php  
							$cats = get_categories(); 
							foreach ($cats as $cat) { 
								$link = site_url().'/categorias'.'/'.$cat->slug;
							?>
						<li><a href = "<?php echo $link;?>"><?php echo $cat->cat_name;?></a></li>
					<?php 

					}

					?>	
					</ul>
				</div>
				<div class="col-md-2 footerCat" >
					<ul>Confira
					
						<li><a href = "https://greendigital.com.br/agencia-de-marketing-digital-green-digital" target="_blank">A Agência</a></li>
						<li><a href = "https://greendigital.com.br/solucoes-em-marketing-digital" target="_blank">Soluções</a></li>
						<li><a href = "https://greendigital.com.br/clientes" target="_blank">Clientes</a></li>
						<li><a href = "https://greendigital.com.br/franquias" target="_blank">Franquias</a></li>
						<li><a href = "https://greendigital.com.br/contato" target="_blank">Contato</a></li>
						
					</ul>
				</div>

				<div class="col-md-3 footerCat" >
					<ul>Redes Sociais
					
						<li>
							<a href="https://www.facebook.com/agenciagreendigital/" target = "_blank" ><i class="fa fa-facebook-square"></i> /agenciagreendigital</a>
						</li>
						<li>
							<a href="https://www.instagram.com/greendigitalagency/" target = "_blank" ><i class="fa fa-instagram"></i> /greendigitalagency</a>
						</li>
						<li>
							<a href="http://www.twitter.com/greendigital_" target = "_blank" ><i class="fa fa-twitter"></i> /greendigital_</a>
						</li>
						<li>
							<a href="http://greendigital.com.br" target = "_blank" ><i class="fa fa-link"></i> greendigital.com.br</a>
						</li>
						<li>
							<a href="mailto:contato@greendigital.com.br"><i class="fa fa-envelope"></i> contato@greendigital.com.br</a>
						</li>
						
					</ul>
				</div>
				
			</div>
				
		</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62252957-3', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>