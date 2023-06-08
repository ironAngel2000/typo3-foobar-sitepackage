
define(['jquery', 'TYPO3/CMS/Kmssitepackage/MyBackendLib'], function($, MyBackendLib) {


	$('.panel-heading, a.inlineNewButton').each(function () {

		$(this).on('click',function () {
			setTimeout(function () {
				checkSelect();
			},500);
		})

	});

	function checkSelect() {
		$('select.form-control.form-control-adapt').each(function () {
			var $slc = $(this);
			var name = $slc.attr('name');

			if(name.includes("[CType]") || name.includes("[colPos]")){
				let $parent = $slc.parents('.form-group').first();
				$parent.css('display','none');
			}
		});

	}

	setTimeout(function () {
		checkSelect();
	}, 500);

});
