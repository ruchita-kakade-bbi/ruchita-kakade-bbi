console.log("---Event loop---");

console.log("start Test");
setTimeout(() => console.log("0 sec Timer"), 0);
Promise.resolve("promise 1").then((response) => {
  console.log(response);
});
console.log("End Test");
