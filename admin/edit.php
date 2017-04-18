<?php
include './admin_header.php';
include './sidebar_menu.php';
include './top_nav.php';
?>
<!-- page content -->
<div class="right_col" role="main">
    <?php
    echo $page_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (isset($_REQUEST['edit_post'])) {
        $edit_article_id=$_REQUEST['edit_post'];
        $edit_article=$obj->getById("article_album","*","art_id='$edit_article_id'");
        extract($edit_article);
        $cat_edit_id=$cat_id;
        ?>
    <form action="edit.php" method="post">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="x_panel">
                        <h3 class="text-danger">Update Article</h3>
                        <div class="form-group">
                            <label for="post_title"><h4>Update title here</h4></label>
                            <input name="add_arti_title" value="<?php echo $art_title; ?>" type="text" class="form-control" id="post_title">
                        </div>
                        <div class="form-group">
                            <label for="post_subtitle"><h5>Update sub title</h5></label>
                            <input name="add_arti_subtitle" value="<?php echo $art_subtitle; ?>" type="text" class="form-control" id="post_subtitle">
                        </div>
                        <div class="form-group">
                            <label for="editor"><h4>Update Post content</h4></label>
                            <textarea class="form-control" name="content_editor" id="content_editor"><?php echo $art_content; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="x_panel">
                        <div class="form-group">
                            <label for="visibility"><h4>Visibility </h4></label>
                            <div class="form-group">
                                <select name="add_arti_visibitlie" id="visibility" class="form-control" id="sel1">
                                    <option value="0" <?php if($art_status==0){ echo 'selected="selected"';}?>>Unpublished</option>
                                    <option value="1" <?php if($art_status==1){ echo 'selected="selected"';}?>>Published</option>
                                    <option value="2" <?php if($art_status==2){ echo 'selected="selected"';}?>>Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="post_title"><h4>Published Date</h4></label>
                            <div class="control-group">
                                <div class="xdisplay_inputx form-group has-feedback">
                                    <span class="fa fa-calendar-o form-control-feedback pull-left" aria-hidden="true"></span>
                                    <input name="add_arti_date" value="<?php echo $art_published_date; ?>" type="text" class="form-control has-feedback-left" id="single_cal4" aria-describedby="inputSuccess2Status4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="post_title"><h4>Published Time</h4></label>
                            <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                <input name="article_time" value="<?php echo $artcle_public_time; ?>" type="text" class="form-control" value="<?php echo $arti_pub_time_defo; ?>">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="editor"><h4>Categories</h4></label>
                            <div class="form-group">
                                <select name="add_arti_categories" id="visibility" class="form-control" id="sel1">
                                    <?php
                                    $all_categorys_list = $obj->getAllMenu("categorys", "*", "cat_status='1'");
                                    foreach ($all_categorys_list as $categorys) {
                                        extract($categorys);
                                        ?>
                                        <option value="<?php echo $cat_id; ?>" <?php if($cat_id==$cat_edit_id){ echo 'selected="selected"';}?>><?php echo $cat_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group featured_image">
                            <label class="container"><h4>Featured Image</h4></label>
                            <a class="text text-success" data-toggle="modal" data-target=".bs-example-modal-lg">Set featured image</a>
                            <input name="add_arti_featured_img" type="hidden" class="featured_img_field" type="text">
                            <img style="width:100%;height: 40%;margin:10px 0;" id="set_feture_img" src="<?php echo $art_thumnail;?>">
                            <a style="opacity: 0;" id="remove_image" class="text text-danger">Remove featured image</a>
                            <!--View Model with Image Gallery-->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <div class="page-title">
                                                <div class="title_left">
                                                    <h3>Media Library  <a href="form_upload.php" class="btn-sm btn-success media_add_btn" href="">Add New</a></h3>
                                                </div>
                                                <div class="title_right">
                                                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search for...">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button">Go!</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <!-- page content -->
                                            <div role="main">
                                                <div class="">
                                                    <div class="clearfix"></div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <h2>Media Gallery</h2>
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
                                                                <div class="x_content media_gallery_thumnail">
                                                                    <style>
                                                                        .media_gallery_thumnail .thumbnail{
                                                                            height: 120px;
                                                                        }
                                                                        .media_gallery_thumnail .thunbnail_bg{
                                                                            background:#f6f5f4;
                                                                            padding:15px;
                                                                        }
                                                                        .media_gallery_thumnail .thunbnail_bg .thumbnail{
                                                                            height: auto;
                                                                        }
                                                                        .media_gallery_thumnail .thumbnail.single_image .image{
                                                                            height: 300px;
                                                                            margin-bottom: 20px;
                                                                        }
                                                                    </style>
                                                                    <?php
                                                                    ?>
                                                                    <div class="row">
                                                                        <?php
                                                                        $all_img = $obj->getAll("path", "*");
                                                                        foreach ($all_img as $single_image) {
                                                                            extract($single_image);
                                                                            ?>
                                                                            <div class="col-md-2">
                                                                                <a path_id="<?php echo $path_id; ?>" class="image_sorce">
                                                                                    <div class="thumbnail">
                                                                                        <img style="width: 100%; display: block;" src="<?php echo $path_link; ?>" alt="image" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span id="set_fet_img" class="btn btn-success" aria-hidden="true">Set Featured Image</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /page content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $edit_article_id; ?>" name="article_id">
                            <button style="width:100%;border-radius: 0;border:none;" type="submit" class="btn-lg btn-success" name="update_articale">Update and Publish</button>
                        </div>
                        <link href="css/floatexamples.css" rel="stylesheet" type="text/css"/>
                    </div>

                </div>
                <?php
            }
            ?>
        </div>
    </form>
    <!-- footer content -->
    <?php
    include './admin_footer.php';
    ?>