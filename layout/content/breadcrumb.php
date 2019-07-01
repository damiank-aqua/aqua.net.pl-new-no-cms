<?php

if($countBreadcrumb > 0) {

    echo '<div class="im-breadcrumb">';

    echo '<div class="container-fluid">';

    echo '<div class="row">';

    echo '<div class="col-12">';

    foreach ($breadcrumb as $j => $b) {

        if ($j < ($countBreadcrumb - 1))
            echo '<a href="' . $b['direct'] . '">';

        echo $b['name'];

        if ($j < ($countBreadcrumb - 1)) {

            echo '</a> ' . $arrow . ' ';

        }else{

            $namePage = $b['name'];

        }
    }

    echo '</div>';

    echo '</div>';

    echo '</div>';

    echo '</div>';

}