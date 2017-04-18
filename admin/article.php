<?php
include './admin_header.php';
include './sidebar_menu.php';
include './top_nav.php';
?>
<!-- /page content -->
<div class="right_col article_section" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><big><strong>All Article List</strong></big></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                    if (isset($_REQUEST['art_del'])) {
                        $art_ide = $_REQUEST['art_del'];
                        if ($art_ide) {
                            ?>
                            <div class="btn-lg btn-danger">
                                <span style="color: #fff;">Are you sure do you want to delete</span>
                                <a href="?del_con=<?php echo $art_ide; ?>" class="btn-sm btn-success" href="">Yes</a>
                                <a href="article.php" class="btn-sm btn-info" href="">No</a>
                            </div>
                            <?php
                        }
                    }
                    if (isset($_REQUEST['del_con'])) {
                        $con_delid = $_REQUEST['del_con'];
                        if ($obj->Delete("article_album", "art_id='$con_delid'")) {
                            echo "Deleted Item";
                        }
                    }
                    ?>
                    <div class="row article_search_pagination">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <ul class="pagination">
                                <?php
                                $per_page_item = 8;
                                $total_article = $obj->getAll("article_album", "*");
                                if (isset($_REQUEST['page_no'])) {
                                    $page_num = $_REQUEST['page_no'];
                                } else {
                                    $page_num = 1;
                                }
                                $sho_calcu = $per_page_item * $page_num;
                                $start = $sho_calcu - $per_page_item;
                                $reslut_db = $obj->getByLimit("article_album", "*", "$start", "$per_page_item");
                                if (isset($page_num)) {
                                    $total_page = ceil(count($total_article) / $per_page_item);
                                    echo $total_page;
                                }
                                if ($page_num == 1) {
                                    ?>
                                <li><a href="">PREV</a></li>
                                    <?php
                                }
                                ?>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <select id="show_per_page" name="show_article" class="form-control" onchange="show_perpage(this.value)">
                                <option value="8">Show per page</option>
                                <option value="15">Show per page 15</option>
                                <option value="25">Show per page 25</option>
                                <option value="40">Show per page 40</option>
                                <option value="60">Show per page 60</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search article..." onkeyup="search_post(this.value)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">Cat Id.</th>
                                <th style="width: 20%">Article names</th>
                                <th>Article featured image</th>
                                <th>Article content</th>
                                <th>Article Status</th>
                                <th>Article Categories</th>
                                <th>Article Action</th>
                            </tr>
                        </thead>
                        <tbody id="show_per_page_article">
                            <?php
                            foreach ($reslut_db as $article) {
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
                            ?>
                        </tbody>
                    </table>
                    <!--end project list -->

                </div>
            </div>
        </div>
    </div>
    <!--footer content -->
    <?php
    include './admin_footer.php';
    ?>