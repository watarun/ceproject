<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('base');
		//echo $this->Html->css('cake.generic');
		echo $this->Javascript->link('http://www.google.com/jsapi');
		echo $this->Javascript->codeBlock('google.load("jquery","1");google.load("jqueryui","1");');
		echo $this->Javascript->link('jquery.gamequery-0.5.0.js');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="row">
			<div class="column grid_8">
				<h1><?php echo $this->Html->link(__('Mirakoo', true), 'http://cakephp.org'); ?></h1>
			</div>
			<div class="column grid_8" style="margin-top:10px;">
				<ul class="links">
				<li><?php echo $this->Html->link(__('home', true), '/users/index'); ?></li>
				<li><?php echo $this->Html->link(__('study', true), '/apps/index'); ?></li>
				<li><?php echo $this->Html->link(__('friends', true), '/friends/index'); ?></li>
				<li><?php echo $this->Html->link(__('group', true), '/groups/index'); ?></li>
				<li><?php echo $this->Html->link(__('setting', true), '/users/setting'); ?></li>
				<li><?php echo $this->Html->link(__('logout', true), '/users/logout'); ?></li>
				</ul>
			</div>
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer" class="row">
			<div class="column grid_16">
			<span>Mirakoo &copy; 2010</span>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
