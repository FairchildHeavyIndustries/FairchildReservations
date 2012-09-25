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
<?php
	$this->Html->docType('HTML5');
?>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "FRS: " . $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array( 'fairchild-res', 'frs.dropdown', 'jquery-ui'));
		echo $this->Html->script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js', 'frs',  $title_for_layout), array('inline' => true));
		//echo $scripts_for_layout;

	?>
</head>
<body>
	<div id="container">
		<header>
			<a href='/' class='frs-logo'></a>
		</header>
		<div id="content" class='cf'>
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<footer>
			<span>All content &copy; 2012 <a href="mailto:alex.fairchild@gmail.com">Alex Fairchild</a></span>
		</footer>
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