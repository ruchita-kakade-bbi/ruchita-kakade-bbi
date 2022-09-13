console.log("---filter Method---");
const deposits = [200, 450, -400, 3000, -650, -130, 70, 1300];

const newA = deposits.filter((mov) => mov > 0);
console.log(deposits);
console.log(newA);

const withDrawels = deposits.filter((val) => val < 0);
console.log(withDrawels);
