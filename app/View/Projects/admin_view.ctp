<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'projects', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Voltar a lista de projetos</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span><?php echo $project['Project']['name'] ?></span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('Product', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
    	<?php echo $this->Form->input('empresa', array('type' => 'hidden', 'value' => 'eterny')); ?>
	    <p class="primeiro">
	    	<label>Título</label>
	        <span class="field"><?php echo $project['Project']['name']; ?></span>
	    </p>
	    <p>
	    	<label>URL</label>
	        <span class="field"><?php echo $project['Project']['url']; ?></span>
	    </p>
	    <p>
	    	<label>Descrição</label>
	        <span class="field"><?php echo h($project['Project']['descricao']); ?></span>
	    </p>
	    <div id="texto">
	    	<label>Meta : Keywords</label>
	        <span class="field"><div id="corpo"><?php echo $project['Project']['keywords']; ?></div></span>
	    </div>
	     <div id="texto">
	    	<label>Meta : Description</label>
	        <span class="field"><div id="corpo"><?php echo $project['Project']['description']; ?></div></span>
	   </div>
	    
	    <p>
    <?php echo $this->Form->end();?>
</div>
    
<br clear="all" /><br />
<div class="content">

	<ul class="buttonlist">
		<li>
			<a href="<?php $link = array('controller' => 'Photos', 'action' => 'add_projeto', $project['Project']['id']); echo $this->Html->url($link); ?>" class="btn btn_book">
				<span>Adicionar imagens</span>
			</a>
		</li>
	</ul>
	<div class="contenttitle">
		<h2 class="image"><span>Fotos Relacionadas</span></h2>
	</div>

	<br />

	<ul class="imagelist">
		<?php foreach ($project['Photo'] as $foto): ?>
			<li>
				<?php $url = $this->Link->makeLinkImgDir('small', $foto['imagem'], 'fotos'); ?>
				<img src="<?php echo $this->Html->url($url); ?>" alt="" style="opacity: 1;">
				<span>
					<a href="ajax/edit_photo.html" class="name ajax cboxElement"><?php echo $foto['imagem'] ?></a>
					<?php $url_edit = array('controller' => 'Photos', 'action' => 'edit_projeto', $foto['id'], $project['Project']['id']); ?>
					<a href="<?php echo $this->html->url($url_edit) ;?>" class="edit ajax cboxElement"></a>
					<?php $url_delete = array('controller' => 'Photos', 'action' => 'delete_projeto', $foto['id'], $project['Project']['id']); ?>
					<a class="delete" href="<?php echo $this->html->url($url_delete) ;?>"></a>
				</span>
			</li>
		<?php endforeach; ?>    	
	</ul>
<br clear="all" /><br />
</div>	

<br clear="all" /><br />

