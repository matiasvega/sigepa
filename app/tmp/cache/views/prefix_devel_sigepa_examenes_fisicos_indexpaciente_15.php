<!--cachetime:1401202636--><?php
			App::uses('ExamenesFisicosController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MTY6ImV4YW1lbmVzX2Zpc2ljb3MiO3M6NjoiYWN0aW9uIjtzOjEzOiJpbmRleFBhY2llbnRlIjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MTp7aTowO3M6MjoiMTUiO31zOjY6ImlzQWpheCI7YjoxO3M6NjoibW9kZWxzIjthOjY6e3M6MTQ6IkV4YW1lbmVzRmlzaWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjE0OiJFeGFtZW5lc0Zpc2ljbyI7fXM6MTA6IlBlcm1pc3Npb24iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MTA6IlBlcm1pc3Npb24iO31zOjM6IkFybyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBcm8iO31zOjM6IkFjbyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czozOiJBY28iO31zOjQ6IlVzZXIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVXNlciI7fXM6OToiUGFjaWVudGVzIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkFwcE1vZGVsIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjMzOiJleGFtZW5lc19maXNpY29zL2luZGV4UGFjaWVudGUvMTUiO3M6NDoiYmFzZSI7czoxMzoiL2RldmVsL3NpZ2VwYSI7czo3OiJ3ZWJyb290IjtzOjE0OiIvZGV2ZWwvc2lnZXBhLyI7czo0OiJoZXJlIjtzOjQ3OiIvZGV2ZWwvc2lnZXBhL2V4YW1lbmVzX2Zpc2ljb3MvaW5kZXhQYWNpZW50ZS8xNSI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new ExamenesFisicosController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjE1OiJleGFtZW5lc0Zpc2ljb3MiO2E6MDp7fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNjUwOiI8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgogICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7CiAgICAgICAgJCgnI2V4YW1lbmVzRmlzaWNvc0luZGV4JykuZGF0YVRhYmxlKHsKICAgICAgICAiYlBhZ2luYXRlIjogdHJ1ZSwKICAgICAgICAiYkxlbmd0aENoYW5nZSI6IGZhbHNlLAogICAgICAgICJiRmlsdGVyIjogdHJ1ZSwKICAgICAgICAiYlNvcnQiOiB0cnVlLAogICAgICAgICJiSW5mbyI6IHRydWUsCiAgICAgICAgImJBdXRvV2lkdGgiOiBmYWxzZSwKICAgICAgICAiYWFTb3J0aW5nIjogW1sgMCwgImFzYyIgXV0sCiAgICAgICAgInNQYWdpbmF0aW9uVHlwZSI6ICJmdWxsX251bWJlcnMiLAogICAgICAgICJiSlF1ZXJ5VUkiOiB0cnVlLAogICAgICAgICJvTGFuZ3VhZ2UiOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAic1VybCI6ICdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9kZV9FUy50eHQnIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICB9KTsKICAgIH0pOwoKPC9zY3JpcHQ+Cgo8ZGl2IGNsYXNzPSJleGFtZW5lc0Zpc2ljb3NJbmRleCI+Cgk8IS0tPGgyPjwvaDI+LS0+Cgk8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBpZD0iZXhhbWVuZXNGaXNpY29zSW5kZXgiPgogICAgICAgICAgICA8dGhlYWQ+CiAgICAgICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD4gSWQgPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IEZlY2hhIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBFc3RhdHVyYSA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gUGVzbyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gUGllbCA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gTXVjb3NhcyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gQXAgcmVzcCA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gVEEgPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IEZDIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBGUiA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gT3hpbWV0cmlhIHB1bHNvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD5wYWNpZW50ZXNfaWQ8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+bW9kaWZpZWQ8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGggY2xhc3M9ImFjdGlvbnMiPjwvdGg+LS0+CiAgICAgICAgICAgICAgICA8L3RyPgogICAgICAgICAgICA8L3RoZWFkPgogICAgICAgICAgICA8dGJvZHk+CiAgICAgICAgICAgICAgICA8IS0tbm9jYWNoZTowMDEtLT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICAgICAgPC90Ym9keT4KCTwvdGFibGU+CiAgICAgICAgCjwhLS0JPHA+CgkJPC9wPgoJPGRpdiBjbGFzcz0icGFnaW5nIj4KCQk8L2Rpdj4tLT4KICAgICAgICAKPC9kaXY+Cgo8IS0tPGRpdiBjbGFzcz0iYWN0aW9ucyI+Cgk8aDM+PC9oMz4KCTx1bD4KCQk8bGk+PC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJPC91bD4KPC9kaXY+LS0+CgoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MTU6IkV4YW1lbmVzRmlzaWNvcyI7fQ=='));
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

