<?php
include './database.php';
$all_articale = $obj->getAllMenu("article_album", "*", "art_status=1");
if (isset($_REQUEST['txt'])) {
    $search_text = $_REQUEST['txt'];
    $low = strtolower($search_text);
    if (strlen($low) != 0) {
        for ($i = 0; count($all_articale) > $i; $i++) {
            $single_title = $all_articale[$i]['art_title'];
            if ($show_title = stristr($single_title, $low)) {
                ?>
                <li><a href="inner.php?eventart_id=<?php echo $all_articale[$i]['art_id']; ?>"><?php echo $single_title; ?></a></li>
                <?php
            }
        }
    }
}
?>