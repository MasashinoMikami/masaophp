<?php
session_start();
$_SESSION=arrary();
if(isset($_COOKIE[session_name()])==true)
{
    setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"?>
        <title>スタッフ画面</title>　
    </head>
    <body>
        ログアウト済<br/>
        <br/>
        <a href="../staff_login/staff_login.html">ログイン画面へ</a>
    </body>
</html>
