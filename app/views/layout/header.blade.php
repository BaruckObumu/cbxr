@yield('headerwrapper')
<body>
		<div id="header-wrapper">
			<div class="mask">
				<div id="logo">
				  <!-- here we use the URL laravel helper to route back to the homepage -->
				  <a style="text-decoration: none; font-family: 'VT323', Arial;font-size: 1.4em; margin: 0;padding: 0; color: #fff;" href="{{ URL::route('home') }}">
                                  <h1 style="font-family: 'VT323', Arial; margin: 0;padding: 0; color: #fff;">
					[Chat<span class="black">Boxer</span>] <span class="smaller">(early release edition)</span></h1></a>
				</div>
			</div>
		</div>
		