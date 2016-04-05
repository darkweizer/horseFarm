<?php


function loginConnection($user, $password){
    $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "123456");
    $sql = "SELECT * FROM user WHERE User = :user AND Password = Password(:password)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":user", $user, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);
    $stmt->execute();
    $res = $stmt->fetch();
    if ($res){
        $_SESSION['name'] = $res['User'];
        return true;
    }else{
        return false;
    }
}