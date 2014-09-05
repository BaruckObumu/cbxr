<?php

?>
@yield('head')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<link href="style.css" rel="stylesheet" />
		<title>early release</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
		<script language="javascript">
		if (!Modernizr.borderradius) {
				$.getScript("jquery.corner.js", function () {
				$("#cornerDiv").corner();
			});
		}
</script>
		<link rel="icon" type="image/png" href="favicon.jpeg" />
	</head>
	
	<body>
	@include('layout.header')
	@include('layout.mcont')
	@include('layout.footer')
	</body>
</html>
