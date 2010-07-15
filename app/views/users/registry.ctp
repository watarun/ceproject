<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php __('CakePHP: the rapid development php framework:'); ?>
        <?php // echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('base');
        //echo $this->Html->css('cake.generic');
    ?>
</head>
<body>
    <div id="container">
        <div id="header" class="row">
            <div class="column grid_8">
                <h1><?php echo $this->Html->link(__('Mirakoo', true), 'http://cakephp.org'); ?></h1>
            </div>
            <div class="column grid_8">
				<form method=post action="<?php echo $this->Html->url('/users/login',true)?>"
                username <input type=text> password <input type=text> <button type="submit">login</button>
				</form>
            </div>
        </div>

        <div id="content">

            <?php echo $this->Session->flash(); ?>
           
            <div class="row">
            <div class="column grid_8">
            Change the Education project 
            </div>
            <div class="column grid_8 registry">
            <h2>regist form</h2>
            <label><span>name</span><input type=text></label>
            <label><span>login id</span><input type=text></label>
            <label><span>e-mail</span><input type=text></label>
            <label><span>password</span><input type=text></label>
            <label><span>sex</span><select><option>male</option></select></label>
            <button>Submit</button>
            </div>
            </div>

        </div>
        <div id="footer" class="row">
            <div class="column grid_16">
            <?php echo $this->Html->link(
                    $this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
                    'http://www.cakephp.org/',
                    array('target' => '_blank', 'escape' => false)
                );
            ?>
            </div>
        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
