var $ = require('jquery');

$('img').each(function(index, element) {
	var $img = $(element),
		source = $img.data('src');

	if (source) {
		$img.attr('src', source);
	}
});
