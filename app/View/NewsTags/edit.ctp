<div class="newsTags form">
<?php echo $this->Form->create('NewsTag');?>
	<fieldset>
		<legend><?php echo __('Edit News Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('news_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NewsTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NewsTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List News Tags'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
