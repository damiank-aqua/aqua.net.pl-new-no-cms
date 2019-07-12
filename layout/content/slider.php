<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="padding: 0">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $slider = scandir('layout/graphic/slider');
                    $countRowDataDisplay = 0;
                    $active = ' active';
                    foreach ($slider as $s) {

                        if($s == '.' or $s == '..')
                            continue;

                        echo '<div class="carousel-item'.$active.'">';

                        if(isset($s_slider[$s]['title']) and isset($s_slider[$s]['content'])) {

                              echo '<div class="carousel-caption d-none d-md-block">
                                    <h3>' . $s_slider[$s]['title'] . '</h3>
                                    ' . ($s_slider[$s]['content'] != '' ? '<p>' . $s_slider[$s]['content'] . '</p>' : '') . '
                                    </div>';

                        }

                        echo '<img class="d-block w-100" src="layout/graphic/slider/'.$s.'" alt="Slider">';

                        echo '</div>';

                        if($active != '')
                            $active = '';

                        $countRowDataDisplay++;

                    }
                    
                    ?>
                </div>
                <?php if(count($slider) > 3) { ?>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fal fa-chevron-circle-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fal fa-chevron-circle-right"></i>
                </a>
                <?php } ?>
                <?php

                $active = ' class="active"';
                echo '<ol class="carousel-indicators">';
                for ($i = 0; $i < $countRowDataDisplay; $i++) {

                    echo '<li data-target="#carouselExampleControls" data-slide-to="'.$i.'"'.$active.'></li>';

                    $active = '';

                }
                echo '</ol>';

                ?>
            </div>
        </div>
    </div>
</div>