<?php   $this->set(array(
	    'body_class' => 'perfil',
	));
?>

<?php
	$dados = $this->requestAction(array('controller' => 'Contacts', 'action' => 'dados'));
	$dado = $dados[0]['Contact'];
?>

<br clear="all">
<div class="container breath">
	<div class="two-thirds column">
		<section class= "first">
			<header class="title">
				<div class="line">
					<h2 class="orange">Perfil</h2>
				</div>
			</header>
		</section>
		<section class="autor">
			<div class="info">
				<h3>
					Ricardo Fideles <font>2012</font>
				</h3>
				<span class="orange">
					download Curriculum
					<?php $url = $this->Link->makeLinkImgDir('original', $dado['curriculo'], 'curriculo'); ?>
					<a href="<?php echo $this->Html->url($url); ?>">
						<img  src="<?php echo $this->Html->url('/img/download.png'); ?>" />
					</a>
				</span>
				
			</div>
		</section>
		<section class="texto">
			<?php echo $dado['perfil']; ?>
		</section>
		<section>
			<header class="title">
				<div class="line">
					<h2 class="orange">Diferêncial</h2>
				</div>
			</header>
		</section>
		<section class="texto">
			<?php echo $dado['diferencial']; ?>
		</section>
		<section>
			<header class="title">
				<div class="line">
					<h2 class="orange">Skills</h2>
				</div>
			</header>
		</section>
		<section class="texto">
			<?php echo $dado['skills']; ?>
		</section>
		
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