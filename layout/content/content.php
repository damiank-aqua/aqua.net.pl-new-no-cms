<?php
$contentWidth = 'container';
if(isset($s_contentWidth[$content]))
    $contentWidth .= $s_contentWidth[$content];

echo '<div class="'.$contentWidth.'">';

    $dirPath = $content;

    if($section)
        $dirPath .= '/'.$section;

    if($module)
        $dirPath .= '/'.$module;

    $contentFilePath = 'data/'.$dirPath.'.php';

    if(is_file($contentFilePath))
        require_once $contentFilePath;

echo '</div>';