<?php

?>
@yield('content')
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
	</head>
	
	<body>

		<div id="header-wrapper">
			<div class="mask">
				<div id="logo">
				  <a style="text-decoration: none; font-family: 'VT323', Arial;font-size: 1.4em; margin: 0;padding: 0; color: #fff;" href="{{ URL::route('home') }}">
                                  <h1 style="font-family: 'VT323', Arial; margin: 0;padding: 0; color: #fff;">
					[Chat<span class="black">Boxer</span>] <span class="smaller">(early release edition)</span></h1></a>
				</div>
			</div>
		</div>
		
		<div id="main-cont">
			<div id="info">
				<h1 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; font-size: 2.7em">Early Sign Up</h1>
				<div class="inputs">
					<form action="index.php" method="POST">
						<input type="text" placeholder="Username" class="text-input" name="username" />
						<input type="password" placeholder="password" class="text-input" name="password" />
						<input type="text" placeholder="Email" class="text-input" name="email" />
						<input type="text" placeholder="First Name" class="text-input" name="firstname" />
						<input type="text" placeholder="Last Name" class="text-input" name="lastname" />
						<input type="submit" style="height: 35px; width: 85px;" value="submit" />
					</form>
				</div>
				<?php 
				
				?>
				
			</div>
			<div id="para">
				<h1 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; color: #fff; font-size: 2.7em;">What's Going On?</h1>
				<div class="paragraphs">
					<h2 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; color: #fff; font-size: 1.7em;">
						1.) This is an early release</h2>
					<p style="font-family: Arial; color: #fff;">As proof that we will actually release this thing, and yes we are really making it. We are giving away a ton of free stuff to people who sign up early, such as premium membership, a lot of start up points, etc. etc.</p>
				    <h2 style="font-family: 'Rambla', Arial; padding: 0; margin: 0; color: #fff; font-size: 1.7em;">
						2.) We're asking for support</h2>
					<p style="font-family: Arial; color: #fff;">We are also accepting any donations made to us, if you feel generous enough to do so, you can donate by clicking the button below! Thanks a lot by the way.</p>
					<br />
					<a href="https://www.facebook.com/Chatboxer121" class="button">Donate</a>
				</div>
			</div>
		</div>
	</body>
</html>
