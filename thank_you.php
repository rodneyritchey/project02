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
	<script type="text/javascript" src="../js/vote_check.js"></script>
</head>

<body> 

	<div data-role="page" id="home" data-theme="d" data-ajax="false">

		<div data-role="header">
		</div><!-- /header -->

		<div data-role="content" class="int_page">
			<div class="banner" id="thank_ban">
				<img src="img/toontown.png" />
			</div>
		<div id="vote_check"></div>	
		<p><a href="results_page.php" data-ajax="false">Go To Results Page</a></p>
		</div><!-- /content -->

		<div data-role="footer">
			<p>Sponsored by Brian Brady and Rodney Ritchey</p>
		</div><!-- /footer -->
	</div><!-- /page -->

</body>
</html>