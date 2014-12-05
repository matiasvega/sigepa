<!--cachetime:1417791612--><?php
			App::uses('ObrasSocialesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjg6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MTM6Ik9icmFzU29jaWFsZXMiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6NjoiaXNBamF4IjtiOjA7czo2OiJwYWdpbmciO2E6MTp7czoxMjoiT2JyYXNTb2NpYWxlIjthOjEwOntzOjQ6InBhZ2UiO2k6MTtzOjc6ImN1cnJlbnQiO2k6MjtzOjU6ImNvdW50IjtpOjI7czo4OiJwcmV2UGFnZSI7YjowO3M6ODoibmV4dFBhZ2UiO2I6MDtzOjk6InBhZ2VDb3VudCI7aToxO3M6NToib3JkZXIiO047czo1OiJsaW1pdCI7aToyMDtzOjc6Im9wdGlvbnMiO2E6MTp7czoxMDoiY29uZGl0aW9ucyI7YTowOnt9fXM6OToicGFyYW1UeXBlIjtzOjU6Im5hbWVkIjt9fXM6NjoibW9kZWxzIjthOjU6e3M6MTI6Ik9icmFzU29jaWFsZSI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMjoiT2JyYXNTb2NpYWxlIjt9czoxMDoiUGVybWlzc2lvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMDoiUGVybWlzc2lvbiI7fXM6MzoiQXJvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFybyI7fXM6MzoiQWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFjbyI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjIwOiJPYnJhc1NvY2lhbGVzL2luZGV4LyI7czo0OiJiYXNlIjtzOjEzOiIvZGV2ZWwvc2lnZXBhIjtzOjc6IndlYnJvb3QiO3M6MTQ6Ii9kZXZlbC9zaWdlcGEvIjtzOjQ6ImhlcmUiO3M6MzQ6Ii9kZXZlbC9zaWdlcGEvT2JyYXNTb2NpYWxlcy9pbmRleC8iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new ObrasSocialesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjEzOiJvYnJhc1NvY2lhbGVzIjthOjI6e2k6MDthOjE6e3M6MTI6Ik9icmFzU29jaWFsZSI7YTo1OntzOjI6ImlkIjtzOjE6IjEiO3M6Njoibm9tYnJlIjtzOjQ6Ik9TREUiO3M6ODoidGVsZWZvbm8iO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDktMTYgMjE6MDU6MTgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDktMTYgMjE6MDU6MTgiO319aToxO2E6MTp7czoxMjoiT2JyYXNTb2NpYWxlIjthOjU6e3M6MjoiaWQiO3M6MToiMiI7czo2OiJub21icmUiO3M6MTM6InN3aXNzIG1lZGljYWwiO3M6ODoidGVsZWZvbm8iO3M6MDoiIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMTEtMTUgMjE6MjI6NTgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMTEtMTUgMjE6MjI6NTgiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo1MjQ5OiI8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICAgICAgalF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsgCiAgICAgICAgICAgIAogICAgICAgICAgICAgICAgalF1ZXJ5KCcudGFibGEnKS5kYXRhVGFibGUoewogICAgICAgICAgICAgICAgICAgICAgImJQYWdpbmF0ZSI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAiYkxlbmd0aENoYW5nZSI6IGZhbHNlLAogICAgICAgICAgICAgICAgICAgICAgImJGaWx0ZXIiOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgImJTb3J0IjogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICJiSW5mbyI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAiYkF1dG9XaWR0aCI6IGZhbHNlLAogICAgICAgICAgICAgICAgICAgICAgImFhU29ydGluZyI6IFtbIDAsICJhc2MiIF1dLAogICAgICAgICAgICAgICAgICAgICAgInNQYWdpbmF0aW9uVHlwZSI6ICJmdWxsX251bWJlcnMiLAogICAgICAgICAgICAgICAgICAgICAgImJKUXVlcnlVSSI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAib0xhbmd1YWdlIjogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAic1VybCI6ICdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9kZV9FUy50eHQnIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgfSk7ICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgalF1ZXJ5KCcjcGFuZWxIYW5kbGUnKS5ob3ZlcihmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICBqUXVlcnkoJyNzaWRlUGFuZWwnKS5zdG9wKHRydWUsIGZhbHNlKS5hbmltYXRlKHsKICAgICAgICAgICAgICAgICAgICAgICAgJ2xlZnQnOiAnMHB4JwogICAgICAgICAgICAgICAgICAgIH0sIDQwMCk7CiAgICAgICAgICAgICAgICB9LCBmdW5jdGlvbigpIHsKLy8gICAgICAgICAgICAgICAgICAgIHZhciBqcSA9IGpRdWVyeS5ub0NvbmZsaWN0KCk7CiAgICAgICAgICAgICAgICB9KTsKCiAgICAgICAgICAgICAgICBqUXVlcnkoJyNzaWRlUGFuZWwnKS5ob3ZlcihmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAvLyBEbyBub3RoaW5nCiAgICAgICAgICAgICAgICB9LCBmdW5jdGlvbigpIHsKCi8vICAgICAgICAgICAgICAgICAgICB2YXIganEgPSBqUXVlcnkubm9Db25mbGljdCgpOwogICAgICAgICAgICAgICAgICAgIGpRdWVyeSgnI3NpZGVQYW5lbCcpLmFuaW1hdGUoewogICAgICAgICAgICAgICAgICAgICAgICBsZWZ0OiAnLTIwMXB4JwogICAgICAgICAgICAgICAgICAgIH0sIDQwMCk7CgogICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgCiAgICAgICAgICAgIH0pOyAgICAgIAogICAgICAgICAgICAgICAgICAgIAo8L3NjcmlwdD4KPGRpdiBjbGFzcz0ib2JyYXNTb2NpYWxlc0luZGV4IGN1c3RvbUluZGV4Ij4KCTxoMj5PYnJhcyBTb2NpYWxlczwvaDI+Cgk8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBjbGFzcz0idGFibGEiPgogICAgICAgICAgICA8dGhlYWQ+CiAgICAgICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD5JZDwvdGg+LS0+CiAgICAgICAgICAgICAgICAgICAgPHRoPk5vbWJyZTwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPlRlbGVmb25vPC90aD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRoPkZlY2hhIEFsdGE8L3RoPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGg+PC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGggY2xhc3M9ImFjdGlvbnMiPjwvdGg+CiAgICAgICAgICAgICAgICA8L3RyPgogICAgICAgICAgICA8L3RoZWFkPgogICAgICAgICAgICA8dGJvZHk+CiAgICAgICAgICAgICAgICA8IS0tbm9jYWNoZTowMDEtLT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPk9TREUmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iYWN0aW9ucyI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIvZGV2ZWwvc2lnZXBhL09icmFzU29jaWFsZXMvZWRpdC8xIj48aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvZWRpdC5wbmciIGFsdD0iRWRpdGFyIiB0aXRsZT0iRWRpdGFyIiAvPjwvYT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvcm0gYWN0aW9uPSIvZGV2ZWwvc2lnZXBhL09icmFzU29jaWFsZXMvZGVsZXRlLzEiIG5hbWU9InBvc3RfNTQ4MTBjZmNkNDg2ZTA5NDQyNzE4NyIgaWQ9InBvc3RfNTQ4MTBjZmNkNDg2ZTA5NDQyNzE4NyIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIG1ldGhvZD0icG9zdCI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiLz48L2Zvcm0+PGEgaHJlZj0iIyIgb25jbGljaz0iaWYgKGNvbmZpcm0oJ0NvbmZpcm1hIHF1ZSBkZXNlYSBlbGltaW5hciBsb3MgZGF0b3MgZGUgbGEgb2JyYSBzb2NpYWwgT1NERT8nKSkgeyBkb2N1bWVudC5wb3N0XzU0ODEwY2ZjZDQ4NmUwOTQ0MjcxODcuc3VibWl0KCk7IH0gZXZlbnQucmV0dXJuVmFsdWUgPSBmYWxzZTsgcmV0dXJuIGZhbHNlOyI+PGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2RlbGV0ZS5wbmciIGFsdD0iRWxpbWluYXIiIHRpdGxlPSJFbGltaW5hciIgLz48L2E+ICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICA8L3RkPgogICAgICAgICAgICAgICAgPC90cj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPnN3aXNzIG1lZGljYWwmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iYWN0aW9ucyI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIvZGV2ZWwvc2lnZXBhL09icmFzU29jaWFsZXMvZWRpdC8yIj48aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvZWRpdC5wbmciIGFsdD0iRWRpdGFyIiB0aXRsZT0iRWRpdGFyIiAvPjwvYT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvcm0gYWN0aW9uPSIvZGV2ZWwvc2lnZXBhL09icmFzU29jaWFsZXMvZGVsZXRlLzIiIG5hbWU9InBvc3RfNTQ4MTBjZmNkNGJiZDUwOTIwNzQ3OCIgaWQ9InBvc3RfNTQ4MTBjZmNkNGJiZDUwOTIwNzQ3OCIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIG1ldGhvZD0icG9zdCI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiLz48L2Zvcm0+PGEgaHJlZj0iIyIgb25jbGljaz0iaWYgKGNvbmZpcm0oJ0NvbmZpcm1hIHF1ZSBkZXNlYSBlbGltaW5hciBsb3MgZGF0b3MgZGUgbGEgb2JyYSBzb2NpYWwgc3dpc3MgbWVkaWNhbD8nKSkgeyBkb2N1bWVudC5wb3N0XzU0ODEwY2ZjZDRiYmQ1MDkyMDc0Nzguc3VibWl0KCk7IH0gZXZlbnQucmV0dXJuVmFsdWUgPSBmYWxzZTsgcmV0dXJuIGZhbHNlOyI+PGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2RlbGV0ZS5wbmciIGFsdD0iRWxpbWluYXIiIHRpdGxlPSJFbGltaW5hciIgLz48L2E+ICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICA8L3RkPgogICAgICAgICAgICAgICAgPC90cj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICA8L3Rib2R5PgoJPC90YWJsZT4KCjwvZGl2PgoKPGRpdiBpZD0ic2lkZVBhbmVsIj4KICAgIDxkaXYgaWQ9InBhbmVsQ29udGVudCI+CiAgICAgICAgPGRpdiBjbGFzcz0iYWNjaW9uZXMiPgoJPHVsPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL09icmFzU29jaWFsZXMvYWRkIj5BbHRhIGRlIE9icmEgU29jaWFsPC9hPjwvbGk+CgkJPGxpPjxhIGhyZWY9Ii9kZXZlbC9zaWdlcGEvcGFjaWVudGVzIj5MaXN0YWRvIFBhY2llbnRlczwvYT4gPC9saT4KCQk8bGk+PGEgaHJlZj0iL2RldmVsL3NpZ2VwYS9wYWNpZW50ZXMvYWRkIj5SZWdpc3RyYXIgUGFjaWVudGU8L2E+IDwvbGk+CgkJPGxpPjxhIGhyZWY9Ii9kZXZlbC9zaWdlcGEvcHJvZmVzaW9uYWxlcyI+TGlzdGFkbyBQcm9mZXNpb25hbGVzPC9hPiA8L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL3Byb2Zlc2lvbmFsZXMvYWRkIj5SZWdpc3RyYXIgUHJvZmVzaW9uYWw8L2E+IDwvbGk+Cgk8L3VsPgogICAgICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGlkPSJwYW5lbEhhbmRsZSI+PHA+QWNjaW9uZXM8L3A+PC9kaXY+CjwvZGl2PgoKCjxzdHlsZT4KICAgIC5jdXN0b21JbmRleCB7CiAgICAgICAgbWFyZ2luLWxlZnQ6MiU7CiAgICB9ICAgCiAgICAKICAgIGxhYmVsIHsKICAgICAgICB3aWR0aDogMTAwJTsgICAgICAgIAogICAgfQogICAgICAgIAogICAgaW5wdXQsIHRleHRhcmVhIHsKICAgICAgICBjbGVhcjogYm90aDsKICAgICAgICBmb250LXNpemU6IDkwJTsKICAgICAgICBmb250LWZhbWlseTogImZydXRpZ2VyIGxpbm90eXBlIiwgImx1Y2lkYSBncmFuZGUiLCAidmVyZGFuYSIsIHNhbnMtc2VyaWY7CiAgICAgICAgd2lkdGg6IDQwJTsKICAgIH0KICAgIAogICAgbGFiZWwgaW5wdXQgewogICAgICAgIGhlaWdodDogNDBweDsKICAgIH0KICAgICAgICAKICAgICAgICAgICAgCjwvc3R5bGU+ICAgICI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czoxMzoiT2JyYXNTb2NpYWxlcyI7fQ=='));
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
		ObrasSociales	</title>
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
<div class="obrasSocialesIndex customIndex">
	<h2>Obras Sociales</h2>
	<table cellpadding="0" cellspacing="0" class="tabla">
            <thead>
                <tr>
                    <!--<th>Id</th>-->
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <!--<th>Fecha Alta</th>-->
                    <!--<th></th>-->
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($obrasSociales as $obrasSociale): ?>
                <tr>
                        <!--<td><?php // echo h($obrasSociale['ObrasSociale']['id']); ?>&nbsp;</td>-->
                        <td><?php echo h($obrasSociale['ObrasSociale']['nombre']); ?>&nbsp;</td>
                        <td><?php echo h($obrasSociale['ObrasSociale']['telefono']); ?>&nbsp;</td>
                        <!--<td><?php // echo h($obrasSociale['ObrasSociale']['created']); ?>&nbsp;</td>-->
                        <!--<td><?php // echo h($obrasSociale['ObrasSociale']['modified']); ?>&nbsp;</td>-->
                        <td class="actions">
                                <?php // echo $this->Html->link(__('View'), array('action' => 'view', $obrasSociale['ObrasSociale']['id'])); ?>
                                <?php echo $this->Html->link($this->Html->image('edit.png', array('alt' => 'Editar', 'title' => 'Editar')), array('action' => 'edit', $obrasSociale['ObrasSociale']['id']), array('escape' => false)); ?>
                            
                                <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $obrasSociale['ObrasSociale']['id']), array('escape' => false), __('Confirma que desea eliminar los datos de la obra social %s?', $obrasSociale['ObrasSociale']['nombre'])); ?>
                            
                        </td>
                </tr>
                <?php endforeach; ?>
                
        </tbody>
	</table>

</div>

<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
	<ul>
		<li><a href="/devel/sigepa/ObrasSociales/add">Alta de Obra Social</a></li>
		<li><a href="/devel/sigepa/pacientes">Listado Pacientes</a> </li>
		<li><a href="/devel/sigepa/pacientes/add">Registrar Paciente</a> </li>
		<li><a href="/devel/sigepa/profesionales">Listado Profesionales</a> </li>
		<li><a href="/devel/sigepa/profesionales/add">Registrar Profesional</a> </li>
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
        
            
</style>    		</div>
		<div id="footer">
                    <div id="nombreSistema"> Sistema de Gestion de Pacientes v1.0 rc </div>
                    <div id="powered">
			<a href="http://www.cakephp.org/" target="_blank"><img src="/devel/sigepa/img/cake.power.gif" alt="SI.GE.PA Sistema de gestion de pacientes" border="0" /></a>                    </div>
		</div>
	</div>
        
	<?php //  echo $this->element('sql_dump'); ?>
        
</body>
</html>
