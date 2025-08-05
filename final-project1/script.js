function validate() {
    var result = true;
    password1 = document.getElementById("password");
    password2 = document.getElementById("confirm-password");
    if (password1.valuec != password2.value) {
        result = false;
        password1.style = "border-color:red";
        password2.style = "border-color:red";
    } else {
        password1.style = "";
        password1.style = "";
    }
    no = document.getElementById("phoneno");
    if (no.value.length != 10) {
        result = false;
        no.style = "border-color:red";
    } else {
        no.style = "";
    }

    return result;
}