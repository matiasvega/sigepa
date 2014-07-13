<!--cachetime:1405255561--><?php
			App::uses('PacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6OToicGFjaWVudGVzIjtzOjY6ImFjdGlvbiI7czo1OiJmaWNoYSI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjE6e2k6MDtzOjI6IjE2Ijt9czo2OiJpc0FqYXgiO2I6MTtzOjY6Im1vZGVscyI7YTo1OntzOjg6IlBhY2llbnRlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlBhY2llbnRlIjt9czoxMDoiUGVybWlzc2lvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMDoiUGVybWlzc2lvbiI7fXM6MzoiQXJvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFybyI7fXM6MzoiQWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFjbyI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjE5OiJwYWNpZW50ZXMvZmljaGEvMTYvIjtzOjQ6ImJhc2UiO3M6MTM6Ii9kZXZlbC9zaWdlcGEiO3M6Nzoid2Vicm9vdCI7czoxNDoiL2RldmVsL3NpZ2VwYS8iO3M6NDoiaGVyZSI7czozMzoiL2RldmVsL3NpZ2VwYS9wYWNpZW50ZXMvZmljaGEvMTYvIjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjg6InBhY2llbnRlIjthOjE6e3M6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MjoiMTYiO3M6MzoiZG5pIjtzOjE6IjEiO3M6Njoibm9tYnJlIjtzOjU6ImFyaWVsIjtzOjg6ImFwZWxsaWRvIjtzOjU6InRhcGlhIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIyMDE0LTA1LTEyIjtzOjk6ImRpcmVjY2lvbiI7czowOiIiO3M6MTI6InRlbGVmb25vRmlqbyI7czoxOiIxIjtzOjEzOiJ0ZWxlZm9ub01vdmlsIjtzOjA6IiI7czoxOToiZmVjaGFVbHRpbWFDb25zdWx0YSI7TjtzOjc6ImF0aW9waWEiO3M6MTE6InJycnJycnJycnJyIjtzOjc6ImhhYml0b3MiO3M6MDoiIjtzOjE1OiJtZWRpY2FjaW9uX2Jhc2UiO3M6MDoiIjtzOjEwOiJmYW1pbGlhcmVzIjtzOjA6IiI7czo1OiJvdHJvcyI7czowOiIiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0xOSAyMDo0MzoyOSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNy0xMiAyMTozNzozNCI7fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTM5ODoiCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgICQoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICQoICIjdGFicyIgKS50YWJzKHsgCi8vICAgICAgICAgICAgICAgIGFjdGl2ZTogMSwKICAgICAgICAgICAgICAgIGNvbGxhcHNpYmxlOiB0cnVlLAovLyAgICAgICAgICAgICAgICBoZWlnaHRTdHlsZTogImF1dG8iLAogICAgICAgICAgICAgICAgc2hvdzogZmFsc2UsCiAgICAgICAgICAgICAgIAogICAgICAgICAgICB9KTsKICAgIH0pOwo8L3NjcmlwdD4KCjxkaXYgaWQ9InRhYnMiPgoJPHVsPgoJCTxsaT4gICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSJodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9wYWNpZW50ZXMvZWRpdC8xNiI+RGF0b3MgUGVyc29uYWxlczwvYT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICA8L2xpPgoJCTxsaT4gICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvb2JyYXNfc29jaWFsZXNfcGFjaWVudGVzL2luZGV4LzE2Ij5PYnJhcyBTb2NpYWxlczwvYT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICA8L2xpPiAgICAgICAgICAgICAgICAKCQk8bGk+CiAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Imh0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL3BhY2llbnRlcy9hbnRlY2VkZW50ZXMvMTYiPkFudGVjZWRlbnRlczwvYT4gICAgICAgICAgICAgICAgPC9saT4KCQk8bGk+CiAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSJodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9leGFtZW5lc19maXNpY29zL2FkZC8xNiI+RXhhbWVuIEZpc2ljbzwvYT4gICAgICAgICAgICAgICAgPC9saT4KICAgICAgICAgICAgICAgIDxsaT4KICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSJodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2FkZC8xNiI+RXN0dWRpb3M8L2E+ICAgICAgICAgICAgICAgIDwvbGk+CiAgICAgICAgICAgICAgICA8bGk+CiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGlhZ25vc3RpY29zL2FkZC8xNiI+RGlhZ25vc3RpY288L2E+ICAgICAgICAgICAgICAgIDwvbGk+CiAgICAgICAgICAgICAgICA8bGk+CiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvcmVjZXRhcy9hZGQvMTYiPlJlY2V0YXM8L2E+ICAgICAgICAgICAgICAgIDwvbGk+Cgk8L3VsPgoKPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjk6IlBhY2llbnRlcyI7fQ=='));
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
                    <a href="http://localhost/devel/sigepa/pacientes/edit/16">Datos Personales</a>                                        
                </li>
		<li>                   
                    <a href="http://localhost/devel/sigepa/obras_sociales_pacientes/index/16">Obras Sociales</a>                                        
                </li>                
		<li>
                     <a href="http://localhost/devel/sigepa/pacientes/antecedentes/16">Antecedentes</a>                </li>
		<li>
                      <a href="http://localhost/devel/sigepa/examenes_fisicos/add/16">Examen Fisico</a>                </li>
                <li>
                    <a href="http://localhost/devel/sigepa/estudios_complementarios_pacientes/add/16">Estudios</a>                </li>
                <li>
                    <a href="http://localhost/devel/sigepa/diagnosticos/add/16">Diagnostico</a>                </li>
                <li>
                    <a href="http://localhost/devel/sigepa/recetas/add/16">Recetas</a>                </li>
	</ul>

</div>