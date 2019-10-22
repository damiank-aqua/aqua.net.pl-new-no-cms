<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="module/fontawesome/css/all.css">
<link rel="stylesheet" href="app/composer/vendor/twbs/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="app/composer/vendor/drmonty/animate.css/css/animate.min.css">
<link rel="stylesheet" href="layout/style/main.css">
<link href='https://fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<?php
    $titleDisplay = '';
    if($countBreadcrumb > 0) {

        foreach ($breadcrumb as $b) {

            $titleDisplay .= $b['name'].' - ';

        }

        if(count($breadcrumb) > 1) {

            $titleDisplay = substr($titleDisplay, 0, -3);

        }else{

            $titleDisplay .= 'aqua.net.pl';

        }

    }else{

        $titleDisplay = 'aqua.net.pl';

    }
?>
<title><?php echo $titleDisplay; ?></title>