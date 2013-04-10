<?php echo $this->element('admin/ed/index'); ?>

<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'contacts', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Listar</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Dados Pessoais</span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('Contact', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
    	<?php echo $this->Form->input('id'); ?>
	    <p class="primeiro">
	    	<label>Título</label>
	        <span class="field"><?php echo $this->Form->input('name'); ?></span>
	    </p>
	    <p>
	    	<label>Perfil</label>
	        <span class="field"><?php echo $this->Form->input('perfil', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor', 'id'=> 'editor1')); ?></span>
	    </p>
	    <p>
	    	<label>Diferêncial</label>
	        <span class="field"><?php echo $this->Form->input('diferencial', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor', 'id'=> 'editor1')); ?></span>
	    </p>
	    <p>
	    	<label>Skills</label>
	        <span class="field"><?php echo $this->Form->input('skills', array('rows'=>'5', 'cols'=>'15','class'=>'ckeditor', 'id'=> 'editor1')); ?></span>
	    </p>
	    <p>
	    	<label>Localização</label>
	        <span class="field"><?php echo $this->Form->input('localizacao'); ?></span>
	    </p>
	    <p>
	    	<label>Telefone</label>
	        <span class="field"><?php echo $this->Form->input('telefone'); ?></span>
	    </p>
	    <p>
	    	<label>Email</label>
	        <span class="field"><?php echo $this->Form->input('email'); ?></span>
	    </p>
	    <p>
	    	<label>Currículo</label>
	        <span class="field"><?php echo $this->Form->input('curriculo', array('type' => 'file')); ?></span>
	    </p>
	   
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>

</div>

