<?php
include './admin_header.php';
include './sidebar_menu.php';
include './top_nav.php';
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Welcome to ZBoomMusic</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                    $menu_content = $obj->getById("pages", "*", "page_attribute='about us'");
                    ?>
                    <p><?php echo $menu_content['page_content']; ?></p>
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                <div class="count">2500</div>
                <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                <div class="count">123.50</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                <div class="count green">2,500</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                <div class="count">4,567</div>
                <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                <div class="count">2,315</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 class="collapse-link">Recent Post</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <?php
                            if (isset($_REQUEST['art_del'])) {
                                $art_ide = $_REQUEST['art_del'];
                                if ($art_ide) {
                                    ?>
                                    <div class="btn-lg btn-danger">
                                        <span style="color: #fff;">Are you sure do you want to delete</span>
                                        <a href="?del_con=<?php echo $art_ide; ?>" class="btn-sm btn-success" href="">Yes</a>
                                        <a href="index.php" class="btn-sm btn-info" href="">No</a>
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
                            <ul class="list-unstyled timeline widget">
                                <li>
                                    <div class="block">
                                        <div class="block_content">
                                            <a style="border-radius: 0;" href="add.php?add_post" class="btn-lg btn-success add_new_post" href="">Add new post</a>
                                            <br>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                $recent_post = $obj->getAllMenu("article_album", "*", "cat_id='2'");
                                $array_pop = array_slice($recent_post, -4);
                                foreach ($array_pop as $recent_po) {
                                    extract($recent_po);
                                    ?>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h4 class="title">
                                                    <a href="../inner.php?eventart_id=<?php echo $art_id; ?>"><?php echo $art_title; ?></a>
                                                </h4>
                                                <div><span>By</span> <a><?php echo $art_author; ?></a> <span>on <?php echo $art_published_date; ?> with</span> <a>Comments <?php echo count($all_comment = $obj->getAllMenu("comments", "*", "comment_art_id='art_id'")); ?></a></div>
                                                <p class="excerpt">
                                                    <?php                                                    
                                                    $to_var = explode(" ", $art_content);
                                                    if (count($to_var) > 50) {
                                                        $to_slice = array_slice($to_var, 0, 50);
                                                        $to_strignt = implode($to_slice, " ");
                                                        echo $to_strignt . "<br>";
                                                    }else{
                                                        echo $art_content;
                                                    }
                                                    ?>
                                                </p>
                                                <a href="../inner.php?eventart_id=<?php echo $art_id; ?>" class="btn-sm btn-success" href=""><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                                <a class="btn-sm btn-info" href="edit.php?edit_post=<?php echo $art_id; ?>"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                <a href="?art_del=<?php echo $art_id; ?>" class="btn-sm btn-danger" href=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                            </div>
                                        </div>
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
    <!-- footer content -->
    <?php
    include './admin_footer.php';
    ?>