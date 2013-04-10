<?php   $this->set(array(
	    'body_class' => 'perfil',
	));
?>

<?php
	$dados = $this->requestAction(array('controller' => 'Contacts', 'action' => 'dados'));
	$dado = $dados[0]['Contact'];
?>

<br clear="all">
<div class="container breath">
	<div class="two-thirds column">
		<div class= "dote">
			.	
		</div>
		<script>
		  (function() {
		    var cx = '014340554165055224689:voiqcjyyyxm';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			'//www.google.com/cse/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(gcse, s);
			  })();
		</script>
		<gcse:searchresults-only></gcse:searchresults-only>
	</div>
	
	<div class="one-third column ">
		<?php echo $this->element('aside/busca'); ?>
		<?php echo $this->element('google/arroba'); ?>
		<?php echo $this->element('aside/ultimas_noticias'); ?>
	</div>
</div>