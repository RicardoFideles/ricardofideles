<?php
	$tags = $this->requestAction(array('controller' => 'Tags', 'action' => 'top_tags'));
?>

<?php foreach($tags as $key => $tag): 

echo "Tag nome " .$tag['t']['name'];
echo "  ";
echo "Tag id " .$tag['t']['id'];
echo "  ";
echo "Ocorrencia : " . $tag[0]['cont'];
echo"<br />";	
endforeach; ?>