<?php if(isset($s_menu) and is_array($s_menu) and count($s_menu) > 0) { ?>

    <div class="menu-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-1"><div class="logo"><a href=""><img src="layout/graphic/logo.png"></a></div></div>
                <?php

                    foreach ($s_menu as $m) {

                        echo '<div class="col-12 col-lg-2 item"><a href="'.$m['direct'].'">'.$m['name'].'</a></div >';

                    }

                ?>
                <div class="col-12 col-lg-1 item" ><a href = "o-nas" ><i class="fal fa-rocket" ></i > <em > o</em > Nas</a ></div >
            </div>

        </div>

    </div>

<?php } ?>

<?php $isSubmenu = false ?>

<?php if($content and isset($s_submenu[$content]) and is_array($s_submenu[$content]) and count($s_submenu[$content]) > 0) { ?>

    <div class="menu-2">

        <div class="container">

            <div class="row">

                <?php

                foreach ($s_submenu[$content] as $direct => $item) {

                    echo '<div class="col-6 item"><a href="' . $content . ',' . $direct . '">'.$item['icon'].' '.$item['name'].'</div>';

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

        if($content and $content != 'o-nas') {

            $menuContent = $s_menuContent['section'];

        }else {

            $menuContent = $s_menuContent['about'];

        }

    }

    if($content and $menuContent and is_array($menuContent) and count($menuContent) > 0) {

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

                            echo '<a href="'.$url1.','.$item['direct'].'"><img src="layout/graphic/icon/'.$item['icon'].'"><br>'.$item['name'].'</a>';

                        echo '</div>';

                    }

                ?>

            </div>

        </div>

    </div>

<?php } ?>