<?php
echo $this->element('design/header');
?>

<?php
echo $this->element('Aros/links');
?>

<?php
if(count($missing_aros['roles']) > 0)
{
	echo '<h3>' . __d('acl', 'Grupos sin correspondencia con Aro') . '</h3>';
	
	$list = array();
	foreach($missing_aros['roles'] as $missing_aro)
	{
		$list[] = $missing_aro[$role_model_name][$role_display_field];
	}
	
	echo $this->Html->nestedList($list);
}
?>

<?php
if(count($missing_aros['users']) > 0)
{
	echo '<h3>' . __d('acl', 'Usuarios sin correspondencia con Aro') . '</h3>';
	
	$list = array();
	foreach($missing_aros['users'] as $missing_aro)
	{
		$list[] = $missing_aro[$user_model_name][$user_display_field];
	}
	
	echo $this->Html->nestedList($list);
}
?>

<?php
if(count($missing_aros['roles']) > 0 || count($missing_aros['users']) > 0)
{
	echo '<p>';
	echo $this->Html->link(__d('acl', 'Reconstruir'), '/admin/acl/aros/check/run');
	echo '</p>';
}
else
{
	echo '<p>';
	echo __d('acl', 'No se encontraron AROs para reconstruir.');
	echo '</p>';
}
?>

<?php
echo $this->element('design/footer');
?>