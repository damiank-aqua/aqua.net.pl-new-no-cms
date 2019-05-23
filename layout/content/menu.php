<?php

echo '<div class="menu-1-box">';

    echo '<div class="container">';

        echo '<div class="menu-1">';

            echo '<div class="row">';

                foreach ($s_menu as $index => $m) {

                    $submenu = $m[1];

                    echo '<div class="col item" id="source-'.$index.'">';

                        echo $m[0];

                    echo '</div>';

                }

            echo '</div>';

        echo '</div>';

        echo '<div class="menu-2">';

            echo '<div class="row">';

                foreach ($submenu as $index => $m) {

                    if(isset($m[1]))
                        $endmenu = $m[1];

                    echo '<div class="col item" id="source-'.$index.'">';

                    echo $m[0];

                    echo '</div>';

                }

            echo '</div>';

        echo '</div>';

    echo '</div>';

echo '</div>';