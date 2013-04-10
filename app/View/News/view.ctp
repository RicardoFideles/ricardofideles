<?php   $this->set(array(
	    'title_for_layout' => 'Busca',
	    'body_class' => 'tech-noticias',
	    'description' => 'Imobiliaria em saquarema com as melhores casas, terrenos e sitios a venda na regiao dos lagos, saquarema.'
	));
?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



<br clear="all">
<div class="container breath">
	<div class="two-thirds column">
			<article>
				<section class= "first">
					<header class="title">
						<div class="line">
							<div class="share">
								
								<div class="fb-like" data-href="<?php echo $this->Html->url($this->here, true); ?>" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false">.</div>
								
								<span class="separator"></span>
								
								<div class="linkedin">
									<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
									<script type="IN/Share" data-counter="right"></script>
								</div>
								
								<span class="separator"></span>
								
								<div class="tweets">
									<a href="https://twitter.com/share" class="twitter-share-button" data-via="ricardo_fideles" data-lang="pt">Tweetar</a>
								</div>
								
								<span class="separator"></span>
								
								<div class="gplus">
									<div class="g-plusone"></div>
			
									<!-- Place this tag after the last +1 button tag. -->
									<script type="text/javascript">
									  window.___gcfg = {lang: 'pt-BR'};
									
									  (function() {
									    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
									    po.src = 'https://apis.google.com/js/plusone.js';
									    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
									
								</div>
								
							</div>
						</div>
					</header>
				</section>
				<section class="news_title">
					<div class="info">
						<h2 class="orange">
							<?php echo $noticia['News']['name']; ?>
						</h2>
						<div class="news_autor">
							por <?php echo $noticia['News']['autor']; ?> em <?php echo $noticia['News']['created']; ?>
							
							<span class="orange">
								<?php
									$qtd = sizeof($noticia['Tag']) -1;
									foreach($noticia['Tag'] as $key => $tag): 
										echo $tag['name']; 
										if ($key < $qtd) {
											echo "|";
										}
									endforeach; 
								?>
							</span>
							
						</div>
					</div>
				</section>
				
				<?php
					if (sizeof($noticia['Photo']) > 0) {
						$photo = $noticia['Photo'][0];
						$url =  $this->Link->makeLinkImgDir('big',$photo['imagem'], 'fotos');
				?>
					<figure>
						<img src="<?php echo $this->Html->url($url) ?>" width= "620px" height="420px"/>
					</figure>
				
				<?php
					}
				
				?>
				<section class="texto">
					<?php echo $noticia['News']['texto']; ?>
				</section>
			</article>
		
		<div class="more_works">
			<span>
				<a href="<?php echo $this->Html->url('/portfolio'); ?>">
					MEUS TRABALHOS
				</a>
			</span>
		</div>
	</div>
	
	<div class="one-third column ">
		<?php echo $this->element('aside/busca'); ?>
		<?php echo $this->element('google/arroba'); ?>
		<?php echo $this->element('aside/ultimas_noticias'); ?>
	</div>
</div>