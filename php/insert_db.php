<?php
    /**
     * Created by PhpStorm.
     * User: USER
     * Date: 2015/07/16
     * Time: 21:26
     */

//$sql = new mysqli("127.0.0.1", "root", "1234", "chatroom");
$sql = new mysqli('mysql509.db.sakura.ne.jp', 'archetypenova','archenova1', 'archetypenova_chatroom');
    if($sql->connect_error){
        exit();
    }else{
        $sql->set_charset('utf8');
    }
    $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : 1;
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "ゲストさん";
    $value = isset($_POST['value']) ? htmlspecialchars($_POST['value']) : "";
    if($value == "") exit;

    $query = "insert into talk(comment, created) values('".$value."', now());";
    $sql->query($query);