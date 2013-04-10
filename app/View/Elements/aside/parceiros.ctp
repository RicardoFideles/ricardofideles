<?php
	$noticias = $this->requestAction(array('controller' => 'News', 'action' => 'ultimas_noticias'));
?>

<?php 
	if (sizeof($noticias) > 0) {
?>
	<div class="box">
		<header class="title_box">
			<h3>Parceiros</h3>
		</header>
		<section class="lista parceiros">
			<ul>
				<li>
					<a href="http://www.fourwaad.com.br/" target="_blank">
						<img src="<?php echo $this->Html->url('/img/Logo4Waad.png'); ?>" width="250px" height="70px"/>
					</a>
				</li>
			</ul>
		</section>
	</div>
<?php } ?>