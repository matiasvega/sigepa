<!--cachetime:1401202638--><?php
			App::uses('ObrasSocialesPacientesController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6MjQ6Im9icmFzX3NvY2lhbGVzX3BhY2llbnRlcyI7czo2OiJhY3Rpb24iO3M6MTM6ImluZGV4UGFjaWVudGUiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czoyOiIxNSI7fXM6NjoiaXNBamF4IjtiOjE7czo2OiJtb2RlbHMiO2E6Nzp7czoyMToiT2JyYXNTb2NpYWxlc1BhY2llbnRlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjIxOiJPYnJhc1NvY2lhbGVzUGFjaWVudGUiO31zOjEwOiJQZXJtaXNzaW9uIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEwOiJQZXJtaXNzaW9uIjt9czozOiJBcm8iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQXJvIjt9czozOiJBY28iO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6MzoiQWNvIjt9czo0OiJVc2VyIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlVzZXIiO31zOjg6IlBhY2llbnRlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IlBhY2llbnRlIjt9czoxMjoiT2JyYXNTb2NpYWxlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjEyOiJPYnJhc1NvY2lhbGUiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6NDE6Im9icmFzX3NvY2lhbGVzX3BhY2llbnRlcy9pbmRleFBhY2llbnRlLzE1IjtzOjQ6ImJhc2UiO3M6MTM6Ii9kZXZlbC9zaWdlcGEiO3M6Nzoid2Vicm9vdCI7czoxNDoiL2RldmVsL3NpZ2VwYS8iO3M6NDoiaGVyZSI7czo1NToiL2RldmVsL3NpZ2VwYS9vYnJhc19zb2NpYWxlc19wYWNpZW50ZXMvaW5kZXhQYWNpZW50ZS8xNSI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new ObrasSocialesPacientesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjI6IjE1IjtzOjIyOiJvYnJhc1NvY2lhbGVzUGFjaWVudGVzIjthOjI6e2k6MDthOjM6e3M6MjE6Ik9icmFzU29jaWFsZXNQYWNpZW50ZSI7YTo2OntzOjI6ImlkIjtzOjE6IjQiO3M6MTI6InBhY2llbnRlc19pZCI7czoyOiIxNSI7czoxNzoib2JyYXNfc29jaWFsZXNfaWQiO3M6MToiMiI7czoxMjoibnJvX2FmaWxpYWRvIjtOO3M6NzoiY3JlYXRlZCI7TjtzOjg6Im1vZGlmaWVkIjtOO31zOjg6IlBhY2llbnRlIjthOjE3OntzOjI6ImlkIjtzOjI6IjE1IjtzOjM6ImRuaSI7czo4OiIzMTIyMDM1NiI7czo2OiJub21icmUiO3M6NjoiTUFUSUFTIjtzOjg6ImFwZWxsaWRvIjtzOjQ6IlZFR0EiO3M6NDoic2V4byI7czoxOiJNIjtzOjE1OiJmZWNoYU5hY2ltaWVudG8iO3M6MTA6IjE5ODQtMTEtMTAiO3M6OToiZGlyZWNjaW9uIjtzOjE3OiJQYXNhamUgUGF5cm8gMTE3NCI7czoxMjoidGVsZWZvbm9GaWpvIjtzOjk6IjE1NDg2Mzk0NSI7czoxMzoidGVsZWZvbm9Nb3ZpbCI7czowOiIiO3M6MTk6ImZlY2hhVWx0aW1hQ29uc3VsdGEiO047czo3OiJhdGlvcGlhIjtOO3M6NzoiaGFiaXRvcyI7TjtzOjE1OiJtZWRpY2FjaW9uX2Jhc2UiO047czoxMDoiZmFtaWxpYXJlcyI7TjtzOjU6Im90cm9zIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0xNyAyMjowMjozNiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNS0yNyAwMToxNDo0MyI7fXM6MTI6Ik9icmFzU29jaWFsZSI7YTo1OntzOjI6ImlkIjtzOjE6IjIiO3M6Njoibm9tYnJlIjtzOjY6Ik9TRUNBQyI7czo4OiJ0ZWxlZm9ubyI7czowOiIiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wMi0yNiAxNjowMjowNCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wMi0yNiAxNjowMjowNCI7fX1pOjE7YTozOntzOjIxOiJPYnJhc1NvY2lhbGVzUGFjaWVudGUiO2E6Njp7czoyOiJpZCI7czoxOiI1IjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTUiO3M6MTc6Im9icmFzX3NvY2lhbGVzX2lkIjtzOjE6IjQiO3M6MTI6Im5yb19hZmlsaWFkbyI7TjtzOjc6ImNyZWF0ZWQiO047czo4OiJtb2RpZmllZCI7Tjt9czo4OiJQYWNpZW50ZSI7YToxNzp7czoyOiJpZCI7czoyOiIxNSI7czozOiJkbmkiO3M6ODoiMzEyMjAzNTYiO3M6Njoibm9tYnJlIjtzOjY6Ik1BVElBUyI7czo4OiJhcGVsbGlkbyI7czo0OiJWRUdBIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTEwIjtzOjk6ImRpcmVjY2lvbiI7czoxNzoiUGFzYWplIFBheXJvIDExNzQiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ4NjM5NDUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtOO3M6NzoiYXRpb3BpYSI7TjtzOjc6ImhhYml0b3MiO047czoxNToibWVkaWNhY2lvbl9iYXNlIjtOO3M6MTA6ImZhbWlsaWFyZXMiO047czo1OiJvdHJvcyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTcgMjI6MDI6MzYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjcgMDE6MTQ6NDMiO31zOjEyOiJPYnJhc1NvY2lhbGUiO2E6NTp7czoyOiJpZCI7czoxOiI0IjtzOjY6Im5vbWJyZSI7czo1OiJTRVJPUyI7czo4OiJ0ZWxlZm9ubyI7czowOiIiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNC0wNS0yNiAyMDozNDozMSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNC0wNS0yNiAyMDozNDozMSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjM3ODE6IjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsKICAgICAgICAkKCcjb2JyYXNTb2NpYWxlc1BhY2llbnRlJykuZGF0YVRhYmxlKHsgICAgICAgICAgICAKICAgICAgICAgICAgImRlZmVyUmVuZGVyIjogdHJ1ZSwKICAgICAgICAgICAgImJQYWdpbmF0ZSI6IHRydWUsCiAgICAgICAgICAgICJiTGVuZ3RoQ2hhbmdlIjogZmFsc2UsCiAgICAgICAgICAgICJiRmlsdGVyIjogdHJ1ZSwKICAgICAgICAgICAgImJTb3J0IjogdHJ1ZSwKICAgICAgICAgICAgImJJbmZvIjogdHJ1ZSwKICAgICAgICAgICAgImJBdXRvV2lkdGgiOiBmYWxzZSwKICAgICAgICAgICAgImFhU29ydGluZyI6IFtbIDAsICJhc2MiIF1dLAogICAgICAgICAgICAic1BhZ2luYXRpb25UeXBlIjogImZ1bGxfbnVtYmVycyIsCiAgICAgICAgICAgICJiSlF1ZXJ5VUkiOiB0cnVlLAogICAgICAgICAgICAicHJvY2Vzc2luZyI6IHRydWUsCiAgICAgICAgICAgICJvcmRlckNsYXNzZXMiOiBmYWxzZSwKICAgICAgICAgICAgIm9MYW5ndWFnZSI6IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgInNVcmwiOiAnaHR0cDovL2xvY2FsaG9zdC9kZXZlbC9zaWdlcGEvZGVfRVMudHh0JyAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgIH0pOwogICAgICAgICAgICAgICAgCiAgICAgICAgJCgnLmNhcmdhck5yb0FmaWxpYWRvJykuYmluZCgnY2xpY2snLCBmdW5jdGlvbigpIHsKICAgICAgICAgICAgJCgnI2VkaXRPYnJhU29jaWFsUGFjaWVudGUnKS5sb2FkKCdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9vYnJhc19zb2NpYWxlc19wYWNpZW50ZXMvZWRpdCcgKyAnLycgKyAgJCh0aGlzKS5wcm9wKCdpZCcpICsgJy8nICsgMTUpOwogICAgICAgICAgICAkKCcjZWRpdE9icmFTb2NpYWxQYWNpZW50ZScpLmRpYWxvZyh7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2RhbDogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpZHRoOiA3OTAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IDI0MCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRyYWdnYWJsZTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlc2l6YWJsZTogdHJ1ZSwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlOiAnQ2FyZ2FyIG51bWVybyBkZSBhZmlsaWFkbycsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzaG93OiB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVmZmVjdDogImJsaW5kIiwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDEwMDAsCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGlkZTogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlZmZlY3Q6ICJmYWRlIiwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDUwMCwKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgIAogICAgICAgIH0pOwogICAgICAgIAogICAgICAgIAogICAgfSk7Cgo8L3NjcmlwdD4KCgoKPGRpdiBjbGFzcz0ib2JyYXNTb2NpYWxlc1BhY2llbnRlc0luZGV4Ij4KCTxoMj48L2gyPgoJPHRhYmxlIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgaWQ9Im9icmFzU29jaWFsZXNQYWNpZW50ZSI+CiAgICAgICAgPHRoZWFkPgoJPHRyPgoJCQk8IS0tPHRoPmlkPC90aD4tLT4KCQkJPCEtLTx0aD5wYWNpZW50ZXNfaWQ8L3RoPi0tPgoJCQk8dGg+IE9icmEgU29jaWFsIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgICAgIDx0aD4gTnJvLiBBZmlsaWFkbyA8L3RoPgo8IS0tCQkJPHRoPjwvdGg+CgkJCTx0aD48L3RoPi0tPgogICAgICAgICAgICAgICAgICAgICAgICAKCQkJPHRoIGNsYXNzPSJhY3Rpb25zIj48L3RoPgoJPC90cj4KICAgICAgICA8L3RoZWFkPgogICAgICAgIDx0Ym9keT4KICAgICAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+CgkJPHRyPgoJCTwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KPCEtLQkJPHRkPgoJCQkJCTwvdGQ+LS0+CgkJPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgICAgICBPU0VDQUMgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+CiAgICAgICAgICAgICAgICA8dGQ+CgkJCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCgkJPC90ZD4KCQk8IS0tPHRkPiZuYnNwOzwvdGQ+LS0+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgCgkJPHRkIGNsYXNzPSJhY3Rpb25zIj4KCQkJCQkJCQkJICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz0iL2RldmVsL3NpZ2VwYS9pbWcvYWRkX3Jlc3VsdC5wbmciIGFsdD0iQ2FyZ2FyIG51bWVybyBkZSBhZmlsaWFkbyIgdGl0bGU9IkNhcmdhciBudW1lcm8gZGUgYWZpbGlhZG8iIGNsYXNzPSJjYXJnYXJOcm9BZmlsaWFkbyIgaWQ9IjQiIC8+ICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCgkJPC90ZD4KCTwvdHI+Cgk8dHI+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgo8IS0tCQk8dGQ+CgkJCQkJPC90ZD4tLT4KCQk8dGQ+CgkJCSAgICAgICAgICAgICAgICAgICAgICAgIFNFUk9TICAgICAgICAgICAgICAgICAgICAKCQk8L3RkPgogICAgICAgICAgICAgICAgPHRkPgoJCQkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTwhLS08dGQ+Jm5ic3A7PC90ZD4tLT4KICAgICAgICAgICAgICAgIAoJCTx0ZCBjbGFzcz0iYWN0aW9ucyI+CgkJCQkJCQkJCSAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9Ii9kZXZlbC9zaWdlcGEvaW1nL2FkZF9yZXN1bHQucG5nIiBhbHQ9IkNhcmdhciBudW1lcm8gZGUgYWZpbGlhZG8iIHRpdGxlPSJDYXJnYXIgbnVtZXJvIGRlIGFmaWxpYWRvIiBjbGFzcz0iY2FyZ2FyTnJvQWZpbGlhZG8iIGlkPSI1IiAvPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAoJCTwvdGQ+Cgk8L3RyPgogICAgICAgIDwhLS0vbm9jYWNoZS0tPgogICAgICAgIDwvdGJvZHk+Cgk8L3RhYmxlPgogICAgICAgIAo8IS0tCTxwPgoJCTwvcD4KCTxkaXYgY2xhc3M9InBhZ2luZyI+CgkJPC9kaXY+LS0+CjwvZGl2PgoKPCEtLTxkaXYgaWQ9ImVkaXRPYnJhU29jaWFsUGFjaWVudGUiPjwvZGl2Pi0tPgoKCjwhLS08ZGl2IGNsYXNzPSJhY3Rpb25zIj4KCTxoMz48L2gzPgoJPHVsPgoJCTxsaT48L2xpPgoJCTxsaT4gPC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJCTxsaT4gPC9saT4KCTwvdWw+CjwvZGl2Pi0tPgoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6MjI6Ik9icmFzU29jaWFsZXNQYWNpZW50ZXMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><script type="text/javascript">

    $(document).ready(function() {
        $('#obrasSocialesPaciente').dataTable({            
            "deferRender": true,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
            "aaSorting": [[ 0, "asc" ]],
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,
            "processing": true,
            "orderClasses": false,
            "oLanguage": {
                                    "sUrl": 'http://localhost/devel/sigepa/de_ES.txt' 
                                 }
        });
                
        $('.cargarNroAfiliado').bind('click', function() {
            $('#editObraSocialPaciente').load('http://localhost/devel/sigepa/obras_sociales_pacientes/edit' + '/' +  $(this).prop('id') + '/' + 15);
            $('#editObraSocialPaciente').dialog({
                                        modal: true,
                                        width: 790,
                                        height: 240,
                                        draggable: true,
                                        resizable: true,
                                        title: 'Cargar numero de afiliado',
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



<div class="obrasSocialesPacientesIndex">
	<h2></h2>
	<table cellpadding="0" cellspacing="0" id="obrasSocialesPaciente">
        <thead>
	<tr>
			<!--<th>id</th>-->
			<!--<th>pacientes_id</th>-->
			<th> Obra Social </th>
                        <th> Nro. Afiliado </th>
<!--			<th></th>
			<th></th>-->
                        
			<th class="actions"></th>
	</tr>
        </thead>
        <tbody>
            
	<?php foreach ($obrasSocialesPacientes as $obrasSocialesPaciente): ?>
	<tr>
		<!--<td><?php // echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['id']); ?>&nbsp;</td>-->
<!--		<td>
			<?php // echo $this->Html->link($obrasSocialesPaciente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $obrasSocialesPaciente['Pacientes']['id'])); ?>
		</td>-->
		<td>
			<?php // echo $this->Html->link($obrasSocialesPaciente['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesPaciente['ObrasSociales']['id'])); ?>
                        <?php echo h($obrasSocialesPaciente['ObrasSociale']['nombre']); ?>
                    
		</td>
                <td>
			<?php // echo $this->Html->link($obrasSocialesPaciente['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesPaciente['ObrasSociales']['id'])); ?>
                        <?php echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['nro_afiliado']); ?>
                    
		</td>
		<!--<td><?php // echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['created']); ?>&nbsp;</td>-->
		<!--<td><?php // echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['modified']); ?>&nbsp;</td>-->
                
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $obrasSocialesPaciente['ObrasSocialesPaciente']['id']), null, __('Are you sure you want to delete # %s?', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
                    
                    
                    <?php echo $this->Html->image('add_result.png', array('alt' => 'Cargar numero de afiliado', 'title' => 'Cargar numero de afiliado', 'class' => 'cargarNroAfiliado', 'id' => $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
                            
                                <?php // echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $obrasSocialesPaciente['ObrasSocialesPaciente']['id']), array('escape' => false), __('Confirma que desea eliminar los datos de la obra social %s?', $obrasSocialesPaciente['ObrasSociale']['nombre'])); ?>
                    
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

<!--<div id="editObraSocialPaciente"></div>-->


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
