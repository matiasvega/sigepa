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

$cakeDescription = __d('cake_dev', 'SI.GE.PA Sistema de gestion de pacientes');
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
                echo $this->Html->css('superfish-min.css');                
                echo $this->Html->css('fullcalendar-min.css');
                echo $this->Html->css('fullcalendar.print-min.css');                
                echo $this->Html->css('demo_page-min.css');
                echo $this->Html->css('demo_table-min.css');                
                echo $this->Html->css('cake.generic-min.css');
                echo $this->Html->css('jquery.datetimepicker-min.css');                
                echo $this->Html->css('jquery.ui.autocomplete-min.css');
                echo $this->Html->css('bootstrap-min.css');
                echo $this->Html->css('south-street/jquery-ui-1.10.4.custom-min.css');
                echo $this->Html->css('chosen-min.css');
                echo $this->Html->css('jquery.pnotify.default-min.css');
                echo $this->Html->css('jquery.pnotify.default.icons-min.css');
//                echo $this->Html->css('jquery.slidepanel.css');
                echo $this->Html->css('sigepa-min.css');
                echo $this->Html->css('tooltipster-min.css');
                echo $this->Html->css('themes/tooltipster-shadow-min.css');
                echo $this->Html->css('bootstrap-clockpicker-min.css');
                
                echo $this->Html->script('jquery-2.1.0.min.js');                          
                echo $this->Html->script('jquery.tooltipster.min.js');                
                echo $this->Html->script('jquery-ui-1.10.4.custom.min.js');
                
                echo $this->Html->script('hoverIntent.js');
                echo $this->Html->script('superfish.js');                
                echo $this->Html->script('fullcalendar.js');
                
                echo $this->Html->script('jquery.ui.core.min.js');                
                echo $this->Html->script('jquery.ui.widget.min.js');
                echo $this->Html->script('jquery.ui.tabs.min.js');
//                echo $this->Html->script('jquery.ui.mouse.js');
//                echo $this->Html->script('jquery.ui.button.js');
//                echo $this->Html->script('jquery.ui.draggable.js');
                echo $this->Html->script('jquery.ui.position.min.js');
//                echo $this->Html->script('jquery.ui.resizable.js');
//                echo $this->Html->script('jquery.ui.dialog.js');
//                echo $this->Html->script('jquery.ui.effect.js');
                echo $this->Html->script('jquery.datetimepicker.js');
                
                echo $this->Html->script('jquery.ui.menu.min.js');
//                echo $this->Html->script('jquery.ui.autocomplete.js');                
                echo $this->Html->script('jquery.dataTables.min.js');
                echo $this->Html->script('jquery.ui.datepicker.min.js');
                echo $this->Html->script('chosen.jquery.min.js');
                echo $this->Html->script('jquery.pnotify.min.js');
                
                echo $this->Html->script('bootstrap.js');
//                echo $this->Html->script('bootstrap3-typeahead.js');
                echo $this->Html->script('bootstrap-clockpicker.js');
                echo $this->Html->script('sigepa.js');
//                echo $this->Html->script('jquery.slidepanel.js');
                                
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
		<div id="header">
                    <div id="menu"> 
                        
                        <?php echo $this->element('menu'); ?> 
                        
                    </div>                        
                    <div id="toolbar"> 
                        <?php echo $this->element('toolbar'); ?>
                    </div>  
		</div>
		<div id="content">
                        <!--nocache-->
			<?php echo $this->Session->flash(); ?>
                        <!--/nocache-->
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
                    <div id="nombreSistema"> Sistema de Gestion de Pacientes v1.0 rc </div>
                    <div id="powered">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
                    </div>
		</div>
	</div>
        <!--nocache-->
	<?php //  echo $this->element('sql_dump'); ?>
        <!--/nocache-->
</body>
</html>
