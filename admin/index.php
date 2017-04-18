<!DOCTYPE html>
<?php
session_start();
include '../database.php';
if(isset($_REQUEST['user_name'])) {
    header("location:dashbord.php");
}
?>
<html>
    <head>
        <title>Admin Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/login.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>    
        <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    </head>
    <body>
        <?php
        if (isset($_REQUEST['login'])) {
            extract($users_info = $_REQUEST);
            $password = sha1($user_password);
            if ($obj->getById("users", "*", "user_email='$user_name' AND user_password='$password' AND user_role='1'")) {
                if (isset($_REQUEST['remember_me'])) {
                    setcookie("user_name", $user_name, time() + 50);
                    setcookie("user_password", $_REQUEST['user_password'], time() + 50);
                }
                $data = $obj->getById("users", "*", "user_email='$user_name' AND user_password='$password'");
                $_SESSION['user_name'] = $data['user_name'];
                $_SESSION['user_role'] = $data['user_role'];
                header("location:dashbord.php");
            }else{
                echo "False";
            }
        }
        if(isset($_SESSION['user_name'])){
            header("location:dashbord.php");
        }
        ?>
        <div class="admin_login">
            <h1>ZboomMusic Login</h1>
            <form role="form" action="index.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="user_name" type="email" class="form-control input_field" value="<?php echo isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : ""; ?>" placeholder="Username">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="user_password" value="<?php echo isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : ""; ?>" class="form-control input_field" placeholder="Password">
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="remember_me" id="checkboxG4" class="css-checkbox" /><label for="checkboxG4" class="css-label">Remember me</label>
                </div>
                <a class="forget_pass" href="">Forget password</a>
                <div id="submit_btn" class="input-group">
                    <button type="submit" name="login" class="submit_field">LOGIN</button>
                </div>
            </form>
        </div>
    </body>
</html>