<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "FRS: " . $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css(array('cake.generic', 'jquery-ui'));
		echo $this->Html->css(array('jquery-ui'));
		echo $this->Html->script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js', 'frs', 'jquery-ui.min', $title_for_layout), array('inline' => true));
		//echo $scripts_for_layout;

	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><a href='/'>Fairchild Reservation System</a></h1>
		<div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
		</div>
	</div>
	<?php 
		$environment = $this->element('environment'); 
		if (!empty($environment)) {
			echo $environment;
		}
		
		//echo $this->element('sql_dump'); 
	?>
</body>
</html>