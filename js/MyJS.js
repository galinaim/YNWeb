/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validate() {
    var a = document.forms["sign"]["UN"].value;
    if (a==null || a==" "){
        alert ("אנא מלאו שם משתמש");
        return false;
    }
    
    var b = document.forms["sign"]["Pass"].value;
        if (b==null || b==" "){
            alert ("אנא מלאו סיסמה");
            return false;
        }
}


