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
                            <a href="inner.php?get_ide=<?php echo $art_id; ?>">[----]</a>
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