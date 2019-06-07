<?php

$arrow = '<i class="fal fa-angle-right"></i>';

$breadcrumb = array();

array_push($breadcrumb, array('direct' => $s_startPage['direct'], 'name' => $s_startPage['name']));

if(isset($s_menu)) {

    foreach ($s_menu as $m) {

        if($m['direct'] == $content) {

            array_push($breadcrumb, array('direct' => $m['direct'], 'name' => $m['name']));

            break;

        }

    }

}

if(isset($s_submenu) and isset($s_submenu[$content][$section])) {

    array_push($breadcrumb, array('direct' => $content.','.$section, 'name' => $s_submenu[$content][$section]['name']));

}

if(isset($s_menuContent['section'])) {

    $find = false;

    foreach ($s_menuContent['section'] as $mc1) {

        if((!isset($s_submenu[$content][$section]) and $mc1['direct'] == $section)
            or (isset($s_submenu[$content][$section]) and $mc1['direct'] == $module)) {

            array_push($breadcrumb, array('direct' => $mc1['direct'], 'name' => $mc1['name']));

            $find = true;

            break;

        }

    }

    if(!$find) {

        foreach ($s_menuContent['about'] as $mc2) {

            if($mc2['direct'] == $section) {

                array_push($breadcrumb, array('direct' => $mc2['direct'], 'name' => $mc2['name']));

                break;

            }

        }

    }

}

$countBreadcrumb = count($breadcrumb);

if($countBreadcrumb > 0) {

    echo '<div class="container-fluid">';

        echo '<div class="row">';

            echo '<div class="col-12">';

                foreach ($breadcrumb as $j => $b) {

                    if ($j < ($countBreadcrumb - 1))
                        echo '<a href="' . $b['direct'] . '">';

                    echo $b['name'];

                    if ($j < ($countBreadcrumb - 1))
                        echo '</a> ' . $arrow . ' ';

                }

            echo '</div>';

        echo '</div>';

    echo '</div>';

}
