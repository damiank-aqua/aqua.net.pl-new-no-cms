<?php require_once 'layout/content/menu.php'; ?>

<?php

if($content == $s_startPage['direct']) {

    require_once 'layout/content/slider.php';

}

?>

<div class="content">

    <?php

        if($content != $s_startPage['direct']) {

            require_once 'layout/content/breadcrumb.php';

            require_once 'layout/content/title.php';

        }

        require_once 'layout/content/content.php';

    ?>

</div>

<?php require_once 'layout/content/footer.php'; ?>

<?php require_once 'layout/content/out.php'; ?>
