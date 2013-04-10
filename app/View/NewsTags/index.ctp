<div class="newsTags index">
	<h2><?php echo __('News Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('news_id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($newsTags as $newsTag): ?>
	<tr>
		<td><?php echo h($newsTag['NewsTag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($newsTag['News']['name'], array('controller' => 'news', 'action' => 'view', $newsTag['News']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($newsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $newsTag['Tag']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newsTag['NewsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newsTag['NewsTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newsTag['NewsTag']['id']), null, __('Are you sure you want to delete # %s?', $newsTag['NewsTag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New News Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
