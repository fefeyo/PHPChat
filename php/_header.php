<?php
    /**
     * Created by PhpStorm.
     * User: USER
     * Date: 2015/07/16
     * Time: 20:29
     */
    $isLogin = isset($_SESSION['login']) ? $_SESSION['login'] : false;

    function check_login($isLogin){
        if($isLogin) return "ログアウト";
        return "ログイン";
    }

    echo "
<header id='chat_header'>
マークダウンでチャットしよう！
</header>
";

//    <div id='chat_label'><input type='button' id='login_button' value='".check_login($isLogin)."'><input type='button' id='create_button' value='新規登録''></div>