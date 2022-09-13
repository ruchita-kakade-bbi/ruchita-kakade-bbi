"use strict";
document.addEventListener("DOMContentLoaded", m1);
function m1() {
  document.body.appendChild(document.createElement("textarea"));
  document.body.appendChild(document.createElement("button"));

  document.querySelector("button").addEventListener("click", function () {
    const text = document.querySelector("textarea").value;
    const row = text.split("\n");
    console.log(row);
    for (const row1 of row) {
      const [first, second] = row1.toLocaleLowerCase().trim().split("_");
      const output = `${first}${second.replace(
        second[0],
        second.toLocaleUpperCase()
      )}`;
      console.log(output);
    }
  });
}
