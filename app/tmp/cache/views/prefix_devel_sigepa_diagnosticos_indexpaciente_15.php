<!--cachetime:1401201544--><?php
			App::uses('DiagnosticosController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MTI6ImRpYWdub3N0aWNvcyI7czo2OiJhY3Rpb24iO3M6MTM6ImluZGV4UGFjaWVudGUiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czoyOiIxNSI7fXM6NjoiaXNBamF4IjtiOjE7czo2OiJtb2RlbHMiO2E6Nzp7czoxMToiRGlhZ25vc3RpY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTE6IkRpYWdub3N0aWNvIjt9czoxMDoiUGVybWlzc2lvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMDoiUGVybWlzc2lvbiI7fXM6MzoiQXJvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFybyI7fXM6MzoiQWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFjbyI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo5OiJQYWNpZW50ZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQXBwTW9kZWwiO31zOjEwOiJQYXRvbG9naWFzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFwcE1vZGVsIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjI5OiJkaWFnbm9zdGljb3MvaW5kZXhQYWNpZW50ZS8xNSI7czo0OiJiYXNlIjtzOjEzOiIvZGV2ZWwvc2lnZXBhIjtzOjc6IndlYnJvb3QiO3M6MTQ6Ii9kZXZlbC9zaWdlcGEvIjtzOjQ6ImhlcmUiO3M6NDM6Ii9kZXZlbC9zaWdlcGEvZGlhZ25vc3RpY29zL2luZGV4UGFjaWVudGUvMTUiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new DiagnosticosController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjI6IjE1IjtzOjEyOiJkaWFnbm9zdGljb3MiO2E6MTp7aTowO2E6Mzp7czoxMToiRGlhZ25vc3RpY28iO2E6Nzp7czoyOiJpZCI7czoxOiIyIjtzOjIyOiJkaWFnbm9zdGljb19wcmVzdW50aXZvIjtzOjExOiJTREVBRlNERlNERiI7czoyMjoiZGlhZ25vc3RpY29fZGVmaW5pdGl2byI7TjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTUiO3M6MTM6InBhdG9sb2dpYXNfaWQiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTI2IDIwOjM1OjQ2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI2IDIwOjM1OjQ2Ijt9czo5OiJQYWNpZW50ZXMiO2E6MTc6e3M6MjoiaWQiO3M6MjoiMTUiO3M6MzoiZG5pIjtzOjg6IjMxMjIwMzU2IjtzOjY6Im5vbWJyZSI7czo2OiJNQVRJQVMiO3M6ODoiYXBlbGxpZG8iO3M6NDoiVkVHQSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMTk4NC0xMS0xMCI7czo5OiJkaXJlY2Npb24iO3M6MTc6IlBhc2FqZSBQYXlybyAxMTc0IjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6OToiMTU0ODYzOTQ1IjtzOjEzOiJ0ZWxlZm9ub01vdmlsIjtzOjA6IiI7czoxOToiZmVjaGFVbHRpbWFDb25zdWx0YSI7TjtzOjc6ImF0aW9waWEiO047czo3OiJoYWJpdG9zIjtOO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7TjtzOjEwOiJmYW1pbGlhcmVzIjtOO3M6NToib3Ryb3MiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTE3IDIyOjAyOjM2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI3IDAxOjE0OjQzIjt9czoxMDoiUGF0b2xvZ2lhcyI7YTo1OntzOjI6ImlkIjtOO3M6Njoibm9tYnJlIjtOO3M6MTE6ImRlc2NyaXBjaW9uIjtOO3M6NzoiY3JlYXRlZCI7TjtzOjg6Im1vZGlmaWVkIjtOO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czozMDYyOiI8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7CiAgICAgICAgJCgnI2RpYWdub3N0aWNvc0luZGV4JykuZGF0YVRhYmxlKHsKICAgICAgICAgICAgImJQYWdpbmF0ZSI6IHRydWUsCiAgICAgICAgICAgICJiTGVuZ3RoQ2hhbmdlIjogZmFsc2UsCiAgICAgICAgICAgICJiRmlsdGVyIjogdHJ1ZSwKICAgICAgICAgICAgImJTb3J0IjogdHJ1ZSwKICAgICAgICAgICAgImJJbmZvIjogdHJ1ZSwKICAgICAgICAgICAgImJBdXRvV2lkdGgiOiBmYWxzZSwKICAgICAgICAgICAgImFhU29ydGluZyI6IFtbIDAsICJhc2MiIF1dLAogICAgICAgICAgICAic1BhZ2luYXRpb25UeXBlIjogImZ1bGxfbnVtYmVycyIsCiAgICAgICAgICAgICJiSlF1ZXJ5VUkiOiB0cnVlLAogICAgICAgICAgICAib0xhbmd1YWdlIjogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAic1VybCI6ICdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9kZV9FUy50eHQnIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAKICAgICAgICAkKCcuY2FyZ2FyX2RpYWdub3N0aWNvJykuYmluZCgnY2xpY2snLCBmdW5jdGlvbigpIHsKLy8gICAgICAgICAgICBjb25zb2xlLmxvZygkKHRoaXMpLnByb3AoJ2lkJykpOwogICAgICAgICAgICAkKCcjZWRpdERpYWdub3N0aWNvJykubG9hZCgnaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGlhZ25vc3RpY29zL2VkaXQnICsgJy8nICsgJCh0aGlzKS5wcm9wKCdpZCcpICsgJy8nICsgMTUpOwogICAgICAgICAgICAkKCcjZWRpdERpYWdub3N0aWNvJykuZGlhbG9nKHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1vZGFsOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2lkdGg6IDc5MCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhlaWdodDogNDQwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHJhZ2dhYmxlOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVzaXphYmxlOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU6ICdDYXJnYXIgZGlhZ25vc3RpY28gZGVmaW5pdGl2bycsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaG93OiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVmZmVjdDogImJsaW5kIiwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDEwMDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGlkZTogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJmYWRlIiwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDUwMCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgIAogICAgICAgIH0pOwogICAgICAgIAogICAgICAgIAogICAgfSk7Cgo8L3NjcmlwdD4KCjxkaXYgY2xhc3M9ImRpYWdub3N0aWNvc0luZGV4Ij4KCTwhLS08aDI+PC9oMj4tLT4KCTx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGlkPSJkaWFnbm9zdGljb3NJbmRleCI+CiAgICAgICAgICAgIDx0aGVhZD4KICAgICAgICAgICAgICAgIDx0cj4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPiBpZCA8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+IEZlY2hhIDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBEaWFnbm9zdGljbyBQcmVzdW50aXZvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD5wYWNpZW50ZXNfaWQ8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDx0aD4gRGlhZ25vc3RpY28gRGVmaW5pdGl2byA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gUGF0b2xvZ2lhIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD4gQ3JlYWRvIDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBNb2RpZmljYWRvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoIGNsYXNzPSJhY3Rpb25zIj48L3RoPgogICAgICAgICAgICAgICAgPC90cj4KICAgICAgICAgICAgPC90aGVhZD4KICAgICAgICA8dGJvZHk+CiAgICAgICAgICAgIDwhLS1ub2NhY2hlOjAwMS0tPgoJCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTx0ZD5TREVBRlNERlNERiZuYnNwOzwvdGQ+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4mbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgPHRkPiZuYnNwOzwvdGQ+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTx0ZD4yNi0wNS0yMDE0Jm5ic3A7PC90ZD4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQkJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSIyIiBjbGFzcz0iY2FyZ2FyX2RpYWdub3N0aWNvIiBhbHQ9IkNhcmdhciBkaWFnbm9zdGljbyBkZWZpbml0aXZvIiB0aXRsZT0iQ2FyZ2FyIGRpYWdub3N0aWNvIGRlZmluaXRpdm8iIC8+CQkJCQk8L3RkPgoJPC90cj4KICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICA8L3Rib2R5PgoJPC90YWJsZT4KICAgICAgICAKICAgICAgICAKICAgICAgICAKPCEtLQk8cD4KCQk8L3A+Cgk8ZGl2IGNsYXNzPSJwYWdpbmciPgoJCTwvZGl2Pi0tPgo8L2Rpdj4KCgo8IS0tPGRpdiBjbGFzcz0iYWN0aW9ucyI+Cgk8aDM+PC9oMz4KCTx1bD4KCQk8bGk+PC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJPC91bD4KPC9kaXY+LS0+CiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMjoiRGlhZ25vc3RpY29zIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?>
<?php // echo $this->element('sql_dump'); ?>

<script type="text/javascript">

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
            $('#editDiagnostico').load('http://localhost/devel/sigepa/diagnosticos/edit' + '/' + $(this).prop('id') + '/' + 15);
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
