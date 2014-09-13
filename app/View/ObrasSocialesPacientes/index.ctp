<?php
    $indexObrasSocialesPaciente = $this->Html->url(array(
             "controller" => "obras_sociales_pacientes",
             "action" => "indexPaciente",
         ), true);
?>
        
<script type="text/javascript">

    $(document).ready(function() {            
        $('#indexObrasSocialesPacientes').load(<?php echo sprintf("'%s'", $indexObrasSocialesPaciente); ?>  + '/' +  <?php echo $idPaciente; ?>);
                                        
    });

</script>

<div id="indexObrasSocialesPacientes"></div>        
<div id="editObraSocialPaciente"></div>
