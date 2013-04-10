<?php   $this->set(array(
	    'body_class' => 'contato'
	));
?>

<?php
	$dados = $this->requestAction(array('controller' => 'Contacts', 'action' => 'dados'));
	$dado = $dados[0]['Contact'];
?>

<script type="text/javascript" src="<?php echo $this->Html->url('/js/contact.js'); ?>">
	
	
</script>

<br clear="all">
<div class="container breath">
	<div class="two-thirds column">
		<section class= "first">
			<header class="title">
				<div class="line">
					<h2 class="orange">Contato</h2>
				</div>
			</header>
		</section>
		<section class="autor">
			<div class="info">
				<h3>
					Envie emails / Solicite um orçamento :					
					<a href="mailto:ricardo@ricardofideles.com.br">
						ricardo@ricardofideles.com.br
					</a>
				</h3>
			</div>
		</section>
		<section class="texto">
			<div id="note"></div>
			<?php echo $this->Form->create('Contato', array('action' => 'enviar', 'id'=>'form-envio', 'autocomplete' => 'off')) ?>
				<ul>
					<li>
						<label for="Field1" class="orange">Nome</label>
						<div>
							<input id="nome" type="text" spellcheck="false" value="" maxlength="255" tabindex="1" name="name" />
						</div>
					</li>
					<li>
						<label for="Field2" class="orange">Mensagem</label>
						<div>
							<textarea rows="6" cols="40" tabindex="3" onKeyUp=""required id="mensagem" name="message"></textarea>
						</div>
					</li>
					<li>
						<label for="Field3" class="orange">Email</label>
						<div>
							<input id="email" type="email" spellcheck="false" value="" maxlength="255" tabindex="2" name="email"/>
						</div>
					</li>
					<li class="buttons">
						<div>
							<input id="saveForm" type="submit" value="Enviar" tabindex="4" name="enviar"/>
						</div>
					</li>
				</ul>
			<?php echo $this->Form->end(); ?>
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