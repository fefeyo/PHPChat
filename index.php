<?php
    session_start ();

//    APP: 859929320748648
//    Secret: 5c59bc78670e47e740a09b79ec98a715
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset=gutf-8"/>
    <script src="lib/jquery-1.11.3.min.js"></script>
    <script src="lib/marked/lib/marked.js"></script>
    <script src="lib/highlight/highlight.pack.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="lib/highlight/styles/github.css">
    <link rel="stylesheet" href="lib/bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="lib/github_css/github.css">
    <link rel="stylesheet" href="css/main.css">
    <title>マークダウンでチャットしよう！</title>
</head>
<body>

<?php

//include 'php/_header.php'
    require_once 'lib/facebook/facebook.php';
    include "php/login_facebook.php";
?>

<div id="description">
  <h3><a href="http://www.markdown.jp/what-is-markdown" target="_blank" id="howto">マークダウンって何？って人はこちら</a></h3>
</div>

<div id="container">

    <div class="col-md-4 col-lg-4 col-xs-4">

        <h2>プレビュー</h2>
        <div id="result"></div>

        <h2>入力</h2>
            <textarea name="talk" id="editor" class="form-control" wrap="hard" maxlength="250"></textarea>
        <div style="text-align: right">
            <input type="button" class="btn-danger" style="margin: 10px auto" id="insert" value="送信">
        </div>
    </div>

    <div class="col-xs-8 col-md-8 col-lg-8">

        <pre id="chat" class="pre-scrollable"></pre>

    </div>
</div>

</body>
</html>

