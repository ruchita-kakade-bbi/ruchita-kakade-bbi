function displayData(fname, lname, pass) {
    if (fname == "" && lname == "" && pass == "") {
        document.getElementById("err").innerText = "please enter details";
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("err").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("POST", "signupData.php?first_name=" + fname + "&" + "lname=" + lname + "&" + "password=" + pass, true);
        xmlhttp.send();
    }
}