<?php

if(isset($s_shop) and is_array($s_shop) and count($s_shop) > 0) {

	if($module) {

		$contentBuffor = $content;

		$content .= ','.$section;

	}
    if (isset($s_shopBox[$content]) and is_array($s_shopBox[$content]) and count($s_shopBox[$content]) > 0) {

        echo '<div class="row content-back">';

//        $lastPadding = array();
//        $objectPadding = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
        foreach ($s_shopBox[$content] as $sb) {

            if(isset($s_shop[$sb])) {

//                while(true) {
//
//                    $objectPaddingKay = array_rand($objectPadding);
//
//                    if(!in_array($objectPaddingKay, $lastPadding))
//                        break;
//
//                }

                //col-12 col-lg-6
                echo '<div class="col-12 col-sm-6 col-lg-4 col-1-5">';

                    //$objectPadding[$objectPaddingKay]

                    echo '<div class="object" style="padding: 20px">';

                        echo '<img src="layout/graphic/shop/'.$s_shop[$sb]['url'].'" alt="'.$s_shop[$sb]['name'].'">';

                    echo '</div>';

                echo '</div>';

                //array_push($lastPadding, $objectPaddingKay);

            }

        }
        echo '</div>';
    }

    if($module)
    	$content = $contentBuffor;

}