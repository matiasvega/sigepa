<!--cachetime:1401202629--><?php
			App::uses('RecetasController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NzoicmVjZXRhcyI7czo2OiJhY3Rpb24iO3M6MTM6ImluZGV4UGFjaWVudGUiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czoyOiIxNSI7fXM6NjoiaXNBamF4IjtiOjE7czo2OiJtb2RlbHMiO2E6Nzp7czo2OiJSZWNldGEiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NjoiUmVjZXRhIjt9czoxMDoiUGVybWlzc2lvbiI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMDoiUGVybWlzc2lvbiI7fXM6MzoiQXJvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFybyI7fXM6MzoiQWNvIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjM6IkFjbyI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9czo5OiJQYWNpZW50ZXMiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6ODoiQXBwTW9kZWwiO31zOjExOiJNZWRpY2FtZW50byI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czoxMToiTWVkaWNhbWVudG8iO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MjU6InJlY2V0YXMvaW5kZXhQYWNpZW50ZS8xNS8iO3M6NDoiYmFzZSI7czoxMzoiL2RldmVsL3NpZ2VwYSI7czo3OiJ3ZWJyb290IjtzOjE0OiIvZGV2ZWwvc2lnZXBhLyI7czo0OiJoZXJlIjtzOjM5OiIvZGV2ZWwvc2lnZXBhL3JlY2V0YXMvaW5kZXhQYWNpZW50ZS8xNS8iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response->type('text/html');
				$controller = new RecetasController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntpOjA7czo3OiJTZXNzaW9uIjtzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MjM6IkJvb3N0Q2FrZS5Cb29zdENha2VIdG1sIjt9czo0OiJGb3JtIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjIzOiJCb29zdENha2UuQm9vc3RDYWtlRm9ybSI7fXM6OToiUGFnaW5hdG9yIjthOjE6e3M6OToiY2xhc3NOYW1lIjtzOjI4OiJCb29zdENha2UuQm9vc3RDYWtlUGFnaW5hdG9yIjt9aToxO3M6NToiQ2FjaGUiO30='));
				$controller->layout = $this->layout = 'ajax';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEwOiJpZFBhY2llbnRlIjtzOjI6IjE1IjtzOjc6InJlY2V0YXMiO2E6MTp7aTowO2E6Mzp7czo2OiJSZWNldGEiO2E6Njp7czoyOiJpZCI7czoxOiI4IjtzOjEyOiJwYWNpZW50ZXNfaWQiO3M6MjoiMTUiO3M6MTU6Im1lZGljYW1lbnRvc19pZCI7czo0OiIzMDY4IjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMjcgMDE6Mzc6MDciO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjcgMDE6Mzc6MDciO3M6MTM6Im9ic2VydmFjaW9uZXMiO3M6ODoicmVjZXRhZG8iO31zOjk6IlBhY2llbnRlcyI7YToxNzp7czoyOiJpZCI7czoyOiIxNSI7czozOiJkbmkiO3M6ODoiMzEyMjAzNTYiO3M6Njoibm9tYnJlIjtzOjY6Ik1BVElBUyI7czo4OiJhcGVsbGlkbyI7czo0OiJWRUdBIjtzOjQ6InNleG8iO3M6MToiTSI7czoxNToiZmVjaGFOYWNpbWllbnRvIjtzOjEwOiIxOTg0LTExLTEwIjtzOjk6ImRpcmVjY2lvbiI7czoxNzoiUGFzYWplIFBheXJvIDExNzQiO3M6MTI6InRlbGVmb25vRmlqbyI7czo5OiIxNTQ4NjM5NDUiO3M6MTM6InRlbGVmb25vTW92aWwiO3M6MDoiIjtzOjE5OiJmZWNoYVVsdGltYUNvbnN1bHRhIjtOO3M6NzoiYXRpb3BpYSI7TjtzOjc6ImhhYml0b3MiO047czoxNToibWVkaWNhY2lvbl9iYXNlIjtOO3M6MTA6ImZhbWlsaWFyZXMiO047czo1OiJvdHJvcyI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTQtMDUtMTcgMjI6MDI6MzYiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTQtMDUtMjcgMDE6MTQ6NDMiO31zOjExOiJNZWRpY2FtZW50byI7YToyMTp7czoyOiJpZCI7czo0OiIzMDY4IjtzOjE2OiJub21icmVfY29tZXJjaWFsIjtzOjEwOiJFRklDSUNMSU5BIjtzOjExOiJkZXNjcmlwY2lvbiI7TjtzOjEyOiJmYXJtYWNvbG9naWEiO3M6MjA4MToibGEgbGltZWNpY2xpbmEgZXMgdW4gYW50aWJp83RpY28gZGUgYW1wbGlvIGVzcGVjdHJvLCBxdWUgcGVydGVuZWNlIGEgbGEgZmFtaWxpYSBkZSBsYXMgdGV0cmFjaWNsaW5hcy4gU3UgZWZlY3RvIHNvYnJlIGVsIGFjbukgYfpuIG5vIHNlIGhhIGRpbHVjaWRhZG8gY29uIGV4YWN0aXR1ZDsgc2luIGVtYmFyZ28sIGVsIGVmZWN0byBwYXJlY2Ugc2VyIGNvbnNlY3VlbmNpYSAtZW4gcGFydGUtIGRlIGxhIGluaGliaWNp824gZGVsIGNyZWNpbWllbnRvIGRlIFByb3Bpb25pYmFjdGVyaXVtIGFjbmVzIHNvYnJlIGxhIHN1cGVyZmljaWUgY3V04W5lYSwgbG8gcXVlIHJlZHVjZSBsYSBjb25jZW50cmFjafNuIGRlIOFjaWRvcyBncmFzb3MgbGlicmVzIGVuIGVsIHNlYm8sIHNpZW5kbyBlc3RlIHVuIHJlc3VsdGFkbyBpbmRpcmVjdG8gZGUgbGEgaW5oaWJpY2nzbiBkZSBtaWNyb29yZ2FuaXNtb3MgcHJvZHVjdG9yZXMgZGUgbGlwYXNhIHF1ZSBjb252aWVydGVuIGEgbG9zIHRyaWdsaWPpcmlkb3MgZW4g4WNpZG9zIGdyYXNvcyBsaWJyZXMuIE8gYmllbiwgY29tbyByZXN1bHRhZG8gZGlyZWN0byBkZSBsYSBpbnRlcmZlcmVuY2lhIGNvbiBsYSBwcm9kdWNjafNuIGRlIGxpcGFzYSBkZSBlc3RvcyBvcmdhbmlzbW9zLiBMb3Mg4WNpZG9zIGdyYXNvcyBsaWJyZXMgc29uIGNvbWVkb2fpbmljb3MgeSBzb24gY2F1c2EgZGUgbGFzIGxlc2lvbmVzIGluZmxhbWF0b3JpYXMgZGVsIGFjbukgY29tbyBw4XB1bGFzLCBw+nN0dWxhcywgZXRjLiBFbCBtZWNhbmlzbW8gZGUgYWNjafNuIGEgbml2ZWwgZGUgbG9zIHJpYm9zb21hcyBiYWN0ZXJpYW5vcyBzZSByZWFsaXphIHBvciBtZWRpbyBkZSBkb3MgcHJvY2Vzb3MuIEVsIHByaW1lcm8gZXMgcG9yIGRpZnVuc2nzbiBwYXNpdmEgYSB0cmF26XMgZGUgbG9zIHBvcm9zIGhpZHJvZu1saWNvcyBkZSBsYSBtZW1icmFuYSBjZWx1bGFyIGEgbml2ZWwgZGUgbGEgcHJvdGXtbmEgSUEuIEVsIHNlZ3VuZG8gaW52b2x1Y3JhIHVuIHNpc3RlbWEgZGUgdHJhbnNwb3J0ZSBhY3Rpdm8gYSB0cmF26XMgZGUgbGEgbWVtYnJhbmEgY2l0b3BsYXNt4XRpY2EsIHByb3ZvY2FuZG8gbGEgaW5oaWJpY2nzbiBkZSBsYSBz7W50ZXNpcyBwcm90ZWljYSB5IGFkaGlyaeluZG9zZSBhIGxhIHVuaWRhZCByaWJvc29tYWwgMzBzLCBpbmhpYmllbmRvIGVsIGFjY2VzbyBkZWwgUk5BIGRlIHRyYW5zZmVyZW5jaWEgYWwgc2l0aW8gZGUgYWNlcHRhY2nzbiBkZWwgUk5BIG1lbnNhamVybyByaWJvc29tYWwsIGxvIHF1ZSBldml0YSBsYSBpbmNvcnBvcmFjafNuIGRlIGFtaW5v4WNpZG9zIGEgbGEgY2FkZW5hIHBlcHTtZGljYS4gTGFzIGPpbHVsYXMgaHVtYW5hcyBjYXJlY2VuIGRlbCBzaXN0ZW1hIGRlIHRyYW5zcG9ydGUgYWN0aXZvIHF1ZSBzZSBlbmN1ZW50cmEgZW4gbGFzIGJhY3Rlcmlhcy4gRUZJQ0lDTElOQa4gc2UgYWJzb3JiZSBhZGVjdWFkYW1lbnRlIHBvciB27WEgb3JhbCBjb24gbml2ZWxlcyBwbGFzbeF0aWNvcyBlZmVjdGl2b3MgZGVudHJvIGRlIGxhIHByaW1lcmEgaG9yYSBwb3N0ZXJpb3IgYSBsYSBpbmdlc3Rp824sIGRpc3RyaWJ1eeluZG9zZSBhZGVjdWFkYW1lbnRlIGVuIHRlamlkb3MgeSBmbHVpZG9zIGNvcnBvcmFsZXMuIEVsIG5pdmVsIHBsYXNt4XRpY28gcGljbyBkZSAxLjYgYSA0bWcvbWwgc2UgYWxjYW56YSBkZW50cm8gZGUgbGFzIDMgYSA0IGhvcmFzIHNpZ3VpZW50ZXMgYSBsYSBhZG1pbmlzdHJhY2nzbiBkZSAzMDBtZy4gTGEgY29uY2VudHJhY2nzbiByZXNpZHVhbCBlcyBkZSAwLDI5IGEgMiwxOW1nL21sIHkgc3UgdmlkYSD6dGlsIHBsYXNt4XRpY2EgZXMgZGUgMTAgaG9yYXMuIExhIGFkbWluaXN0cmFjafNuIHJlcGV0aWRhIGRlIEVGSUNJQ0xJTkEgbG9ncmEgdW5hIGNvbmNlbnRyYWNp824gbWVkaWEgcGxhc23hdGljYSBkZSAyLDMgYSA1LDhtZy9tbC4gRUZJQ0lDTElOQSBzZSBleGNyZXRhIHByaW5jaXBhbG1lbnRlIHBvciBsYSBvcmluYSB5IHNlY3VuZGFyaWFtZW50ZSBwb3IgbGEgYmlsaXMuIEFwcm94aW1hZGFtZW50ZSA2NSUgZGUgbGEgZG9zaXMgYWRtaW5pc3RyYWRhIHNlIGVsaW1pbmEgZW4gNDggaG9yYXMuIAoiO3M6MTQ6ImZhcm1hY29kaW5hbWlhIjtzOjA6IiI7czoxNToiZmFybWFjb2NpbmV0aWNhIjtzOjA6IiI7czoxOToicmVhY2Npb25lc19hZHZlcnNhcyI7czo1MTg6IlNlIGhhbiByZXBvcnRhZG8gYWx0ZXJhY2lvbmVzIGdhc3Ryb2ludGVzdGluYWxlcyBjb21vIG7hdXNlYSwgcGlyb3NpcywgZXBpZ2FzdHJhbGdpYSwgZGlhcnJlYSwgZW50ZXJvY29saXRpcyB5IGdsb3NpdGlzLiBSZWFjY2lvbmVzIGRlIGhpcGVyc2Vuc2liaWxpZGFkIGNvbW8gdXJ0aWNhcmlhLCByYXNoLCBwcnVyaXRvIG8gZWRlbWEgZGUgUXVpbmNrZSB5IHJlYWNjaW9uZXMgZGUgZm90b3NlbnNpYmlsaWRhZC4gQWxndW5vcyB0cmFzdG9ybm9zIGhlbWF0b2zzZ2ljb3MgY29tbyBlbiBvdHJhcyB0ZXRyYWNpY2xpbmFzOiBhbmVtaWEgaGVtb2ztdGljYSwgdHJvbWJvY2l0b3BlbmlhLCBuZXV0cm9wZW5pYSwgZW9zaW5vZmlsaWEuIFNlIGhhbiByZXBvcnRhZG8gYWxndW5vcyBjYXNvcyBkZSBoaXBlcm5hdHJlbWlhIGV4dHJhcnJlbmFsIHVuaWRhIG8gbGlnYWRhIGFsIGVmZWN0byBhbnRpYmnzdGljbyBxdWUgcHVlZGUgaW50ZW5zaWZpY2Fyc2UgcG9yIGxhIGFzb2NpYWNp824gY29uIGRpdXLpdGljb3MuIAoKIjtzOjEyOiJpbmRpY2FjaW9uZXMiO3M6ODA0OiJFRklDSUNMSU5BIGVzdOEgaW5kaWNhZGEgZW4gZWwgdHJhdGFtaWVudG8gZGU6IGluZmVjY2nzbiBwb3IgQnJ1Y2lsbGEuIEluZmVjY2nzbiBwb3IgUGFzdGV1cmVsbGFlLiBJbmZlY2Npb25lcyBwdWxtb25hcmVzLCBnZW5pdG8tdXJpbmFyaWFzIHkgb2Z0YWxtb2zzZ2ljYXMgcHJvdm9jYWRhcyBwb3IgZWwgbWljcm9vcmdhbmlzbW8gQ2hsYW15ZGlhZS4gSW5mZWNjaW9uZXMgcHVsbW9uYXJlcyB5IGdlbml0by11cmluYXJpYXMgcHJvdm9jYWRhcyBwb3IgZWwgbWljcm9vcmdhbmlzbW8gTXljb3BsYXNtYWUuIEluZmVjY2nzbiBhIFJpY2tldHRzaWFlLiBJbmZlY2Npb25lcyBhIENveGVsbGEgYnVybmV0dGkgKGZpZWJyZSBRKS4gSW5mZWNjafNuIGEgR29ub2NjaS4gSW5mZWNjaW9uZXMgcmVzcGlyYXRvcmlhcywgYnJvbmNvcHVsbW9uYXJlcyBwcm92b2NhZGFzIHBvciBIYWVtb3BoaWx1cyBpbmZsdWVuemFlLCBwYXJ0aWN1bGFybWVudGUgY3VhbmRvIGhheSB1bmEgZXhhY2VyYmFjafNuIGRlIGxhIGJyb25xdWl0aXMgY3LzbmljYS4gUHVlZGUgdXRpbGl6YXJzZSBlbiBsYXMgaW5mZWNjaW9uZXMgZGUgdHJlcG9uZW1hIChsYXMgdGV0cmFjaWNsaW5hcyBzb24gaW5kaWNhZGFzIGVuIHPtZmlsaXMgc/NsbyBjdWFuZG8gZWwgcGFjaWVudGUgZXMgYWzpcmdpY28gYSBsYXMgQmV0YWxhY3RhbWluYXMpLiBJbmZlY2Npb25lcyBjYXVzYWRhcyBwb3IgU3Bpcm9jaGV0ZXMgKGVuZmVybWVkYWQgZGUgTHltZSwgbGVwdG9waXJvc2lzKS4gQ/NsZXJhLiBBY27pIGluZmxhbWF0b3JpbyBzZXZlcm8geSBtb2RlcmFkby4gCgoiO3M6MTI6ImRvc2lmaWNhY2lvbiI7czoyOTE6IkxhIGRvc2lzIHVzdWFsIHJlY29tZW5kYWRhIHBhcmEgdHJhdGFtaWVudG9zIGRpc3RpbnRvcyBkZWwgYWNu6SBlbiBhZHVsdG9zIGVzIGRlIDYwMG1nL2TtYS4gTGEgZG9zaXMgcmVjb21lbmRhZGEgcGFyYSBhY27pIGVzIDMwMG1nL2TtYSBkdXJhbnRlIDEwIGEgMTUgZO1hcywgbHVlZ28gMTUwbWcgY2FkYSBk7WEgbyAzMDBtZyBjYWRhIGTtYSBwb3IgbWVkaW8gY29tbyB0ZXJhcGlhIGRlIG1hbnRlbmltaWVudG8uIExhIGR1cmFjafNuIHVzdWFsIGRlbCB0cmF0YW1pZW50byBlcyBkZSAxMiBzZW1hbmFzLiAKCiI7czoxNzoic29icmVkb3NpZmljYWNpb24iO3M6MzI5OiJFcyByYXJvIHF1ZSBzZSBwcm9kdXpjYSBzb2JyZWRvc2lzIGFndWRhIGNvbiBsb3MgYW50aWJp83RpY29zLiBTaSBlc3RvIG9jdXJyaWVyYSwgZGViZXLhIGNvbnNpZGVyYXJzZSBlbCBsYXZhZG8gZ+FzdHJpY28gZSBpbXBsZW1lbnRhciBtZWRpZGFzIGdlbmVyYWxlcyBkZSBhcG95byB5IGJlYmVyIHN1ZmljaWVudGUgYWd1YS4gQW50ZSBsYSBldmVudHVhbGlkYWQgZGUgdW5hIHNvYnJlZG9zaWZpY2FjafNuIHkvbyBpbnRveGljYWNp824gY29uY3VycmlyIGFsIGhvc3BpdGFsIG3hcyBjZXJjYW5vIG8gY29tdW5pY2Fyc2UgY29uIGxvcyBjZW50cm9zIGRlIHRveGljb2xvZ+1hLiI7czoxMjoicHJlc2VudGFjaW9uIjtzOjc0OiJFbnZhc2VzIGNvbiAzMCBj4XBzdWxhcyBkZSAxNTBtZy4gRW52YXNlcyBjb24gMTUgeSAzMCBj4XBzdWxhcyBkZSAzMDBtZy4gCiI7czoxMjoiY29uc2VydmFjaW9uIjtzOjUzOiJDb25zZXJ2YXIgZW50cmUgMTWwQyB5IDMwsEMgZW4gc3UgZW52YXNlIG9yaWdpbmFsLiAKCiI7czoxMjoiYWR2ZXJ0ZW5jaWFzIjtzOjA6IiI7czoxODoiZW1iYXJhem9fbGFjdGFuY2lhIjtzOjE4MToiTGFzIHRldHJhY2ljbGluYXMgYXRyYXZpZXNhbiBsYSBiYXJyZXJhIHBsYWNlbnRhcmlhIHkgc29uIGV4Y3JldGFkYXMgZW4gbGEgbGVjaGUgbWF0ZXJuYS4gUG9yIGVsbG8sIEVGSUNJQ0xJTkEgbm8gZGViZSBzZXIgYWRtaW5pc3RyYWRvIGVuIGVtYmFyYXphZGFzIG5pIGVuIHBlcu1vZG8gZGUgbGFjdGFuY2lhLiAKCiI7czoxODoiYWNjaW9uX3RlcmFwZXV0aWNhIjtzOjEyNjoiTGEgYWN0aXZpZGFkIHRlcmFw6XV0aWNhIGRlIEVGSUNJQ0xJTkEgZXMgZGVyaXZhZGEgZGUgbGFzIHByb3BpZWRhZGVzIGFudGliYWN0ZXJpYW5hcyB5IGZhcm1hY29jaW7pdGljYXMgZGUgbGEgbGltZWNpY2xpbmEuIAoKIjtzOjk6ImRyb2dhc19pZCI7czozOiI4MTYiO3M6MjE6ImNvbnRyYWluZGljYWNpb25lc19pZCI7czo0OiI3MDE2IjtzOjIyOiJncnVwb3NfdGVyYXBldXRpY29zX2lkIjtzOjE6IjgiO3M6MTY6ImNvbXBvc2ljaW9uZXNfaWQiO3M6NDoiNzAxNiI7czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE1NjY6IjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KCiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHsKICAgICAgICAkKCcjcmVjZXRhc0luZGV4JykuZGF0YVRhYmxlKHsKICAgICAgICAgICAgImJQYWdpbmF0ZSI6IHRydWUsCiAgICAgICAgICAgICJiTGVuZ3RoQ2hhbmdlIjogZmFsc2UsCiAgICAgICAgICAgICJiRmlsdGVyIjogdHJ1ZSwKICAgICAgICAgICAgImJTb3J0IjogdHJ1ZSwKICAgICAgICAgICAgImJJbmZvIjogdHJ1ZSwKICAgICAgICAgICAgImJBdXRvV2lkdGgiOiBmYWxzZSwKICAgICAgICAgICAgImFhU29ydGluZyI6IFtbIDAsICJhc2MiIF1dLAogICAgICAgICAgICAic1BhZ2luYXRpb25UeXBlIjogImZ1bGxfbnVtYmVycyIsCiAgICAgICAgICAgICJiSlF1ZXJ5VUkiOiB0cnVlLAogICAgICAgICAgICAib0xhbmd1YWdlIjogewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAic1VybCI6ICdodHRwOi8vbG9jYWxob3N0L2RldmVsL3NpZ2VwYS9kZV9FUy50eHQnIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgfSk7ICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgCiAgICB9KTsKCjwvc2NyaXB0PgoKPGRpdiBjbGFzcz0icmVjZXRhc0luZGV4Ij4KCTwhLS08aDI+PC9oMj4tLT4KCTx0YWJsZSBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGlkPSJyZWNldGFzSW5kZXgiPgogICAgICAgICAgICA8dGhlYWQ+CiAgICAgICAgICAgICAgICA8dHI+CiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aD4gaWQgPC90aD4tLT4KICAgICAgICAgICAgICAgICAgICA8dGg+IEZlY2hhIDwvdGg+CiAgICAgICAgICAgICAgICAgICAgPHRoPiBNZWRpY2FtZW50byA8L3RoPgogICAgICAgICAgICAgICAgICAgIDx0aD4gT2JzZXJ2YWNpb25lcyA8L3RoPiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgPCEtLTx0aCBjbGFzcz0iYWN0aW9ucyI+PC90aD4tLT4KICAgICAgICAgICAgICAgIDwvdHI+CiAgICAgICAgICAgIDwvdGhlYWQ+CiAgICAgICAgPHRib2R5PgogICAgICAgICAgICA8IS0tbm9jYWNoZTowMDEtLT4KCQk8dHI+CgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgogICAgICAgICAgICAgICAgPHRkPjI3LTA1LTIwMTQmbmJzcDs8L3RkPiAgICAgICAgICAgICAgICAKCQk8dGQ+RUZJQ0lDTElOQSZuYnNwOzwvdGQ+CgkJPHRkPnJlY2V0YWRvJm5ic3A7PC90ZD4KCgkJCgkJPCEtLTx0ZD4mbmJzcDs8L3RkPi0tPgoJCTwhLS08dGQgY2xhc3M9ImFjdGlvbnMiPi0tPgoJCQkJCQkJCQkJCTwhLS08L3RkPi0tPgoJPC90cj4KICAgICAgICA8IS0tL25vY2FjaGUtLT4KICAgICAgICA8L3Rib2R5PgoJPC90YWJsZT4KICAgICAgICAKICAgICAgICAKICAgICAgICAKPCEtLQk8cD4KCQk8L3A+Cgk8ZGl2IGNsYXNzPSJwYWdpbmciPgoJCTwvZGl2Pi0tPgo8L2Rpdj4KCgo8IS0tPGRpdiBjbGFzcz0iYWN0aW9ucyI+Cgk8aDM+PC9oMz4KCTx1bD4KCQk8bGk+PC9saT4KCQk8bGk+IDwvbGk+CgkJPGxpPiA8L2xpPgoJPC91bD4KPC9kaXY+LS0+CiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo3OiJSZWNldGFzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><script type="text/javascript">

    $(document).ready(function() {
        $('#recetasIndex').dataTable({
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

<div class="recetasIndex">
	<!--<h2></h2>-->
	<table cellpadding="0" cellspacing="0" id="recetasIndex">
            <thead>
                <tr>
                    <!--<th> id </th>-->
                    <th> Fecha </th>
                    <th> Medicamento </th>
                    <th> Observaciones </th>                    
                    <!--<th class="actions"></th>-->
                </tr>
            </thead>
        <tbody>
            
	<?php foreach ($recetas as $receta): ?>
	<tr>
		<!--<td><?php // echo h($receta['Receta']['id']); ?>&nbsp;</td>-->
                <td><?php echo fecha(h($receta['Receta']['created'])); ?>&nbsp;</td>                
		<td><?php echo h($receta['Medicamento']['nombre_comercial']); ?>&nbsp;</td>
		<td><?php echo h($receta['Receta']['observaciones']); ?>&nbsp;</td>

		
		<!--<td><?php // echo fecha(h($diagnostico['Receta']['modified'])); ?>&nbsp;</td>-->
		<!--<td class="actions">-->
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); 
                        
//                            echo $this->Html->image("add_result.png", array(
//                                    'id' => $diagnostico['Diagnostico']['id'], 
//                                    'class' => 'cargar_diagnostico',
//                                    'alt' => 'Cargar diagnostico definitivo',
//                                    'title' => 'Cargar diagnostico definitivo',
//                                ));
                        
                        
                        ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?>
		<!--</td>-->
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
