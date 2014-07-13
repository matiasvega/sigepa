<!--cachetime:1405251008--><?php
			App::uses('PacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6OToiUGFjaWVudGVzIjtzOjY6ImFjdGlvbiI7czo1OiJpbmRleCI7czo1OiJuYW1lZCI7YTowOnt9czo0OiJwYXNzIjthOjA6e31zOjY6ImlzQWpheCI7YjowO3M6NjoibW9kZWxzIjthOjU6e3M6ODoiUGFjaWVudGUiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiUGFjaWVudGUiO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MTY6IlBhY2llbnRlcy9pbmRleC8iO3M6NDoiYmFzZSI7czoxMzoiL2RldmVsL3NpZ2VwYSI7czo3OiJ3ZWJyb290IjtzOjE0OiIvZGV2ZWwvc2lnZXBhLyI7czo0OiJoZXJlIjtzOjMwOiIvZGV2ZWwvc2lnZXBhL1BhY2llbnRlcy9pbmRleC8iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new PacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjk6InBhY2llbnRlcyI7YTozOntpOjA7YToxOntzOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE1IjtzOjM6ImRuaSI7czo4OiIzMTIyMDM1NiI7czo2OiJub21icmUiO3M6NjoiTUFUSUFTIjtzOjg6ImFwZWxsaWRvIjtzOjQ6IlZFR0EiO3M6NDoic2V4byI7czoxOiJNIjtzOjE1OiJmZWNoYU5hY2ltaWVudG8iO3M6MTA6IjE5ODQtMTEtMTAiO3M6OToiZGlyZWNjaW9uIjtzOjE3OiJQYXNhamUgUGF5cm8gMTE3NCI7czoxMjoidGVsZWZvbm9GaWpvIjtzOjk6IjE1NDg2Mzk0NSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO3M6MTA6IjIwMTQtMDctMTIiO3M6NzoiYXRpb3BpYSI7TjtzOjc6ImhhYml0b3MiO047czoxNToibWVkaWNhY2lvbl9iYXNlIjtOO3M6MTA6ImZhbWlsaWFyZXMiO047czo1OiJvdHJvcyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTcgMjI6MDI6MzYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDctMTIgMjE6NTQ6NDUiO319aToxO2E6MTp7czo4OiJQYWNpZW50ZSI7YToxNzp7czoyOiJpZCI7czoyOiIxNiI7czozOiJkbmkiO3M6MToiMSI7czo2OiJub21icmUiO3M6NToiYXJpZWwiO3M6ODoiYXBlbGxpZG8iO3M6NToidGFwaWEiO3M6NDoic2V4byI7czoxOiJNIjtzOjE1OiJmZWNoYU5hY2ltaWVudG8iO3M6MTA6IjIwMTQtMDUtMTIiO3M6OToiZGlyZWNjaW9uIjtzOjA6IiI7czoxMjoidGVsZWZvbm9GaWpvIjtzOjE6IjEiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtOO3M6NzoiYXRpb3BpYSI7czoxMToicnJycnJycnJycnIiO3M6NzoiaGFiaXRvcyI7czowOiIiO3M6MTU6Im1lZGljYWNpb25fYmFzZSI7czowOiIiO3M6MTA6ImZhbWlsaWFyZXMiO3M6MDoiIjtzOjU6Im90cm9zIjtzOjA6IiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE0LTA1LTE5IDIwOjQzOjI5IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE0LTA3LTEyIDIxOjM3OjM0Ijt9fWk6MjthOjE6e3M6ODoiUGFjaWVudGUiO2E6MTc6e3M6MjoiaWQiO3M6MjoiMTciO3M6MzoiZG5pIjtzOjI6IjMwIjtzOjY6Im5vbWJyZSI7czo1OiJjYXJsYSI7czo4OiJhcGVsbGlkbyI7czo4OiJjYXN0YcOxbyI7czo0OiJzZXhvIjtzOjE6IkYiO3M6MTU6ImZlY2hhTmFjaW1pZW50byI7czoxMDoiMjAxNC0wNS0yMSI7czo5OiJkaXJlY2Npb24iO3M6MDoiIjtzOjEyOiJ0ZWxlZm9ub0Zpam8iO3M6MToiMiI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtOO3M6NzoiaGFiaXRvcyI7TjtzOjE1OiJtZWRpY2FjaW9uX2Jhc2UiO047czoxMDoiZmFtaWxpYXJlcyI7TjtzOjU6Im90cm9zIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0xOSAyMDo0NTowNSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNy0xMiAyMTo1MDoxNiI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjk1NjM6Igo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CiAgICAgICAgalF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsgCiAgICAgICAgICAgIAogICAgICAgICAgICAgICAgalF1ZXJ5KCcudGFibGEnKS5kYXRhVGFibGUoewogICAgICAgICAgICAgICAgICAgICAgImJQYWdpbmF0ZSI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAiYkxlbmd0aENoYW5nZSI6IGZhbHNlLAogICAgICAgICAgICAgICAgICAgICAgImJGaWx0ZXIiOiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgImJTb3J0IjogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICJiSW5mbyI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAiYkF1dG9XaWR0aCI6IGZhbHNlLAogICAgICAgICAgICAgICAgICAgICAgImFhU29ydGluZyI6IFtbIDAsICJhc2MiIF1dLAogICAgICAgICAgICAgICAgICAgICAgInNQYWdpbmF0aW9uVHlwZSI6ICJmdWxsX251bWJlcnMiLAogICAgICAgICAgICAgICAgICAgICAgImJKUXVlcnlVSSI6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAib0xhbmd1YWdlIjogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAic1VybCI6ICdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9kZV9FUy50eHQnIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgfSk7ICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICBqUXVlcnkoJy52aWV3UGFjaWVudGUnKS5iaW5kKCdjbGljaycsIGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgIGpRdWVyeS5hamF4KHsKICAgICAgICAgICAgICAgICAgICAgIHR5cGU6ICdQT1NUJywKICAgICAgICAgICAgICAgICAgICAgIGFzeW5jOnRydWUsCiAgICAgICAgICAgICAgICAgICAgICB1cmw6ICdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9wYWNpZW50ZXMvZmljaGEnICsgJy8nICsgalF1ZXJ5KHRoaXMpLnByb3AoJ2lkJykgKyAnLycsCiAgICAgICAgICAgICAgICAgICAgICBjYWNoZTp0cnVlLAogICAgICAgICAgICAgICAgICAgIH0pCiAgICAgICAgICAgICAgICAgICAgICAuZG9uZShmdW5jdGlvbihkYXRhKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICBqUXVlcnkoIiNmaWNoYVBhY2llbnRlIikuaHRtbChkYXRhKTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCIjZmljaGFQYWNpZW50ZSIpLmRpYWxvZyh7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kYWw6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2lkdGg6IDk3MCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IDYwMCwKLy8gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhlaWdodDogODAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRyYWdnYWJsZTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXNpemFibGU6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGl0bGU6ICdGaWNoYSBkZSBwYWNpZW50ZScsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2hvdzogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJibGluZCIsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGR1cmF0aW9uOiAxMDAwLAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0sCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGlkZTogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJmYWRlIiwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDUwMCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LAogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgIH0pOyAgCiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIGpRdWVyeSgnI3BhbmVsSGFuZGxlJykuaG92ZXIoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgalF1ZXJ5KCcjc2lkZVBhbmVsJykuc3RvcCh0cnVlLCBmYWxzZSkuYW5pbWF0ZSh7CiAgICAgICAgICAgICAgICAgICAgICAgICdsZWZ0JzogJzBweCcKICAgICAgICAgICAgICAgICAgICB9LCA0MDApOwogICAgICAgICAgICAgICAgfSwgZnVuY3Rpb24oKSB7Ci8vICAgICAgICAgICAgICAgICAgICB2YXIganEgPSBqUXVlcnkubm9Db25mbGljdCgpOwogICAgICAgICAgICAgICAgfSk7CgogICAgICAgICAgICAgICAgalF1ZXJ5KCcjc2lkZVBhbmVsJykuaG92ZXIoZnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgLy8gRG8gbm90aGluZwogICAgICAgICAgICAgICAgfSwgZnVuY3Rpb24oKSB7CgovLyAgICAgICAgICAgICAgICAgICAgdmFyIGpxID0galF1ZXJ5Lm5vQ29uZmxpY3QoKTsKICAgICAgICAgICAgICAgICAgICBqUXVlcnkoJyNzaWRlUGFuZWwnKS5hbmltYXRlKHsKICAgICAgICAgICAgICAgICAgICAgICAgbGVmdDogJy0yMDFweCcKICAgICAgICAgICAgICAgICAgICB9LCA0MDApOwoKICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIAogICAgICAgICAgICB9KTsgICAgICAKICAgICAgICAgICAgICAgICAgICAKPC9zY3JpcHQ+CgoKPGRpdiBjbGFzcz0icGFjaWVudGVzSW5kZXggY3VzdG9tSW5kZXgiPgoJPGgyPlBhY2llbnRlczwvaDI+CiAgICAgICAgCgk8dGFibGUgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBjbGFzcz0idGFibGEiPgogICAgICAgIDx0aGVhZD4KICAgICAgICAgICAgPHRyPgogICAgICAgICAgICAgICAgPCEtLTx0aD4gaWQgPC90aD4tLT4KICAgICAgICAgICAgICAgIDx0aD4gRE5JIDwvdGg+CiAgICAgICAgICAgICAgICA8dGg+IE5vbWJyZSA8L3RoPgogICAgICAgICAgICAgICAgPHRoPiBBcGVsbGlkbyA8L3RoPgogICAgICAgICAgICAgICAgPHRoPiBTZXhvIDwvdGg+CiAgICAgICAgICAgICAgICA8dGg+IEZlY2hhIGRlIE5hY2ltaWVudG88L3RoPgogICAgICAgICAgICAgICAgPCEtLTx0aD4gRGlyZWNjaW9uIDwvdGg+LS0+CiAgICAgICAgICAgICAgICA8IS0tPHRoPiBUZWxlZm9ubyA8L3RoPi0tPgogICAgICAgICAgICAgICAgPCEtLTx0aD4gQ2VsdWxhciA8L3RoPi0tPgogICAgICAgICAgICAgICAgPHRoPiBVbHRpbWEgY29uc3VsdGEgPC90aD4KICAgICAgICAgICAgICAgIDwhLS08dGg+Y3JlYXRlZDwvdGg+LS0+CiAgICAgICAgICAgICAgICA8IS0tPHRoPm1vZGlmaWVkPC90aD4tLT4KICAgICAgICAgICAgICAgIDx0aCBjbGFzcz0iYWN0aW9ucyI+PC90aD4KICAgICAgICAgICAgPC90cj4KICAgICAgICA8L3RoZWFkPgogICAgICAgIDx0Ym9keT4KICAgICAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+CiAgICAgICAgICAgICAgICAgICAgPHRyPiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDx0ZD4zMTIyMDM1NiZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPk1BVElBUyZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPlZFR0EmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDx0ZD5NYXNjdWxpbm8mbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDx0ZD4xMC0xMS0xOTg0Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQ+MTItMDctMjAxNCZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9ImFjdGlvbnMiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2ZpY2hhLnBuZyIgYWx0PSJWZXIgZmljaGEgZGUgcGFjaWVudGUiIHRpdGxlPSJWZXIgZmljaGEgZGUgcGFjaWVudGUiIGNsYXNzPSJ2aWV3UGFjaWVudGUiIGlkPSIxNSIgLz4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxmb3JtIGFjdGlvbj0iL2RldmVsL3NpZ2VwYS9QYWNpZW50ZXMvZGVsZXRlLzE1IiBuYW1lPSJwb3N0XzUzYzFiMjQwZTIyMWI5OTMzMjk4MTQiIGlkPSJwb3N0XzUzYzFiMjQwZTIyMWI5OTMzMjk4MTQiIHN0eWxlPSJkaXNwbGF5Om5vbmU7IiBtZXRob2Q9InBvc3QiPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Il9tZXRob2QiIHZhbHVlPSJQT1NUIi8+PC9mb3JtPjxhIGhyZWY9IiMiIG9uY2xpY2s9ImlmIChjb25maXJtKCdDb25maXJtYSBxdWUgZGVzZWEgZWxpbWluYXIgbG9zIGRhdG9zIGRlbCBwYWNpZW50ZSBNQVRJQVMgVkVHQT8nKSkgeyBkb2N1bWVudC5wb3N0XzUzYzFiMjQwZTIyMWI5OTMzMjk4MTQuc3VibWl0KCk7IH0gZXZlbnQucmV0dXJuVmFsdWUgPSBmYWxzZTsgcmV0dXJuIGZhbHNlOyI+PGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2RlbGV0ZS5wbmciIGFsdD0iRWxpbWluYXIiIHRpdGxlPSJFbGltaW5hciIgLz48L2E+ICAgICAgICAgICAgICAgICAgICA8L3RkPgogICAgICAgICAgICA8L3RyPiAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPHRyPiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDx0ZD4xJm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8dGQ+YXJpZWwmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDx0ZD50YXBpYSZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPk1hc2N1bGlubyZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPjEyLTA1LTIwMTQmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDx0ZD5uL2EmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSJhY3Rpb25zIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPSIvZGV2ZWwvc2lnZXBhL2ltZy9maWNoYS5wbmciIGFsdD0iVmVyIGZpY2hhIGRlIHBhY2llbnRlIiB0aXRsZT0iVmVyIGZpY2hhIGRlIHBhY2llbnRlIiBjbGFzcz0idmlld1BhY2llbnRlIiBpZD0iMTYiIC8+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zm9ybSBhY3Rpb249Ii9kZXZlbC9zaWdlcGEvUGFjaWVudGVzL2RlbGV0ZS8xNiIgbmFtZT0icG9zdF81M2MxYjI0MGUyNGQ0ODI5NDY5MDMzIiBpZD0icG9zdF81M2MxYjI0MGUyNGQ0ODI5NDY5MDMzIiBzdHlsZT0iZGlzcGxheTpub25lOyIgbWV0aG9kPSJwb3N0Ij48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJfbWV0aG9kIiB2YWx1ZT0iUE9TVCIvPjwvZm9ybT48YSBocmVmPSIjIiBvbmNsaWNrPSJpZiAoY29uZmlybSgnQ29uZmlybWEgcXVlIGRlc2VhIGVsaW1pbmFyIGxvcyBkYXRvcyBkZWwgcGFjaWVudGUgYXJpZWwgdGFwaWE/JykpIHsgZG9jdW1lbnQucG9zdF81M2MxYjI0MGUyNGQ0ODI5NDY5MDMzLnN1Ym1pdCgpOyB9IGV2ZW50LnJldHVyblZhbHVlID0gZmFsc2U7IHJldHVybiBmYWxzZTsiPjxpbWcgc3JjPSIvZGV2ZWwvc2lnZXBhL2ltZy9kZWxldGUucG5nIiBhbHQ9IkVsaW1pbmFyIiB0aXRsZT0iRWxpbWluYXIiIC8+PC9hPiAgICAgICAgICAgICAgICAgICAgPC90ZD4KICAgICAgICAgICAgPC90cj4gICAgICAgIAogICAgICAgICAgICAgICAgICAgIDx0cj4gICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQ+MzAmbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDx0ZD5jYXJsYSZuYnNwOzwvdGQ+CiAgICAgICAgICAgICAgICAgICAgPHRkPmNhc3Rhw7FvJm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8dGQ+RmVtZW5pbm8mbmJzcDs8L3RkPgogICAgICAgICAgICAgICAgICAgIDx0ZD4yMS0wNS0yMDE0Jm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGQ+bi9hJm5ic3A7PC90ZD4KICAgICAgICAgICAgICAgICAgICA8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iYWN0aW9ucyI+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvZmljaGEucG5nIiBhbHQ9IlZlciBmaWNoYSBkZSBwYWNpZW50ZSIgdGl0bGU9IlZlciBmaWNoYSBkZSBwYWNpZW50ZSIgY2xhc3M9InZpZXdQYWNpZW50ZSIgaWQ9IjE3IiAvPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvcm0gYWN0aW9uPSIvZGV2ZWwvc2lnZXBhL1BhY2llbnRlcy9kZWxldGUvMTciIG5hbWU9InBvc3RfNTNjMWIyNDBlMjczZjM0NjE1NjE2MyIgaWQ9InBvc3RfNTNjMWIyNDBlMjczZjM0NjE1NjE2MyIgc3R5bGU9ImRpc3BsYXk6bm9uZTsiIG1ldGhvZD0icG9zdCI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiLz48L2Zvcm0+PGEgaHJlZj0iIyIgb25jbGljaz0iaWYgKGNvbmZpcm0oJ0NvbmZpcm1hIHF1ZSBkZXNlYSBlbGltaW5hciBsb3MgZGF0b3MgZGVsIHBhY2llbnRlIGNhcmxhIGNhc3Rhw7FvPycpKSB7IGRvY3VtZW50LnBvc3RfNTNjMWIyNDBlMjczZjM0NjE1NjE2My5zdWJtaXQoKTsgfSBldmVudC5yZXR1cm5WYWx1ZSA9IGZhbHNlOyByZXR1cm4gZmFsc2U7Ij48aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvZGVsZXRlLnBuZyIgYWx0PSJFbGltaW5hciIgdGl0bGU9IkVsaW1pbmFyIiAvPjwvYT4gICAgICAgICAgICAgICAgICAgIDwvdGQ+CiAgICAgICAgICAgIDwvdHI+ICAgICAgICAKICAgICAgICAgICAgICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICA8L3Rib2R5PgoJPC90YWJsZT4KPC9kaXY+ICAgICAgIAogICAgCjxkaXYgaWQ9ImZpY2hhUGFjaWVudGUiPjwvZGl2PiAgICAKICAgIAo8ZGl2IGlkPSJzaWRlUGFuZWwiPgogICAgPGRpdiBpZD0icGFuZWxDb250ZW50IiA+CiAgICAgICAgPGRpdiBjbGFzcz0iYWNjaW9uZXMiPgoJPHVsPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL1BhY2llbnRlcy9hZGQiPlJlZ2lzdHJhciBQYWNpZW50ZTwvYT48L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL2VzdHVkaW9zX2NvbXBsZW1lbnRhcmlvcyI+TGlzdGFkbyBFc3R1ZGlvcyBDb21wbGVtZW50YXJpb3M8L2E+IDwvbGk+CgkJPGxpPjxhIGhyZWY9Ii9kZXZlbC9zaWdlcGEvZXN0dWRpb3NfY29tcGxlbWVudGFyaW9zL2FkZCI+UmVnaXN0cmFyIEVzdHVkaW8gQ29tcGxlbWVudGFyaW88L2E+IDwvbGk+CgkJPGxpPjxhIGhyZWY9Ii9kZXZlbC9zaWdlcGEvb2JyYXNfc29jaWFsZXMiPkxpc3RhZG8gT2JyYXMgU29jaWFsZXM8L2E+IDwvbGk+CgkJPGxpPjxhIGhyZWY9Ii9kZXZlbC9zaWdlcGEvb2JyYXNfc29jaWFsZXMvYWRkIj5SZWdpc3RyYXIgT2JyYSBTb2NpYWw8L2E+IDwvbGk+CgkJPGxpPjxhIGhyZWY9Ii9kZXZlbC9zaWdlcGEvcGF0b2xvZ2lhcyI+TGlzdGFkbyBQYXRvbG9naWFzPC9hPiA8L2xpPgoJCTxsaT48YSBocmVmPSIvZGV2ZWwvc2lnZXBhL3BhdG9sb2dpYXMvYWRkIj5SZWdpc3RyYXIgUGF0b2xvZ2lhPC9hPiA8L2xpPgoJPC91bD4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBpZD0icGFuZWxIYW5kbGUiPjxwPkFjY2lvbmVzPC9wPjwvZGl2Pgo8L2Rpdj4gICAgICAgIAogICAgICAgICAgICAgICAgCjxzdHlsZT4KICAgIC5jdXN0b21JbmRleCB7CiAgICAgICAgbWFyZ2luLWxlZnQ6MiU7CiAgICB9ICAgCiAgICAKICAgIGxhYmVsIHsKICAgICAgICB3aWR0aDogMTAwJTsgICAgICAgIAogICAgfQogICAgCiAgICAKICAgIGlucHV0LCB0ZXh0YXJlYSB7CiAgICAgICAgY2xlYXI6IGJvdGg7CiAgICAgICAgZm9udC1zaXplOiA5MCU7CiAgICAgICAgZm9udC1mYW1pbHk6ICJmcnV0aWdlciBsaW5vdHlwZSIsICJsdWNpZGEgZ3JhbmRlIiwgInZlcmRhbmEiLCBzYW5zLXNlcmlmOwogICAgICAgIHdpZHRoOiA0MCU7CiAgICB9CiAgICAKICAgIGxhYmVsIGlucHV0IHsKICAgICAgICBoZWlnaHQ6IDQwcHg7CiAgICB9CiAgICAKICAgIC51aS1idXR0b25zZXQgLnVpLWJ1dHRvbiB7CiAgICAgICAgbWFyZ2luLWxlZnQ6IDA7CiAgICAgICAgbWFyZ2luLXJpZ2h0OiAtLjFlbTsKICAgIH0KICAgIAogICAgCjwvc3R5bGU+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjk6IlBhY2llbnRlcyI7fQ=='));
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
 </ul>
</li>
<li>
<a href="#">Seguridad</a>
 <ul>
<li> <a href="/devel/sigepa/Users/index/">Usuarios</a> </li>
<li> <a href="/devel/sigepa/Groups/index/">Grupos</a> </li>
<li> <a href="/devel/sigepa/Users/options/1">Preferencias de Usuario</a> </li>
 </ul>
</li>    </ul> 
                        
                    </div>                        
                    <div id="toolbar"> 
                        <img src="/devel/sigepa/img/runBackup.png" title="Backup" class="toolBarOption" alt="Backup" /><a href="/devel/sigepa/users/options/1"><img src="/devel/sigepa/img/configuration.png" title="Preferencias" class="toolBarOption" alt="Preferencias" /></a><a href="/devel/sigepa/users/logout"><img src="/devel/sigepa/img/logout.png" title="Salir" class="toolBarOption" alt="Salir" /></a>                      </div>  
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
                <th> DNI </th>
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
                    <td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
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
