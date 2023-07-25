$(function () {
	$('#damaio_iframe_preview').on('click', function (e) {
		e.preventDefault();

		const stylePreview = $(this).attr('href');
		const iframeId = 'damaio_iframe';

		// Create markup
		const $overlay = $('<div class="damaio-overlay"></div>');
		const $overlayContent = $('<div class="damaio-overlay-content"></div>');
		const $closeBtn = $('<svg xmlns="http://www.w3.org/2000/svg" class="damaio-close-overlay" fill="currentColor" viewBox="0 0 24 24"><path d="M5.293 5.293a1 1 0 0 1 1.414 0L12 10.586l5.293-5.293a1 1 0 1 1 1.414 1.414L13.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414L12 13.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L10.586 12 5.293 6.707a1 1 0 0 1 0-1.414z"/></svg>');
		const $iframe = $('<iframe></iframe>').attr('src', stylePreview).attr('id', iframeId);

		$overlayContent.append($closeBtn, $iframe);
		$overlay.append($overlayContent);
		$('body').append($overlay);

		// Add spinner icon to preview button while iframe is loading
		$('#damaio_icon_preview').removeClass('fa-eye').addClass('fa-spinner fa-spin');

		// Open modal when iframe loaded
		$('#' + iframeId).on('load', function () {
			$('.damaio-overlay').fadeIn(500).css('display', 'flex');

			// Remove spinner icon
			setTimeout(function () {
				$('#damaio_icon_preview').removeClass('fa-spinner fa-spin').addClass('fa-eye');
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
		// Clear size inputs if no logo
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
