/**
 * Created by USER on 2015/07/22.
 */

function checkForm(){
    var str = document.getElementsByClassName("private");
    if (str.match(/[^A-Z\d\-]/)) {
        alert("���p�p����(�啶��)�������͂ł��܂���");
        return false;
    }
    else if (str.length > 12) {
        alert("12�����ȓ��œ��͂��Ă�������");
        return false;
    }
}