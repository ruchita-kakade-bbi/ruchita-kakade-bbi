console.log("---chaining method---");
const eur = 1.1;
const totalDepositsUsd = deposits
  .filter((val) => val > 0)
  .map((val) => val * eur)
  .reduce((acc, val) => acc + val, 0);
console.log(totalDepositsUsd);
