<?php

if(isset($s_shop) and is_array($s_shop) and count($s_shop) > 0) {

    if (isset($s_shopBox[$content]) and is_array($s_shopBox[$content]) and count($s_shopBox[$content]) > 0) {

        echo '<div class="row content-back">';

        $lastPadding = array();
        $objectPadding = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
        foreach ($s_shopBox[$content] as $sb) {

            if(isset($s_shop[$sb])) {

                while(true) {

                    $objectPaddingKay = array_rand($objectPadding);

                    if(!in_array($objectPaddingKay, $lastPadding))
                        break;

                }

                echo '<div class="col-12 col-lg-6 col-xl-4">';

                    echo '<div class="object" style="padding: '.$objectPadding[$objectPaddingKay].'px">';

                        echo '<img src="layout/graphic/shop/'.$s_shop[$sb]['url'].'" alt="'.$s_shop[$sb]['name'].'" class="shop-shadow-out">';

                    echo '</div>';

                echo '</div>';

                array_push($lastPadding, $objectPaddingKay);

            }


        }
        echo '</div>';
    }

}