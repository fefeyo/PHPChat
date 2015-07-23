<?php
    /**
     * Created by PhpStorm.
     * User: USER
     * Date: 2015/07/22
     * Time: 16:05
     */

$config = array(
    'appId' => '859929320748648',
    'secret' => '5c59bc78670e47e740a09b79ec98a715'
);

    $facebook = new Facebook($config);

    $loginUrl = $facebook->getLoginUrl();
    echo "<div id='facebook_link'>";
    echo "<a href='".$loginUrl."' id='fb_link'>Login with Facebook</a>";
    echo "</div>";

    echo $facebook->getUser();