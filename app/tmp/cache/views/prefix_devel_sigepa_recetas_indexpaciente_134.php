<!--cachetime:1423714112--><?php
			App::uses('RecetasController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NzoicmVjZXRhcyI7czo2OiJhY3Rpb24iO3M6MTM6ImluZGV4UGFjaWVudGUiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czozOiIxMzQiO31zOjY6ImlzQWpheCI7YjoxO3M6NjoibW9kZWxzIjthOjc6e3M6NjoiUmVjZXRhIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjY6IlJlY2V0YSI7fXM6MTA6IlBlcm1pc3Npb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTA6IlBlcm1pc3Npb24iO31zOjM6IkFybyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBcm8iO31zOjM6IkFjbyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBY28iO31zOjQ6IlVzZXIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVXNlciI7fXM6OToiUGFjaWVudGVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFwcE1vZGVsIjt9czoxMToiTWVkaWNhbWVudG8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTE6Ik1lZGljYW1lbnRvIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjI2OiJyZWNldGFzL2luZGV4UGFjaWVudGUvMTM0LyI7czo0OiJiYXNlIjtzOjEzOiIvZGV2ZWwvc2lnZXBhIjtzOjc6IndlYnJvb3QiO3M6MTQ6Ii9kZXZlbC9zaWdlcGEvIjtzOjQ6ImhlcmUiO3M6NDA6Ii9kZXZlbC9zaWdlcGEvcmVjZXRhcy9pbmRleFBhY2llbnRlLzEzNC8iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new RecetasController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjM6IjEzNCI7czo3OiJyZWNldGFzIjthOjA6e31zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTMzMzoiPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkgewogICAgICAgICQoJyNyZWNldGFzSW5kZXgnKS5kYXRhVGFibGUoewogICAgICAgICAgICAiYlBhZ2luYXRlIjogdHJ1ZSwKICAgICAgICAgICAgImJMZW5ndGhDaGFuZ2UiOiBmYWxzZSwKICAgICAgICAgICAgImJGaWx0ZXIiOiB0cnVlLAogICAgICAgICAgICAiYlNvcnQiOiB0cnVlLAogICAgICAgICAgICAiYkluZm8iOiB0cnVlLAogICAgICAgICAgICAiYkF1dG9XaWR0aCI6IGZhbHNlLAogICAgICAgICAgICAiYWFTb3J0aW5nIjogW1sgMCwgImFzYyIgXV0sCiAgICAgICAgICAgICJzUGFnaW5hdGlvblR5cGUiOiAiZnVsbF9udW1iZXJzIiwKICAgICAgICAgICAgImJKUXVlcnlVSSI6IHRydWUsCiAgICAgICAgICAgICJvTGFuZ3VhZ2UiOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICJzVXJsIjogJ2h0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL2RlX0VTLnR4dCcgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICB9KTsgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAKICAgIH0pOwoKPC9zY3JpcHQ+Cgo8ZGl2IGNsYXNzPSJyZWNldGFzSW5kZXgiPgoJPCEtLTxoMj48L2gyPi0tPgoJPHRhYmxlIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgaWQ9InJlY2V0YXNJbmRleCI+CiAgICAgICAgICAgIDx0aGVhZD4KICAgICAgICAgICAgICAgIDx0cj4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPiBpZCA8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDx0aD4gRmVjaGEgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IE1lZGljYW1lbnRvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBPYnNlcnZhY2lvbmVzIDwvdGg+ICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICA8IS0tPHRoIGNsYXNzPSJhY3Rpb25zIj48L3RoPi0tPgogICAgICAgICAgICAgICAgPC90cj4KICAgICAgICAgICAgPC90aGVhZD4KICAgICAgICA8dGJvZHk+CiAgICAgICAgICAgIDwhLS1ub2NhY2hlOjAwMS0tPgoJICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICA8L3Rib2R5PgoJPC90YWJsZT4KICAgICAgICAKICAgICAgICAKICAgICAgICAKPCEtLQk8cD4KCQk8L3A+Cgk8ZGl2IGNsYXNzPSJwYWdpbmciPgoJCTwvZGl2Pi0tPgo8L2Rpdj4KCgo8IS0tPGRpdiBjbGFzcz0iYWN0aW9ucyI+Cgk8aDM+PC9oMz4KCTx1bD4KCQk8bGk+PC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJPC91bD4KPC9kaXY+LS0+CiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo3OiJSZWNldGFzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><script type="text/javascript">

    $(document).ready(function() {
        $('#recetasIndex').dataTable({
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
        
    });

</script>

<div class="recetasIndex">
	<!--<h2></h2>-->
	<table cellpadding="0" cellspacing="0" id="recetasIndex">
            <thead>
                <tr>
                    <!--<th> id </th>-->
                    <th> Fecha </th>
                    <th> Medicamento </th>
                    <th> Observaciones </th>                    
                    <!--<th class="actions"></th>-->
                </tr>
            </thead>
        <tbody>
            
	<?php foreach ($recetas as $receta): ?>
	<tr>
		<!--<td><?php // echo h($receta['Receta']['id']); ?>&nbsp;</td>-->
                <td><?php echo fecha(h($receta['Receta']['created'])); ?>&nbsp;</td>                
		<td><?php echo h($receta['Medicamento']['nombre_comercial']); ?>&nbsp;</td>
		<td><?php echo h($receta['Receta']['observaciones']); ?>&nbsp;</td>

		
		<!--<td><?php // echo fecha(h($diagnostico['Receta']['modified'])); ?>&nbsp;</td>-->
		<!--<td class="actions">-->
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); 
                        
//                            echo $this->Html->image("add_result.png", array(
//                                    'id' => $diagnostico['Diagnostico']['id'], 
//                                    'class' => 'cargar_diagnostico',
//                                    'alt' => 'Cargar diagnostico definitivo',
//                                    'title' => 'Cargar diagnostico definitivo',
//                                ));
                        
                        
                        ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?>
		<!--</td>-->
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
