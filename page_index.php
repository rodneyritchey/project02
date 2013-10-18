<!DOCTYPE html>
<?php session_start(); ?> 
<html> 
	<head> 
	<title>Toon Town Elections</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/register_ajax.js"></script>
</head>

<body> 

	<div data-role="page" id="home" data-theme="d">

		<div data-role="header">
		</div><!-- /header -->

		<div data-role="content" class="int_page">
			<h1>Welcome to the</h1>
			<div class="banner" id="splash_ban">
				<img src="img/toontown.png" />
			</div>
			<h1>Elections</h1>
		<div id="search_form">
					<form id="register" method="post" onsubmit="" action="#">
						<fieldset>
							<legend>
								<input type="text" id="firstname" value="First Name" onFocus="if(this.value == 'First Name') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'First Name'; }">
								<input type="text" id="lastname" value="Last Name" onFocus="if(this.value == 'Last Name') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'Last Name'; }">
								<input type="text" id="vote_id" value="Voter ID" onFocus="if(this.value == 'Voter ID') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'Voter ID'; }">
								<input type="submit" id="submit" data-ajax="false" value="submit" />
							</legend>
						</fieldset>
					</form>
					<div id="response"></div>
		</div><!-- /content -->

		<div data-role="footer" data-theme="d">
			<p>Sponsored by Brian Brady and Rodney Ritchey</p>
		</div><!-- /footer -->
	</div><!-- /page -->

</body>
</html>