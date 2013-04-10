<div class="newsTags view">
<h2><?php  echo __('News Tag');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newsTag['NewsTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('News'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newsTag['News']['name'], array('controller' => 'news', 'action' => 'view', $newsTag['News']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $newsTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News Tag'), array('action' => 'edit', $newsTag['NewsTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete News Tag'), array('action' => 'delete', $newsTag['NewsTag']['id']), null, __('Are you sure you want to delete # %s?', $newsTag['NewsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
