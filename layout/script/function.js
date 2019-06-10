function setActiveMenu() {

    var $url = $('#url').val();

    var $urlArray;
    if($url.indexOf(':') > -1) {

        $urlArray = $url.split(':');

    }else $urlArray = [$url];

    var $countUrlArray = $urlArray.length;

    var $i;

    for($i = 0; $i < $countUrlArray; $i++) {

        $('.' + $urlArray[$i] + ':visible').addClass('active', 500);

    }

}