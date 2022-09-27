function displayData(fname, pass) {

    if (fname == "" && pass == "") {
        document.getElementById("err").innerText = "please enter details";
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("err").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("POST", "loginData.php?first_name=" + fname + "&" + "password=" + pass, true);
        xmlhttp.send();
    }
}