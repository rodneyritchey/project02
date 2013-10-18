$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'php/cookie_check.php',
					success: function(responseData) {
						$('#greet').empty().html(responseData);
					},
					error: function(responseData) {
						$('#greet').empty().html('fail');
					}
				});
			});