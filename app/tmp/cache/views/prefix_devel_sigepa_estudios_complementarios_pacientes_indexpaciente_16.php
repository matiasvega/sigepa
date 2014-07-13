<!--cachetime:1405255565--><?php
			App::uses('EstudiosComplementariosPacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MzQ6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19wYWNpZW50ZXMiO3M6NjoiYWN0aW9uIjtzOjEzOiJpbmRleFBhY2llbnRlIjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MTp7aTowO3M6MjoiMTYiO31zOjY6ImlzQWpheCI7YjoxO3M6NjoibW9kZWxzIjthOjc6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjg6IlBhY2llbnRlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlBhY2llbnRlIjt9czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czo1MToiZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zX3BhY2llbnRlcy9pbmRleFBhY2llbnRlLzE2IjtzOjQ6ImJhc2UiO3M6MTM6Ii9kZXZlbC9zaWdlcGEiO3M6Nzoid2Vicm9vdCI7czoxNDoiL2RldmVsL3NpZ2VwYS8iO3M6NDoiaGVyZSI7czo2NToiL2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2luZGV4UGFjaWVudGUvMTYiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new EstudiosComplementariosPacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjI6IjE2IjtzOjMyOiJlc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlcyI7YTo4OntpOjA7YTozOntzOjMxOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlIjthOjk6e3M6MjoiaWQiO3M6MToiMSI7czoxMjoicGFjaWVudGVzX2lkIjtzOjI6IjE2IjtzOjI3OiJlc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfaWQiO3M6MToiMSI7czo5OiJyZXN1bHRhZG8iO3M6OToiZXJnc2Rmc2RmIjtzOjc6ImFkanVudG8iO3M6MjA6IkhJU1RPUklBIENMSU5JQ0EucGRmIjtzOjE1OiJmZWNoYVNvbGljaXRhZG8iO3M6MTA6IjIwMTQtMDUtMjUiO3M6MTQ6ImZlY2hhUmVhbGl6YWRvIjtzOjEwOiIxOTcwLTAxLTE0IjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMjUgMjI6NDY6NTMiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjUgMjI6NDc6MTYiO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE2IjtzOjM6ImRuaSI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czo1OiJhcmllbCI7czo4OiJhcGVsbGlkbyI7czo1OiJ0YXBpYSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0xMiI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtzOjExOiJycnJycnJycnJyciI7czo3OiJoYWJpdG9zIjtzOjA6IiI7czoxNToibWVkaWNhY2lvbl9iYXNlIjtzOjA6IiI7czoxMDoiZmFtaWxpYXJlcyI7czowOiIiO3M6NToib3Ryb3MiO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTkgMjA6NDM6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6Mzc6MzQiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MToiMSI7czo2OiJub21icmUiO3M6Mjk6IlRyYXRhbWllbnRvIGRlc2Vuc2liaWxpemFudGUgIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9fWk6MTthOjM6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6OTp7czoyOiJpZCI7czoxOiIyIjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTYiO3M6Mjc6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19pZCI7czoxOiI0IjtzOjk6InJlc3VsdGFkbyI7TjtzOjc6ImFkanVudG8iO047czoxNToiZmVjaGFTb2xpY2l0YWRvIjtzOjEwOiIyMDE0LTA1LTI1IjtzOjE0OiJmZWNoYVJlYWxpemFkbyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMjUgMjI6NDY6NTciO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjUgMjI6NDY6NTciO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE2IjtzOjM6ImRuaSI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czo1OiJhcmllbCI7czo4OiJhcGVsbGlkbyI7czo1OiJ0YXBpYSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0xMiI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtzOjExOiJycnJycnJycnJyciI7czo3OiJoYWJpdG9zIjtzOjA6IiI7czoxNToibWVkaWNhY2lvbl9iYXNlIjtzOjA6IiI7czoxMDoiZmFtaWxpYXJlcyI7czowOiIiO3M6NToib3Ryb3MiO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTkgMjA6NDM6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6Mzc6MzQiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MToiNCI7czo2OiJub21icmUiO3M6MzE6IkVzdHVkaW8gbWFjcm8vbWljcm8gcGllemEgb25jbyAiO3M6MTE6ImRlc2NyaXBjaW9uIjtOO3M6NzoiY3JlYXRlZCI7TjtzOjg6Im1vZGlmaWVkIjtOO319aToyO2E6Mzp7czozMToiRXN0dWRpb3NDb21wbGVtZW50YXJpb3NQYWNpZW50ZSI7YTo5OntzOjI6ImlkIjtzOjE6IjMiO3M6MTI6InBhY2llbnRlc19pZCI7czoyOiIxNiI7czoyNzoiZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zX2lkIjtzOjI6IjE4IjtzOjk6InJlc3VsdGFkbyI7czozMzoieHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4IjtzOjc6ImFkanVudG8iO3M6MDoiIjtzOjE1OiJmZWNoYVNvbGljaXRhZG8iO3M6MTA6IjIwMTQtMDUtMjUiO3M6MTQ6ImZlY2hhUmVhbGl6YWRvIjtzOjEwOiIyMDE0LTA3LTEyIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMjUgMjI6NDc6MDMiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjA6NTU6MTUiO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE2IjtzOjM6ImRuaSI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czo1OiJhcmllbCI7czo4OiJhcGVsbGlkbyI7czo1OiJ0YXBpYSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0xMiI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtzOjExOiJycnJycnJycnJyciI7czo3OiJoYWJpdG9zIjtzOjA6IiI7czoxNToibWVkaWNhY2lvbl9iYXNlIjtzOjA6IiI7czoxMDoiZmFtaWxpYXJlcyI7czowOiIiO3M6NToib3Ryb3MiO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTkgMjA6NDM6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6Mzc6MzQiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MjoiMTgiO3M6Njoibm9tYnJlIjtzOjMxOiJFbGVjdHJvY2FyZGlvZ3JhbWEgY29uc3VsdG9yaW8gIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9fWk6MzthOjM6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6OTp7czoyOiJpZCI7czoxOiI3IjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTYiO3M6Mjc6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19pZCI7czoxOiIxIjtzOjk6InJlc3VsdGFkbyI7czowOiIiO3M6NzoiYWRqdW50byI7czozMDoiRkVDSEEgMTkgRmluYWwgMjAxNF9NQVRJQVMueGxzIjtzOjE1OiJmZWNoYVNvbGljaXRhZG8iO3M6MTA6IjIwMTQtMDUtMjYiO3M6MTQ6ImZlY2hhUmVhbGl6YWRvIjtzOjEwOiIxOTcwLTAxLTIxIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMjYgMDE6NTc6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjYgMDE6NTg6MzkiO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE2IjtzOjM6ImRuaSI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czo1OiJhcmllbCI7czo4OiJhcGVsbGlkbyI7czo1OiJ0YXBpYSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0xMiI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtzOjExOiJycnJycnJycnJyciI7czo3OiJoYWJpdG9zIjtzOjA6IiI7czoxNToibWVkaWNhY2lvbl9iYXNlIjtzOjA6IiI7czoxMDoiZmFtaWxpYXJlcyI7czowOiIiO3M6NToib3Ryb3MiO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTkgMjA6NDM6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6Mzc6MzQiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MToiMSI7czo2OiJub21icmUiO3M6Mjk6IlRyYXRhbWllbnRvIGRlc2Vuc2liaWxpemFudGUgIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9fWk6NDthOjM6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6OTp7czoyOiJpZCI7czoxOiI4IjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTYiO3M6Mjc6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19pZCI7czoyOiI1NyI7czo5OiJyZXN1bHRhZG8iO047czo3OiJhZGp1bnRvIjtOO3M6MTU6ImZlY2hhU29saWNpdGFkbyI7czoxMDoiMjAxNC0wNS0yNiI7czoxNDoiZmVjaGFSZWFsaXphZG8iO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTI2IDAxOjU3OjM2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI2IDAxOjU3OjM2Ijt9czo4OiJQYWNpZW50ZSI7YToxNzp7czoyOiJpZCI7czoyOiIxNiI7czozOiJkbmkiO3M6MToiMSI7czo2OiJub21icmUiO3M6NToiYXJpZWwiO3M6ODoiYXBlbGxpZG8iO3M6NToidGFwaWEiO3M6NDoic2V4byI7czoxOiJNIjtzOjE1OiJmZWNoYU5hY2ltaWVudG8iO3M6MTA6IjIwMTQtMDUtMTIiO3M6OToiZGlyZWNjaW9uIjtzOjA6IiI7czoxMjoidGVsZWZvbm9GaWpvIjtzOjE6IjEiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtOO3M6NzoiYXRpb3BpYSI7czoxMToicnJycnJycnJycnIiO3M6NzoiaGFiaXRvcyI7czowOiIiO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7czowOiIiO3M6MTA6ImZhbWlsaWFyZXMiO3M6MDoiIjtzOjU6Im90cm9zIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTE5IDIwOjQzOjI5IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA3LTEyIDIxOjM3OjM0Ijt9czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7YTo1OntzOjI6ImlkIjtzOjI6IjU3IjtzOjY6Im5vbWJyZSI7czozMToiU29uZGVvIGVsZWN0ci5pbnRyYWdhc3RyaWNvOnBoICI7czoxMToiZGVzY3JpcGNpb24iO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fX1pOjU7YTozOntzOjMxOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlIjthOjk6e3M6MjoiaWQiO3M6MjoiMTEiO3M6MTI6InBhY2llbnRlc19pZCI7czoyOiIxNiI7czoyNzoiZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zX2lkIjtzOjI6IjkwIjtzOjk6InJlc3VsdGFkbyI7TjtzOjc6ImFkanVudG8iO047czoxNToiZmVjaGFTb2xpY2l0YWRvIjtzOjEwOiIyMDE0LTA2LTI1IjtzOjE0OiJmZWNoYVJlYWxpemFkbyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDYtMjUgMDA6MDI6MDUiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDYtMjUgMDA6MDI6MDUiO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE2IjtzOjM6ImRuaSI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czo1OiJhcmllbCI7czo4OiJhcGVsbGlkbyI7czo1OiJ0YXBpYSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0xMiI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtzOjExOiJycnJycnJycnJyciI7czo3OiJoYWJpdG9zIjtzOjA6IiI7czoxNToibWVkaWNhY2lvbl9iYXNlIjtzOjA6IiI7czoxMDoiZmFtaWxpYXJlcyI7czowOiIiO3M6NToib3Ryb3MiO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTkgMjA6NDM6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6Mzc6MzQiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MjoiOTAiO3M6Njoibm9tYnJlIjtzOjI2OiJFc3R1ZGlvIGRlbCBtb2NvIGNlcnZpY2FsICI7czoxMToiZGVzY3JpcGNpb24iO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fX1pOjY7YTozOntzOjMxOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlIjthOjk6e3M6MjoiaWQiO3M6MjoiMTIiO3M6MTI6InBhY2llbnRlc19pZCI7czoyOiIxNiI7czoyNzoiZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zX2lkIjtzOjE6IjEiO3M6OToicmVzdWx0YWRvIjtOO3M6NzoiYWRqdW50byI7TjtzOjE1OiJmZWNoYVNvbGljaXRhZG8iO3M6MTA6IjIwMTQtMDctMTIiO3M6MTQ6ImZlY2hhUmVhbGl6YWRvIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNy0xMiAyMDozMDozMSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNy0xMiAyMDozMDozMSI7fXM6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MjoiMTYiO3M6MzoiZG5pIjtzOjE6IjEiO3M6Njoibm9tYnJlIjtzOjU6ImFyaWVsIjtzOjg6ImFwZWxsaWRvIjtzOjU6InRhcGlhIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIyMDE0LTA1LTEyIjtzOjk6ImRpcmVjY2lvbiI7czowOiIiO3M6MTI6InRlbGVmb25vRmlqbyI7czoxOiIxIjtzOjEzOiJ0ZWxlZm9ub01vdmlsIjtzOjA6IiI7czoxOToiZmVjaGFVbHRpbWFDb25zdWx0YSI7TjtzOjc6ImF0aW9waWEiO3M6MTE6InJycnJycnJycnJyIjtzOjc6ImhhYml0b3MiO3M6MDoiIjtzOjE1OiJtZWRpY2FjaW9uX2Jhc2UiO3M6MDoiIjtzOjEwOiJmYW1pbGlhcmVzIjtzOjA6IiI7czo1OiJvdHJvcyI7czowOiIiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0xOSAyMDo0MzoyOSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNy0xMiAyMTozNzozNCI7fXM6MjI6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW8iO2E6NTp7czoyOiJpZCI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czoyOToiVHJhdGFtaWVudG8gZGVzZW5zaWJpbGl6YW50ZSAiO3M6MTE6ImRlc2NyaXBjaW9uIjtOO3M6NzoiY3JlYXRlZCI7TjtzOjg6Im1vZGlmaWVkIjtOO319aTo3O2E6Mzp7czozMToiRXN0dWRpb3NDb21wbGVtZW50YXJpb3NQYWNpZW50ZSI7YTo5OntzOjI6ImlkIjtzOjI6IjEzIjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTYiO3M6Mjc6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19pZCI7czoyOiIyNCI7czo5OiJyZXN1bHRhZG8iO3M6MzU6Ind3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3IjtzOjc6ImFkanVudG8iO3M6MDoiIjtzOjE1OiJmZWNoYVNvbGljaXRhZG8iO3M6MTA6IjIwMTQtMDctMTIiO3M6MTQ6ImZlY2hhUmVhbGl6YWRvIjtzOjEwOiIyMDE0LTA3LTEyIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDctMTIgMjA6MzE6MjciO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjA6NTQ6MzgiO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE2IjtzOjM6ImRuaSI7czoxOiIxIjtzOjY6Im5vbWJyZSI7czo1OiJhcmllbCI7czo4OiJhcGVsbGlkbyI7czo1OiJ0YXBpYSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0xMiI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtzOjExOiJycnJycnJycnJyciI7czo3OiJoYWJpdG9zIjtzOjA6IiI7czoxNToibWVkaWNhY2lvbl9iYXNlIjtzOjA6IiI7czoxMDoiZmFtaWxpYXJlcyI7czowOiIiO3M6NToib3Ryb3MiO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTkgMjA6NDM6MjkiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6Mzc6MzQiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MjoiMjQiO3M6Njoibm9tYnJlIjtzOjE3OiJWZWN0b2NhcmRpb2dyYW1hICI7czoxMToiZGVzY3JpcGNpb24iO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjgxNjU6IjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsKICAgICAgICAkKCcjZXN0dWRpb3NDb21wbGVtZW50YXJpb3NQYWNpZW50ZXNJbmRleCcpLmRhdGFUYWJsZSh7CiAgICAgICAgICAgICJiUGFnaW5hdGUiOiB0cnVlLAogICAgICAgICAgICAiYkxlbmd0aENoYW5nZSI6IGZhbHNlLAogICAgICAgICAgICAiYkZpbHRlciI6IHRydWUsCiAgICAgICAgICAgICJiU29ydCI6IHRydWUsCiAgICAgICAgICAgICJiSW5mbyI6IHRydWUsCiAgICAgICAgICAgICJiQXV0b1dpZHRoIjogZmFsc2UsCiAgICAgICAgICAgICJhYVNvcnRpbmciOiBbWyAwLCAiYXNjIiBdXSwKICAgICAgICAgICAgImJBdXRvV2lkdGgiOiBmYWxzZSwKICAgICAgICAgICAgImFvQ29sdW1ucyI6IFsKICAgICAgICAgICAgICAgIHsgInNXaWR0aCI6ICIxNSUiIH0sCiAgICAgICAgICAgICAgICB7ICJzV2lkdGgiOiAiOCUiIH0sCiAgICAgICAgICAgICAgICB7ICJzV2lkdGgiOiAiOCUifSwKICAgICAgICAgICAgICAgIHsgInNXaWR0aCI6ICIxNSUifSwKICAgICAgICAgICAgICAgIHsgInNXaWR0aCI6ICI3JSJ9LAogICAgICAgICAgICAgICAgeyAic1dpZHRoIjogIjUlIn0sCiAgICAgICAgICAgIF0sICAgICAgICAgICAgCiAgICAgICAgICAgICJzUGFnaW5hdGlvblR5cGUiOiAiZnVsbF9udW1iZXJzIiwKICAgICAgICAgICAgImJKUXVlcnlVSSI6IHRydWUsICAgICAgICAgICAgCiAgICAgICAgICAgICJvTGFuZ3VhZ2UiOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgInNVcmwiOiAnaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGVfRVMudHh0JyAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgIH0pOwogICAgICAgIAogICAgICAgICQoJy5jYXJnYXJfcmVzdWx0YWRvJykuYmluZCgnY2xpY2snLCBmdW5jdGlvbigpIHsKLy8gICAgICAgICAgICBjb25zb2xlLmxvZygkKHRoaXMpLnByb3AoJ2lkJykpOwogICAgICAgICAgICAkKCcjZWRpdEVzdHVkaW8nKS5sb2FkKCdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2VkaXQnICsgJy8nICsgJCh0aGlzKS5wcm9wKCdpZCcpICsgJy8nICsgMTYpOwogICAgICAgICAgICAkKCcjZWRpdEVzdHVkaW8nKS5kaWFsb2coewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kYWw6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogNzkwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiA0NDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkcmFnZ2FibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXNpemFibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZTogJ0NhcmdhciByZXN1bHRhZG9zIGRlIGVzdHVkaW8nLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvdzogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJibGluZCIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiAxMDAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhpZGU6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWZmZWN0OiAiZmFkZSIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiA1MDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAKICAgICAgICB9KTsKICAgICAgICAKICAgICAgICAKICAgIH0pOwoKPC9zY3JpcHQ+CgoKPGRpdiBjbGFzcz0iZXN0dWRpb3NDb21wbGVtZW50YXJpb3NQYWNpZW50ZXNJbmRleCI+Cgk8aDI+PC9oMj4KCTx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGlkPSJlc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlc0luZGV4Ij4KICAgICAgICAgICAgPHRoZWFkPgogICAgICAgICAgICAgICAgPHRyPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+aWQ8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+cGFjaWVudGVzX2lkPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IEVzdHVkaW8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFNvbGljaXRhZG8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFJlYWxpemFkbyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gUmVzdWx0YWRvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBBZGp1bnRvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiAmbmJzcDsgPC90aD4KPCEtLSAgICAgICAgICAgICAgICAgICAgPHRoPmNyZWF0ZWQ8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD5tb2RpZmllZDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aCBjbGFzcz0iYWN0aW9ucyI+PC90aD4tLT4KICAgICAgICAgICAgICAgIDwvdHI+CiAgICAgICAgICAgIDwvdGhlYWQ+CiAgICAgICAgICAgIDx0Ym9keT4KICAgICAgICAgICAgICAgIDwhLS1ub2NhY2hlOjAwMS0tPgoJCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJVHJhdGFtaWVudG8gZGVzZW5zaWJpbGl6YW50ZSAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTI1LTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTE0LTAxLTE5NzAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCWVyZ3NkZnNkZgkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJPGEgaHJlZj0iL2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2Rvd25sb2FkL0hJU1RPUklBJTIwQ0xJTklDQS5wZGYvVHJhdGFtaWVudG8tZGVzZW5zaWJpbGl6YW50ZS0vMSI+PGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL3Jlc3VsdF9hdHRhY2htZW50LnBuZyIgaWQ9IjEiIGFsdD0iSElTVE9SSUEgQ0xJTklDQS5wZGYiIHRpdGxlPSJISVNUT1JJQSBDTElOSUNBLnBkZiIgLz48L2E+ICAgICAgICAgICAgICAgICAgICAKCQk8L3RkPiAgICAgICAgICAgICAgICAKPCEtLQkJPHRkPiZuYnNwOzwvdGQ+CgkJPHRkPiZuYnNwOzwvdGQ+LS0+CgkJPHRkIGNsYXNzPSJhY3Rpb25zIj4KCQkJPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2FkZF9yZXN1bHQucG5nIiBpZD0iMSIgY2xhc3M9ImNhcmdhcl9yZXN1bHRhZG8iIGFsdD0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiB0aXRsZT0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiAvPgkJCQkJCQkJPC90ZD4KCTwvdHI+Cgk8dHI+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgo8IS0tCQk8dGQ+CgkJCQkJPC90ZD4tLT4KCQk8dGQ+CgkJCUVzdHVkaW8gbWFjcm8vbWljcm8gcGllemEgb25jbyAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTI1LTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCSZuYnNwOwkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+ICAgICAgICAgICAgICAgIAo8IS0tCQk8dGQ+Jm5ic3A7PC90ZD4KCQk8dGQ+Jm5ic3A7PC90ZD4tLT4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSIyIiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJRWxlY3Ryb2NhcmRpb2dyYW1hIGNvbnN1bHRvcmlvIAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMjUtMDUtMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMTItMDctMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJeHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4CQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+ICAgICAgICAgICAgICAgIAo8IS0tCQk8dGQ+Jm5ic3A7PC90ZD4KCQk8dGQ+Jm5ic3A7PC90ZD4tLT4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSIzIiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJVHJhdGFtaWVudG8gZGVzZW5zaWJpbGl6YW50ZSAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTI2LTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTIxLTAxLTE5NzAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCQkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJPGEgaHJlZj0iL2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2Rvd25sb2FkL0ZFQ0hBJTIwMTklMjBGaW5hbCUyMDIwMTRfTUFUSUFTLnhscy9UcmF0YW1pZW50by1kZXNlbnNpYmlsaXphbnRlLS83Ij48aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvcmVzdWx0X2F0dGFjaG1lbnQucG5nIiBpZD0iNyIgYWx0PSJGRUNIQSAxOSBGaW5hbCAyMDE0X01BVElBUy54bHMiIHRpdGxlPSJGRUNIQSAxOSBGaW5hbCAyMDE0X01BVElBUy54bHMiIC8+PC9hPiAgICAgICAgICAgICAgICAgICAgCgkJPC90ZD4gICAgICAgICAgICAgICAgCjwhLS0JCTx0ZD4mbmJzcDs8L3RkPgoJCTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTx0ZCBjbGFzcz0iYWN0aW9ucyI+CgkJCTxpbWcgc3JjPSIvZGV2ZWwvc2lnZXBhL2ltZy9hZGRfcmVzdWx0LnBuZyIgaWQ9IjciIGNsYXNzPSJjYXJnYXJfcmVzdWx0YWRvIiBhbHQ9IkNhcmdhciByZXN1bHRhZG8gZGUgZXN0dWRpbyIgdGl0bGU9IkNhcmdhciByZXN1bHRhZG8gZGUgZXN0dWRpbyIgLz4JCQkJCQkJCTwvdGQ+Cgk8L3RyPgoJPHRyPgoJCTwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KPCEtLQkJPHRkPgoJCQkJCTwvdGQ+LS0+CgkJPHRkPgoJCQlTb25kZW8gZWxlY3RyLmludHJhZ2FzdHJpY286cGggCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkyNi0wNS0yMDE0CQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkmbmJzcDsJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCQkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJICAgICAgICAgICAgICAgICAgICAKCQk8L3RkPiAgICAgICAgICAgICAgICAKPCEtLQkJPHRkPiZuYnNwOzwvdGQ+CgkJPHRkPiZuYnNwOzwvdGQ+LS0+CgkJPHRkIGNsYXNzPSJhY3Rpb25zIj4KCQkJPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2FkZF9yZXN1bHQucG5nIiBpZD0iOCIgY2xhc3M9ImNhcmdhcl9yZXN1bHRhZG8iIGFsdD0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiB0aXRsZT0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiAvPgkJCQkJCQkJPC90ZD4KCTwvdHI+Cgk8dHI+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgo8IS0tCQk8dGQ+CgkJCQkJPC90ZD4tLT4KCQk8dGQ+CgkJCUVzdHVkaW8gZGVsIG1vY28gY2VydmljYWwgCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkyNS0wNi0yMDE0CQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkmbmJzcDsJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCQkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJICAgICAgICAgICAgICAgICAgICAKCQk8L3RkPiAgICAgICAgICAgICAgICAKPCEtLQkJPHRkPiZuYnNwOzwvdGQ+CgkJPHRkPiZuYnNwOzwvdGQ+LS0+CgkJPHRkIGNsYXNzPSJhY3Rpb25zIj4KCQkJPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2FkZF9yZXN1bHQucG5nIiBpZD0iMTEiIGNsYXNzPSJjYXJnYXJfcmVzdWx0YWRvIiBhbHQ9IkNhcmdhciByZXN1bHRhZG8gZGUgZXN0dWRpbyIgdGl0bGU9IkNhcmdhciByZXN1bHRhZG8gZGUgZXN0dWRpbyIgLz4JCQkJCQkJCTwvdGQ+Cgk8L3RyPgoJPHRyPgoJCTwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KPCEtLQkJPHRkPgoJCQkJCTwvdGQ+LS0+CgkJPHRkPgoJCQlUcmF0YW1pZW50byBkZXNlbnNpYmlsaXphbnRlIAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMTItMDctMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJJm5ic3A7CQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCSAgICAgICAgICAgICAgICAgICAgCgkJPC90ZD4gICAgICAgICAgICAgICAgCjwhLS0JCTx0ZD4mbmJzcDs8L3RkPgoJCTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTx0ZCBjbGFzcz0iYWN0aW9ucyI+CgkJCTxpbWcgc3JjPSIvZGV2ZWwvc2lnZXBhL2ltZy9hZGRfcmVzdWx0LnBuZyIgaWQ9IjEyIiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJVmVjdG9jYXJkaW9ncmFtYSAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTEyLTA3LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTEyLTA3LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCXd3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3CQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+ICAgICAgICAgICAgICAgIAo8IS0tCQk8dGQ+Jm5ic3A7PC90ZD4KCQk8dGQ+Jm5ic3A7PC90ZD4tLT4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSIxMyIgY2xhc3M9ImNhcmdhcl9yZXN1bHRhZG8iIGFsdD0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiB0aXRsZT0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiAvPgkJCQkJCQkJPC90ZD4KCTwvdHI+CiAgICAgICAgPCEtLS9ub2NhY2hlLS0+CiAgICAgICAgPC90Ym9keT4KCTwvdGFibGU+CiAgICAgICAgCiAgICAgICAgCjwhLS0JPHA+CgkJPC9wPgoJPGRpdiBjbGFzcz0icGFnaW5nIj4KCQk8L2Rpdj4tLT4KPC9kaXY+CgoKPCEtLTxkaXYgY2xhc3M9ImFjdGlvbnMiPgoJPGgzPjwvaDM+Cgk8dWw+CgkJPGxpPjwvbGk+CgkJPGxpPiA8L2xpPgoJCTxsaT4gPC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJPC91bD4KPC9kaXY+LS0+CgoKCjxzdHlsZT4KICAgIGlucHV0LCB0ZXh0YXJlYSB7CiAgICAgICAgY2xlYXI6IGJvdGg7CiAgICAgICAgZm9udC1zaXplOiAxMDAlOwogICAgICAgIGZvbnQtZmFtaWx5OiAiZnJ1dGlnZXIgbGlub3R5cGUiLCAibHVjaWRhIGdyYW5kZSIsICJ2ZXJkYW5hIiwgc2Fucy1zZXJpZjsKICAgICAgICB3aWR0aDogNTAlOwogICAgfQogICAgCiAgICAudWktYnV0dG9uc2V0IC51aS1idXR0b24gewogICAgICAgIG1hcmdpbi1sZWZ0OiAwOwogICAgICAgIG1hcmdpbi1yaWdodDogLS4xZW07CiAgICB9Cjwvc3R5bGU+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjMyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlcyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><script type="text/javascript">

    $(document).ready(function() {
        $('#estudiosComplementariosPacientesIndex').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
            "aaSorting": [[ 0, "asc" ]],
            "bAutoWidth": false,
            "aoColumns": [
                { "sWidth": "15%" },
                { "sWidth": "8%" },
                { "sWidth": "8%"},
                { "sWidth": "15%"},
                { "sWidth": "7%"},
                { "sWidth": "5%"},
            ],            
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,            
            "oLanguage": {
                                "sUrl": 'http://localhost/devel/sigepa/de_ES.txt' 
                                 }
        });
        
        $('.cargar_resultado').bind('click', function() {
//            console.log($(this).prop('id'));
            $('#editEstudio').load('http://localhost/devel/sigepa/estudios_complementarios_pacientes/edit' + '/' + $(this).prop('id') + '/' + 16);
            $('#editEstudio').dialog({
                                        modal: true,
                                        width: 790,
                                        height: 440,
                                        draggable: true,
                                        resizable: true,
                                        title: 'Cargar resultados de estudio',
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


<div class="estudiosComplementariosPacientesIndex">
	<h2></h2>
	<table cellpadding="0" cellspacing="0" id="estudiosComplementariosPacientesIndex">
            <thead>
                <tr>
                    <!--<th>id</th>-->
                    <!--<th>pacientes_id</th>-->
                    <th> Estudio </th>
                    <th> Solicitado </th>
                    <th> Realizado </th>
                    <th> Resultado </th>
                    <th> Adjunto </th>
                    <th> &nbsp; </th>
<!--                    <th>created</th>
                    <th>modified</th>-->
                    <!--<th class="actions"></th>-->
                </tr>
            </thead>
            <tbody>
                
	<?php foreach ($estudiosComplementariosPacientes as $estudiosComplementariosPaciente): ?>
	<tr>
		<!--<td><?php // echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']); ?>&nbsp;</td>-->
<!--		<td>
			<?php // echo $this->Html->link($estudiosComplementariosPaciente['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $estudiosComplementariosPaciente['Paciente']['id'])); ?>
		</td>-->
		<td>
			<?php echo $estudiosComplementariosPaciente['EstudiosComplementario']['nombre']; ?>
		</td>
                <td>
			<?php echo fecha($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['fechaSolicitado']); ?>
		</td>
                <td>
			<?php
                            if (!empty($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['fechaRealizado'])) {
                                echo fecha($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['fechaRealizado']);
                            } else {
                                echo '&nbsp;';
                            }                                       
                        ?>
		</td>
                <td>
			<?php echo $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['resultado']; ?>
		</td>
                <td>
			<?php 

                                if ($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto']) {
                                   
                                    echo $this->Html->image("result_attachment.png", array(
                                        'id' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'], 
                                        'alt' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto'],
                                        'title' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto'],
                                        'url' => array('action' => 'download', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto'], str_replace(array('(', ')', '/', ' '), '-', $estudiosComplementariosPaciente['EstudiosComplementario']['nombre']), $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']),
                                    ));
                                    
                                }
                        ?>
                    
		</td>                
<!--		<td><?php // echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['created']); ?>&nbsp;</td>
		<td><?php // echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php 
                                                        
                            echo $this->Html->image("add_result.png", array(
                                    'id' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'], 
                                    'class' => 'cargar_resultado',
                                    'alt' => 'Cargar resultado de estudio',
                                    'title' => 'Cargar resultado de estudio',
                                ));
                            
                            
                                    
                                    
                            
                            
                        ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']), null, __('Are you sure you want to delete # %s?', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
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
		<li> </li>
		<li> </li>
	</ul>
</div>-->



<style>
    input, textarea {
        clear: both;
        font-size: 100%;
        font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
        width: 50%;
    }
    
    .ui-buttonset .ui-button {
        margin-left: 0;
        margin-right: -.1em;
    }
</style>