<?php
include './image_resize_master/src/ImageResize.php';
include './admin_header.php';
include './sidebar_menu.php';
include './top_nav.php';
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Upload </h3>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Multiple file upload</h2>
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
                    <style>
                        #upload_item{
                            height: 200px;
                            position: relative;
                        }
                        #upload_item:after{
                            content: "Select File";
                            position:absolute;
                            text-align: center;
                            padding-top: 40px;
                            font-size:20px;
                            color: #5B6D7F;
                            top:0;
                            right:0;
                            left:0;
                            bottom:0;
                            background:#354e67;
                            border:3px dotted #2E7CCA;
                        }
                        #upload_item:before{
                            content: "\f093";
                            font-family: 'FontAwesome';
                            font-size: 60px;
                            position: absolute;
                            z-index: 1000;
                            color: #5B6D7F;
                            left: 48%;
                            top: 48%;
                        }
                        .upload_item{
                            margin-top: 15px;
                            border-radius: 0;
                            font-size:18px;
                            padding: 8px 20px;
                            margin-right: 0px;
                            background:#D70064;
                            border:none;
                            transition:all .25s;
                        }
                        .upload_item:hover{
                            background:#354e67;
                        }

                    </style>
                    <div class="x_content">
                        <form id="upload" method="post" action="form_upload.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" name="upload_file[]" type="file" id="upload_item" multiple="multiple">
                                <input class="btn btn-danger pull-right upload_item" type="submit" value="Upload" name="upload">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->
<?php
include './admin_footer.php';
?>