<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('Ricardo Fideles', 'Ricardo Fideles - Criação de Sites e Sistemas');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array ('base', 'skeleton', 'layout', 'style', 'superfish'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery.mobilemenu.js'); ?>"></script>
	<script src="<?php echo $this->Html->url('/js/modernizr-2.0.6.min.js'); ?>"></script>
	<script src="<?php echo $this->Html->url('/js/superfish.js'); ?>"></script>

</head>
<body id="<?php if (isset($body_class)) echo $body_class ?>">
	<?php echo $this->element('jscall/facebook'); ?>
	<?php echo $this->element('header/index'); ?>

	<?php echo $this->fetch('content'); ?>
	
	<?php echo $this->element('footer/pre_footer'); ?>
	<?php echo $this->element('footer/index'); ?>
	<?php echo $this->element('jscall/index'); ?>
		
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
