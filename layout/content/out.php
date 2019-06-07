<?php
    $url = $content;
    if($section)
        $url .= ':'.$section;
    if($module)
        $url .= ':'.$module;

echo '<input type="hidden" id="url" value="'.$url.'">';