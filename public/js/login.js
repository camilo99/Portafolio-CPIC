		$(document).ready(function() {
			$('#modal').hide();
			$('#modal article').hide();
			/* - - - - - - - - - - - - - - - - - - - - - */
			$('#btnOpenModal').click(function(event) {
				$('#modal').fadeIn('slow', function() {
					$('#modal article').show();
					$('#modal article').animate({top: '0px'}, 500);
				});
			});
			/* - - - - - - - - - - - - - - - - - - - - - */
			$('.cerrarmodal').click(function(event) {
				$('#modal article').animate({top: '-1000px'},
					500, function() {
					$(this).hide();
					$('#modal').fadeOut('slow');
				});
			});
		});

/*--------Registro---------*/
		$(document).ready(function() {
			$('#modal2').hide();
			$('#modal2 article').hide();
			/* - - - - - - - - - - - - - - - - - - - - - */
			$('#btnOpenModal2').click(function(event) {
				$('#modal2').fadeIn('slow', function() {
					$('#modal2 article').show();
					$('#modal2 article').animate({top: '-130px'}, 500);
				});
			});
			/* - - - - - - - - - - - - - - - - - - - - - */
			$('.cerrarmodal2').click(function(event) {
				$('#modal2 article').animate({top: '-1000px'},
					500, function() {
					$(this).hide();
					$('#modal2').fadeOut('slow');
				});
			});
		});

