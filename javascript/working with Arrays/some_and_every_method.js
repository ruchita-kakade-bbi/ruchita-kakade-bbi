console.log("-----some and every method----");

//some method
const array = [10, 20, 45, -256, 44, 545, -78];
const some1 = array.some((mov) => mov > 500);
console.log(some1);

//every method

const every = array.every((val) => val > 0);
console.log(every);
