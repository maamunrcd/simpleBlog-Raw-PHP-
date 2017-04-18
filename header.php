<?php
include("./database.php");
$GLOBALS['site_url']="http://localhost/zBoomMusic/";
date_default_timezone_set("Asia/Dhaka");
$pub_date = date('d M Y');
$pub_time = date('H:i:s', time() - date('Z'));
?>
﻿<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>zBoomMusic Free Html5 Responsive Template</title>
    <meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--CSS==================================================-->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/responsiveslides.css" />
    <link rel="stylesheet" href="css/album.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
    <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
                <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->

    <link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
    <script src="js/jquery.min.js"></script>
    <script src="js/responsiveslides.js"></script>
    <script src="js/album.js"></script>
    <script src="js/lightbox.js"></script>
    <script>
        $(document).ready(function() {
            $("#album_slider").album_sliders({
                manualControls: '#album'
            });
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                maxwidth: 962,
                namespace: "centered-btns"
            });
            $(".replay_btn").click(function() {
                var comment_id = $(this).attr('comment-id');
                $('#comment_reply_form_' + comment_id).slideToggle('500');
                $('.comment_box').slideToggle('500');
            });
        });
    </script>
    <script src="js/ajex.js"></script>
</head>
<body>
    <!--------------Header--------------->
    <header>
        <div class="wrap-header zerogrid">
            <div id="logo"><a href="index.php"><img src="./images/logo.png"/></a></div>
            <div id="search">
                <form action="inner.php" method="post">
                    <input type="text" id="txt1" name="search_query" placeholder="Search..." onkeyup="showHint(this.value)">
                    <input class="button-search" type="submit" name="search" value="">
                    <ul id="art_search">

                    </ul>
                </form>
            </div>
        </div>
    </header>

    <nav>
        <div class="wrap-nav zerogrid">
            <div class="menu">
                <ul>
                    <?php
                    $all_menus = $obj->getAllOrder("pages", "*", "page_status='1'", "menu_position");
                    foreach ($all_menus as $menus) {
                        extract($menus);
                        if ($page_attribute == "home") {
                            ?>
                            <li class = "
                            <?php
                            if (isset($_REQUEST['page_id'])) {
                                
                            } else {
                                echo "current";
                            }
                            ?>
                                "><a href="<?php echo $page_url; ?>"><?php echo $page_name; ?></a></li>
                                <?php
                            } else {
                                ?>
                            <li class = "
                            <?php
                            if (isset($_REQUEST['page_id'])) {
                                $page_ide = $_REQUEST['page_id'];
                                if ($page_id == $page_ide) {
                                    echo "current";
                                }
                            } else {
                                
                            }
                            ?>
                                "><a href="<?php
                                    if (empty($page_url)) {
                                        echo "http://localhost/zBoomMusic/inner.php";
                                    } else {
                                        echo $page_url;
                                    }
                                    ?>?page_id=<?php echo $page_id; ?>"><?php echo $page_name; ?></a></li>
                                <?php
                            }
                        }
                        ?>
                </ul>
            </div>		
        </div>
    </nav>
    <section id="content">
        <div class="wrap-content zerogrid">
