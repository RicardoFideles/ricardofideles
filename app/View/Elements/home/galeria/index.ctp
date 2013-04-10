<script type="text/javascript" src="<?php echo $this->Html->url('/galeria/js/jquery.cycle.all.min.js' );?> "></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/galeria/js/jquery.easing.1.3.js' );?> "></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/galeria/js/script.js' );?> "></script>

<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/galeria/css/galeria.css' );?>" />

<?php
	$noticias = $this->requestAction(array('controller' => 'News', 'action' => 'slider'));
?>

<section class="first">
	<div class="box_outer" id="feature_outer">
		<div class="Feature_news">
			<div class="slider_wrap">
				<div class="slider_items">
					<div class="slider">
						<?php 
							foreach($noticias as $key => $noticia): 
								
							$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($noticia['News']['slug'], $noticia['News']['id']));
						?>
							<div class="slider_item">
								<div style="position:relative; overflow:hidden;">
									
									<?php if (sizeof($noticia['Photo']) > 0) { ?>
										
										<a href="<?php echo $this->Html->url($link); ?>">
											
											<?php 
												$imagem = $noticia['Photo'][0]['imagem'];
												$url = $this->Link->makeLinkImgDir('big', $imagem, 'fotos'); 
											?>
											<img src="<?php echo $this->Html->url($url); ?>" alt="<?php echo $noticia['Photo'][0]['legenda']; ?>" style="opacity: 1;"  alt="temp" title="<?php echo $noticia['News']['name']; ?>">
											<span class='feature_article_icon'></span>
										</a>
										
									<?php } ?>
									
									<div class="slider_caption">
										<h2>
											<a href="<?php echo $this->Html->url($link); ?>">
												<?php echo $noticia['News']['name']; ?>
											</a>
										</h2>
										<?php echo $noticia['News']['descricao']; ?>
							    	</div>	
								</div>
							</div>
						<?php endforeach; ?>
						
					</div> <!--Slider-->
				</div> <!--Slider Items-->
	
				<ul class="slider_nav">
					<?php 
						foreach($noticias as $key => $noticia): 
					?>
						<li>
							<a href="#">
								<?php 
									$imagem = $noticia['Photo'][0]['imagem'];
									$url = $this->Link->makeLinkImgDir('small', $imagem, 'fotos'); 
								?>
								<img src="<?php echo $this->Html->url($url); ?>" alt="<?php echo $noticia['Photo'][0]['legenda']; ?>" style="opacity: 1;"  alt="temp" title="<?php echo $noticia['News']['name']; ?>">
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				
				<div class="clear"></div>
				
				<br />
			</div>
		</div>
	</div>
</section>