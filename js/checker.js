/**
 * Created by USER on 2015/07/22.
 */

function checkForm(){
    var str = document.getElementsByClassName("private");
    if (str.match(/[^A-Z\d\-]/)) {
        alert("半角英数字(大文字)しか入力できません");
        return false;
    }
    else if (str.length > 12) {
        alert("12文字以内で入力してください");
        return false;
    }
}