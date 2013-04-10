<div class="container breath">
	<div class="sixteen columns">
	
		<p class="big-404">404</p>
		
		<header class="section-headline">
		    <h3>Not found <span class="orange"> :( </span></h3>
		</header>
		
		<p>Desculpe, mas a página que você tentou acessar não existe mais, ou foi digitada incorretamente: <?php echo $url; ?></p>
		<p>
			<?php
				if (Configure::read('debug') > 0 ):
					echo $this->element('exception_stack_trace');
				endif;
			?>
		</p>
		<p>Por favor tente novamente.</p>
	   
    </div>
</div>
