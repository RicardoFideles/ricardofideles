<?php   $this->set(array(
	    'title_for_layout' => 'Busca',
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

<?php 



?>

<br clear="all">
<div class="container breath">
	<div class="two-thirds column">
		<?php foreach($noticias as $key => $noticia): ?>
			
			<article>
				<section class= "first">
					<header class="title">
						<div class="line">
							<div class="share">
								<?php
									$link = array('controller' => 'News', 'action' => 'view', 'slug' => $this->Link->makeLink($noticia['News']['slug'], $noticia['News']['id']));
								?>
								
								<div class="fb-like" data-href="<?php echo $this->Html->url($link); ?>" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false">.</div>
								
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
							<a href="<?php echo $this->Html->url($link); ?>">
								<?php echo $noticia['News']['name']; ?>
							</a>
						</h2>
						<div class="news_autor">
							por <?php echo $noticia['News']['autor']; ?> em <?php echo $noticia['News']['created']; ?>
							
							<span class="orange">
								<?php
									$qtd = sizeof($noticia['News']['Tag']) -1;
									foreach($noticia['News']['Tag'] as $key => $tag):
										
										$link = '/tags/'. $tag['id'];
										$name = $tag['name'];
										echo $this->Html->link($name, $link); 
										if ($key < $qtd) {
											echo " | ";
										}
									endforeach; 
								?>
							</span>
							
						</div>
					</div>
				</section>
				
				<?php
					if (sizeof($noticia['News']['Photo']) > 0) {
						$photo = $noticia['News']['Photo'][0];
						$url =  $this->Link->makeLinkImgDir('big',$photo['imagem'], 'fotos');
				?>
					<figure>
						<img src="<?php echo $this->Html->url($url) ?>" width= "620px" height="420px"/>
					</figure>
				
				<?php
					}
				
				?>
				<section class="texto">
					<?php echo $noticia['News']['descricao']; ?>
					<div class="read_more">
						<h6 class="orange">
							<a href="<?php echo $this->Html->url($link);  ?>">
								Leia mais
							</a>
						</h6>
					</div>
				</section>
			</article>
		<?php endforeach; ?>
		
		<ul class="pagination">
            <?php
                echo $this->Paginator->prev('< ', array('tag' => 'li' , 'class'=> 'previous'), null, array('class' => 'disable', 'tag' => 'li'));
                echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li'));
                $this->Paginator->current(null, null, array('class' => 'current'));
                echo $this->Paginator->next(' >', array('tag' => 'li', 'class'=> 'next'), null, array('class' => 'disable','tag' => 'li'));
            ?>
        </ul>
		
		
	</div>
	
	<div class="one-third column ">
		<?php echo $this->element('aside/busca'); ?>
		<?php echo $this->element('google/arroba'); ?>
		<?php echo $this->element('aside/ultimas_noticias'); ?>
	</div>
</div>