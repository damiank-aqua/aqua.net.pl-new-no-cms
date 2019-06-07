<?php require_once 'layout/content/menu.php'; ?>

<div class="content">

    <?php

        if($content != $s_startPage['direct'])
            require_once 'layout/content/breadcrumb.php';

    ?>

</div>

<?php require_once 'layout/content/footer.php'; ?>