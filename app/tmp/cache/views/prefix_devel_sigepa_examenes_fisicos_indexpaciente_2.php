<!--cachetime:1417761241--><?php
			App::uses('ExamenesFisicosController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MTY6ImV4YW1lbmVzX2Zpc2ljb3MiO3M6NjoiYWN0aW9uIjtzOjEzOiJpbmRleFBhY2llbnRlIjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MTp7aTowO3M6MToiMiI7fXM6NjoiaXNBamF4IjtiOjE7czo2OiJtb2RlbHMiO2E6Njp7czoxNDoiRXhhbWVuZXNGaXNpY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTQ6IkV4YW1lbmVzRmlzaWNvIjt9czoxMDoiUGVybWlzc2lvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMDoiUGVybWlzc2lvbiI7fXM6MzoiQXJvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFybyI7fXM6MzoiQWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFjbyI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo5OiJQYWNpZW50ZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQXBwTW9kZWwiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MzI6ImV4YW1lbmVzX2Zpc2ljb3MvaW5kZXhQYWNpZW50ZS8yIjtzOjQ6ImJhc2UiO3M6MTM6Ii9kZXZlbC9zaWdlcGEiO3M6Nzoid2Vicm9vdCI7czoxNDoiL2RldmVsL3NpZ2VwYS8iO3M6NDoiaGVyZSI7czo0NjoiL2RldmVsL3NpZ2VwYS9leGFtZW5lc19maXNpY29zL2luZGV4UGFjaWVudGUvMiI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new ExamenesFisicosController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjE1OiJleGFtZW5lc0Zpc2ljb3MiO2E6MTp7aTowO2E6Mjp7czoxNDoiRXhhbWVuZXNGaXNpY28iO2E6MTM6e3M6MjoiaWQiO3M6MToiMSI7czo4OiJlc3RhdHVyYSI7czoxOiI0IjtzOjQ6InBlc28iO3M6MDoiIjtzOjQ6InBpZWwiO3M6MDoiIjtzOjc6Im11Y29zYXMiO3M6MDoiIjtzOjE1OiJhcF9yZXNwaXJhdG9yaW8iO3M6MDoiIjtzOjI6IlRBIjtzOjA6IiI7czoyOiJGQyI7czowOiIiO3M6MjoiRlIiO3M6MDoiIjtzOjE1OiJveGltZXRyaWFfcHVsc28iO3M6MDoiIjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MToiMiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTEwLTIzIDIxOjI5OjIxIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTEwLTIzIDIxOjI5OjIxIjt9czo5OiJQYWNpZW50ZXMiO2E6MTc6e3M6MjoiaWQiO3M6MToiMiI7czozOiJkbmkiO3M6MToiMCI7czo2OiJub21icmUiO3M6MTM6IkNhcmxhIEZhYmlhbmEiO3M6ODoiYXBlbGxpZG8iO3M6MTc6IkNhc3Rhw7FvIExpw7FlaXJvIjtzOjQ6InNleG8iO3M6MToiRiI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTA1IjtzOjk6ImRpcmVjY2lvbiI7czowOiIiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ2MTM0NjUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtzOjEwOiIyMDE0LTExLTE3IjtzOjc6ImF0aW9waWEiO3M6MjI6ImFhYWFhYWFhYWFhYWFhYWFhYWFhYWEiO3M6NzoiaGFiaXRvcyI7czowOiIiO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7czowOiIiO3M6MTA6ImZhbWlsaWFyZXMiO3M6MDoiIjtzOjU6Im90cm9zIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA5LTEzIDIxOjA5OjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTExLTE3IDExOjQwOjQ5Ijt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MjUwNzoiPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoKICAgICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkgewogICAgICAgICQoJyNleGFtZW5lc0Zpc2ljb3NJbmRleCcpLmRhdGFUYWJsZSh7CiAgICAgICAgImJQYWdpbmF0ZSI6IHRydWUsCiAgICAgICAgImJMZW5ndGhDaGFuZ2UiOiBmYWxzZSwKICAgICAgICAiYkZpbHRlciI6IHRydWUsCiAgICAgICAgImJTb3J0IjogdHJ1ZSwKICAgICAgICAiYkluZm8iOiB0cnVlLAogICAgICAgICJiQXV0b1dpZHRoIjogZmFsc2UsCiAgICAgICAgImFhU29ydGluZyI6IFtbIDAsICJhc2MiIF1dLAogICAgICAgICJzUGFnaW5hdGlvblR5cGUiOiAiZnVsbF9udW1iZXJzIiwKICAgICAgICAiYkpRdWVyeVVJIjogdHJ1ZSwKICAgICAgICAib0xhbmd1YWdlIjogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgInNVcmwiOiAnaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGVfRVMudHh0JyAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgfSk7CiAgICB9KTsKCjwvc2NyaXB0PgoKPGRpdiBjbGFzcz0iZXhhbWVuZXNGaXNpY29zSW5kZXgiPgoJPCEtLTxoMj48L2gyPi0tPgoJPHRhYmxlIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgaWQ9ImV4YW1lbmVzRmlzaWNvc0luZGV4Ij4KICAgICAgICAgICAgPHRoZWFkPgogICAgICAgICAgICAgICAgPHRyPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+IElkIDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBGZWNoYSA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gRXN0YXR1cmEgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFBlc28gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFBpZWwgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IE11Y29zYXMgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IEFwIHJlc3AgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFRBIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBGQyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gRlIgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IE94aW1ldHJpYSBwdWxzbyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+cGFjaWVudGVzX2lkPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPm1vZGlmaWVkPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoIGNsYXNzPSJhY3Rpb25zIj48L3RoPi0tPgogICAgICAgICAgICAgICAgPC90cj4KICAgICAgICAgICAgPC90aGVhZD4KICAgICAgICAgICAgPHRib2R5PgogICAgICAgICAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPgogICAgICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4yMy0xMC0yMDE0Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjQmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPiZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4mbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPiZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4mbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPiZuYnNwOzwvdGQ+CjwhLS0gICAgICAgICAgICAgICAgICAgICAgICA8dGQ+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KPCEtLSAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iYWN0aW9ucyI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+LS0+CiAgICAgICAgICAgICAgICA8L3RyPgogICAgICAgICAgICAgICAgICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICAgICAgPC90Ym9keT4KCTwvdGFibGU+CiAgICAgICAgCjwhLS0JPHA+CgkJPC9wPgoJPGRpdiBjbGFzcz0icGFnaW5nIj4KCQk8L2Rpdj4tLT4KICAgICAgICAKPC9kaXY+Cgo8IS0tPGRpdiBjbGFzcz0iYWN0aW9ucyI+Cgk8aDM+PC9oMz4KCTx1bD4KCQk8bGk+PC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJPC91bD4KPC9kaXY+LS0+CgoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTU6IkV4YW1lbmVzRmlzaWNvcyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><script type="text/javascript">

    $(document).ready(function() {
        $('#examenesFisicosIndex').dataTable({
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

<div class="examenesFisicosIndex">
	<!--<h2></h2>-->
	<table cellpadding="0" cellspacing="0" id="examenesFisicosIndex">
            <thead>
                <tr>
                    <!--<th> Id </th>-->
                    <th> Fecha </th>
                    <th> Estatura </th>
                    <th> Peso </th>
                    <th> Piel </th>
                    <th> Mucosas </th>
                    <th> Ap resp </th>
                    <th> TA </th>
                    <th> FC </th>
                    <th> FR </th>
                    <th> Oximetria pulso </th>
                    <!--<th>pacientes_id</th>-->
                    
                    <!--<th>modified</th>-->
                    <!--<th class="actions"></th>-->
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($examenesFisicos as $examenesFisico): ?>
                <tr>
                        <!--<td><?php // echo h($examenesFisico['ExamenesFisico']['id']); ?>&nbsp;</td>-->
                        <td><?php echo fecha(h($examenesFisico['ExamenesFisico']['created'])); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['estatura']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['peso']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['piel']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['mucosas']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['ap_respiratorio']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['TA']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['FC']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['FR']); ?>&nbsp;</td>
                        <td><?php echo h($examenesFisico['ExamenesFisico']['oximetria_pulso']); ?>&nbsp;</td>
<!--                        <td>
                                <?php // echo $this->Html->link($examenesFisico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $examenesFisico['Pacientes']['id'])); ?>
                        </td>-->
                        
                        <!--<td><?php // echo h($examenesFisico['ExamenesFisico']['modified']); ?>&nbsp;</td>-->
<!--                        <td class="actions">
                                <?php // echo $this->Html->link(__('View'), array('action' => 'view', $examenesFisico['ExamenesFisico']['id'])); ?>
                                <?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $examenesFisico['ExamenesFisico']['id'])); ?>
                                <?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $examenesFisico['ExamenesFisico']['id']), null, __('Are you sure you want to delete # %s?', $examenesFisico['ExamenesFisico']['id'])); ?>
                        </td>-->
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

