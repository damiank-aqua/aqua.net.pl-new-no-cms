<?php

if(isset($s_shop) and is_array($s_shop) and count($s_shop) > 0) {

    if (isset($s_shopBox[$content]) and is_array($s_shopBox[$content]) and count($s_shopBox[$content]) > 0) {

        echo '<div class="row content-back">';
        foreach ($s_shopBox[$content] as $sb) {

            if(isset($s_shop[$sb])) {

                echo '<div class="col-12 col-lg-6 col-xl-4">';

                    echo '<div class="object">';

                        echo '<img src="layout/graphic/shop/'.$s_shop[$sb]['url'].'" alt="'.$s_shop[$sb]['name'].'">';

                    echo '</div>';

                echo '</div>';

            }


        }
        echo '</div>';
    }

}