var $gear1 = $('.gear1'),
    $gear2 = $('.gear2'),
    $gear3 = $('.gear3'),
    // $gear4 = $('.gear4'),
    $gear5 = $('.gear5'),
    // $gear6 = $('.gear6'),
    $gear7 = $('.gear7'),
    // $gear8 = $('.gear8'),
    $gear9 = $('.gear9'),
    // $gear10 = $('.gear10'),
    $gear11 = $('.gear11'),
    $gear12 = $('.gear12'),
    $gear13 = $('.gear13'),
    $gear14 = $('.gear14'),
    // $gear15 = $('.gear15'),
    $gear16 = $('.gear16'),
    // $gear17 = $('.gear17'),
    $gear18 = $('.gear18'),
    $gear19 = $('.gear19'),
    // $gear8 = $('.gear20'),
    // $gear9 = $('.gear21'),
    $body = $('.gear-benefits'),
    bodyHeight = $body.height();

function getScrollTop() {
    if (typeof pageYOffset != 'undefined') {
        //most browsers except IE before #9
        return pageYOffset;
    } else {
        var B = document.body; //IE 'quirks'
        var D = document.documentElement; //IE with doctype
        D = (D.clientHeight) ? D : B;
        return D.scrollTop;
    }
}

$(window).scroll(function () {
    var scroll = getScrollTop();
    var direction1 = {
         'transform': 'rotate(' + (scroll / bodyHeight * 800) + 'deg)',
        '-moz-transform': 'rotate(' + (scroll / bodyHeight * 800) + 'deg)',
        '-ms-transform': 'rotate(' + (scroll / bodyHeight * 800) + 'deg)',
        '-o-transform:rotate': 'rotate(' + (scroll / bodyHeight * 800) + 'deg)'
    };

    var direction2 = {
          'transform': 'rotate(' + (scroll / bodyHeight * ("-1000")) + 'deg)',
        '-moz-transform': 'rotate(' + (scroll / bodyHeight * ("-1000")) + 'deg)',
        '-ms-transform': 'rotate(' + (scroll / bodyHeight * ("-1000")) + 'deg)',
        '-o-transform:rotate': 'rotate(' + (scroll / bodyHeight * ("-1000")) + 'deg)'
    };
    $gear1.css(direction2);
    $gear2.css(direction1);
    $gear3.css(direction1);
    // $gear4.css(direction1);
    $gear5.css(direction2);
    // $gear6.css(direction2);
    $gear7.css(direction1);
    // $gear8.css(direction2);
    $gear9.css(direction2);
    // $gear10.css(direction1);
    $gear11.css(direction1);
    $gear12.css(direction2);
    $gear13.css(direction2);
    $gear14.css(direction1);
    // $gear15.css(direction2);
    $gear16.css(direction1);
    // $gear17.css(direction1);
    $gear18.css(direction1);
    $gear19.css(direction2);
});

