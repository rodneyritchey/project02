<!DOCTYPE html>
<?php session_start(); ?>
<html> 
	<head> 
	<title>Toon Town Elections</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<link rel="stylesheet" href="../css/styles.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<script type="text/javascript" src="../js/vote_ajax.js"></script>
	<script type="text/javascript" src="../js/cookie_ajax.js"></script>
</head>

<body>
	<div data-role="page" id="canidates" data-theme="d">

		<div data-role="header">
		</div><!-- /header -->

		<div data-role="content" class="int_page">
			<div class="banner" id="can_ban">
				<img src="img/toontown.png" />
			</div>
			<h1>Candidates</h1>
			<div id="response"><span class="greet" id="greet"></span></div>
			<div id="response2"></div>
			<div class="canidate" id="bugs">
				<h2>Bugs Bunny</h2>
				<h3>(Democrat)</h3>
			<img src="img/bugs09.png" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget tristique libero. Mauris vitae sem ipsum. Vivamus tincidunt pharetra vestibulum. Integer et semper neque, vel luctus tortor. Vestibulum malesuada sem sit amet elit eleifend, ac molestie orci molestie. Vestibulum sagittis vestibulum faucibus. Nullam porta tortor vel velit tempus mollis. Aenean vel orci a ligula suscipit laoreet.

			Suspendisse iaculis laoreet ante. Donec hendrerit tortor nec sagittis accumsan. Sed condimentum ligula adipiscing est gravida, vel elementum ligula ultricies. Pellentesque eu dui ullamcorper, commodo dui vel, molestie leo. Nullam in dolor at ligula bibendum vestibulum. Nam nec orci id turpis viverra dignissim. Nulla fringilla mollis quam ut accumsan.

			Aliquam sit amet enim sem. Duis sollicitudin mauris vitae sem egestas mollis. Mauris consectetur turpis at leo dapibus fringilla. Nullam faucibus lorem eget tortor dignissim porttitor. Nullam ac leo non est imperdiet eleifend. Donec non massa ullamcorper, iaculis libero accumsan, adipiscing tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec suscipit pharetra leo, in aliquet dui sagittis ullamcorper.

			Curabitur massa felis, pharetra eget mauris in, adipiscing dignissim orci. Donec in justo pulvinar, iaculis ipsum ut, posuere velit. Duis nec commodo massa. Ut at dignissim metus. Nullam vitae nunc urna. Pellentesque elementum ac magna sit amet mollis. Curabitur non risus eu enim viverra ullamcorper at eu velit. Mauris ultrices at ipsum nec cursus. Suspendisse imperdiet sem sit amet feugiat varius. Vestibulum scelerisque urna eu nunc ornare convallis. Proin pulvinar fringilla ante non accumsan. Vivamus et turpis lorem.

			Aliquam congue leo lectus, quis euismod nunc lobortis sit amet. Donec fermentum ultricies arcu, sed accumsan nibh sodales a. Suspendisse potenti. Nullam tincidunt ligula tincidunt neque tincidunt mattis. Phasellus eget sapien suscipit est sodales commodo at at nisi. Integer posuere velit hendrerit hendrerit ornare. Proin augue eros, ultrices non tristique quis, varius a nulla. Maecenas pellentesque cursus nulla in ornare. Nulla viverra vitae justo nec placerat. Praesent sit amet volutpat lorem, quis viverra metus. Etiam risus tortor, vehicula sed bibendum dignissim, scelerisque ac eros. Nunc augue dui, lobortis vitae sem ut, aliquam accumsan dui. Praesent pellentesque, orci at rhoncus dapibus, turpis sem vulputate tortor, a luctus lacus tellus a dolor. Suspendisse potenti.</p>
			<form id="bugs" method="post" onsubmit="" action="#">
				<input type="submit" id="bugs" value="Vote for Bugs" />
			</form>
		</div>

			<div class="canidate" id="daffy">
				<h2>Daffy Duck</h2>
				<h3>(Republican)</h3>
			<img src="img/daffy01.png" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget tristique libero. Mauris vitae sem ipsum. Vivamus tincidunt pharetra vestibulum. Integer et semper neque, vel luctus tortor. Vestibulum malesuada sem sit amet elit eleifend, ac molestie orci molestie. Vestibulum sagittis vestibulum faucibus. Nullam porta tortor vel velit tempus mollis. Aenean vel orci a ligula suscipit laoreet.

			Suspendisse iaculis laoreet ante. Donec hendrerit tortor nec sagittis accumsan. Sed condimentum ligula adipiscing est gravida, vel elementum ligula ultricies. Pellentesque eu dui ullamcorper, commodo dui vel, molestie leo. Nullam in dolor at ligula bibendum vestibulum. Nam nec orci id turpis viverra dignissim. Nulla fringilla mollis quam ut accumsan.

			Aliquam sit amet enim sem. Duis sollicitudin mauris vitae sem egestas mollis. Mauris consectetur turpis at leo dapibus fringilla. Nullam faucibus lorem eget tortor dignissim porttitor. Nullam ac leo non est imperdiet eleifend. Donec non massa ullamcorper, iaculis libero accumsan, adipiscing tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec suscipit pharetra leo, in aliquet dui sagittis ullamcorper.

			Curabitur massa felis, pharetra eget mauris in, adipiscing dignissim orci. Donec in justo pulvinar, iaculis ipsum ut, posuere velit. Duis nec commodo massa. Ut at dignissim metus. Nullam vitae nunc urna. Pellentesque elementum ac magna sit amet mollis. Curabitur non risus eu enim viverra ullamcorper at eu velit. Mauris ultrices at ipsum nec cursus. Suspendisse imperdiet sem sit amet feugiat varius. Vestibulum scelerisque urna eu nunc ornare convallis. Proin pulvinar fringilla ante non accumsan. Vivamus et turpis lorem.

			Aliquam congue leo lectus, quis euismod nunc lobortis sit amet. Donec fermentum ultricies arcu, sed accumsan nibh sodales a. Suspendisse potenti. Nullam tincidunt ligula tincidunt neque tincidunt mattis. Phasellus eget sapien suscipit est sodales commodo at at nisi. Integer posuere velit hendrerit hendrerit ornare. Proin augue eros, ultrices non tristique quis, varius a nulla. Maecenas pellentesque cursus nulla in ornare. Nulla viverra vitae justo nec placerat. Praesent sit amet volutpat lorem, quis viverra metus. Etiam risus tortor, vehicula sed bibendum dignissim, scelerisque ac eros. Nunc augue dui, lobortis vitae sem ut, aliquam accumsan dui. Praesent pellentesque, orci at rhoncus dapibus, turpis sem vulputate tortor, a luctus lacus tellus a dolor. Suspendisse potenti.</p>
			<form id="daffy" method="post" onsubmit="" action="#">
				<input type="submit" id="daffy" value="Vote for Daffy" />
			</form>
		</div>

			<div class="canidate" id="foghorn">
				<h2>Foghorn Leghorn</h2>
				<h3>(Southern Party)</h3>
			<img src="img/foghorn01.png" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget tristique libero. Mauris vitae sem ipsum. Vivamus tincidunt pharetra vestibulum. Integer et semper neque, vel luctus tortor. Vestibulum malesuada sem sit amet elit eleifend, ac molestie orci molestie. Vestibulum sagittis vestibulum faucibus. Nullam porta tortor vel velit tempus mollis. Aenean vel orci a ligula suscipit laoreet.

			Suspendisse iaculis laoreet ante. Donec hendrerit tortor nec sagittis accumsan. Sed condimentum ligula adipiscing est gravida, vel elementum ligula ultricies. Pellentesque eu dui ullamcorper, commodo dui vel, molestie leo. Nullam in dolor at ligula bibendum vestibulum. Nam nec orci id turpis viverra dignissim. Nulla fringilla mollis quam ut accumsan.

			Aliquam sit amet enim sem. Duis sollicitudin mauris vitae sem egestas mollis. Mauris consectetur turpis at leo dapibus fringilla. Nullam faucibus lorem eget tortor dignissim porttitor. Nullam ac leo non est imperdiet eleifend. Donec non massa ullamcorper, iaculis libero accumsan, adipiscing tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec suscipit pharetra leo, in aliquet dui sagittis ullamcorper.

			Curabitur massa felis, pharetra eget mauris in, adipiscing dignissim orci. Donec in justo pulvinar, iaculis ipsum ut, posuere velit. Duis nec commodo massa. Ut at dignissim metus. Nullam vitae nunc urna. Pellentesque elementum ac magna sit amet mollis. Curabitur non risus eu enim viverra ullamcorper at eu velit. Mauris ultrices at ipsum nec cursus. Suspendisse imperdiet sem sit amet feugiat varius. Vestibulum scelerisque urna eu nunc ornare convallis. Proin pulvinar fringilla ante non accumsan. Vivamus et turpis lorem.

			Aliquam congue leo lectus, quis euismod nunc lobortis sit amet. Donec fermentum ultricies arcu, sed accumsan nibh sodales a. Suspendisse potenti. Nullam tincidunt ligula tincidunt neque tincidunt mattis. Phasellus eget sapien suscipit est sodales commodo at at nisi. Integer posuere velit hendrerit hendrerit ornare. Proin augue eros, ultrices non tristique quis, varius a nulla. Maecenas pellentesque cursus nulla in ornare. Nulla viverra vitae justo nec placerat. Praesent sit amet volutpat lorem, quis viverra metus. Etiam risus tortor, vehicula sed bibendum dignissim, scelerisque ac eros. Nunc augue dui, lobortis vitae sem ut, aliquam accumsan dui. Praesent pellentesque, orci at rhoncus dapibus, turpis sem vulputate tortor, a luctus lacus tellus a dolor. Suspendisse potenti.</p>
			<form id="foghorn" method="post" onsubmit="" action="#">
				<input type="submit" id="foghorn" value="Vote for Foghorn" />
			</form>
		</div>

		<div class="canidate" id="goss">
				<h2>Gossamer</h2>
				<h3>(Independent)</h3>
			<img src="img/gossamer.png" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget tristique libero. Mauris vitae sem ipsum. Vivamus tincidunt pharetra vestibulum. Integer et semper neque, vel luctus tortor. Vestibulum malesuada sem sit amet elit eleifend, ac molestie orci molestie. Vestibulum sagittis vestibulum faucibus. Nullam porta tortor vel velit tempus mollis. Aenean vel orci a ligula suscipit laoreet.

			Suspendisse iaculis laoreet ante. Donec hendrerit tortor nec sagittis accumsan. Sed condimentum ligula adipiscing est gravida, vel elementum ligula ultricies. Pellentesque eu dui ullamcorper, commodo dui vel, molestie leo. Nullam in dolor at ligula bibendum vestibulum. Nam nec orci id turpis viverra dignissim. Nulla fringilla mollis quam ut accumsan.

			Aliquam sit amet enim sem. Duis sollicitudin mauris vitae sem egestas mollis. Mauris consectetur turpis at leo dapibus fringilla. Nullam faucibus lorem eget tortor dignissim porttitor. Nullam ac leo non est imperdiet eleifend. Donec non massa ullamcorper, iaculis libero accumsan, adipiscing tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec suscipit pharetra leo, in aliquet dui sagittis ullamcorper.

			Curabitur massa felis, pharetra eget mauris in, adipiscing dignissim orci. Donec in justo pulvinar, iaculis ipsum ut, posuere velit. Duis nec commodo massa. Ut at dignissim metus. Nullam vitae nunc urna. Pellentesque elementum ac magna sit amet mollis. Curabitur non risus eu enim viverra ullamcorper at eu velit. Mauris ultrices at ipsum nec cursus. Suspendisse imperdiet sem sit amet feugiat varius. Vestibulum scelerisque urna eu nunc ornare convallis. Proin pulvinar fringilla ante non accumsan. Vivamus et turpis lorem.

			Aliquam congue leo lectus, quis euismod nunc lobortis sit amet. Donec fermentum ultricies arcu, sed accumsan nibh sodales a. Suspendisse potenti. Nullam tincidunt ligula tincidunt neque tincidunt mattis. Phasellus eget sapien suscipit est sodales commodo at at nisi. Integer posuere velit hendrerit hendrerit ornare. Proin augue eros, ultrices non tristique quis, varius a nulla. Maecenas pellentesque cursus nulla in ornare. Nulla viverra vitae justo nec placerat. Praesent sit amet volutpat lorem, quis viverra metus. Etiam risus tortor, vehicula sed bibendum dignissim, scelerisque ac eros. Nunc augue dui, lobortis vitae sem ut, aliquam accumsan dui. Praesent pellentesque, orci at rhoncus dapibus, turpis sem vulputate tortor, a luctus lacus tellus a dolor. Suspendisse potenti.</p>
			<form id="goss" method="post" onsubmit="" action="#">
				<input type="submit" id="goss" value="Vote for Gossamer" />
			</form>
		</div>
		</div><!-- /content -->

		<div data-role="footer">
			<p>Sponsored by Brian Brady and Rodney Ritchey</p>
		</div><!-- /footer -->
	</div><!-- /page -->

</body>
</html>