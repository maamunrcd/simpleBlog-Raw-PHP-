<div class="featured">
    <div class="wrap-featured zerogrid">
        <div class="slider">
            <div class="rslides_container">
                <ul class="rslides" id="slider">
                    <?php
                    $all_slider = $obj->getAllMenu("slider", "*", "slider_status=1");
                    foreach($all_slider as $sliderlist) {
                        extract($sliderlist);
                        ?>
                    <li><img src="<?php echo $slider_thumnail; ?>"></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
