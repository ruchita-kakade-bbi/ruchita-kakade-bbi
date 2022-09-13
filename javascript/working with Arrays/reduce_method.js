console.log("---Reduce Method----");

const balance = deposits.reduce(function (acc, val, i) {
  console.log(`iteration ${i} : acc ${acc}`);
  return acc + val;
}, 0);
console.log(`Total balace is = ${balance}`);

//to find maximum number in an array deposits
const maxValue = deposits.reduce(function (acc, val) {
  if (acc > val) {
    return acc;
  } else {
    return val;
  }
}, 0);
console.log(maxValue);
