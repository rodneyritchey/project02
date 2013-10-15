//Ajax call for register.php
$(document).ready(function() {
				$('form').submit(function(e) {
					e.preventDefault();
					var id = document.getElementById('register').value;
					$.ajax({
						data: {vote_id: vote_id},
						type: 'post',
						url: '../php/register.php',
						success: function(responseData) {
							$('#response').empty().html(responseData);
						},
						error: function(responseData) {
							console.log('the register.php ajax call failed');
						}
					});
				});
			});

//Ajax call for vote.php
$(document).ready(function() {
				$('form').submit(function(e) {
					e.preventDefault();
					var id = document.getElementById('vote').value;
					$.ajax({
						data: {name: name},
						type: 'post',
						url: '../php/vote.php',
						success: function(responseData) {
							$('#response').empty().html(responseData);
						},
						error: function(responseData) {
							console.log('the vote.php ajax call failed');
						}
					});
				});
			});