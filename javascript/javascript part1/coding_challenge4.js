const bill =275;
const tip = bill>= 50 && bill <= 300 ? bill+15/10 : bill + 20/10;
console.log(`The bill was ${bill} , the tip was ${tip}, and the total was ${bill + tip } `); 