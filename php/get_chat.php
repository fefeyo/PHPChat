<?php
    /**
     * Created by PhpStorm.
     * User: USER
     * Date: 2015/07/16
     * Time: 20:12
     *
     */
    header ('Content-Type: text/plain; charset=utf-8');
//    $sql = new mysqli("127.0.0.1" , "root" , "1234" , "chatroom");
    $sql = new mysqli('mysql509.db.sakura.ne.jp', 'archetypenova','archenova1', 'archetypenova_chatroom');
    if ($sql->connect_error) {
        exit();
    } else {
        $sql->set_charset ('utf8');
    }

    $query = "select * from talk order by id desc";
    $kekka = "";
    if ($result = $sql->query ($query)) {
        while ($row = $result->fetch_assoc ()) {
            $kekka .= "
<div style='border: solid 1px black;padding: 0 10px'>
    <p style='text-align: left;margin: 0;padding: 0'>ゲストさん</p>
    <p id ='markdown'>" . $row['comment'] . "</p>
    <p style='text-align: right;margin: 0;padding: 0'>".$row['created']."</p>
</div>
                ";
        }
    }
    echo $kekka;