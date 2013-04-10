<?php   $this->set(array(
	    'body_class' => 'home',
	));
?>

<br clear="all">
<div class="container breath">
	<div class="two-thirds column">
		<?php echo $this->element('home/galeria/index'); ?>
		<?php echo $this->element('home/works/index'); ?>
	</div>
	<div class="one-third column ">
		<?php echo $this->element('aside/lista_boxes'); ?>
	</div>
</div>