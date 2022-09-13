console.log("---find method---");

const deposit = [100, 23, 45, 321, -12];
const findElement = deposit.find((val) => val < 0);
console.log(findElement);

console.log("----find Index method");
const findIndex1 = deposit.findIndex((val) => val > 300);
console.log(findIndex1);
