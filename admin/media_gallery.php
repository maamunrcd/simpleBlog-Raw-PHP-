<?php
include './admin_header.php';
include './sidebar_menu.php';
include './top_nav.php';
//$rock=date_create("12/12/12");
//$update=date_format($rock,'d M Y');
if (isset($_REQUEST['update_image'])) {
    $all_data_result=$_REQUEST;
    extract($all_data_result);
    if ($obj->Update("path","path_title='$path_name',path_alt='$path_alt',path_content='$image_discription',path_status='$status'","path_id='$update_path_id'")) {
        echo "Upload Sucess";
    }
}elseif(isset($_REQUEST['path_id_del'])){
    $gel_media_id=$_REQUEST['path_id_del'];
    if($obj->Delete("path","path_id='$gel_media_id'")){
        
    }
}
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
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
                        if (isset($_REQUEST['path_id'])) {
                            $path_main_id = $_REQUEST['path_id'];
                            ?>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <?php
                                         $all_img = $obj->getAll("path", "*");
                                        foreach ($all_img as $single_image) {
                                            extract($single_image);
                                            ?>
                                            <div class="col-md-2">
                                                <a href="media_gallery.php?path_id=<?php echo $path_id; ?>">
                                                    <div class="thumbnail">
                                                        <div class="image">
                                                            <img style="width: 100%; display: block;" src="<?php echo $path_link; ?>" alt="image" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="thunbnail_bg">
                                        <div class="thumbnail single_image">
                                            <?php
                                            $path_details = $obj->getById("path", "*", "path_id=$path_main_id");
                                            extract($path_details);
                                            ?>
                                            <img style="width: 100%; display: block;" src="<?php echo $path_link; ?>" alt="image" />
                                            <?php
                                            ?>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <?php echo $path_name; ?>
                                            </li>
                                            <li class="list-group-item">
                                                <?php echo $path_date; ?>
                                            </li>
                                            <li class="list-group-item">
                                                <?php
                                                $get_img_size = getimagesize($path_link);
                                                echo $get_img_size['0'] . " &times " . $get_img_size['1'];
                                                ?>
                                            </li>
                                            <li class="list-group-item"> <a class="text text-danger" href="media_gallery.php?path_id_del=<?php echo $path_id; ?>">Delete Permanently</a></li>
                                        </ul>
                                        <form role="form" action="media_gallery.php" method="post">
                                            <div class="form-group">
                                                <label for="path_name">Image Title</label>
                                                <input name="path_name" type="text" value="<?php echo $path_title; ?>" class="form-control" id="path_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="path_alt">Image alt</label>
                                                <input name="path_alt" type="text" value="<?php echo $path_alt; ?>" class="form-control" id="path_alt">
                                            </div>
                                            <div class="form-group">
                                                <label for="path_link">Image Link</label>
                                                <input name="path_link" type="text" value="<?php echo $path_link; ?>" class="form-control" id="path_link">
                                            </div>
                                            <div class="form-group">
                                                <label for="image_content">Image Description</label>
                                                <textarea name="image_discription" value="<?php echo $path_content; ?>" class="form-control" id="image_content"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Image Visibility</label>
                                                <select name="status" class="form-control">
                                                    <option value="1" <?php
                                                    if ($path_status == '1') {
                                                        echo "selected";
                                                    };
                                                    ?>>Published</option>
                                                    <option value="0" <?php
                                                    if ($path_status == '0') {
                                                        echo "selected";
                                                    };
                                                    ?>>Unpublished</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="update_path_id" value="<?php echo $path_main_id;?>">
                                            </div>
                                            <button type="submit" name="update_image" class="btn btn-danger">Update Image</button>
                                            <a class="btn btn-success" href="form_upload.php">Upload New Media</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="row">
                                <?php
                                $all_img = $obj->getAll("path", "*");
                                if (count($all_img) > 0) {
                                    foreach ($all_img as $single_image) {
                                        extract($single_image);
                                        ?>
                                        <div class="col-md-2">
                                            <a href="media_gallery.php?path_id=<?php echo $path_id; ?>">
                                                <div class="thumbnail">
                                                    <div class="image">
                                                        <img style="width: 100%; display: block;" src="<?php echo $path_link; ?>" alt="image" />
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "Hello World";
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
    <?php
    include './admin_footer.php';
    ?>