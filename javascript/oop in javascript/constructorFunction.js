console.log("-----constructor functions----");

const Person = function (firstName, lastName, birthYear) {
  this.firstName = firstName;
  this.lastName = lastName;
  this.birthYear = birthYear;
};
const details = new Person("jonas", "schmedtan", 1999);
console.log(details);

const details1 = new Person("abc", "sgf", 1990);
console.log(details1);
