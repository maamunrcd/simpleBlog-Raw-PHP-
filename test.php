<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $demo=array("hello","world","H");
            for($i=0;$i<count($demo);$i++){
                 echo stristr("Hello world!",substr($demo[$i], 0))."<br>";
            }
        ?>
    </body>
</html>

