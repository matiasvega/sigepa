<!--cachetime:1401202636--><?php
			App::uses('EstudiosComplementariosPacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MzQ6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19wYWNpZW50ZXMiO3M6NjoiYWN0aW9uIjtzOjEzOiJpbmRleFBhY2llbnRlIjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MTp7aTowO3M6MjoiMTUiO31zOjY6ImlzQWpheCI7YjoxO3M6NjoibW9kZWxzIjthOjc6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjg6IlBhY2llbnRlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlBhY2llbnRlIjt9czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjA6e31zOjM6InVybCI7czo1MToiZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zX3BhY2llbnRlcy9pbmRleFBhY2llbnRlLzE1IjtzOjQ6ImJhc2UiO3M6MTM6Ii9kZXZlbC9zaWdlcGEiO3M6Nzoid2Vicm9vdCI7czoxNDoiL2RldmVsL3NpZ2VwYS8iO3M6NDoiaGVyZSI7czo2NToiL2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2luZGV4UGFjaWVudGUvMTUiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new EstudiosComplementariosPacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjI6IjE1IjtzOjMyOiJlc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlcyI7YTo1OntpOjA7YTozOntzOjMxOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlIjthOjk6e3M6MjoiaWQiO3M6MToiNCI7czoxMjoicGFjaWVudGVzX2lkIjtzOjI6IjE1IjtzOjI3OiJlc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfaWQiO3M6MToiMSI7czo5OiJyZXN1bHRhZG8iO047czo3OiJhZGp1bnRvIjtOO3M6MTU6ImZlY2hhU29saWNpdGFkbyI7czoxMDoiMjAxNC0wNS0yNSI7czoxNDoiZmVjaGFSZWFsaXphZG8iO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTI1IDIzOjU0OjUyIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI1IDIzOjU0OjUyIjt9czo4OiJQYWNpZW50ZSI7YToxNzp7czoyOiJpZCI7czoyOiIxNSI7czozOiJkbmkiO3M6ODoiMzEyMjAzNTYiO3M6Njoibm9tYnJlIjtzOjY6Ik1BVElBUyI7czo4OiJhcGVsbGlkbyI7czo0OiJWRUdBIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTEwIjtzOjk6ImRpcmVjY2lvbiI7czoxNzoiUGFzYWplIFBheXJvIDExNzQiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ4NjM5NDUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtOO3M6NzoiYXRpb3BpYSI7TjtzOjc6ImhhYml0b3MiO047czoxNToibWVkaWNhY2lvbl9iYXNlIjtOO3M6MTA6ImZhbWlsaWFyZXMiO047czo1OiJvdHJvcyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTcgMjI6MDI6MzYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjcgMDE6MTQ6NDMiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MToiMSI7czo2OiJub21icmUiO3M6Mjk6IlRyYXRhbWllbnRvIGRlc2Vuc2liaWxpemFudGUgIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9fWk6MTthOjM6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6OTp7czoyOiJpZCI7czoxOiI1IjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTUiO3M6Mjc6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19pZCI7czoxOiIzIjtzOjk6InJlc3VsdGFkbyI7czo2MDoiRW4gZWwgZXN0dWRpbyBzZSBvYnNlcnZhOiANCi0gc2Rmc2RmDQotZHNmc2Rmc2RmDQotZHNmc2Rmc2RmIjtzOjc6ImFkanVudG8iO3M6MjM6IkZFQ0hBIDE5IEZpbmFsIDIwMTQueGxzIjtzOjE1OiJmZWNoYVNvbGljaXRhZG8iO3M6MTA6IjIwMTQtMDUtMjUiO3M6MTQ6ImZlY2hhUmVhbGl6YWRvIjtzOjEwOiIyMDE0LTAzLTEyIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMjUgMjM6NTQ6NTgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjYgMjA6MDg6MDYiO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE1IjtzOjM6ImRuaSI7czo4OiIzMTIyMDM1NiI7czo2OiJub21icmUiO3M6NjoiTUFUSUFTIjtzOjg6ImFwZWxsaWRvIjtzOjQ6IlZFR0EiO3M6NDoic2V4byI7czoxOiJNIjtzOjE1OiJmZWNoYU5hY2ltaWVudG8iO3M6MTA6IjE5ODQtMTEtMTAiO3M6OToiZGlyZWNjaW9uIjtzOjE3OiJQYXNhamUgUGF5cm8gMTE3NCI7czoxMjoidGVsZWZvbm9GaWpvIjtzOjk6IjE1NDg2Mzk0NSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtOO3M6NzoiaGFiaXRvcyI7TjtzOjE1OiJtZWRpY2FjaW9uX2Jhc2UiO047czoxMDoiZmFtaWxpYXJlcyI7TjtzOjU6Im90cm9zIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0xNyAyMjowMjozNiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNS0yNyAwMToxNDo0MyI7fXM6MjI6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW8iO2E6NTp7czoyOiJpZCI7czoxOiIzIjtzOjY6Im5vbWJyZSI7czozMToiRXN0dWRpbyBtYWNyby9taWNybyBwaWV6YSBvcGVyICI7czoxMToiZGVzY3JpcGNpb24iO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fX1pOjI7YTozOntzOjMxOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlIjthOjk6e3M6MjoiaWQiO3M6MToiNiI7czoxMjoicGFjaWVudGVzX2lkIjtzOjI6IjE1IjtzOjI3OiJlc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfaWQiO3M6MToiMyI7czo5OiJyZXN1bHRhZG8iO3M6Njc6InF3ZXF3ZXF3ZXF3ZXF3DQplcXcNCmUNCnF3DQplDQpxdw0KZQ0KcXcNCmUNCnF3DQplDQpxdw0KZXF3DQplDQpxd2UiO3M6NzoiYWRqdW50byI7czowOiIiO3M6MTU6ImZlY2hhU29saWNpdGFkbyI7czoxMDoiMjAxNC0wNS0yNSI7czoxNDoiZmVjaGFSZWFsaXphZG8iO3M6MTA6IjIwMTQtMDUtMjciO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0yNSAyMzo1NTowNSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNS0yNyAwMDozNTozNyI7fXM6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MjoiMTUiO3M6MzoiZG5pIjtzOjg6IjMxMjIwMzU2IjtzOjY6Im5vbWJyZSI7czo2OiJNQVRJQVMiO3M6ODoiYXBlbGxpZG8iO3M6NDoiVkVHQSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMTk4NC0xMS0xMCI7czo5OiJkaXJlY2Npb24iO3M6MTc6IlBhc2FqZSBQYXlybyAxMTc0IjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6OToiMTU0ODYzOTQ1IjtzOjEzOiJ0ZWxlZm9ub01vdmlsIjtzOjA6IiI7czoxOToiZmVjaGFVbHRpbWFDb25zdWx0YSI7TjtzOjc6ImF0aW9waWEiO047czo3OiJoYWJpdG9zIjtOO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7TjtzOjEwOiJmYW1pbGlhcmVzIjtOO3M6NToib3Ryb3MiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTE3IDIyOjAyOjM2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI3IDAxOjE0OjQzIjt9czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7YTo1OntzOjI6ImlkIjtzOjE6IjMiO3M6Njoibm9tYnJlIjtzOjMxOiJFc3R1ZGlvIG1hY3JvL21pY3JvIHBpZXphIG9wZXIgIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9fWk6MzthOjM6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6OTp7czoyOiJpZCI7czoxOiI5IjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTUiO3M6Mjc6ImVzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19pZCI7czoyOiI1NyI7czo5OiJyZXN1bHRhZG8iO047czo3OiJhZGp1bnRvIjtOO3M6MTU6ImZlY2hhU29saWNpdGFkbyI7czoxMDoiMjAxNC0wNS0yNiI7czoxNDoiZmVjaGFSZWFsaXphZG8iO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTI2IDIwOjA4OjM5IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI2IDIwOjA4OjM5Ijt9czo4OiJQYWNpZW50ZSI7YToxNzp7czoyOiJpZCI7czoyOiIxNSI7czozOiJkbmkiO3M6ODoiMzEyMjAzNTYiO3M6Njoibm9tYnJlIjtzOjY6Ik1BVElBUyI7czo4OiJhcGVsbGlkbyI7czo0OiJWRUdBIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTEwIjtzOjk6ImRpcmVjY2lvbiI7czoxNzoiUGFzYWplIFBheXJvIDExNzQiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ4NjM5NDUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtOO3M6NzoiYXRpb3BpYSI7TjtzOjc6ImhhYml0b3MiO047czoxNToibWVkaWNhY2lvbl9iYXNlIjtOO3M6MTA6ImZhbWlsaWFyZXMiO047czo1OiJvdHJvcyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTcgMjI6MDI6MzYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjcgMDE6MTQ6NDMiO31zOjIyOiJFc3R1ZGlvc0NvbXBsZW1lbnRhcmlvIjthOjU6e3M6MjoiaWQiO3M6MjoiNTciO3M6Njoibm9tYnJlIjtzOjMxOiJTb25kZW8gZWxlY3RyLmludHJhZ2FzdHJpY286cGggIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9fWk6NDthOjM6e3M6MzE6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGUiO2E6OTp7czoyOiJpZCI7czoyOiIxMCI7czoxMjoicGFjaWVudGVzX2lkIjtzOjI6IjE1IjtzOjI3OiJlc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfaWQiO3M6MToiMSI7czo5OiJyZXN1bHRhZG8iO3M6MTA6IkRBU0RBU0RBU0QiO3M6NzoiYWRqdW50byI7czowOiIiO3M6MTU6ImZlY2hhU29saWNpdGFkbyI7czoxMDoiMjAxNC0wNS0yNiI7czoxNDoiZmVjaGFSZWFsaXphZG8iO3M6MTA6IjIwMTQtMDUtMTMiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0yNiAyMDozNToyNiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNS0yNiAyMDozNTozNyI7fXM6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MjoiMTUiO3M6MzoiZG5pIjtzOjg6IjMxMjIwMzU2IjtzOjY6Im5vbWJyZSI7czo2OiJNQVRJQVMiO3M6ODoiYXBlbGxpZG8iO3M6NDoiVkVHQSI7czo0OiJzZXhvIjtzOjE6Ik0iO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMTk4NC0xMS0xMCI7czo5OiJkaXJlY2Npb24iO3M6MTc6IlBhc2FqZSBQYXlybyAxMTc0IjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6OToiMTU0ODYzOTQ1IjtzOjEzOiJ0ZWxlZm9ub01vdmlsIjtzOjA6IiI7czoxOToiZmVjaGFVbHRpbWFDb25zdWx0YSI7TjtzOjc6ImF0aW9waWEiO047czo3OiJoYWJpdG9zIjtOO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7TjtzOjEwOiJmYW1pbGlhcmVzIjtOO3M6NToib3Ryb3MiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTE3IDIyOjAyOjM2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA1LTI3IDAxOjE0OjQzIjt9czoyMjoiRXN0dWRpb3NDb21wbGVtZW50YXJpbyI7YTo1OntzOjI6ImlkIjtzOjE6IjEiO3M6Njoibm9tYnJlIjtzOjI5OiJUcmF0YW1pZW50byBkZXNlbnNpYmlsaXphbnRlICI7czoxMToiZGVzY3JpcGNpb24iO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjY0MDY6IjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsKICAgICAgICAkKCcjZXN0dWRpb3NDb21wbGVtZW50YXJpb3NQYWNpZW50ZXNJbmRleCcpLmRhdGFUYWJsZSh7CiAgICAgICAgICAgICJiUGFnaW5hdGUiOiB0cnVlLAogICAgICAgICAgICAiYkxlbmd0aENoYW5nZSI6IGZhbHNlLAogICAgICAgICAgICAiYkZpbHRlciI6IHRydWUsCiAgICAgICAgICAgICJiU29ydCI6IHRydWUsCiAgICAgICAgICAgICJiSW5mbyI6IHRydWUsCiAgICAgICAgICAgICJiQXV0b1dpZHRoIjogZmFsc2UsCiAgICAgICAgICAgICJhYVNvcnRpbmciOiBbWyAwLCAiYXNjIiBdXSwKICAgICAgICAgICAgImJBdXRvV2lkdGgiOiBmYWxzZSwKICAgICAgICAgICAgImFvQ29sdW1ucyI6IFsKICAgICAgICAgICAgICAgIHsgInNXaWR0aCI6ICIxNSUiIH0sCiAgICAgICAgICAgICAgICB7ICJzV2lkdGgiOiAiOCUiIH0sCiAgICAgICAgICAgICAgICB7ICJzV2lkdGgiOiAiOCUifSwKICAgICAgICAgICAgICAgIHsgInNXaWR0aCI6ICIxNSUifSwKICAgICAgICAgICAgICAgIHsgInNXaWR0aCI6ICI3JSJ9LAogICAgICAgICAgICAgICAgeyAic1dpZHRoIjogIjUlIn0sCiAgICAgICAgICAgIF0sICAgICAgICAgICAgCiAgICAgICAgICAgICJzUGFnaW5hdGlvblR5cGUiOiAiZnVsbF9udW1iZXJzIiwKICAgICAgICAgICAgImJKUXVlcnlVSSI6IHRydWUsICAgICAgICAgICAgCiAgICAgICAgICAgICJvTGFuZ3VhZ2UiOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgInNVcmwiOiAnaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGVfRVMudHh0JyAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgIH0pOwogICAgICAgIAogICAgICAgICQoJy5jYXJnYXJfcmVzdWx0YWRvJykuYmluZCgnY2xpY2snLCBmdW5jdGlvbigpIHsKLy8gICAgICAgICAgICBjb25zb2xlLmxvZygkKHRoaXMpLnByb3AoJ2lkJykpOwogICAgICAgICAgICAkKCcjZWRpdEVzdHVkaW8nKS5sb2FkKCdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3NfcGFjaWVudGVzL2VkaXQnICsgJy8nICsgJCh0aGlzKS5wcm9wKCdpZCcpICsgJy8nICsgMTUpOwogICAgICAgICAgICAkKCcjZWRpdEVzdHVkaW8nKS5kaWFsb2coewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kYWw6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogNzkwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiA0NDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkcmFnZ2FibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXNpemFibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZTogJ0NhcmdhciByZXN1bHRhZG9zIGRlIGVzdHVkaW8nLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvdzogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJibGluZCIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiAxMDAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhpZGU6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWZmZWN0OiAiZmFkZSIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiA1MDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAKICAgICAgICB9KTsKICAgICAgICAKICAgICAgICAKICAgIH0pOwoKPC9zY3JpcHQ+CgoKPGRpdiBjbGFzcz0iZXN0dWRpb3NDb21wbGVtZW50YXJpb3NQYWNpZW50ZXNJbmRleCI+Cgk8aDI+PC9oMj4KCTx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGlkPSJlc3R1ZGlvc0NvbXBsZW1lbnRhcmlvc1BhY2llbnRlc0luZGV4Ij4KICAgICAgICAgICAgPHRoZWFkPgogICAgICAgICAgICAgICAgPHRyPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+aWQ8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+cGFjaWVudGVzX2lkPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IEVzdHVkaW8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFNvbGljaXRhZG8gPC90aD4KICAgICAgICAgICAgICAgICAgICA8dGg+IFJlYWxpemFkbyA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gUmVzdWx0YWRvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBBZGp1bnRvIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiAmbmJzcDsgPC90aD4KPCEtLSAgICAgICAgICAgICAgICAgICAgPHRoPmNyZWF0ZWQ8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD5tb2RpZmllZDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aCBjbGFzcz0iYWN0aW9ucyI+PC90aD4tLT4KICAgICAgICAgICAgICAgIDwvdHI+CiAgICAgICAgICAgIDwvdGhlYWQ+CiAgICAgICAgICAgIDx0Ym9keT4KICAgICAgICAgICAgICAgIDwhLS1ub2NhY2hlOjAwMS0tPgoJCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJVHJhdGFtaWVudG8gZGVzZW5zaWJpbGl6YW50ZSAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTI1LTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCSZuYnNwOwkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+ICAgICAgICAgICAgICAgIAo8IS0tCQk8dGQ+Jm5ic3A7PC90ZD4KCQk8dGQ+Jm5ic3A7PC90ZD4tLT4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSI0IiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJRXN0dWRpbyBtYWNyby9taWNybyBwaWV6YSBvcGVyIAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMjUtMDUtMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMTItMDMtMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJRW4gZWwgZXN0dWRpbyBzZSBvYnNlcnZhOiANCi0gc2Rmc2RmDQotZHNmc2Rmc2RmDQotZHNmc2Rmc2RmCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQk8YSBocmVmPSIvZGV2ZWwvc2lnZXBhL2VzdHVkaW9zX2NvbXBsZW1lbnRhcmlvc19wYWNpZW50ZXMvZG93bmxvYWQvRkVDSEElMjAxOSUyMEZpbmFsJTIwMjAxNC54bHMvRXN0dWRpby1tYWNyby1taWNyby1waWV6YS1vcGVyLS81Ij48aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvcmVzdWx0X2F0dGFjaG1lbnQucG5nIiBpZD0iNSIgYWx0PSJGRUNIQSAxOSBGaW5hbCAyMDE0LnhscyIgdGl0bGU9IkZFQ0hBIDE5IEZpbmFsIDIwMTQueGxzIiAvPjwvYT4gICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+ICAgICAgICAgICAgICAgIAo8IS0tCQk8dGQ+Jm5ic3A7PC90ZD4KCQk8dGQ+Jm5ic3A7PC90ZD4tLT4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSI1IiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJRXN0dWRpbyBtYWNyby9taWNybyBwaWV6YSBvcGVyIAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMjUtMDUtMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJMjctMDUtMjAxNAkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJcXdlcXdlcXdlcXdlcXcNCmVxdw0KZQ0KcXcNCmUNCnF3DQplDQpxdw0KZQ0KcXcNCmUNCnF3DQplcXcNCmUNCnF3ZQkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJICAgICAgICAgICAgICAgICAgICAKCQk8L3RkPiAgICAgICAgICAgICAgICAKPCEtLQkJPHRkPiZuYnNwOzwvdGQ+CgkJPHRkPiZuYnNwOzwvdGQ+LS0+CgkJPHRkIGNsYXNzPSJhY3Rpb25zIj4KCQkJPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2FkZF9yZXN1bHQucG5nIiBpZD0iNiIgY2xhc3M9ImNhcmdhcl9yZXN1bHRhZG8iIGFsdD0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiB0aXRsZT0iQ2FyZ2FyIHJlc3VsdGFkbyBkZSBlc3R1ZGlvIiAvPgkJCQkJCQkJPC90ZD4KCTwvdHI+Cgk8dHI+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgo8IS0tCQk8dGQ+CgkJCQkJPC90ZD4tLT4KCQk8dGQ+CgkJCVNvbmRlbyBlbGVjdHIuaW50cmFnYXN0cmljbzpwaCAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTI2LTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCSZuYnNwOwkJPC90ZD4KICAgICAgICAgICAgICAgIDx0ZD4KCQkJCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+ICAgICAgICAgICAgICAgIAo8IS0tCQk8dGQ+Jm5ic3A7PC90ZD4KCQk8dGQ+Jm5ic3A7PC90ZD4tLT4KCQk8dGQgY2xhc3M9ImFjdGlvbnMiPgoJCQk8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGlkPSI5IiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KCTx0cj4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CjwhLS0JCTx0ZD4KCQkJCQk8L3RkPi0tPgoJCTx0ZD4KCQkJVHJhdGFtaWVudG8gZGVzZW5zaWJpbGl6YW50ZSAJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTI2LTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCTEzLTA1LTIwMTQJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCURBU0RBU0RBU0QJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCSAgICAgICAgICAgICAgICAgICAgCgkJPC90ZD4gICAgICAgICAgICAgICAgCjwhLS0JCTx0ZD4mbmJzcDs8L3RkPgoJCTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTx0ZCBjbGFzcz0iYWN0aW9ucyI+CgkJCTxpbWcgc3JjPSIvZGV2ZWwvc2lnZXBhL2ltZy9hZGRfcmVzdWx0LnBuZyIgaWQ9IjEwIiBjbGFzcz0iY2FyZ2FyX3Jlc3VsdGFkbyIgYWx0PSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIHRpdGxlPSJDYXJnYXIgcmVzdWx0YWRvIGRlIGVzdHVkaW8iIC8+CQkJCQkJCQk8L3RkPgoJPC90cj4KICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICA8L3Rib2R5PgoJPC90YWJsZT4KICAgICAgICAKICAgICAgICAKPCEtLQk8cD4KCQk8L3A+Cgk8ZGl2IGNsYXNzPSJwYWdpbmciPgoJCTwvZGl2Pi0tPgo8L2Rpdj4KCgo8IS0tPGRpdiBjbGFzcz0iYWN0aW9ucyI+Cgk8aDM+PC9oMz4KCTx1bD4KCQk8bGk+PC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJCTxsaT4gPC9saT4KCQk8bGk+IDwvbGk+Cgk8L3VsPgo8L2Rpdj4tLT4KCgoKPHN0eWxlPgogICAgaW5wdXQsIHRleHRhcmVhIHsKICAgICAgICBjbGVhcjogYm90aDsKICAgICAgICBmb250LXNpemU6IDEwMCU7CiAgICAgICAgZm9udC1mYW1pbHk6ICJmcnV0aWdlciBsaW5vdHlwZSIsICJsdWNpZGEgZ3JhbmRlIiwgInZlcmRhbmEiLCBzYW5zLXNlcmlmOwogICAgICAgIHdpZHRoOiA1MCU7CiAgICB9CiAgICAKICAgIC51aS1idXR0b25zZXQgLnVpLWJ1dHRvbiB7CiAgICAgICAgbWFyZ2luLWxlZnQ6IDA7CiAgICAgICAgbWFyZ2luLXJpZ2h0OiAtLjFlbTsKICAgIH0KPC9zdHlsZT4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MzI6IkVzdHVkaW9zQ29tcGxlbWVudGFyaW9zUGFjaWVudGVzIjt9'));
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
            $('#editEstudio').load('http://localhost/devel/sigepa/estudios_complementarios_pacientes/edit' + '/' + $(this).prop('id') + '/' + 15);
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