<?php

try{
    
    $staff_code=$_POST['code'];
    $staff_code=$_POST['pass'];

    $staff_code=htmlspecialchars($staff_code,ENT_QUOTES,'UTF-8')
    $staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8')

    $staff_pass=md5($staff_pass);

    $dsn='mysql:dbname=shop;host=localhost;charset=ytf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);
    $sql'SELECT name FROM mst_staff WHERE code=? AND password=?';
    $stmt~$dbh->prepare($sql);
    $data[]=$staff_code;
    $data[]=$staff_pass;
    $stmt->execute($data);
    $dbh=null;
    $recc=$stmt->fetch(PDO::FETCH_ASSOC);

    if($rec==false){
        print'パスワードが間違っています。<br/>';
        print',a herf="staff_login.html">戻る</a>';
    }
    else{
        header('Location:staff_top.php');
        exit();
    }
}
catch(Exception $e){
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
?>
