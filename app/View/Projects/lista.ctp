<?php   $this->set(array(
	    'title_for_layout' => 'Projetos',
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
	
	<?php foreach($projetos as $key => $projeto): ?>
		<?php
			$link = array('controller' => 'projects', 'action' => 'view', 'slug' => $this->Link->makeLink($projeto['Project']['slug'], $projeto['Project']['id']));
		?>
		<article class="portfolio<?php if (($key) %2) {echo " right";} ?>">
			
			<?php
				if (sizeof($projeto['Photo']) > 0) {
					
					// var_dump($projeto['Photo'][0]['imagem']);
					// exit;
					
					
					$photo = $projeto['Photo'][0]['imagem'];
					$url =  $this->Link->makeLinkImgDir('medium',$photo, 'fotos');
			?>
				<figure>
					<a href="<?php echo $this->Html->url($link); ?>">
						<img src="<?php echo $this->Html->url($url) ?>" width= "375px" height="235px"/>
					</a>
				</figure>
				<section class="legenda">
					<div class="link">
						<strong>
							<a href="<?php echo $this->Html->url($link); ?>">
								<?php echo $projeto['Project']['name']; ?>
							</a>
						</strong>
						| Parceiro / Cliente :  
						<a href="<?php echo $projeto['Project']['url']; ?>" target="_blank">
							<?php echo $projeto['Project']['parceiro']; ?>
						</a>
					</div>
					<div>
						Tecnologias : <?php echo $projeto['Project']['tech']; ?>
					</div>
				</section>
			
			<?php
				}
			
			?>
		</article>	
		
		
		
	<?php endforeach; ?>
	<br clear="all">
	<ul class="pagination">
        <?php
            echo $this->Paginator->prev('< ', array('tag' => 'li' , 'class'=> 'previous'), null, array('class' => 'disable', 'tag' => 'li'));
            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li'));
            $this->Paginator->current(null, null, array('class' => 'current'));
            echo $this->Paginator->next(' >', array('tag' => 'li', 'class'=> 'next'), null, array('class' => 'disable','tag' => 'li'));
        ?>
    </ul>
	
</div>