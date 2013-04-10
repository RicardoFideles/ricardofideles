<?php
	$redesociais = $this->requestAction(array('controller' => 'Networks', 'action' => 'lista'));
	$tags = $this->requestAction(array('controller' => 'Tags', 'action' => 'top_tags'));
	$dados = $this->requestAction(array('controller' => 'Contacts', 'action' => 'dados'));
	$dado = $dados[0]['Contact'];
?>
<footer>
	<div class="container">
		<div class="one-third column">
			<h3>ACOMPANHE</h3>
			<ul class="acompanhe">
				<?php foreach($redesociais as $key => $rede): ?>
					<li>
						<a href="<?php echo $this->Html->url($rede['Network']['link']); ?>" target="_blank">
							<figure>
								<?php $url = $this->Link->makeLinkImgDir('original',$rede['Network']['imagem'], 'network'); ?>
								<img src="<?php echo $this->Html->url($url) ?>" />
							</figure>
							<span>
								<?php echo $rede['Network']['name']; ?>
							</span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="one-third column">
			<h3>CONTATO</h3>
			<ul class="acompanhe">
				<li class="localizacao">
					<figure>
						<img src="<?php echo $this->Html->url('/img/localizacao.png') ?>" />
					</figure>
					<span>
						<?php echo $dado['localizacao']; ?>
					</span>
				</li>
				<li class="phone">
					<figure>
						<img src="<?php echo $this->Html->url('/img/phone.png') ?>" />
					</figure>
					<span>
						<?php echo $dado['telefone']; ?>
					</span>
				</li>
				<li>
					<figure>
						<img src="<?php echo $this->Html->url('/img/email.png') ?>" />
					</figure>
					<span>
						<?php echo $dado['email']; ?>
					</span>
				</li>
				<li>
					<?php $url = $this->Link->makeLinkImgDir('original', $dado['curriculo'], 'curriculo'); ?>
					<a href="<?php echo $this->Html->url($url); ?>">
						<figure>
							<img src="<?php echo $this->Html->url('/img/download.png') ?>" />
						</figure>
						<span>
							Download Curriculo
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="one-third column">
			<h3>TAG CLOUD</h3>
			<div class="tagcloud">
				<?php foreach($tags as $key => $tag): ?> 
				
				<?php $url = '/tags/'. $tag['t']['id']; ?>
				<a href="<?php echo $this->Html->url($url) ?>" title="<?php echo $tag[0]['cont']; ?> tópicos">
					<?php echo $tag['t']['name']; ?>
				</a>
				
				<?php endforeach; ?>
				
			</div>

			
		</div>
	</div>
</footer>
<div class="copy">
	<div class="container">
		<div class="web">
			Ricardo Fideles - Soluções Web - 
		</div>
		<div class="rights">
			Todos os direitos reservados desde 2006 
		</div>
	</div>
</div>