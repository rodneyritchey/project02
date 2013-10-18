//Ajax call for bugs
$(document).ready(function() {
				$('#bugs').submit(function(e) {
					e.preventDefault();
					//var id = document.getElementById('vote').value;
					$.ajax({
						data: {vote: 'b'},
						type: 'post',
						url: '../php/vote.php',
						success: function(responseData) {
							window.location = 'thank_you.php';
							//$('#response2').empty().html(responseData);
						},
						error: function(responseData) {
							console.log('the vote.php ajax call failed');
						}
					});
				});
			});

//Ajax call for daffy
$(document).ready(function() {
				$('#daffy').submit(function(e) {
					e.preventDefault();
					//var id = document.getElementById('vote').value;
					$.ajax({
						data: {vote: 'd'},
						type: 'post',
						url: '../php/vote.php',
						success: function(responseData) {
							window.location = 'thank_you.php';
							//$('#response2').empty().html(responseData);
						},
						error: function(responseData) {
							console.log('the vote.php ajax call failed');
						}
					});
				});
			});

//Ajax call for foghorn
$(document).ready(function() {
				$('#foghorn').submit(function(e) {
					e.preventDefault();
					//var id = document.getElementById('vote').value;
					$.ajax({
						data: {vote: 'f'},
						type: 'post',
						url: '../php/vote.php',
						success: function(responseData) {
							window.location = 'thank_you.php';
							//$('#response2').empty().html(responseData);
						},
						error: function(responseData) {
							console.log('the vote.php ajax call failed');
						}
					});
				});
			});

//Ajax call for gossamer
$(document).ready(function() {
				$('#goss').submit(function(e) {
					e.preventDefault();
					//var id = document.getElementById('vote').value;
					$.ajax({
						data: {vote: 'g'},
						type: 'post',
						url: '../php/vote.php',
						success: function(responseData) {
							window.location = 'thank_you.php';
							//$('#response2').empty().html(responseData);
						},
						error: function(responseData) {
							console.log('the vote.php ajax call failed');
						}
					});
				});
			});