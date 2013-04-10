<?php echo $this->element('admin/ed/index'); ?>

<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'news', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Listar</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Redes Sociais</span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('Network', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
		<?php echo $this->Form->input('id'); ?>
	    <p class="primeiro">
	    	<label>Nome</label>
	        <span class="field"><?php echo $this->Form->input('name'); ?></span>
	    </p>
	    <p>
	    	<label>Status</label>
	        <span class="field"><?php echo $this->Form->input('status_id'); ?></span>
	    </p>
	    <p>
	    	<label>Link</label>
	        <span class="field"><?php echo $this->Form->input('link'); ?></span>
	    </p>
	     <p>
	    	<label>Imagem</label>
	        <span class="field"><?php echo $this->Form->input('imagem',  array('type' => 'file')); ?></span>
	    </p>
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>

</div>
