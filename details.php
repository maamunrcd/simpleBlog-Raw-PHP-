<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block02">
            <div class="col-2-3">
                <div class="wrap-col">
                    <?php
                    if (isset($_REQUEST['get_ide'])) {
                        $get_id = $_REQUEST['get_ide'];
                        $art_info = $obj->getById("article_album", "*", "art_id=$get_id");
                        extract($art_info);
                        ?>
                        <article class="row">
                            <div class="col-3-3">
                                <div class="wrap-col">
                                    <h2><?php echo $art_title; ?></h2>
                                    <p><?php echo $art_content; ?></p>
                                </div>
                            </div>
                        </article>
                    <?php
                    }elseif(isset($_REQUEST['post_id'])) {
                        $postarti = $_REQUEST['post_id'];
                        $postari_info = $obj->getById("article_album", "*", "art_id=$postarti");
                        extract($postari_info);
                        ?>
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
                        <?php
                    } elseif (isset($_REQUEST['eventart_id'])) {
                        $eventAriId = $_REQUEST['eventart_id'];
                        $event_art_info = $obj->getById("article_album", "*", "art_id=$eventAriId");
                        extract($event_art_info);
                        ?>
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
                        <?php
                    }
                    ?>
                </div>
            </div>