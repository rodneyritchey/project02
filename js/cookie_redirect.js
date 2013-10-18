$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'php/display_cookie.php',
					success: function(responseData) {
						window.location = 'canidates.php';
							$('#response').empty().html(responseData);
					},
					error: function(responseData) {
						$('#response').empty().html('fail');
					}
				});
			});