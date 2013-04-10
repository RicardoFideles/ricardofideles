<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'tags', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Listar</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Tags</span></h2>
    </div>
    
     <br />
    <?php echo $this->Form->create('Tag', array('id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
	    <p class="primeiro">
	    	<label>Título</label>
	        <span class="field"><?php echo $this->Form->input('name'); ?></span>
	    </p>
	     <p>
	    	<label>Notícas Relacionadas</label>
	        <span class="field"><?php echo $this->Form->input('News'); ?></span>
	    </p>
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>
</div>

