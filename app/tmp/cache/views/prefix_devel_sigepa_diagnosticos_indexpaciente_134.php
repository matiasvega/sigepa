<!--cachetime:1423714111--><?php
			App::uses('DiagnosticosController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MTI6ImRpYWdub3N0aWNvcyI7czo2OiJhY3Rpb24iO3M6MTM6ImluZGV4UGFjaWVudGUiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czozOiIxMzQiO31zOjY6ImlzQWpheCI7YjoxO3M6NjoibW9kZWxzIjthOjc6e3M6MTE6IkRpYWdub3N0aWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjExOiJEaWFnbm9zdGljbyI7fXM6MTA6IlBlcm1pc3Npb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTA6IlBlcm1pc3Npb24iO31zOjM6IkFybyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBcm8iO31zOjM6IkFjbyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBY28iO31zOjQ6IlVzZXIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVXNlciI7fXM6OToiUGFjaWVudGVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFwcE1vZGVsIjt9czoxMDoiUGF0b2xvZ2lhcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBcHBNb2RlbCI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czozMDoiZGlhZ25vc3RpY29zL2luZGV4UGFjaWVudGUvMTM0IjtzOjQ6ImJhc2UiO3M6MTM6Ii9kZXZlbC9zaWdlcGEiO3M6Nzoid2Vicm9vdCI7czoxNDoiL2RldmVsL3NpZ2VwYS8iO3M6NDoiaGVyZSI7czo0NDoiL2RldmVsL3NpZ2VwYS9kaWFnbm9zdGljb3MvaW5kZXhQYWNpZW50ZS8xMzQiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new DiagnosticosController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjM6IjEzNCI7czoxMjoiZGlhZ25vc3RpY29zIjthOjA6e31zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MjY0OToiPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkgewogICAgICAgICQoJyNkaWFnbm9zdGljb3NJbmRleCcpLmRhdGFUYWJsZSh7CiAgICAgICAgICAgICJiUGFnaW5hdGUiOiB0cnVlLAogICAgICAgICAgICAiYkxlbmd0aENoYW5nZSI6IGZhbHNlLAogICAgICAgICAgICAiYkZpbHRlciI6IHRydWUsCiAgICAgICAgICAgICJiU29ydCI6IHRydWUsCiAgICAgICAgICAgICJiSW5mbyI6IHRydWUsCiAgICAgICAgICAgICJiQXV0b1dpZHRoIjogZmFsc2UsCiAgICAgICAgICAgICJhYVNvcnRpbmciOiBbWyAwLCAiYXNjIiBdXSwKICAgICAgICAgICAgInNQYWdpbmF0aW9uVHlwZSI6ICJmdWxsX251bWJlcnMiLAogICAgICAgICAgICAiYkpRdWVyeVVJIjogdHJ1ZSwKICAgICAgICAgICAgIm9MYW5ndWFnZSI6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgInNVcmwiOiAnaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGVfRVMudHh0JyAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgIH0pOwogICAgICAgICAgICAgICAgCiAgICAgICAgJCgnLmNhcmdhcl9kaWFnbm9zdGljbycpLmJpbmQoJ2NsaWNrJywgZnVuY3Rpb24oKSB7Ci8vICAgICAgICAgICAgY29uc29sZS5sb2coJCh0aGlzKS5wcm9wKCdpZCcpKTsKICAgICAgICAgICAgJCgnI2VkaXREaWFnbm9zdGljbycpLmxvYWQoJ2h0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL2RpYWdub3N0aWNvcy9lZGl0JyArICcvJyArICQodGhpcykucHJvcCgnaWQnKSArICcvJyArIDEzNCk7CiAgICAgICAgICAgICQoJyNlZGl0RGlhZ25vc3RpY28nKS5kaWFsb2coewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kYWw6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogNzkwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiA0NDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkcmFnZ2FibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXNpemFibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZTogJ0NhcmdhciBkaWFnbm9zdGljbyBkZWZpbml0aXZvJywKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNob3c6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWZmZWN0OiAiYmxpbmQiLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkdXJhdGlvbjogMTAwMCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0sCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoaWRlOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVmZmVjdDogImZhZGUiLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkdXJhdGlvbjogNTAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgCiAgICAgICAgfSk7CiAgICAgICAgCiAgICAgICAgCiAgICB9KTsKCjwvc2NyaXB0PgoKPGRpdiBjbGFzcz0iZGlhZ25vc3RpY29zSW5kZXgiPgoJPCEtLTxoMj48L2gyPi0tPgoJPHRhYmxlIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgaWQ9ImRpYWdub3N0aWNvc0luZGV4Ij4KICAgICAgICAgICAgPHRoZWFkPgogICAgICAgICAgICAgICAgPHRyPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+IGlkIDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD4gRmVjaGEgPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IERpYWdub3N0aWNvIFByZXN1bnRpdm8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPnBhY2llbnRlc19pZDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBEaWFnbm9zdGljbyBEZWZpbml0aXZvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBQYXRvbG9naWEgPC90aD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPiBDcmVhZG8gPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IE1vZGlmaWNhZG8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3M9ImFjdGlvbnMiPjwvdGg+CiAgICAgICAgICAgICAgICA8L3RyPgogICAgICAgICAgICA8L3RoZWFkPgogICAgICAgIDx0Ym9keT4KICAgICAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+CgkgICAgICAgIDwhLS0vbm9jYWNoZS0tPgogICAgICAgIDwvdGJvZHk+Cgk8L3RhYmxlPgogICAgICAgIAogICAgICAgIAogICAgICAgIAo8IS0tCTxwPgoJCTwvcD4KCTxkaXYgY2xhc3M9InBhZ2luZyI+CgkJPC9kaXY+LS0+CjwvZGl2PgoKCjwhLS08ZGl2IGNsYXNzPSJhY3Rpb25zIj4KCTxoMz48L2gzPgoJPHVsPgoJCTxsaT48L2xpPgoJCTxsaT4gPC9saT4KCQk8bGk+IDwvbGk+Cgk8L3VsPgo8L2Rpdj4tLT4KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjEyOiJEaWFnbm9zdGljb3MiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><script type="text/javascript">

    $(document).ready(function() {
        $('#diagnosticosIndex').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
            "aaSorting": [[ 0, "asc" ]],
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,
            "oLanguage": {
                              "sUrl": 'http://localhost/devel/sigepa/de_ES.txt' 
                                 }
        });
                
        $('.cargar_diagnostico').bind('click', function() {
//            console.log($(this).prop('id'));
            $('#editDiagnostico').load('http://localhost/devel/sigepa/diagnosticos/edit' + '/' + $(this).prop('id') + '/' + 134);
            $('#editDiagnostico').dialog({
                                        modal: true,
                                        width: 790,
                                        height: 440,
                                        draggable: true,
                                        resizable: true,
                                        title: 'Cargar diagnostico definitivo',
                                        show: {
                                                effect: "blind",
                                                duration: 1000,
                                              },
                                        hide: {
                                          effect: "fade",
                                          duration: 500,
                                        }
                                    });
            
        });
        
        
    });

</script>

<div class="diagnosticosIndex">
	<!--<h2></h2>-->
	<table cellpadding="0" cellspacing="0" id="diagnosticosIndex">
            <thead>
                <tr>
                    <!--<th> id </th>-->
                    <!--<th> Fecha </th>-->
                    <th> Diagnostico Presuntivo </th>
                    <!--<th>pacientes_id</th>-->
                    <th> Diagnostico Definitivo </th>
                    <th> Patologia </th>
                    <!--<th> Creado </th>-->
                    <th> Modificado </th>
                    <th class="actions"></th>
                </tr>
            </thead>
        <tbody>
            
	<?php foreach ($diagnosticos as $diagnostico): ?>
	<tr>
		<!--<td><?php // echo h($diagnostico['Diagnostico']['id']); ?>&nbsp;</td>-->
		<!--<td><?php // echo h($diagnostico['Diagnostico']['created']); ?>&nbsp;</td>-->
		<td><?php echo h($diagnostico['Diagnostico']['diagnostico_presuntivo']); ?>&nbsp;</td>
<!--		<td>
			<?php // echo $this->Html->link($diagnostico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $diagnostico['Pacientes']['id'])); ?>
		</td>-->
		<td><?php echo h($diagnostico['Diagnostico']['diagnostico_definitivo']); ?>&nbsp;</td>
                <td><?php echo h($diagnostico['Patologias']['nombre']); ?>&nbsp;</td>
		<!--<td><?php // echo fecha(h($diagnostico['Diagnostico']['created'])); ?>&nbsp;</td>-->
		<td><?php echo fecha(h($diagnostico['Diagnostico']['modified'])); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); 
                        
                            echo $this->Html->image("add_result.png", array(
                                    'id' => $diagnostico['Diagnostico']['id'], 
                                    'class' => 'cargar_diagnostico',
                                    'alt' => 'Cargar diagnostico definitivo',
                                    'title' => 'Cargar diagnostico definitivo',
                                ));
                        
                        
                        ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
        
        </tbody>
	</table>
        
        
        
<!--	<p>
		</p>
	<div class="paging">
		</div>-->
</div>


<!--<div class="actions">
	<h3></h3>
	<ul>
		<li></li>
		<li> </li>
		<li> </li>
	</ul>
</div>-->
