<section id="content">
    <div class="wrap-content zerogrid">
        <?php
        if (isset($_REQUEST['get_ide'])) {
            $get_id = $_REQUEST['get_ide'];
            $art_info = $obj->getById("article_album", "*", "art_id=$get_id");
            extract($art_info);
            ?>
            <div class="row block02">
                <div class="col-2-3">
                    <div class="wrap-col">
                        <article class="row">
                            <div class="col-3-3">
                                <div class="wrap-col">

                                    <h2><?php echo $art_title; ?></h2>
                                    <p><?php echo $art_content; ?></p>

                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <?php
        } elseif (isset($_REQUEST['post_id'])) {
            $postarti = $_REQUEST['post_id'];
            $postari_info = $obj->getById("article_album", "*", "art_id=$postarti");
            extract($postari_info);
            ?>
            <div class="row block02">
                <div class="col-2-3">
                    <div class="wrap-col">
                        <article class="row">
                            <div class="col-3-3">
                                <div class="wrap-col">
                                    <img src="<?php echo $art_thumnail; ?>"/>
                                </div>
                            </div>
                            <div class="col-3-3">
                                <div class="wrap-col">
                                    <h2><?php echo $art_title; ?></h2>
                                    <p><?php echo $art_content; ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } elseif (isset($_REQUEST['eventart_id'])) {
        $eventAriId = $_REQUEST['eventart_id'];
        $event_art_info = $obj->getById("article_album", "*", "art_id=$eventAriId");
        extract($event_art_info);
        ?>
        <div class="row block02">
            <div class="col-2-3">
                <div class="wrap-col">
                    <article class="row">
                        <div class="col-3-3">
                            <div class="wrap-col">
                                <img src="<?php echo $art_thumnail; ?>"/>
                            </div>
                        </div>
                        <div class="col-3-3">
                            <div class="wrap-col">
                                <h2><a href="#"><?php echo $art_title; ?></a></h2>
                                <div class="info">By <?php echo $art_author; ?> on <?php echo $art_published; ?> with <a href="#">01 Commnets</a></div>
                                <p><?php echo $art_content; ?></p>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>
        <?php
    } else{
        ?>
        <div class="row block01">
            <?php
            $all_service = $obj->getAllMenu("article_album", "*", "cat_id=1");
            foreach ($all_service as $servicelist) {
                extract($servicelist);
                ?>
                <div class="col-1-3">
                    <div class="wrap-col box">
                        <h2><?php echo $art_title; ?></h2>
                        <p><?php
                            $toarray = explode(" ", $art_content);
                            if (count($toarray) > 15) {
                                $to_slice = array_slice($toarray, 0, 18);
                                $tostring = implode(" ", $to_slice);
                                echo $tostring;
                                ?>
                                <a onclick="service(<?php echo $art_id; ?>)" href="javascript:void(0)">[----]</a>
                                <?php
                            } else {
                                echo $art_content;
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row block02">
            <div class="col-2-3">
                <div class="wrap-col">
                    <div class="heading"><h2>Latest Blog</h2></div>
                    <?php
                    $all_post = $obj->getAllMenu("article_album", "*", "art_status=1 AND cat_id=2");
                    //$postlist=$all_post[''];
                    for ($i = 0; $i < 5; $i++) {
                        extract($all_post[$i]);
                        ?>
                        <article class="row">
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    <img src="<?php echo $art_thumnail; ?>"/>
                                </div>
                            </div>
                            <div class="col-2-3">
                                <div class="wrap-col">
                                    <h2><a onclick="post_view(<?php echo $art_id; ?>)" href="javascript:void(0)"><?php echo $art_title; ?></a></h2>
                                    <div class="info">By <?php echo $art_author; ?> on <?php echo $art_published; ?> with <a href="#">01 Commnets</a></div>
                                    <p><?php
                                        $postarray = explode(" ", $art_content);
                                        if (count($postarray) > 20) {
                                            $postslice = array_slice($postarray, 0, 20);
                                            $poststri = implode(" ", $postslice);
                                            echo $poststri;
                                            ?>
                                            <a onclick="post_view(<?php echo $art_id; ?>)" href="javascript:void(0)">[......]</a>
                                            <?php
                                        } else {
                                            echo $art_content;
                                        }
                                        ?></p>
                                </div>
                            </div>
                        </article>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>