<?php
	$noticias = $this->requestAction(array('controller' => 'News', 'action' => 'ultimas_noticias'));
?>

<?php 
	if (sizeof($noticias) > 0) {
?>
	<div class="box">
		<header class="title_box">
			<h3>Últimas</h3>
		</header>
		<section class="lista">
			<ul>
				<?php foreach($noticias as $key => $noticia): ?>
					
					
					
					<?php 
					
						$link = array('controller' => 'news', 'action' => 'view', 'slug' => $this->Link->makeLink($noticia['News']['slug'], $noticia['News']['id']));
						
						if (sizeof($noticia['Photo']) > 0) { ?>
						
						<li>
						
					<?php } else { ?>
						<li class="text_only">
					<?php } ?>
						<a href="<?php echo $this->Html->url($link);  ?>">
							<?php if (sizeof($noticia['Photo']) > 0) { ?>
								<figure>
									<?php $url = $this->Link->makeLinkImgDir('small', $noticia['Photo'][0]['imagem'], 'fotos'); ?>
									<img src="<?php echo $this->Html->url($url); ?>" alt="" style="opacity: 1;" width="107px" height="60px">
								</figure>
							<?php } ?>
							<span class="ranking"><?php echo $key+1; ?></span>
							<div class="text">
								<span>
									<?php echo $noticia['News']['name']; ?>
								</span>
							</div>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="read_more">
				<h6 class="orange">
					<a href="<?php echo $this->Html->url('/noticias-tech');  ?>">
						Todas as matérias
					</a>
				</h6>
			</div>
		</section>
	</div>
<?php } ?>