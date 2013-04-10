<?php
	$tags = $this->requestAction(array('controller' => 'Tags', 'action' => 'top_tags'));
?>

<div class="box">
	<header class="title_box">
		<h3>Tags</h3>
	</header>
	<section>
		<div class="tagcloud">
			<?php foreach($tags as $key => $tag): ?> 
				<?php $url = '/tags/'. $tag['t']['id']; ?>
				<a href="<?php echo $this->Html->url($url) ?>" title="<?php echo $tag[0]['cont']; ?> tópico(s) sobre <?php echo $tag['t']['name']; ?>">
					<?php echo $tag['t']['name']; ?>
				</a>
			<?php endforeach; ?>
		</div>
	</section>
</div>