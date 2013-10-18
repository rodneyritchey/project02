$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../php/vote_check.php',
					success: function(responseData) {
						$('#vote_check').empty().html(responseData);
					},
					error: function(responseData) {
						$('#vote_check').empty().html('fail');
					}
				});
			});