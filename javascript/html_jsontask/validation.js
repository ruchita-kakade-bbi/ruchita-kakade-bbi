let regxNum = /[0-9]/;
let regxSpecial = /[@#$*?]/;
let regxPhn = /[+][9][1]\s[7-9][0-9]{4}\s[0-9]{5}/;
let regxEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
let regxCapital = /[A-Z]/;

function validateForm() {
  let fName = document.forms["myform"]["fname"].value;
  let lName = document.getElementById("lname").value;
  let Contact = document.getElementById("contact").value;
  let Email = document.getElementById("email").value;

  //-----------first name validation------
  if (fName == "") {
    alert(" first name cannot be empty ");
    return false;
  } else if (regxNum.test(fName)) {
    alert("number is not allowed");
    return false;
  } else if (regxSpecial.test(fName)) {
    alert("Special symbol is not allowed in first name");
    return false;
  } else if (fName.length == 1) {
    alert("name cannot be a single character");
    return false;
  }

  //----------last name validation-------------------
  else if (lName == "") {
    alert(" last name cannot be empty ");
    return false;
  } else if (regxNum.test(lName)) {
    alert("number is not allowed");
    return false;
  } else if (regxSpecial.test(lName)) {
    alert("special symbol is not allowed in last name");
    return false;
  } else if (lName.length == 1) {
    alert("name cannot be a single character");
    return false;
  }

  // ---------contact number validation----------
  else if (Contact == "") {
    alert("contact number cannot be empty");
    return false;
  } else if (!regxPhn.test(Contact)) {
    alert("phone number is not valid");
    return false;
  }

  //------Email validate-------
  else if (Email == "") {
    alert("Email should not be empty");
    return false;
  } else if (!regxEmail.test(Email)) {
    alert("please enter valid email id");
    return false;
  } else if (regxCapital.test(Email)) {
    alert("capital letters are not allowed");
    return false;
  }
  return true;
}

function json() {
  if (validateForm()) {
    const Details = {
      "first name": document.getElementById("fname").value,
      "last name": document.getElementById("lname").value,
      "contact no": document.getElementById("contact").value,
      "Email id": document.getElementById("email").value,
    };

    console.log(Details);
    for (var i in Details) {
      document.getElementById("view").innerHTML +=
        i + " :  " + Details[i] + "<br/>";
    }
  }
}

document.addEventListener("DOMContentLoaded", clearjson);

function clearjson() {
  const listenV = document.getElementById("clear");
  listenV.addEventListener("click", function clrjs() {
    document.getElementById("view").textContent = "";
  });
}
function MouseEvent() {
  document.getElementById("onMouse").style.color = "brown";
}
function changeColor() {
  document.getElementById("onMouse").style.color = "black";
}
