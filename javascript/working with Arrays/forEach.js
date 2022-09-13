console.log("----for each method----");
console.log("\n");
//passing one value
let num = [1, 2, 3, 4, 5, 6, 7, 8];
num.forEach((num) => {
  console.log(num);
});

console.log(
  "--passing three parameters in for each value,index and whole array----" +
    "\n"
);

//passing index value and whole array
num.forEach((n, i, num) => {
  console.log(n, i, num);
});
