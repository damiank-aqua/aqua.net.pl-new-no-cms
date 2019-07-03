<?php

echo '<div class="container">';

echo '<div class="row">';

echo '<div class="col-12">';

    $dirPath = $content;

    if($section)
        $dirPath .= '/'.$section;

    if($module)
        $dirPath .= '/'.$module;

    $contentFilePath = 'data/'.$dirPath.'.php';

    if(is_file($contentFilePath))
        require_once $contentFilePath;

echo '</div>';

echo '</div>';

echo '</div>';