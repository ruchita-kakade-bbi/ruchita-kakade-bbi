let timer = 0;
let min = 1;
let hr = 1;
function startTime() {
  document.getElementById("btn3").setAttribute("style", "display: none");
  setInterval(function timeSet() {
    timer++;

    if (document.getElementById("rightContainer").innerText < 9) {
      document.getElementById("rightContainer").innerText = `0${timer}`;
    } else {
      document.getElementById("rightContainer").innerText = timer;
    }

    if (timer == 59) {
      document.getElementById("middleContainer").innerText = min;
      if (document.getElementById("middleContainer").innerText < 9) {
        document.getElementById("middleContainer").innerText = `0${min}`;
      } else {
        document.getElementById("middleContainer").innerText = min;
      }
      min++;
      timer = 0;
    }

    if (document.getElementById("middleContainer").innerText == 59) {
      document.getElementById("leftContainer").innerText = hr;
      if (document.getElementById("leftContainer").innerText < 9) {
        document.getElementById("leftContainer").innerText = `0${hr}`;
      } else {
        document.getElementById("leftContainer").innerText = hr;
      }
      hr++;
      timer = 0;
    }
  }, 1000);
}

function stopTimer() {
  clearInterval(timeSet);
}
function resetTimer() {
  document.getElementById("leftContainer").innerText = "00";
  document.getElementById("middleContainer").innerText = "00";
  document.getElementById("rightContainer").innerText = "00";
  timer = 0;
}
function MouseEvent() {
  document.getElementById("txt").style.color = "purple";
}
function changeColor() {
  document.getElementById("txt").style.color = " #121010";
}
