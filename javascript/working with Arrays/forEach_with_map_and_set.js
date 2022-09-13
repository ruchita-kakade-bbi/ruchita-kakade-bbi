console.log("---for each with map and set----");

//maps using forEach method
const student = new Map([
  ["name", "ruchita"],
  ["std", "fourth"],
  ["city", "pune"],
]);

student.forEach((value, key) => {
  console.log(`${key} :- ${value}`);
});

//set using forEach method

const student1 = new Set(["IND", "USD", "USD", "AUS", "IND"]);

console.log(student1);
student1.forEach(function (value, set) {
  console.log(value, set);
});
