//Ajax call for register.php
$(document).ready(function() {
				$('form').submit(function(e) {
					e.preventDefault();
					var firstname = document.getElementById('firstname').value;
					var lastname = document.getElementById('lastname').value;
					var vote_id = document.getElementById('vote_id').value;
					$.ajax({
						data: {firstname: firstname, lastname: lastname, vote_id: vote_id},
						type: 'post',
						url: '../php/register.php',
						success: function(responseData) {
							window.location = 'canidates.html';
							$('body').empty().html(responseData);
							
						},
						error: function(responseData) {
							console.log('the register.php ajax call failed');
						}
					});
				});
			});

//Ajax call for vote.php
/*$(document).ready(function() {
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
			});*/