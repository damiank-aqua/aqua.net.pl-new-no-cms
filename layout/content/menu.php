<?php if(isset($s_menu) and is_array($s_menu) and count($s_menu) > 0) { ?>

    <div class="menu-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-1"><div class="logo"><a href="<?php echo $s_startPage['direct']; ?>" title="<?php echo $s_startPage['name']; ?>"><img src="layout/graphic/logo.png"></a></div></div>
                <?php

                    $countMenu = count($s_menu);

                    foreach ($s_menu as $i => $m) {

                        $col = 'col-lg-2';
                        $nameDisplay = $m['name'];

                        $nameDisplay = str_replace('dla firm ', '<em>dla firm</em> ', $nameDisplay);

                        if(!stristr($nameDisplay, '<em>'))
                            $nameDisplay = str_replace('dla ', '<em>dla</em> ', $nameDisplay);

                        $nameDisplay = str_replace('o ', '<em>o</em> ', $nameDisplay);

                        if($i == ($countMenu - 1))
                            $col = 'col-lg-1';

                        echo '<div class="col-12 '.$col.' item"><a href="'.$m['direct'].'" class="'.$m['system'].'">'.$nameDisplay.'</a></div >';

                    }

                ?>

            </div>

        </div>

    </div>

<?php } ?>

<?php $isSubmenu = false; ?>

<?php if($content and isset($s_submenu[$content]) and is_array($s_submenu[$content]) and count($s_submenu[$content]) > 0) { ?>

    <div class="menu-2">

        <div class="container">

            <div class="row">

                <?php

                foreach ($s_submenu[$content] as $direct => $item) {

                    echo '<div class="col-6 item"><a href="' . $content . ',' . $item['link'] . '" class="'.$direct.'">'.$item['icon'].' '.$item['name'].'</a></div>';

                }

                ?>

            </div>

        </div>

    </div>

    <?php

    $isSubmenu = true;

}
?>

<?php

    $menuContent = false;

    if(!$isSubmenu or ($isSubmenu and $section)) {

        if($content != $s_startPage['direct']) {

            if ($content and $content != 'o-nas') {

                $menuContent = $s_menuContent['section'];

            } else {

                $menuContent = $s_menuContent['about'];

            }

        }

    }

    if($menuContent and is_array($menuContent) and count($menuContent) > 0) {

?>

    <div class="menu-3">

        <div class="container">

            <div class="row">

                <?php

                    $url1 = '';

                    if($content)
                        $url1 .= $content;

                    if($isSubmenu and $section)
                        $url1 .= ','.$section;

                    foreach ($menuContent as $item) {

                        echo '<div class="col-12 col-md item text-center">';

                            echo '<a href="'.$url1.','.$item['direct'].'" class="'.$item['direct'].'"><img src="layout/graphic/icon/'.$item['icon'].'"><br>'.$item['name'].'</a>';

                        echo '</div>';

                    }

                ?>

            </div>

        </div>

    </div>

<?php } ?>