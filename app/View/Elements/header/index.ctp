<div class="container">
	<div class="banner_topo">
		<?php echo $this->element('google/super_topo'); ?>
	</div>
</div>
<header class="topo">
	<div class="container home">
		<div class="logo">
			<figure>
				<a href="<?php echo $this->Html->url('/'); ?>">
					<img src="<?php echo $this->Html->url('/img/logo.png'); ?>" />
				</a>
			</figure>
		</div>
		<nav class="menu">
			<ul class="sf-menu">
				<li><a href="<?php echo $this->Html->url('/'); ?>" class="home">HOME</a></li>
					
					<!--
						
						
					<ul>
		              <li><a href="index.html">Flexslider</a></li>
		              <li><a href="index3.html">Object carousel</a></li>
		              <li><a href="index5.html">Zaccordion</a></li>
          			</ul>
          			
          		-->
         		 </li>
         		 
				<li><a href="<?php echo $this->Html->url('/perfil'); ?>" class="perfil">PERFIL</a></li>
				<li><a href="<?php echo $this->Html->url('/desenvolvimento'); ?>" class="dev">DESENVOLVIMENTO</a></li>
				<li><a href="<?php echo $this->Html->url('/portfolio'); ?>" class="port">PORTFÓLIO</a></li>
				<li><a href="<?php echo $this->Html->url('/noticias-tech'); ?>" class="news">NOTÍCIAS TECH</a></li>
				<li><a href="<?php echo $this->Html->url('/contato'); ?>" class="contato">CONTATO</a></li>
			</ul>
		</nav>
	</div>
</header>