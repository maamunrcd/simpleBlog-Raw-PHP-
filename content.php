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
                            <h2><a href="inner.php?eventart_id=<?php echo $art_id; ?>"><?php echo $art_title; ?></a></h2>
                            <div class="info">By <?php echo $art_author; ?> on <?php echo $art_published_date; ?> with <a href="inner.php?eventart_id=<?php echo $art_id; ?>">Comment <?php echo count($all_comment=$obj->getAllMenu("comments","*","comment_art_id='$art_id'"));?></a></div>
                            <p><?php
                                $postarray = explode(" ", $art_content);
                                if (count($postarray) > 20) {
                                    $postslice = array_slice($postarray, 0, 20);
                                    $poststri = implode(" ", $postslice);
                                    echo $poststri;
                                    ?>
                                    <a href="inner.php?eventart_id=<?php echo $art_id; ?>">[......]</a>
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