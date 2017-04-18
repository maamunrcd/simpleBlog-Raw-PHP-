<footer>
    <div class="wrap-footer zerogrid">
        <div class="row block09">
            <div class="col-1-4">
                <div class="wrap-col">
                    <div class="box">
                        <?php
                        $about_us = $obj->getById("pages", "*", "page_attribute='about us'");
                        extract($about_us);
                        ?>
                        <div class="heading"><h2>About Us</h2></div>
                        <div class="content">
                            <p><?php echo $page_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-4">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h2>Latest Post</h2></div>
                        <div class="content">
                            <ul>
                                <?php
                                $all_latest_post = $obj->getAllMenu("article_album", "*", "cat_id='2'");
                                if (count($all_latest_post) > 5) {
                                    for ($i = 0; $i < 5; $i++) {
                                        extract($all_latest_post[$i]);
                                        ?>
                                        <li>
                                            <a href="inner.php?eventart_id=<?php echo $art_id; ?>">
                                                <?php
                                                $to_arrat = explode(" ", $art_title);
                                                if (count($to_arrat) > 4) {
                                                    $to_slice = array_slice($to_arrat, 0, 4);
                                                    $to_string = implode(" ", $to_slice);
                                                    echo $to_string;
                                                } else {
                                                    echo $art_title;
                                                }
//                                                
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                } else {
                                    for ($i = 0; $i < count($all_latest_post); $i++) {
                                        extract($all_latest_post[$i]);
                                        ?>
                                        <li>
                                            <a href="inner.php?eventart_id=<?php echo $art_id; ?>">
                                                <?php
                                                $to_arrat = explode(" ", $art_title);
                                                if (count($to_arrat) > 4) {
                                                    $to_slice = array_slice($to_arrat, 0, 4);
                                                    $to_string = implode(" ", $to_slice);
                                                    echo $to_string;
                                                } else {
                                                    echo $art_title;
                                                }
//                                                
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-4">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h2>Hot Albums</h2></div>
                        <div class="content">
                            <div class="tag">
                                <?php
                                $all_categorys = $obj->getAllMenu("categorys", "*", "cat_type='album'");
                                foreach ($all_categorys as $album_cate) {
                                    extract($album_cate);
                                    ?>
                                    <a href="inner.php?alb_ide=<?php echo $cat_id; ?>"><?php echo $cat_name; ?></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-4">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h2>Contact Us</h2></div>
                        <div class="content">
                            <ul>
                                <?php 
                                    $all_contact=$obj->getAll("settings","*");
                                ?>
                                <li>Address :<?php echo $all_contact[0]['key_value']; ?> </li>
                                <li>Phone : <?php echo $all_contact[1]['key_value']; ?> </li>
                                <li>Email : <?php echo $all_contact[2]['key_value']; ?> </li>
                                <li>Website : <?php echo $all_contact[3]['key_value']; ?> </li>
                                <li>Fax : <?php echo $all_contact[4]['key_value']; ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='row copyright">
            <p>Copyright © 2013 - <a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="http://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
        </div>
    </div>
</footer>
</body></html>