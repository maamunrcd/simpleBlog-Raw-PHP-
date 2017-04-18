<?php
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['host'] = $_SERVER['HTTP_HOST'];
$current_page = "http://" . $_SESSION['host'] . $_SESSION['current_page'];
$site_url = "http://" . $_SESSION['host'] . "/zBoomMusic/";
include '../database.php';
date_default_timezone_set("Asia/Dhaka");
$pub_date = date('d/m/Y');
$pub_time = date('h:i A');
$arti_pub_time_defo = date('h:i');
// Current time AM OR PM Start
$currentDateTime = date('h:i A');
$time_with_ampm = date('A', strtotime($currentDateTime));
// Current time AM OR PM End
$file_path = "upolad/";
$file__thum_path = $file_path . "thum/";
// Code For File Upload //////////////////////
if (isset($_REQUEST['upload'])) {
    $all_file = $_FILES["upload_file"];
    $upload_path = "../upolad/";
    $upload_path_thum = $upload_path . "thum/";
    for ($i = 0; $i < count($all_file['type']); $i++) {
        $get_type = $all_file['name'][$i];
        $get_size = $all_file['size'][$i];
        $file_ext = pathinfo($get_type, PATHINFO_EXTENSION);
        $file_name = pathinfo($get_type, PATHINFO_FILENAME);
        $new_filename = sha1(uniqid($file_name)) . "." . $file_ext;
        if ($get_size < 10000000) {
            if ($file_ext == "jpg" || $file_ext == "jpeg" || $file_ext == "png" || $file_ext == "gif") {
                $file_back_path = $all_file['tmp_name'][$i];
                if (move_uploaded_file($file_back_path, $upload_path . $new_filename)) {
                    $file_location = $upload_path . $new_filename;
                    copy($file_location, $upload_path_thum . $new_filename);
                    $thum_location_file = $upload_path_thum . $new_filename;
                    $image = new Eventviva\ImageResize($thum_location_file);
                    $image->scale(40);
                    $image->save($thum_location_file);
                    //$link_location=$SITE_URL.$new_filename.$new_filename;
                    $link_location = $site_url . $file_path . $new_filename;
                    if ($obj->Insert("path", "path_name='$new_filename',path_type='$file_ext',path_size='$get_size',path_thum='$new_filename',path_link='$link_location',path_date='$pub_date',path_status='1'")) {
                        
                    }
                }
            }
        }
    }
    header("location:media_gallery.php");
}
// Code for Logout 
if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'logout') {
    session_destroy();
    header("location:index.php");
}
//end logout code
// Code for redirect index page
if (!isset($_SESSION['user_name'])) {
    header("location:index.php");
}
//Insert article php start
if (isset($_REQUEST['add_articale'])) {
    $all_datas = $_REQUEST;
//    echo "<pre>";
//    print_r($all_datas);
//    echo "</pre>";
//    extract($all_datas);
//    echo $add_arti_featured_img;
//    exit();
    extract($all_datas);
    $art_author_name = $_SESSION['user_name'];
    $arti_pub_time = $article_time . " " . $time_with_ampm;
    if($obj->Insert("article_album","cat_id='$add_arti_categories',art_title='$add_arti_title',art_subtitle='$add_arti_subtitle',art_content='$content_editor',art_thumnail='$add_arti_featured_img',art_published_date='$add_arti_date',artcle_public_time='$arti_pub_time',art_author='$art_author_name',art_status='$add_arti_visibitlie'")){
        header("location:article.php");
    }else{
        header("location:dashbord.php");
    }
}
//End Insert article php.

//Update article start here
if(isset($_REQUEST['update_articale'])){
    $update_article_value=$_REQUEST;
    extract($update_article_value);
    $art_author_name = $_SESSION['user_name'];
    $arti_pub_time = $article_time . " " . $time_with_ampm;
    if($obj->Update("article_album","cat_id='$add_arti_categories',art_title='$add_arti_title',art_subtitle='$add_arti_subtitle',art_content='$content_editor',art_thumnail='$add_arti_featured_img',art_thumnail='$add_arti_featured_img',art_published_date='$add_arti_date',artcle_public_time='$arti_pub_time',art_author='$art_author_name',art_status='$add_arti_visibitlie'","art_id='$article_id'")){
        header("location:article.php");
    }else{
        header("location:dashbord.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>zBoomMusic | admin</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
        <link href="css/icheck/flat/green.css" rel="stylesheet" />
        <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />
        <link href="../admin/css/clockpicker.css" rel="stylesheet" type="text/css" />
        <link href="../admin/css/bootstrap-clockpicker.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>