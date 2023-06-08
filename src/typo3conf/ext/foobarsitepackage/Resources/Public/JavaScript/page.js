const observerImgs = lozad('.lozad');
observerImgs.observe();

const observerBgData = lozad('.background-lazy', {
    load: function(el) {
        el.classList.remove('background-lazy');
        backgroundData();
    }
});
observerBgData.observe();

const observerBgVdo = lozad('.vdo-lazy', {
    load: function(el) {
        var $cont = $(el);

        var $objVdo = $('<video ' + $cont.attr('data-vdomod') + ' ></video>');
        var $src = $('<source src="'+ $cont.attr('data-vdo') + '" type="video/mp4" />')
        $src.appendTo($objVdo);
        $objVdo.appendTo($cont);

    }
});
observerBgVdo.observe();
