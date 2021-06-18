/* ------------------------- */
/*  ==== Show Password ====  */
/* ------------------------- */

function showpass(){
    var x = document.getElementById("formInputPassword");

    if (x.type == "password"){
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}
