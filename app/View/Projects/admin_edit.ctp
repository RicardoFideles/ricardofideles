<?php echo $this->element('admin/ed/index'); ?>

<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'projects', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Listar</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Projetos</span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('Project', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
    	<?php echo $this->Form->input('id'); ?>
	    <p class="primeiro">
	    	<label>Título</label>
	        <span class="field"><?php echo $this->Form->input('name'); ?></span>
	    </p>
	    <p>
	    	<label>Parceiro</label>
	        <span class="field"><?php echo $this->Form->input('parceiro'); ?></span>
	    </p>
	    <p>
	    	<label>Url do site</label>
	        <span class="field"><?php echo $this->Form->input('url'); ?></span>
	    </p>
	    <p>
	    	<label>Tecnologias</label>
	        <span class="field"><?php echo $this->Form->input('tech'); ?></span>
	    </p>
	    <p>
	    	<label>Texto</label>
	        <span class="field"><?php echo $this->Form->input('descricao', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor', 'id'=> 'editor1')); ?></span>
	    </p>
	    <p>
	    	<label>Meta : Keywords</label>
	        <span class="field"><?php echo $this->Form->input('keywords'); ?></span>
	    </p>
	     <p>
	    	<label>Meta : Description</label>
	        <span class="field"><?php echo $this->Form->input('description'); ?></span>
	    </p>
	     <p>
	    	<label>Tags</label>
	        <span class="field"><?php echo $this->Form->input('Tag'); ?></span>
	    </p>
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>

</div>
