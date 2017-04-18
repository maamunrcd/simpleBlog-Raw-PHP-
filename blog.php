﻿<?php
include ("header.php");
?>
<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block03">
            <div class="col-2-3">
                <div class="wrap-col">
                    <?php
                    $perpage = 2;
                    if (isset($_REQUEST['page'])) {
                        $page = $_REQUEST['page'];
                    } else {
                        $page = 1;
                    }
                    $calc = $page * $perpage;
                    $start = $calc - $perpage;
                    $page_data = $obj->getlimit("article_album", "*", "cat_id=2", $start, $perpage);
                    foreach ($page_data as $pageview) {
                        extract($pageview);
                        ?>
                        <article>
                            <img src="<?php echo $art_thumnail; ?>"/>
                            <h2><a href="#"><?php echo $art_title; ?></a></h2>
                            <div class="info">[By <?php echo $art_author; ?> on <?php echo $art_published_date; ?> with <a href="#">01 Commnets</a>]</div>
                            <p><?php
                                $to_vari = explode(" ", $art_content);
                                if (count($to_vari) > 30) {
                                    $to_slice = array_slice($to_vari, 0, 30);
                                    $to_string = implode(" ", $to_slice);
                                    echo $to_string;
                                    ?>
                                    <a href="inner.php?eventart_id=<?php echo $art_id; ?>">[......]</a>
                                    <?php
                                } else {
                                    echo $art_content;
                                }
                                ?>
                            </p>
                        </article>
                        <?php
                    }
                    ?>
                    <ul id="pagi">
                        <?php
                        if (isset($page)) {
                            $toal_item = count($obj->getAllMenu("article_album", "*", "cat_id=2"));
                            $total_page = $toal_item / $perpage;
                        }
                        if ($page <= 1) {
                            echo "";
                        } else {
                            $j = $page - 1;
                            echo "<li><a href='blog.php?page=$j'>< PREV</a><li>";
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($page <> $i) {
                                echo "<li><a  href='blog.php?page=$i'>$i</a></li>";
                            } else {
                                echo "<li><a class='current' href=''>$i</a></li>";
                            }
                        }
                        if ($page == $total_page) {
                            echo "";
                        } else {
                            $j = $page + 1;
                            echo "<li><a href='blog.php?page=$j'>NEXT ></a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
            include ("sidebar.php");
            include ("footer.php");
            