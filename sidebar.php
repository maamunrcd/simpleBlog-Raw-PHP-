<div class="col-1-3">
    <div class="wrap-col">
        <div class="box">
            <div class="heading"><h2>Latest Albums</h2></div>
            <div class="content">
                <ul id="album_slider">
                    <li><img src="images/albums.jpg" alt=""></li>
                    <li><img src="images/albums2.jpg" alt=""></li>
                    <li><img src="images/albums3.jpg" alt=""></li>
                </ul>
                <!-- Slideshow 3 Pager -->
                <ul id="album">
                    <li><a href="#"><img src="images/albums_thum.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/albums2_thum.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/albums3_thum.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="box">
            <div class="heading"><h2>Upcoming Events</h2></div>
            <div class="content">
                <div class="list">
                    <ul>
                        <?php
                        $all_events = $obj->getAllMenu("article_album", "*", "cat_id=4 AND art_status=1");
                        for ($i = 0; $i < 7; $i++) {
                            extract($all_events[$i]);
                            ?>
                        <li><a href="inner.php?eventart_id=<?php echo $art_id; ?>"><?php
                                    $toarr_event_art = explode(" ", $art_title);
                                    if (count($toarr_event_art) > 4) {
                                        $toarr_event_artslice = array_slice($toarr_event_art, 0, 4);
                                        $toarr_event_str = implode(" ", $toarr_event_artslice);
                                        echo $toarr_event_str;
                                    } else {
                                        echo $art_title;
                                    }
                                    ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</section>