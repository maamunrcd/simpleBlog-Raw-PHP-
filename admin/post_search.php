<?php
include './../database.php';
if (isset($_REQUEST['show_perpage'])) {
    $perpage_show = $_REQUEST['show_perpage'];
    for ($i = 0; $i < $perpage_show; $i++) {
        $all_articles = $obj->getAll("article_album", "*");
        if (!empty($all_articles[$i])) {
            ?>
            <tr>
                <td>
                    <?php
                    echo $all_articles[$i]["art_id"];
                    ?>
                </td>
                <td>
                    <h4 class="title">
                        <a href="../inner.php?eventart_id=<?php echo $all_articles[$i]["art_id"]; ?>"><?php echo $all_articles[$i]["art_title"]; ?></a>
                    </h4>
                </td>
                <td>
                    <?php
                    if (empty($all_articles[$i]["art_thumnail"])) {
                        
                    } else {
                        ?>
                        <img width="50%" src="<?php echo $all_articles[$i]["art_thumnail"]; ?>">
                        <?php
                    }
                    ?>
                </td>
                <td><?php
                    $postarray = explode(" ", $all_articles[$i]["art_content"]);
                    if (count($postarray) > 8) {
                        $postslice = array_slice($postarray, 0, 8);
                        $poststri = implode(" ", $postslice);
                        echo $poststri . " ....";
                    } else {
                        echo $all_articles[$i]["art_content"];
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($all_articles[$i]["art_status"] == "0") {
                        echo "Unpublished";
                    } elseif ($all_articles[$i]["art_status"] == "1") {
                        echo "Published";
                    } elseif ($all_articles[$i]["art_status"] == "2") {
                        echo "Draft";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $cat_match_id = $all_articles[$i]["cat_id"];
                    $get_catid_name = $obj->getById("categorys", "*", "cat_id='$cat_match_id'");
                    echo $get_catid_name['cat_name'];
                    ?>
                </td>
                <td><a href="../inner.php?eventart_id=<?php echo $all_articles[$i]["art_id"]; ?>" class="btn-sm btn-success" href=""><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a class="btn-sm btn-info" href="edit.php?edit_post=<?php echo $all_articles[$i]["art_id"] ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="?art_del=<?php echo $all_articles[$i]["art_id"]; ?>" class="btn-sm btn-danger" href=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                </td>
            </tr>
            <?php
        }
    }
} elseif (isset($_REQUEST['search_hint'])) {
    $src_hint = $_REQUEST['search_hint'];
    if (!empty($src_hint)) {
        $hint_lowe = strtolower($src_hint);
        $hint_lenth = strlen($hint_lowe);
        $all_articles = $obj->getAll("article_album", "*");
        for ($i = 0; $i < count($all_articles); $i++) {
            if (stristr($all_articles[$i]["art_title"], substr($hint_lowe, 0)) || stristr($all_articles[$i]["art_content"], substr($hint_lowe, 0))) {
                ?>

                <tr>
                    <td>
                        <?php
                        echo $all_articles[$i]["art_id"];
                        ?>
                    </td>
                    <td>
                        <h4 class="title">
                            <a href="../inner.php?eventart_id=<?php echo $all_articles[$i]["art_id"]; ?>"><?php echo $all_articles[$i]["art_title"]; ?></a>
                        </h4>
                    </td>
                    <td>
                        <?php
                        if (empty($all_articles[$i]["art_thumnail"])) {
                            
                        } else {
                            ?>
                            <img width="50%" src="<?php echo $all_articles[$i]["art_thumnail"]; ?>">
                            <?php
                        }
                        ?>
                    </td>
                    <td><?php
                        $postarray = explode(" ", $all_articles[$i]["art_content"]);
                        if (count($postarray) > 8) {
                            $postslice = array_slice($postarray, 0, 8);
                            $poststri = implode(" ", $postslice);
                            echo $poststri . " ....";
                        } else {
                            echo $all_articles[$i]["art_content"];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($all_articles[$i]["art_status"] == "0") {
                            echo "Unpublished";
                        } elseif ($all_articles[$i]["art_status"] == "1") {
                            echo "Published";
                        } elseif ($all_articles[$i]["art_status"] == "2") {
                            echo "Draft";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $cat_match_id = $all_articles[$i]["cat_id"];
                        $get_catid_name = $obj->getById("categorys", "*", "cat_id='$cat_match_id'");
                        echo $get_catid_name['cat_name'];
                        ?>
                    </td>
                    <td><a href="../inner.php?eventart_id=<?php echo $all_articles[$i]["art_id"]; ?>" class="btn-sm btn-success" href=""><i class="glyphicon glyphicon-eye-open"></i> View</a>
                        <a class="btn-sm btn-info" href="edit.php?edit_post=<?php echo $all_articles[$i]["art_id"] ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="?art_del=<?php echo $all_articles[$i]["art_id"]; ?>" class="btn-sm btn-danger" href=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php
            } else {
                if ($i == 0) {
                    ?>
                    <tr>
                        <td colspan = "8"><h4 class = "text text-danger text-center">No Article found</h4></td>
                    </tr>

                    <?php
                }
            }
        }
    } else {
        $all_articles = $obj->getAll("article_album", "*");
        foreach ($all_articles as $article) {
            extract($article);
            $cat_match_id = $cat_id;
            ?>
            <tr>
                <td><?php
                    echo $art_id;
                    ?>
                </td>
                <td><h4 class="title">
                        <a href="../inner.php?eventart_id=<?php echo $art_id; ?>"><?php echo $art_title; ?></a>
                    </h4>
                </td>
                <td>
                    <?php
                    if (empty($art_thumnail)) {
                        
                    } else {
                        ?>
                        <img width="50%" src="<?php echo $art_thumnail; ?>">
                        <?php
                    }
                    ?>
                </td>
                <td><?php
                    $postarray = explode(" ", $art_content);
                    if (count($postarray) > 8) {
                        $postslice = array_slice($postarray, 0, 8);
                        $poststri = implode(" ", $postslice);
                        echo $poststri . " ....";
                    } else {
                        echo $art_content;
                    }
                    ?></td>
                <td>
                    <?php
                    if ($art_status == "0") {
                        echo "Unpublished";
                    } elseif ($art_status == "1") {
                        echo "Published";
                    } elseif ($art_status == "2") {
                        echo "Draft";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $cat_match_id = $cat_id;
                    $get_catid_name = $obj->getById("categorys", "*", "cat_id='$cat_match_id'");
                    echo $get_catid_name['cat_name'];
                    ?>
                </td>
                <td><a href="../inner.php?eventart_id=<?php echo $art_id; ?>" class="btn-sm btn-success" href=""><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a class="btn-sm btn-info" href="edit.php?edit_post=<?php echo $art_id; ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="?art_del=<?php echo $art_id; ?>" class="btn-sm btn-danger" href=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                </td>
            </tr>
            <?php
        }
    }
} 