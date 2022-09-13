// console.log("--building a promise--");

// const lotteryPromise = new Promise(function (resolve, reject) {
//   console.log("lottery draw is happening.....");
//   setTimeout(function () {
//     if (Math.random() >= 0.5) {
//       resolve("you win... ");
//     } else {
//       reject(new Error("you lost money..."));
//     }
//   }, 2000);
// });

// lotteryPromise
//   .then((response) => {
//     console.log(response);
//   })
//   .catch((err) => console.log(err));

// //promisifying setTimeout()
// const wait = function (seconds) {
//   return new Promise(function (resolve) {
//     setTimeout(resolve, seconds * 1000);
//   });
// };
// wait(5).then(() => {
//   console.log("i waited for 5 seconds...");
// });
