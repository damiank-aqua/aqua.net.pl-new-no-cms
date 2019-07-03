function setActiveMenu() {

    var $url = $('#url').val();

    var $urlArray;
    if($url.indexOf(':') > -1) {

        $urlArray = $url.split(':');

    }else $urlArray = [$url];

    var $countUrlArray = $urlArray.length;

    var $i;

    for($i = 0; $i < $countUrlArray; $i++) {

        $('.' + $urlArray[$i] + ':visible').addClass('active');

    }

    if($('.menu-3').length > 0 && $url.indexOf('o-nas') == -1 && $('.menu-3').find('a.active').length == 0) {

        $url += ',' + 'informacja';

        $url = $url.replace(':', ',');

        window.location = $url;

    }

}