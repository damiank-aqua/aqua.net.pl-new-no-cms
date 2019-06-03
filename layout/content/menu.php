<div class="menu-desktop">

    <div class="container">

        <div class="menu-1">

            <div class="row">

                <div class="col-12 col-lg-2 item"><a href="dla-firm-handlowych"><em>dla firm</em> Handlowych</a></div>
                <div class="col-12 col-lg-2 item"><a href="dla-firm-wykonawczych"><em>dla firm</em> Wykonawczych</a></div>
                <div class="col-12 col-lg-2 item"><a href="dla-instalatorow"><em>dla</em> Instalatorów</a></div>
                <div class="col-12 col-lg-2 item"><a href="dla-wodociagow"><em>dla</em> Wodociągów</a></div>
                <div class="col-12 col-lg-2 item"><a href="dla-przemyslu"><em>dla</em> Przemysłu</a></div>
                <div class="col-12 col-lg-2 item"><a href="o-nas"><em>o</em> Nas</a></div>

            </div>

        </div>

        <?php if(isset($content) and isset($s_menuContent[$content]) and is_array($s_menuContent[$content]) and count($s_menuContent[$content]) > 0) { ?>

            <div class="menu-2">

                <div class="row">

                    <?php

                        foreach ($s_menuContent[$content] as $direct => $item) {

                            echo '<div class="col-12 item"><a href="'.$content.','.$direct.'">'.$item.'</div>';

                        }

                    ?>

                </div>

            </div>

        <?php } ?>

    </div>

</div>