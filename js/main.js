/**
 * Created by USER on 2015/07/16.
 */

var html;
var text;

$(function () {
    marked.setOptions({
        langPrefix: ' '
    });

    $('#editor').keyup(function () {
        var src = $(this).val();
        html = marked(src);
        $('#result').html(html);

        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
});

//$('.chat').load(function(){
//    var src = $('.chat').val();
//    var mark_src = marked(src);
//    $(this).html(mark_src);
//
//    $('pre code').each(function(i, block){
//        hljs.highlightBlock(block);
//    });
//});


$(document).ready(function () {
    setInterval(function () {
        $.ajax({
            type: "POST",
            url: "php/get_chat.php",
            success: function (msg) {
                document.getElementById("chat").innerHTML = msg;
            }
        });
        return false;
    }, 1000);
});

$(function () {
    $('#insert').click(function () {
        var container = document.getElementById("result");
        if (text == container.innerHTML) {
            alert("同じ内容の連続投稿は控えてください");
            return;
        }
        text = container.innerHTML;
        container.innerHTML = "";
        document.getElementById("editor").value = "";

        var param = {"value": text, "name": "ゲスト", "id": 1};
        console.log = param;
        $.ajax({
            type: "POST",
            url: "php/insert_db.php",
            data: param,
        });
        return false;
    });
});

$(function () {
    $('#login_button').click(function () {
        window.location.href = '../php/login.php';
    });
});

$(function () {
    $('#create_button').click(function () {
        window.location.href = '../php/account_create.php';
    });
});
