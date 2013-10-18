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
							window.location = 'candidates.php';
							//$('body').empty().html(responseData);
							
						},
						error: function(responseData) {
							console.log('the register.php ajax call failed');
						}
					});
				});
			});