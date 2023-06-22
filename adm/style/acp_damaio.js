$(function () {

	$('#damaio_iframe_preview').on('click', function (e) {
		e.preventDefault()
		const stylePreview = $(this).attr('href');

		// Create markup
		$('body').append('<div class="damaio-overlay"><div class="damaio-overlay-content"><svg xmlns="http://www.w3.org/2000/svg" class="damaio-close-overlay" fill="currentColor" viewBox="0 0 24 24"><path d="M5.293 5.293a1 1 0 0 1 1.414 0L12 10.586l5.293-5.293a1 1 0 1 1 1.414 1.414L13.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414L12 13.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L10.586 12 5.293 6.707a1 1 0 0 1 0-1.414z"/></svg><iframe src="' + stylePreview + '" id="damaio_iframe"></div></div>');

		// Add spinner icon while iframe is loading
		$('#damaio_icon_preview').attr('class', 'fa fa-spinner fa-spin');

		// Open modal when iframe loaded
		$('#damaio_iframe').on('load', function () {
			$('.damaio-overlay').fadeIn(500).css('display', 'flex');
			setTimeout(function () {
				$('#damaio_icon_preview').attr('class', 'fa fa-eye');
			}, 300);
		});

		// Avoid closing the modal when clicking in content div
		$('.damaio-overlay-content').on('click', function (e) {
			e.stopPropagation();
		});

		// Close modal
		$('.damaio-overlay, .damaio-close-overlay').on('click', function () {
			$('.damaio-overlay').fadeOut(500, function () {
				$(this).remove();
			}).addClass('damaio-fadeout');
		});
	});

	$('#damaio_submit').on('click', function () {
		// Remove logo size if no logo
		if (!$('#damaio_logo_path').val()) {
			$('.damaio-size').val('');
		}
		// Remove the corresponding localStorage item if a color is defined
		$('.damaio-maincolor').each(function () {
			const id = $(this).attr('id');
			if ($(this).val() !== '' && localStorage[id]) {
				localStorage.removeItem(id);
			}
		});
	});

});
