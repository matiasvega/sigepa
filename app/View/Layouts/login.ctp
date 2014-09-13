<!DOCTYPE html>
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'SI.GE.PA Sistema de Gestion de Pacientes');
?>

<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
                echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap.css');
                echo $this->Html->css('south-street/jquery-ui-1.10.4.custom.css');
                echo $this->Html->css('jquery.pnotify.default.css');
                echo $this->Html->css('jquery.pnotify.default.icons.css');
                echo $this->Html->css('login.css');
                
                echo $this->Html->script('jquery-2.1.0.js');                                                
                echo $this->Html->script('jquery-ui-1.10.4.custom.js');
                echo $this->Html->script('jquery.pnotify.js');
                
                echo $this->Html->script('bootstrap.js');
                echo $this->Html->script('sigepa.js');
                                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        
</head>
<body>
	<div id="container">
		<!--<div id="header">-->
                    <!--<div id="menu"> <?php // echo $this->element('menu'); ?> </div>-->
                    <!--<div id="toolbar"> ccc </div>-->  
		<!--</div>-->
		<div id="content">			
			<?php echo $this->fetch('content'); ?>
                        <?php echo $this->Session->flash(); ?>
		</div>
		<!--<div id="footer">-->
                    <!--<div id="nombreSistema"> Sistema de Gestion de Pacientes v1.0 rc </div>-->
                <div id="powered">
                    <?php echo $this->Html->link(
                                    $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                                    'http://www.cakephp.org/',
                                    array('target' => '_blank', 'escape' => false)
                            );
                    ?>
                </div>
		<!--</div>-->
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
