console.log("---coding challenge3---");

const calcAverageHumanAge1 = (age) =>
  age
    .map((age) => (age <= 2 ? 2 * age : 16 + age * 4))
    .filter((val) => val >= 18)
    .reduce((acc, val, i, arr) => acc + val / arr.length, 0);

const avg1 = calcAverageHumanAge1([5, 2, 4, 1, 15, 8, 3]);
console.log("Average of data1 =" + avg1);
const avg2 = calcAverageHumanAge1([16, 6, 10, 5, 6, 1, 4]);
console.log("Average of data2 =" + avg2);
