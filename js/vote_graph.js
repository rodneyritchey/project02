$(document).ready(function() {
				$.ajax({
					data: 'null',
					type: 'get',
					url: '../php/count_bugs.php',
					async: false,
					success: function(responseText) {
						$('#response').empty().html(responseText);
					},
					error: function(responseText) {
						$('#response').empty().html('fail');
					}
				});
			});

