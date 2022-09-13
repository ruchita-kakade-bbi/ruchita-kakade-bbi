let newElement = document.createElement("input");
document.body.appendChild(newElement);
newElement.setAttribute("placeholder", "name");

let new1 = document.createElement("button");
document.body.appendChild(new1);
new1.setAttribute("id", "btn");
document.getElementById("btn").innerText = "submit";

//insert image through javascript
let profileImage = document.createElement("img");
profileImage.src = "nature.jpeg";
document.body.appendChild(profileImage);
profileImage.style.width = "500px";
profileImage.style.height = "400px";
profileImage.style.marginLeft = "30px";
