(function ($) {

	$.fn.scrollPrallax = function (childClassname, options) {
		var $cont = $(this);
		var $parallax = $cont.find('.' + childClassname);
		var $win = $(window);

		var style = '';

		if($parallax.length){

			var inViewPort;


			var orgStyle = $parallax.attr('style');

			var maxTrans = $parallax.height() - $cont.height();

			$win.on('scroll touchmove ',function () {


				var viewport = {
					top: $win.scrollTop(),
					height: $win.height()
				};
				viewport.bottom = viewport.top + $win.height();

				var elemPos = {
					top: $cont.offset().top,
					height: $cont.height()
				}
				elemPos.bottom = elemPos.top + $cont.height();

				var maxHeight = elemPos.height + viewport.height;


				if((elemPos.top > viewport.top && elemPos.top < viewport.bottom) || (elemPos.bottom > viewport.top && elemPos.bottom < viewport.bottom)){
					inViewPort = true;
				}
				else{
					inViewPort = false;
				}

				if(inViewPort === true){
					var aktHPos = viewport.bottom - elemPos.top;
					var transPx = aktHPos / maxHeight * maxTrans;

					style = orgStyle;
					style += ' transform:translate3d(0,'+transPx+'px,0);';
					style += ' -webkit-transform:translate3d(0,'+transPx+'px,0);';
					style += ' -o-transform:translate3d(0,'+transPx+'px,0);';
					style += ' -ms-transform:translate3d(0,'+transPx+'px,0);';
					style += ' -moz-transform:translate3d(0,'+transPx+'px,0);';

					$parallax.attr('style',style);

				}

				window.onscroll = null;
			});

		}


	};

})(jQuery);
