document.addEventListener("DOMContentLoaded", main);

function main() {
  document.getElementById("h1").addEventListener("click", color);

  function color() {
    document.getElementById("text1").style.color = "green";
  }
}
