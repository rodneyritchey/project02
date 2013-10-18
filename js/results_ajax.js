$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: 'php/count_all.php',
					success: function(responseData) {
						$('#vote_results').empty().html(responseData);
					},
					error: function(responseData) {
						$('#vote_results').empty().html('fail');
					}
				});
			});