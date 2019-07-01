<div class="container-fluid">
    <div class="row">
        <div class="col-xs">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $slider = scandir('layout/graphic/slider');
                    $active = ' active';
                    foreach ($slider as $s) {

                        if($s == '.' or $s == '..')
                            continue;

                        echo '<div class="carousel-item'.$active.'">';

                        echo '<img class="d-block w-100" src="layout/graphic/slider/'.$s.'" alt="Slider">';

                        echo '</div>';

                        if($active != '')
                            $active = '';

                    }
                    
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fal fa-chevron-circle-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fal fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>