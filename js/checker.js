/**
 * Created by USER on 2015/07/22.
 */

function checkForm(){
    var str = document.getElementsByClassName("private");
    if (str.match(/[^A-Z\d\-]/)) {
        alert("”¼Šp‰p”Žš(‘å•¶Žš)‚µ‚©“ü—Í‚Å‚«‚Ü‚¹‚ñ");
        return false;
    }
    else if (str.length > 12) {
        alert("12•¶ŽšˆÈ“à‚Å“ü—Í‚µ‚Ä‚­‚¾‚³‚¢");
        return false;
    }
}