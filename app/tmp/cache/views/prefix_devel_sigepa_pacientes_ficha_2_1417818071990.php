<!--cachetime:1417866074--><?php
			App::uses('PacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6OToicGFjaWVudGVzIjtzOjY6ImFjdGlvbiI7czo1OiJmaWNoYSI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjE6IjIiO31zOjY6ImlzQWpheCI7YjoxO3M6NjoibW9kZWxzIjthOjU6e3M6ODoiUGFjaWVudGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiUGFjaWVudGUiO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YToxOntzOjE6Il8iO3M6MTM6IjE0MTc4MTgwNzE5OTAiO31zOjM6InVybCI7czoxNzoicGFjaWVudGVzL2ZpY2hhLzIiO3M6NDoiYmFzZSI7czoxMzoiL2RldmVsL3NpZ2VwYSI7czo3OiJ3ZWJyb290IjtzOjE0OiIvZGV2ZWwvc2lnZXBhLyI7czo0OiJoZXJlIjtzOjMxOiIvZGV2ZWwvc2lnZXBhL3BhY2llbnRlcy9maWNoYS8yIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjg6InBhY2llbnRlIjthOjE6e3M6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MToiMiI7czozOiJkbmkiO3M6MToiMCI7czo2OiJub21icmUiO3M6MTM6IkNhcmxhIEZhYmlhbmEiO3M6ODoiYXBlbGxpZG8iO3M6MTc6IkNhc3Rhw7FvIExpw7FlaXJvIjtzOjQ6InNleG8iO3M6MToiRiI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTA1IjtzOjk6ImRpcmVjY2lvbiI7czowOiIiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ2MTM0NjUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtzOjEwOiIyMDE0LTEyLTA1IjtzOjc6ImF0aW9waWEiO3M6MjI6ImFhYWFhYWFhYWFhYWFhYWFhYWFhYWEiO3M6NzoiaGFiaXRvcyI7czowOiIiO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7czowOiIiO3M6MTA6ImZhbWlsaWFyZXMiO3M6MDoiIjtzOjU6Im90cm9zIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA5LTEzIDIxOjA5OjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTEyLTA1IDIxOjQ3OjAzIjt9fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxMzkxOiIKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgogICAgJChmdW5jdGlvbigpIHsKICAgICAgICAgICAgJCggIiN0YWJzIiApLnRhYnMoeyAKLy8gICAgICAgICAgICAgICAgYWN0aXZlOiAxLAogICAgICAgICAgICAgICAgY29sbGFwc2libGU6IHRydWUsCi8vICAgICAgICAgICAgICAgIGhlaWdodFN0eWxlOiAiYXV0byIsCiAgICAgICAgICAgICAgICBzaG93OiBmYWxzZSwKICAgICAgICAgICAgICAgCiAgICAgICAgICAgIH0pOwogICAgfSk7Cjwvc2NyaXB0PgoKPGRpdiBpZD0idGFicyI+Cgk8dWw+CgkJPGxpPiAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL3BhY2llbnRlcy9lZGl0LzIiPkRhdG9zIFBlcnNvbmFsZXM8L2E+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgPC9saT4KCQk8bGk+ICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL29icmFzX3NvY2lhbGVzX3BhY2llbnRlcy9pbmRleC8yIj5PYnJhcyBTb2NpYWxlczwvYT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICA8L2xpPiAgICAgICAgICAgICAgICAKCQk8bGk+CiAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL3BhY2llbnRlcy9hbnRlY2VkZW50ZXMvMiI+QW50ZWNlZGVudGVzPC9hPiAgICAgICAgICAgICAgICA8L2xpPgoJCTxsaT4KICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL2V4YW1lbmVzX2Zpc2ljb3MvYWRkLzIiPkV4YW1lbiBGaXNpY288L2E+ICAgICAgICAgICAgICAgIDwvbGk+CiAgICAgICAgICAgICAgICA8bGk+CiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zX3BhY2llbnRlcy9hZGQvMiI+RXN0dWRpb3M8L2E+ICAgICAgICAgICAgICAgIDwvbGk+CiAgICAgICAgICAgICAgICA8bGk+CiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGlhZ25vc3RpY29zL2FkZC8yIj5EaWFnbm9zdGljbzwvYT4gICAgICAgICAgICAgICAgPC9saT4KICAgICAgICAgICAgICAgIDxsaT4KICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSJodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9yZWNldGFzL2FkZC8yIj5SZWNldGFzPC9hPiAgICAgICAgICAgICAgICA8L2xpPgoJPC91bD4KCjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo5OiJQYWNpZW50ZXMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?>
<script type="text/javascript">
    $(function() {
            $( "#tabs" ).tabs({ 
//                active: 1,
                collapsible: true,
//                heightStyle: "auto",
                show: false,
               
            });
    });
</script>

<div id="tabs">
	<ul>
		<li>                     
                    <a href="http://localhost/devel/sigepa/pacientes/edit/2">Datos Personales</a>                                        
                </li>
		<li>                   
                    <a href="http://localhost/devel/sigepa/obras_sociales_pacientes/index/2">Obras Sociales</a>                                        
                </li>                
		<li>
                     <a href="http://localhost/devel/sigepa/pacientes/antecedentes/2">Antecedentes</a>                </li>
		<li>
                      <a href="http://localhost/devel/sigepa/examenes_fisicos/add/2">Examen Fisico</a>                </li>
                <li>
                    <a href="http://localhost/devel/sigepa/estudios_complementarios_pacientes/add/2">Estudios</a>                </li>
                <li>
                    <a href="http://localhost/devel/sigepa/diagnosticos/add/2">Diagnostico</a>                </li>
                <li>
                    <a href="http://localhost/devel/sigepa/recetas/add/2">Recetas</a>                </li>
	</ul>

</div>