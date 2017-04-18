<?php
$cap = rand(1000, 5000);
include ("header.php");
if (isset($_REQUEST['get_ide'])) {
    $eventAriId = $_REQUEST['get_ide'];
    $event_art_info = $obj->getById("article_album", "*", "art_id=$eventAriId");
    extract($event_art_info);
    if (isset($_REQUEST['post_comment'])) {
        $comment_data = $_REQUEST;
        extract($comment_data);
        if ($capture_data == $con_capture) {
            if (!empty($comment_reply_parent_id)) {
                if ($obj->Insert("comment_replay", "comment_id='$comment_reply_parent_id',comment_replay_author='$author_user_name',comment_replay_author_email='$author_user_email',comment_replay_author_website='$author_website',comment_replay_date='$pub_date',comment_replay_time='$pub_time',comment_replay_content='$author_comment',comment_replay_approve='1'")) {
                    
                }
            } elseif ($obj->Insert("comments", "comment_art_id='$art_id',comment_author='$author_user_name',comment_author_email='$author_user_email',author_website='$author_website',comment_date='$pub_date',comment_time='$pub_time',comment_content='$author_comment',comment_approve='1'")) {
                
            }
        }
    }
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
                            <div class="info">By <?php echo $art_author; ?> on <?php echo $art_published_date; ?> with <a href="#">01 Commnets</a></div>
                            <p><?php echo $art_content; ?></p>
                        </div>
                    </div>
                    <div class="col-3-3">
                        <div class="wrap-col">
                            <?php
                            $all_comment = $obj->getAllMenu("comments", "*", "comment_art_id='$art_id'");
                            if (!empty($all_comment)) {
                                foreach ($all_comment as $art_comments) {
                                    extract($art_comments);
                                    ?>
                                    <div class="previus_comments">
                                        <h3><?php echo $comment_author; ?></h3>
                                        <p class="public"><?php echo $comment_date . " AT " . $comment_time; ?></p>
                                        <p><?php echo $comment_content; ?></p>
                                        <a comment-id="<?php echo $comment_id ?>" class="replay_btn" href="javascript:void(0)">Reply</a>
                                    </div>
                                    <?php
                                    $replays = $obj->getAllMenu("comment_replay", "*", "comment_id='$comment_id'");
                                    if (!empty($replays)) {
                                        foreach ($replays as $replay) {
                                            extract($replay);
                                            ?>
                                            <div class="replay previus_comments">
                                                <h3><?php echo $comment_replay_author; ?></h3>
                                                <p class="public"><?php echo $comment_replay_date . " AT " . $comment_replay_time; ?></p>
                                                <p><?php echo $comment_replay_content; ?></p>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <div class="comment_box" style="display: none">
                                        <form class="comment_form" id="comment_reply_form_<?php echo $comment_id ?>" action="" method="post" style="display: none">
                                            <input type="hidden" name="comment_reply_parent_id" value="<?php echo $comment_id ?>">
                                            <label>
                                                <span>Name</span>
                                                <input class="user_names" name="author_user_name" type="text" required placeholder="Name">
                                            </label>
                                            <label>
                                                <span>Email</span>
                                                <input class="user_names"  name="author_user_email" type="email" required placeholder="Email">
                                            </label>
                                            <label>
                                                <span>Website</span>
                                                <input class="user_names" name="author_website" type="text" required placeholder="Website">
                                            </label>
                                            <label>
                                                <span>Commnet</span>
                                                <textarea class="user_names" name="author_comment" rows="8" placeholder="Your Commnets......."></textarea> 
                                            </label>
                                            <label>
                                                <span>Captcha</span>
                                                <span><input class="captures" type="checkbox" name="capture_data" value="<?php echo $cap; ?>"><span class="last_capture"><?php echo $cap; ?></span></span>
                                                <input class="user_capt" name="con_capture" type="text" required placeholder="Check and Write the Capture Code">
                                            </label>
                                            <input class="submit_class" name="post_comment" type="submit" value="Post Commnets">
                                        </form>
                                    </div>
                                    <?php
                                }
                            } else {
                                
                            }
                            ?>
                        </div>
                    </div>
                    <div class="comment_box">
                        <h1 class="replay_item">Leave a Reply</h1>
                        <form class="comment_form" action="" method="post">
                            <label>
                                <span>Name</span>
                                <input class="user_names" name="author_user_name" type="text" required placeholder="Name">
                            </label>
                            <label>
                                <span>Email</span>
                                <input class="user_names"  name="author_user_email" type="email" required placeholder="Email">
                            </label>
                            <label>
                                <span>Website</span>
                                <input class="user_names" name="author_website" type="text" required placeholder="Website">
                            </label>
                            <label>
                                <span>Commnet</span>
                                <textarea class="user_names" name="author_comment" rows="8" placeholder="Your Commnets......."></textarea> 
                            </label>
                            <label>
                                <span>Captcha</span>
                                <span><input class="captures" type="checkbox" name="capture_data" value="<?php echo $cap; ?>"><span class="last_capture"><?php echo $cap; ?></span></span>
                                <input class="user_capt" name="con_capture" type="text" required placeholder="Check and Write the Capture Code">
                            </label>
                            <input class="submit_class" name="post_comment" type="submit" value="Post Commnets">
                        </form>
                    </div>
                </article>
            </div>
        </div>
        <?php
    } elseif (isset($_REQUEST['eventart_id'])) {
        $eventAriId = $_REQUEST['eventart_id'];
        $event_art_info = $obj->getById("article_album", "*", "art_id=$eventAriId");
        extract($event_art_info);
        if (isset($_REQUEST['post_comment'])) {
            $comment_data = $_REQUEST;
            extract($comment_data);
            if ($capture_data == $con_capture) {
                if (!empty($comment_reply_parent_id)) {
                    if ($obj->Insert("comment_replay", "comment_id='$comment_reply_parent_id',comment_replay_author='$author_user_name',comment_replay_author_email='$author_user_email',comment_replay_author_website='$author_website',comment_replay_date='$pub_date',comment_replay_time='$pub_time',comment_replay_content='$author_comment',comment_replay_approve='1'")) {
                        
                    }
                } elseif ($obj->Insert("comments", "comment_art_id='$art_id',comment_author='$author_user_name',comment_author_email='$author_user_email',author_website='$author_website',comment_date='$pub_date',comment_time='$pub_time',comment_content='$author_comment',comment_approve='1'")) {
                    
                }
            }
        }
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
                                <div class="info">By <?php echo $art_author; ?> on <?php echo $art_published_date; ?> with <a href="inner.php?eventart_id=<?php echo $art_id; ?>">Comment <?php echo count($all_comment = $obj->getAllMenu("comments", "*", "comment_art_id='$art_id'")); ?></a></div>
                                <p><?php echo $art_content; ?></p>
                            </div>
                        </div>
                        <div class="col-3-3">
                            <div class="wrap-col">
                                <?php
                                $all_comment = $obj->getAllMenu("comments", "*", "comment_art_id='$art_id'");
                                if (!empty($all_comment)) {
                                    foreach ($all_comment as $art_comments) {
                                        extract($art_comments);
                                        ?>
                                        <div class="previus_comments">
                                            <h3><?php echo $comment_author; ?></h3>
                                            <p class="public"><?php echo $comment_date . " AT " . $comment_time; ?></p>
                                            <p><?php echo $comment_content; ?></p>
                                            <a comment-id="<?php echo $comment_id ?>" class="replay_btn" href="javascript:void(0)">Reply</a>
                                        </div>
                                        <?php
                                        $replays = $obj->getAllMenu("comment_replay", "*", "comment_id='$comment_id'");
                                        if (!empty($replays)) {
                                            foreach ($replays as $replay) {
                                                extract($replay);
                                                ?>
                                                <div class="replay previus_comments">
                                                    <h3><?php echo $comment_replay_author; ?></h3>
                                                    <p class="public"><?php echo $comment_replay_date . " AT " . $comment_replay_time; ?></p>
                                                    <p><?php echo $comment_replay_content; ?></p>
                                                </div>

                                                <?php
                                            }
                                        }
                                        ?>
                                        <div class="comment_box" style="display: none">
                                            <form class="comment_form" id="comment_reply_form_<?php echo $comment_id ?>" action="" method="post" style="display: none">
                                                <input type="hidden" name="comment_reply_parent_id" value="<?php echo $comment_id ?>">
                                                <label>
                                                    <span>Name</span>
                                                    <input class="user_names" name="author_user_name" type="text" required placeholder="Name">
                                                </label>
                                                <label>
                                                    <span>Email</span>
                                                    <input class="user_names"  name="author_user_email" type="email" required placeholder="Email">
                                                </label>
                                                <label>
                                                    <span>Website</span>
                                                    <input class="user_names" name="author_website" type="text" required placeholder="Website">
                                                </label>
                                                <label>
                                                    <span>Commnet</span>
                                                    <textarea class="user_names" name="author_comment" rows="8" placeholder="Your Commnets......."></textarea> 
                                                </label>
                                                <label>
                                                    <span>Captcha</span>
                                                    <span><input class="captures" type="checkbox" name="capture_data" value="<?php echo $cap; ?>"><span class="last_capture"><?php echo $cap; ?></span></span>
                                                    <input class="user_capt" name="con_capture" type="text" required placeholder="Check and Write the Capture Code">
                                                </label>
                                                <input class="submit_class" name="post_comment" type="submit" value="Post Commnets">
                                            </form>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    
                                }
                                ?>
                            </div>
                        </div>
                        <div class="comment_box">
                            <h1 class="replay_item">Leave a Reply</h1>
                            <form class="comment_form" action="" method="post">
                                <label>
                                    <span>Name</span>
                                    <input class="user_names" name="author_user_name" type="text" required placeholder="Name">
                                </label>
                                <label>
                                    <span>Email</span>
                                    <input class="user_names"  name="author_user_email" type="email" required placeholder="Email">
                                </label>
                                <label>
                                    <span>Website</span>
                                    <input class="user_names" name="author_website" type="text" required placeholder="Website">
                                </label>
                                <label>
                                    <span>Commnet</span>
                                    <textarea class="user_names" name="author_comment" rows="8" placeholder="Your Commnets......."></textarea> 
                                </label>
                                <label>
                                    <span>Captcha</span>
                                    <span><input class="captures" type="checkbox" name="capture_data" value="<?php echo $cap; ?>"><span class="last_capture"><?php echo $cap; ?></span></span>
                                    <input class="user_capt" name="con_capture" type="text" required placeholder="Check and Write the Capture Code">
                                </label>
                                <input class="submit_class" name="post_comment" type="submit" value="Post Commnets">
                            </form>
                        </div>
                    </article>
                </div>
            </div>
            <?php
        } elseif (isset($_REQUEST['alb_ide'])) {
            $albu_ite_cate = $_REQUEST['alb_ide'];
            $album_list = $obj->getAllMenu("article_album", "*", "art_status=1 AND cat_id='$albu_ite_cate'");
            ?>
            <div class="row block02">
                <div class="col-2-3">
                    <div class="wrap-col">
                        <?php
                        if (is_array($album_list) || is_object($album_list)) {
                            if (count($album_list) > 0) {
                                foreach ($album_list as $albumserial) {
                                    extract($albumserial);
                                    ?>
                                    <article class="row">
                                        <div class="col-1-3">
                                            <div class="wrap-col">
                                                <img src="<?php echo $art_thumnail; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-2-3">
                                            <div class="wrap-col">
                                                <h2><a href="#"><?php echo $art_title; ?></a></h2>
                                                <p><?php
                                                    //echo nl2br($art_content."\n"); 
                                                    $to_array = explode(" ", $art_content);
                                                    if (count($to_array) > 20) {
                                                        $to_slice = array_slice($to_array, 0, 15);
                                                        $to_strints = implode(" ", $to_slice);
                                                        echo nl2br($to_strints . "\n");
                                                        ?>
                                                        <a href="inner.php?eventart_id=<?php echo $art_id; ?>"> Read More...</a>
                                                        <?php
                                                    } else {
                                                        echo nl2br($art_content . "\n");
                                                    }
                                                    ?></p>
                                            </div>
                                        </div>
                                    </article>
                                    <?php
                                }
                            }
                        } else {
                            ?>
                            <a style="text-align: center;">No Articles In This Category</a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            } elseif (isset($_REQUEST['search'])) {
                ?>
                <div class="row block02">
                    <div class="col-2-3">
                        <div class="wrap-col">
                            <?php
                            $search_cat = $_REQUEST;
                            extract($search_cat);
                            $all_articale = $obj->getAllMenu("article_album", "*", "art_status=1");
                            $low = strtolower($search_query);
                            if (strlen($low) != 0) {
                                for ($i = 0; count($all_articale) > $i; $i++) {
                                    $single_title = $all_articale[$i]['art_title'];
                                    if ($show_title = stristr($single_title, $low)) {
                                        ?>
                                        <article class="row">
                                            <div class="col-1-3">
                                                <div class="wrap-col">
                                                    <img src="<?php echo $all_articale[$i]['art_thumnail']; ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-2-3">
                                                <div class="wrap-col">
                                                    <h2><a href="inner.php?eventart_id=<?php echo $all_articale[$i]['art_id']; ?>"><?php echo $all_articale[$i]['art_title']; ?></a></h2>
                                                    <p><?php
                                                        $content = $all_articale[$i]['art_content'];
                                                        $postarray = explode(" ", $content);
                                                        if (count($postarray) > 20) {
                                                            $postslice = array_slice($postarray, 0, 20);
                                                            $poststri = implode(" ", $postslice);
                                                            echo $poststri;
                                                            ?>
                                                            <a href="inner.php?eventart_id=<?php echo $all_articale[$i]['art_id']; ?>">[......]</a>
                                                            <?php
                                                        } else {
                                                            echo $content;
                                                        }
                                                        ?></p>
                                                </div>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                }
                            } else {
                                ?>
                            <img src="images/404.jpg">
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    ?>
                    <?php
                } else {
                    ?>
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
                                                <div class="info">By <?php echo $art_author; ?> on <?php echo $art_published_date; ?> with <a href="#">01 Commnets</a></div>
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
                        <?php
                    }
                    include("sidebar.php");
                    include("footer.php");
                    ?>