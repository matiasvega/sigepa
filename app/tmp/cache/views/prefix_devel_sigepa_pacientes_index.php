<!--cachetime:1417791584--><?php
			App::uses('PacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6OToiUGFjaWVudGVzIjtzOjY6ImFjdGlvbiI7czo1OiJpbmRleCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjA6e31zOjY6ImlzQWpheCI7YjowO3M6NjoibW9kZWxzIjthOjU6e3M6ODoiUGFjaWVudGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiUGFjaWVudGUiO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MTY6IlBhY2llbnRlcy9pbmRleC8iO3M6NDoiYmFzZSI7czoxMzoiL2RldmVsL3NpZ2VwYSI7czo3OiJ3ZWJyb290IjtzOjE0OiIvZGV2ZWwvc2lnZXBhLyI7czo0OiJoZXJlIjtzOjMwOiIvZGV2ZWwvc2lnZXBhL1BhY2llbnRlcy9pbmRleC8iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new PacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjk6InBhY2llbnRlcyI7YToyOntpOjA7YToxOntzOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjE6IjEiO3M6MzoiZG5pIjtzOjg6IjMxMjIwMzU2IjtzOjY6Im5vbWJyZSI7czoxMjoiTWF0aWFzIEFyaWVsIjtzOjg6ImFwZWxsaWRvIjtzOjEwOiJWZWdhIFRhcGlhIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTEwIjtzOjk6ImRpcmVjY2lvbiI7czoxNzoiSnVhbiBCIEp1c3RvIDI1MTQiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQwMDY4NDUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtzOjEwOiIyMDE0LTEyLTA0IjtzOjc6ImF0aW9waWEiO047czo3OiJoYWJpdG9zIjtOO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7TjtzOjEwOiJmYW1pbGlhcmVzIjtOO3M6NToib3Ryb3MiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA5LTEzIDIxOjA3OjMwIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTEyLTA0IDE5OjEzOjUzIjt9fWk6MTthOjE6e3M6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MToiMiI7czozOiJkbmkiO3M6MToiMCI7czo2OiJub21icmUiO3M6MTM6IkNhcmxhIEZhYmlhbmEiO3M6ODoiYXBlbGxpZG8iO3M6MTc6IkNhc3Rhw7FvIExpw7FlaXJvIjtzOjQ6InNleG8iO3M6MToiRiI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTA1IjtzOjk6ImRpcmVjY2lvbiI7czowOiIiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ2MTM0NjUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtzOjEwOiIyMDE0LTEyLTA0IjtzOjc6ImF0aW9waWEiO3M6MjI6ImFhYWFhYWFhYWFhYWFhYWFhYWFhYWEiO3M6NzoiaGFiaXRvcyI7czowOiIiO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7czowOiIiO3M6MTA6ImZhbWlsaWFyZXMiO3M6MDoiIjtzOjU6Im90cm9zIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA5LTEzIDIxOjA5OjM0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTEyLTA0IDE3OjE0OjA2Ijt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6ODA5ODoiCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KICAgICAgICBqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkgeyAKICAgICAgICAgICAgCiAgICAgICAgICAgICAgICBqUXVlcnkoJy50YWJsYScpLmRhdGFUYWJsZSh7CiAgICAgICAgICAgICAgICAgICAgICAiYlBhZ2luYXRlIjogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICJiTGVuZ3RoQ2hhbmdlIjogZmFsc2UsCiAgICAgICAgICAgICAgICAgICAgICAiYkZpbHRlciI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAiYlNvcnQiOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgImJJbmZvIjogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICJiQXV0b1dpZHRoIjogZmFsc2UsCiAgICAgICAgICAgICAgICAgICAgICAiYWFTb3J0aW5nIjogW1sgMCwgImFzYyIgXV0sCiAgICAgICAgICAgICAgICAgICAgICAic1BhZ2luYXRpb25UeXBlIjogImZ1bGxfbnVtYmVycyIsCiAgICAgICAgICAgICAgICAgICAgICAiYkpRdWVyeVVJIjogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICJvTGFuZ3VhZ2UiOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICJzVXJsIjogJ2h0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL2RlX0VTLnR4dCcgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICB9KTsgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIGpRdWVyeSgnLnZpZXdQYWNpZW50ZScpLmJpbmQoJ2NsaWNrJywgZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5LmFqYXgoewogICAgICAgICAgICAgICAgICAgICAgdHlwZTogJ1BPU1QnLAogICAgICAgICAgICAgICAgICAgICAgYXN5bmM6dHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgIHVybDogJ2h0dHA6Ly9sb2NhbGhvc3QvZGV2ZWwvc2lnZXBhL3BhY2llbnRlcy9maWNoYScgKyAnLycgKyBqUXVlcnkodGhpcykucHJvcCgnaWQnKSArICcvJywKICAgICAgICAgICAgICAgICAgICAgIGNhY2hlOnRydWUsCiAgICAgICAgICAgICAgICAgICAgfSkKICAgICAgICAgICAgICAgICAgICAgIC5kb25lKGZ1bmN0aW9uKGRhdGEpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGpRdWVyeSgiI2ZpY2hhUGFjaWVudGUiKS5odG1sKGRhdGEpOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBqUXVlcnkoIiNmaWNoYVBhY2llbnRlIikuZGlhbG9nKHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2RhbDogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aWR0aDogOTcwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhlaWdodDogNjAwLAovLyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGVpZ2h0OiA4MDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHJhZ2dhYmxlOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlc2l6YWJsZTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZTogJ0ZpY2hhIGRlIHBhY2llbnRlJywKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaG93OiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVmZmVjdDogImJsaW5kIiwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDEwMDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoaWRlOiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVmZmVjdDogImZhZGUiLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkdXJhdGlvbjogNTAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0sCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgfSk7ICAKICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgalF1ZXJ5KCcjcGFuZWxIYW5kbGUnKS5ob3ZlcihmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICBqUXVlcnkoJyNzaWRlUGFuZWwnKS5zdG9wKHRydWUsIGZhbHNlKS5hbmltYXRlKHsKICAgICAgICAgICAgICAgICAgICAgICAgJ2xlZnQnOiAnMHB4JwogICAgICAgICAgICAgICAgICAgIH0sIDQwMCk7CiAgICAgICAgICAgICAgICB9LCBmdW5jdGlvbigpIHsKLy8gICAgICAgICAgICAgICAgICAgIHZhciBqcSA9IGpRdWVyeS5ub0NvbmZsaWN0KCk7CiAgICAgICAgICAgICAgICB9KTsKCiAgICAgICAgICAgICAgICBqUXVlcnkoJyNzaWRlUGFuZWwnKS5ob3ZlcihmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAvLyBEbyBub3RoaW5nCiAgICAgICAgICAgICAgICB9LCBmdW5jdGlvbigpIHsKCi8vICAgICAgICAgICAgICAgICAgICB2YXIganEgPSBqUXVlcnkubm9Db25mbGljdCgpOwogICAgICAgICAgICAgICAgICAgIGpRdWVyeSgnI3NpZGVQYW5lbCcpLmFuaW1hdGUoewogICAgICAgICAgICAgICAgICAgICAgICBsZWZ0OiAnLTIwMXB4JwogICAgICAgICAgICAgICAgICAgIH0sIDQwMCk7CgogICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgCiAgICAgICAgICAgIH0pOyAgICAgIAogICAgICAgICAgICAgICAgICAgIAo8L3NjcmlwdD4KCgo8ZGl2IGNsYXNzPSJwYWNpZW50ZXNJbmRleCBjdXN0b21JbmRleCI+Cgk8aDI+UGFjaWVudGVzPC9oMj4KICAgICAgICAKCTx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGNsYXNzPSJ0YWJsYSI+CiAgICAgICAgPHRoZWFkPgogICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICA8IS0tPHRoPiBpZCA8L3RoPi0tPgogICAgICAgICAgICAgICAgPCEtLTx0aD4gRE5JIDwvdGg+LS0+CiAgICAgICAgICAgICAgICA8dGg+IE5vbWJyZSA8L3RoPgogICAgICAgICAgICAgICAgPHRoPiBBcGVsbGlkbyA8L3RoPgogICAgICAgICAgICAgICAgPHRoPiBTZXhvIDwvdGg+CiAgICAgICAgICAgICAgICA8dGg+IEZlY2hhIGRlIE5hY2ltaWVudG88L3RoPgogICAgICAgICAgICAgICAgPCEtLTx0aD4gRGlyZWNjaW9uIDwvdGg+LS0+CiAgICAgICAgICAgICAgICA8IS0tPHRoPiBUZWxlZm9ubyA8L3RoPi0tPgogICAgICAgICAgICAgICAgPCEtLTx0aD4gQ2VsdWxhciA8L3RoPi0tPgogICAgICAgICAgICAgICAgPHRoPiBVbHRpbWEgY29uc3VsdGEgPC90aD4KICAgICAgICAgICAgICAgIDwhLS08dGg+Y3JlYXRlZDwvdGg+LS0+CiAgICAgICAgICAgICAgICA8IS0tPHRoPm1vZGlmaWVkPC90aD4tLT4KICAgICAgICAgICAgICAgIDx0aCBjbGFzcz0iYWN0aW9ucyI+PC90aD4KICAgICAgICAgICAgPC90cj4KICAgICAgICA8L3RoZWFkPgogICAgICAgIDx0Ym9keT4KICAgICAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+CiAgICAgICAgICAgICAgICAgICAgPHRyPiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQ+TWF0aWFzIEFyaWVsJm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8dGQ+VmVnYSBUYXBpYSZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPk1hc2N1bGlubyZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPjEwLTExLTE5ODQmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDx0ZD4wNC0xMi0yMDE0Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iYWN0aW9ucyI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvZmljaGEucG5nIiBhbHQ9IlZlciBmaWNoYSBkZSBwYWNpZW50ZSIgdGl0bGU9IlZlciBmaWNoYSBkZSBwYWNpZW50ZSIgY2xhc3M9InZpZXdQYWNpZW50ZSIgaWQ9IjEiIC8+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zm9ybSBhY3Rpb249Ii9kZXZlbC9zaWdlcGEvUGFjaWVudGVzL2RlbGV0ZS8xIiBuYW1lPSJwb3N0XzU0ODEwY2UwZTMyZDM1OTU1NTUwNDMiIGlkPSJwb3N0XzU0ODEwY2UwZTMyZDM1OTU1NTUwNDMiIHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBtZXRob2Q9InBvc3QiPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIi8+PC9mb3JtPjxhIGhyZWY9IiMiIG9uY2xpY2s9ImlmIChjb25maXJtKCdDb25maXJtYSBxdWUgZGVzZWEgZWxpbWluYXIgbG9zIGRhdG9zIGRlbCBwYWNpZW50ZSBNYXRpYXMgQXJpZWwgVmVnYSBUYXBpYT8nKSkgeyBkb2N1bWVudC5wb3N0XzU0ODEwY2UwZTMyZDM1OTU1NTUwNDMuc3VibWl0KCk7IH0gZXZlbnQucmV0dXJuVmFsdWUgPSBmYWxzZTsgcmV0dXJuIGZhbHNlOyI+PGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2RlbGV0ZS5wbmciIGFsdD0iRWxpbWluYXIiIHRpdGxlPSJFbGltaW5hciIgLz48L2E+ICAgICAgICAgICAgICAgICAgICA8L3RkPgogICAgICAgICAgICA8L3RyPiAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPHRyPiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQ+Q2FybGEgRmFiaWFuYSZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPkNhc3Rhw7FvIExpw7FlaXJvJm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8dGQ+RmVtZW5pbm8mbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDx0ZD4wNS0xMS0xOTg0Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQ+MDQtMTItMjAxNCZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9ImFjdGlvbnMiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2ZpY2hhLnBuZyIgYWx0PSJWZXIgZmljaGEgZGUgcGFjaWVudGUiIHRpdGxlPSJWZXIgZmljaGEgZGUgcGFjaWVudGUiIGNsYXNzPSJ2aWV3UGFjaWVudGUiIGlkPSIyIiAvPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvcm0gYWN0aW9uPSIvZGV2ZWwvc2lnZXBhL1BhY2llbnRlcy9kZWxldGUvMiIgbmFtZT0icG9zdF81NDgxMGNlMGUzNWZiODcwMTQzMTczIiBpZD0icG9zdF81NDgxMGNlMGUzNWZiODcwMTQzMTczIiBzdHlsZT0iZGlzcGxheTpub25lOyIgbWV0aG9kPSJwb3N0Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCIvPjwvZm9ybT48YSBocmVmPSIjIiBvbmNsaWNrPSJpZiAoY29uZmlybSgnQ29uZmlybWEgcXVlIGRlc2VhIGVsaW1pbmFyIGxvcyBkYXRvcyBkZWwgcGFjaWVudGUgQ2FybGEgRmFiaWFuYSBDYXN0YcOxbyBMacOxZWlybz8nKSkgeyBkb2N1bWVudC5wb3N0XzU0ODEwY2UwZTM1ZmI4NzAxNDMxNzMuc3VibWl0KCk7IH0gZXZlbnQucmV0dXJuVmFsdWUgPSBmYWxzZTsgcmV0dXJuIGZhbHNlOyI+PGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2RlbGV0ZS5wbmciIGFsdD0iRWxpbWluYXIiIHRpdGxlPSJFbGltaW5hciIgLz48L2E+ICAgICAgICAgICAgICAgICAgICA8L3RkPgogICAgICAgICAgICA8L3RyPiAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPCEtLS9ub2NhY2hlLS0+CiAgICAgICAgPC90Ym9keT4KCTwvdGFibGU+CjwvZGl2PiAgICAgICAKICAgIAo8ZGl2IGlkPSJmaWNoYVBhY2llbnRlIj48L2Rpdj4gICAgCiAgICAKPGRpdiBpZD0ic2lkZVBhbmVsIj4KICAgIDxkaXYgaWQ9InBhbmVsQ29udGVudCIgPgogICAgICAgIDxkaXYgY2xhc3M9ImFjY2lvbmVzIj4KCTx1bD4KCQk8bGk+PGEgaHJlZj0iL2RldmVsL3NpZ2VwYS9QYWNpZW50ZXMvYWRkIj5SZWdpc3RyYXIgUGFjaWVudGU8L2E+PC9saT4KCQk8bGk+PGEgaHJlZj0iL2RldmVsL3NpZ2VwYS9lc3R1ZGlvc19jb21wbGVtZW50YXJpb3MiPkxpc3RhZG8gRXN0dWRpb3MgQ29tcGxlbWVudGFyaW9zPC9hPiA8L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL2VzdHVkaW9zX2NvbXBsZW1lbnRhcmlvcy9hZGQiPlJlZ2lzdHJhciBFc3R1ZGlvIENvbXBsZW1lbnRhcmlvPC9hPiA8L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL29icmFzX3NvY2lhbGVzIj5MaXN0YWRvIE9icmFzIFNvY2lhbGVzPC9hPiA8L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL29icmFzX3NvY2lhbGVzL2FkZCI+UmVnaXN0cmFyIE9icmEgU29jaWFsPC9hPiA8L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL3BhdG9sb2dpYXMiPkxpc3RhZG8gUGF0b2xvZ2lhczwvYT4gPC9saT4KCQk8bGk+PGEgaHJlZj0iL2RldmVsL3NpZ2VwYS9wYXRvbG9naWFzL2FkZCI+UmVnaXN0cmFyIFBhdG9sb2dpYTwvYT4gPC9saT4KCTwvdWw+CiAgICAgICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgaWQ9InBhbmVsSGFuZGxlIj48cD5BY2Npb25lczwvcD48L2Rpdj4KPC9kaXY+ICAgICAgICAKICAgICAgICAgICAgICAgIAo8c3R5bGU+CiAgICAuY3VzdG9tSW5kZXggewogICAgICAgIG1hcmdpbi1sZWZ0OjIlOwogICAgfSAgIAogICAgCiAgICBsYWJlbCB7CiAgICAgICAgd2lkdGg6IDEwMCU7ICAgICAgICAKICAgIH0KICAgIAogICAgCiAgICBpbnB1dCwgdGV4dGFyZWEgewogICAgICAgIGNsZWFyOiBib3RoOwogICAgICAgIGZvbnQtc2l6ZTogOTAlOwogICAgICAgIGZvbnQtZmFtaWx5OiAiZnJ1dGlnZXIgbGlub3R5cGUiLCAibHVjaWRhIGdyYW5kZSIsICJ2ZXJkYW5hIiwgc2Fucy1zZXJpZjsKICAgICAgICB3aWR0aDogNDAlOwogICAgfQogICAgCiAgICBsYWJlbCBpbnB1dCB7CiAgICAgICAgaGVpZ2h0OiA0MHB4OwogICAgfQogICAgCiAgICAudWktYnV0dG9uc2V0IC51aS1idXR0b24gewogICAgICAgIG1hcmdpbi1sZWZ0OiAwOwogICAgICAgIG1hcmdpbi1yaWdodDogLS4xZW07CiAgICB9CiAgICAKICAgIAo8L3N0eWxlPiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo5OiJQYWNpZW50ZXMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>
		SI.GE.PA Sistema de gestion de pacientes:
		Pacientes	</title>
	<link href="/devel/sigepa/favicon.ico" type="image/x-icon" rel="icon" /><link href="/devel/sigepa/favicon.ico" type="image/x-icon" rel="shortcut icon" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/superfish-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/fullcalendar-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/fullcalendar.print-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/demo_page-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/demo_table-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/cake.generic-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/jquery.datetimepicker-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/jquery.ui.autocomplete-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/bootstrap-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/south-street/jquery-ui-1.10.4.custom-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/chosen-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/jquery.pnotify.default-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/jquery.pnotify.default.icons-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/sigepa-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/tooltipster-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/themes/tooltipster-shadow-min.css" /><link rel="stylesheet" type="text/css" href="/devel/sigepa/css/bootstrap-clockpicker-min.css" /><script type="text/javascript" src="/devel/sigepa/js/jquery-2.1.0.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.tooltipster.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery-ui-1.10.4.custom.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/hoverIntent.js"></script><script type="text/javascript" src="/devel/sigepa/js/superfish.js"></script><script type="text/javascript" src="/devel/sigepa/js/fullcalendar.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.ui.core.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.ui.widget.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.ui.tabs.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.ui.position.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.datetimepicker.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.ui.menu.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.dataTables.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.ui.datepicker.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/chosen.jquery.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/jquery.pnotify.min.js"></script><script type="text/javascript" src="/devel/sigepa/js/bootstrap.js"></script><script type="text/javascript" src="/devel/sigepa/js/bootstrap-clockpicker.js"></script><script type="text/javascript" src="/devel/sigepa/js/sigepa.js"></script>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        
</head>
<body>
	<div id="container">
		<div id="header">
                    <div id="menu"> 
                        
                            <script>

        (function($){ //create closure so we can safely use $ as alias for jQuery

                $(document).ready(function(){

                        // initialise plugin
                        var example = $('#example').superfish({
                            delay:100,
                            speed:'normal',
                            speedOut:'fast',  
                            animation:{opacity:'show',height:'show'},
                                //add options here if required
                        });

                        // buttons to demonstrate Superfish's public methods
                        $('.destroy').on('click', function(){
                                example.superfish('destroy');
                        });

                        $('.init').on('click', function(){
                                example.superfish();
                        });

                        $('.open').on('click', function(){
                                example.children('li:first').superfish('show');
                        });

                        $('.close').on('click', function(){
                                example.children('li:first').superfish('hide');
                        });
                });

        })(jQuery);


    </script>

    
    <!--FULL_BASE_URL -->
    
       
    <ul class="sf-menu" id="example">
        <li>
<a href="#">Gestion de Turnos</a>
 <ul>
<li> <a href="/devel/sigepa/Turnos/index/">Calendario</a> </li>
<li> <a href="/devel/sigepa/Turnos/agendaDiaria/">Agenda diaria</a> </li>
 </ul>
</li>
<li>
<a href="#">Gestion de Pacientes</a>
 <ul>
<li> <a href="/devel/sigepa/Pacientes/index/">Listado de pacientes</a> </li>
<li> <a href="/devel/sigepa/Pacientes/add/">Registrar paciente</a> </li>
 </ul>
</li>
<li>
<a href="#">Configuracion</a>
 <ul>
<li> <a href="/devel/sigepa/Especialidades/index/">Especialidades</a> </li>
<li> <a href="/devel/sigepa/EstudiosComplementarios/index/">Estudios Complementarios</a> </li>
<li> <a href="/devel/sigepa/Medicamentos/index/">Medicamentos</a> </li>
<li> <a href="/devel/sigepa/ObrasSociales/index/">Obras Sociales</a> </li>
<li> <a href="/devel/sigepa/Patologias/index/">Patologias</a> </li>
<li> <a href="/devel/sigepa/Tratamientos/index/">Tratamientos</a> </li>
<li> <a href="/devel/sigepa/Profesionales/index/">Profesionales</a> </li>
 </ul>
</li>
<li>
<a href="#">Seguridad</a>
 <ul>
<li> <a href="/devel/sigepa/Users/index/">Usuarios</a> </li>
<li> <a href="/devel/sigepa/Groups/index/">Grupos</a> </li>
<li> <a href="/devel/sigepa/Users/options/1">Preferencias de Usuario</a> </li>
<li> <a href="/devel/sigepa/admin/acl/">Privilegios</a> </li>
<li> <a href="/devel/sigepa/backups/index/">Backups</a> </li>
 </ul>
</li>    </ul> 
                        
                    </div>                        
                    <div id="toolbar"> 
                        <a href="/devel/sigepa/backups/add"><img src="/devel/sigepa/img/runBackup.png" title="Backup" class="toolBarOption" alt="Backup" /></a><a href="/devel/sigepa/users/options/1"><img src="/devel/sigepa/img/configuration.png" title="Preferencias" class="toolBarOption" alt="Preferencias" /></a><a href="/devel/sigepa/users/logout"><img src="/devel/sigepa/img/logout.png" title="Salir" class="toolBarOption" alt="Salir" /></a>                      </div>  
		</div>
		<div id="content">
                        
			<?php echo $this->Session->flash(); ?>
                        
			
<script type="text/javascript">
        jQuery(document).ready(function() { 
            
                jQuery('.tabla').dataTable({
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
                      
                jQuery('.viewPaciente').bind('click', function() {
                    jQuery.ajax({
                      type: 'POST',
                      async:true,
                      url: 'http://localhost/devel/sigepa/pacientes/ficha' + '/' + jQuery(this).prop('id') + '/',
                      cache:true,
                    })
                      .done(function(data) {
                            jQuery("#fichaPaciente").html(data);                                            
                            jQuery("#fichaPaciente").dialog({
                                modal: true,
                                width: 970,
                                height: 600,
//                                height: 800,
                                draggable: true,
                                resizable: true,
                                title: 'Ficha de paciente',
                                show: {
                                    effect: "blind",
                                    duration: 1000,
                                },
                                hide: {
                                    effect: "fade",
                                    duration: 500,
                                },
                            });
                      });
                });  
                
                jQuery('#panelHandle').hover(function() {
                    jQuery('#sidePanel').stop(true, false).animate({
                        'left': '0px'
                    }, 400);
                }, function() {
//                    var jq = jQuery.noConflict();
                });

                jQuery('#sidePanel').hover(function() {
                    // Do nothing
                }, function() {

//                    var jq = jQuery.noConflict();
                    jQuery('#sidePanel').animate({
                        left: '-201px'
                    }, 400);

                });
                
                
                
            });      
                    
</script>


<div class="pacientesIndex customIndex">
	<h2>Pacientes</h2>
        
	<table cellpadding="0" cellspacing="0" class="tabla">
        <thead>
            <tr>
                <!--<th> id </th>-->
                <!--<th> DNI </th>-->
                <th> Nombre </th>
                <th> Apellido </th>
                <th> Sexo </th>
                <th> Fecha de Nacimiento</th>
                <!--<th> Direccion </th>-->
                <!--<th> Telefono </th>-->
                <!--<th> Celular </th>-->
                <th> Ultima consulta </th>
                <!--<th>created</th>-->
                <!--<th>modified</th>-->
                <th class="actions"></th>
            </tr>
        </thead>
        <tbody>
            
        <?php foreach ($pacientes as $paciente): 
                $ultimaConsulta = 'n/a';
                if ($paciente['Paciente']['fechaUltimaConsulta']) {
                    $ultimaConsulta = fecha($paciente['Paciente']['fechaUltimaConsulta']);
                }
        ?>
            <tr>                    
                    <!--<td><?php // echo h($paciente['Paciente']['id']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>-->
                    <td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
                    <td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
                    <td><?php echo h(getSexo($paciente['Paciente']['sexo'])); ?>&nbsp;</td>
                    <td><?php echo h((fecha($paciente['Paciente']['fechaNacimiento']))); ?>&nbsp;</td>
                    <!--<td><?php // echo h($paciente['Paciente']['direccion']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['telefonoFijo']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['telefonoMovil']); ?>&nbsp;</td>-->
                    <td><?php echo h($ultimaConsulta); ?>&nbsp;</td>
                    <!--<td><?php // echo h($paciente['Paciente']['created']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>-->
                    <td class="actions">
                            <?php 
                                
//                                echo $this->Html->link(__('View'), array('action' => 'ficha', $paciente['Paciente']['id'])); 
                                
//                                echo $this->Form->button('Ver', array(  
//                                                            'class' => 'viewPaciente btn btn-lg btn-success', 
//                                                            'type' => 'button',
//                                                            'value' => 'Ver',
//                                                            'id' => $paciente['Paciente']['id'],
////                                                            'disabled' => true,
//                                                        )
//                                            );
                                
                                echo $this->Html->image("ficha.png", array(
                                    'alt' => 'Ver ficha de paciente',
                                    'title' => 'Ver ficha de paciente',
                                    'class' => 'viewPaciente',
                                    'id' => $paciente['Paciente']['id'],
                                ));
                                
                                
                                
                            ?>                                                                                                                                                
                            <?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
                            <?php // echo $this->Html->link($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Confirma que desea eliminar los datos del paciente %s?', $paciente['Paciente']['nombre'] . " " . $paciente['Paciente']['apellido'])); ?>
                        
                            <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Confirma que desea eliminar los datos del paciente %s?', $paciente['Paciente']['nombre'] . " " . $paciente['Paciente']['apellido'])); ?>
                    </td>
            </tr>        
        <?php endforeach; ?>
            
        </tbody>
	</table>
</div>       
    
<div id="fichaPaciente"></div>    
    
<div id="sidePanel">
    <div id="panelContent" >
        <div class="acciones">
	<ul>
		<li><a href="/devel/sigepa/Pacientes/add">Registrar Paciente</a></li>
		<li><a href="/devel/sigepa/estudios_complementarios">Listado Estudios Complementarios</a> </li>
		<li><a href="/devel/sigepa/estudios_complementarios/add">Registrar Estudio Complementario</a> </li>
		<li><a href="/devel/sigepa/obras_sociales">Listado Obras Sociales</a> </li>
		<li><a href="/devel/sigepa/obras_sociales/add">Registrar Obra Social</a> </li>
		<li><a href="/devel/sigepa/patologias">Listado Patologias</a> </li>
		<li><a href="/devel/sigepa/patologias/add">Registrar Patologia</a> </li>
	</ul>
        </div>
    </div>
    <div id="panelHandle"><p>Acciones</p></div>
</div>        
                
<style>
    .customIndex {
        margin-left:2%;
    }   
    
    label {
        width: 100%;        
    }
    
    
    input, textarea {
        clear: both;
        font-size: 90%;
        font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
        width: 40%;
    }
    
    label input {
        height: 40px;
    }
    
    .ui-buttonset .ui-button {
        margin-left: 0;
        margin-right: -.1em;
    }
    
    
</style>		</div>
		<div id="footer">
                    <div id="nombreSistema"> Sistema de Gestion de Pacientes v1.0 rc </div>
                    <div id="powered">
			<a href="http://www.cakephp.org/" target="_blank"><img src="/devel/sigepa/img/cake.power.gif" alt="SI.GE.PA Sistema de gestion de pacientes" border="0" /></a>                    </div>
		</div>
	</div>
        
	<?php //  echo $this->element('sql_dump'); ?>
        
</body>
</html>
