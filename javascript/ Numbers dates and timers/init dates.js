console.log("----international date format----");
const now = new Date();
console.log(now);

console.log(now.getFullYear());
console.log(now.getDate());
console.log(now.getHours());

const dates = new Intl.DateTimeFormat("en-US").format(now);
console.log(dates);
