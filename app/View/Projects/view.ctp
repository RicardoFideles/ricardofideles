<?php   $this->set(array(
	    'title_for_layout' => 'Projeto',
	));
?>

<br clear="all">
<div class="container breath">
	
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
						<?php echo $projeto['Project']['name']; ?>
					</h2>
					<div class="news_autor">
						por Ricardo Fideles em <?php echo $projeto['Project']['created']; ?>
					</div>
				</div>
			</section>
			<section class="texto">
				<?php echo $projeto['Project']['descricao']; ?>
			</section>
			<?php foreach($projeto['Photo'] as $key => $foto): ?>
				<?php	
					$imagem = $foto['imagem'];
					$url =  $this->Link->makeLinkImgDir('extrabig',$imagem, 'fotos');
				?>	
					<section class="<?php if ($key > 0) echo 'figure'; ?>">
						<figure>
							<img src="<?php echo $this->Html->url($url) ?>" width= "960px" height="640px"/>
						</figure>
					</section>
				
			<?php endforeach; ?>
			
			
		</article>	
		
	<br clear="all">
	
	
</div>