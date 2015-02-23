<!--cachetime:1420523842--><?php
			App::uses('DiagnosticosController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MTI6ImRpYWdub3N0aWNvcyI7czo2OiJhY3Rpb24iO3M6MTM6ImluZGV4UGFjaWVudGUiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czoxOiIxIjt9czo2OiJpc0FqYXgiO2I6MTtzOjY6Im1vZGVscyI7YTo3OntzOjExOiJEaWFnbm9zdGljbyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMToiRGlhZ25vc3RpY28iO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjk6IlBhY2llbnRlcyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo4OiJBcHBNb2RlbCI7fXM6MTA6IlBhdG9sb2dpYXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQXBwTW9kZWwiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6Mjg6ImRpYWdub3N0aWNvcy9pbmRleFBhY2llbnRlLzEiO3M6NDoiYmFzZSI7czoxMzoiL2RldmVsL3NpZ2VwYSI7czo3OiJ3ZWJyb290IjtzOjE0OiIvZGV2ZWwvc2lnZXBhLyI7czo0OiJoZXJlIjtzOjQyOiIvZGV2ZWwvc2lnZXBhL2RpYWdub3N0aWNvcy9pbmRleFBhY2llbnRlLzEiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new DiagnosticosController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjE6IjEiO3M6MTI6ImRpYWdub3N0aWNvcyI7YTowOnt9czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjI2NDc6IjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsKICAgICAgICAkKCcjZGlhZ25vc3RpY29zSW5kZXgnKS5kYXRhVGFibGUoewogICAgICAgICAgICAiYlBhZ2luYXRlIjogdHJ1ZSwKICAgICAgICAgICAgImJMZW5ndGhDaGFuZ2UiOiBmYWxzZSwKICAgICAgICAgICAgImJGaWx0ZXIiOiB0cnVlLAogICAgICAgICAgICAiYlNvcnQiOiB0cnVlLAogICAgICAgICAgICAiYkluZm8iOiB0cnVlLAogICAgICAgICAgICAiYkF1dG9XaWR0aCI6IGZhbHNlLAogICAgICAgICAgICAiYWFTb3J0aW5nIjogW1sgMCwgImFzYyIgXV0sCiAgICAgICAgICAgICJzUGFnaW5hdGlvblR5cGUiOiAiZnVsbF9udW1iZXJzIiwKICAgICAgICAgICAgImJKUXVlcnlVSSI6IHRydWUsCiAgICAgICAgICAgICJvTGFuZ3VhZ2UiOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICJzVXJsIjogJ2h0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL2RlX0VTLnR4dCcgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICB9KTsKICAgICAgICAgICAgICAgIAogICAgICAgICQoJy5jYXJnYXJfZGlhZ25vc3RpY28nKS5iaW5kKCdjbGljaycsIGZ1bmN0aW9uKCkgewovLyAgICAgICAgICAgIGNvbnNvbGUubG9nKCQodGhpcykucHJvcCgnaWQnKSk7CiAgICAgICAgICAgICQoJyNlZGl0RGlhZ25vc3RpY28nKS5sb2FkKCdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9kaWFnbm9zdGljb3MvZWRpdCcgKyAnLycgKyAkKHRoaXMpLnByb3AoJ2lkJykgKyAnLycgKyAxKTsKICAgICAgICAgICAgJCgnI2VkaXREaWFnbm9zdGljbycpLmRpYWxvZyh7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2RhbDogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiA3OTAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IDQ0MCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRyYWdnYWJsZTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlc2l6YWJsZTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlOiAnQ2FyZ2FyIGRpYWdub3N0aWNvIGRlZmluaXRpdm8nLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvdzogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJibGluZCIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiAxMDAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhpZGU6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWZmZWN0OiAiZmFkZSIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiA1MDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAKICAgICAgICB9KTsKICAgICAgICAKICAgICAgICAKICAgIH0pOwoKPC9zY3JpcHQ+Cgo8ZGl2IGNsYXNzPSJkaWFnbm9zdGljb3NJbmRleCI+Cgk8IS0tPGgyPjwvaDI+LS0+Cgk8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBpZD0iZGlhZ25vc3RpY29zSW5kZXgiPgogICAgICAgICAgICA8dGhlYWQ+CiAgICAgICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD4gaWQgPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPiBGZWNoYSA8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDx0aD4gRGlhZ25vc3RpY28gUHJlc3VudGl2byA8L3RoPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+cGFjaWVudGVzX2lkPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IERpYWdub3N0aWNvIERlZmluaXRpdm8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFBhdG9sb2dpYSA8L3RoPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+IENyZWFkbyA8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDx0aD4gTW9kaWZpY2FkbyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aCBjbGFzcz0iYWN0aW9ucyI+PC90aD4KICAgICAgICAgICAgICAgIDwvdHI+CiAgICAgICAgICAgIDwvdGhlYWQ+CiAgICAgICAgPHRib2R5PgogICAgICAgICAgICA8IS0tbm9jYWNoZTowMDEtLT4KCSAgICAgICAgPCEtLS9ub2NhY2hlLS0+CiAgICAgICAgPC90Ym9keT4KCTwvdGFibGU+CiAgICAgICAgCiAgICAgICAgCiAgICAgICAgCjwhLS0JPHA+CgkJPC9wPgoJPGRpdiBjbGFzcz0icGFnaW5nIj4KCQk8L2Rpdj4tLT4KPC9kaXY+CgoKPCEtLTxkaXYgY2xhc3M9ImFjdGlvbnMiPgoJPGgzPjwvaDM+Cgk8dWw+CgkJPGxpPjwvbGk+CgkJPGxpPiA8L2xpPgoJCTxsaT4gPC9saT4KCTwvdWw+CjwvZGl2Pi0tPgoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTI6IkRpYWdub3N0aWNvcyI7fQ=='));
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
            $('#editDiagnostico').load('http://localhost/devel/sigepa/diagnosticos/edit' + '/' + $(this).prop('id') + '/' + 1);
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
