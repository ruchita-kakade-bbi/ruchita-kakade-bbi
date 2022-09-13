console.log("---map method---");

const b = [2, 3, 5, 6, 7, 8, 9];
const a = 2;

const newArr = b.map((val) => {
  if (val % 2 == 0) {
    return val * a;
  } else {
    return val;
  }
});
console.log(b);
console.log(newArr);
