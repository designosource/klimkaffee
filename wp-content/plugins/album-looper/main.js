jQuery(function ($) {
	var filterSelector = '.album-filter.boulderzaal';
	var albumSelector = '.album';
	
	$(filterSelector).on('click', '.trigger', function () {
		var filter = $(this).data('filter');
		
		$(albumSelector).addClass('hidden');
		$("[data-album=" + filter + "]").removeClass('hidden');
	});
	
	$(filterSelector).on('click', '.reset', function () {
		$(albumSelector).removeClass('hidden');
	});
});