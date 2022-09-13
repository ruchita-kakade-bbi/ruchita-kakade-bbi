console.log("---call() and apply() method----");
console.log("\n");

console.log("----call() method---");
const person = {
  fullName: function (city, country) {
    return this.firstName + " " + this.lastName + "," + city + "," + country;
  },
};
const person1 = {
  firstName: "ruchita",
  lastName: "kakade",
};

console.log(person.fullName.call(person1, "pune", "india"));

//////////////////////////////////////////////////////////////

console.log("\n");
console.log("----apply() method----");

const person2 = {
  fullName1: function (state, country) {
    return `my name is ${this.firstName}  ${this.lastName} i live in  ${country} in ${state} state`;
  },
};
const person3 = {
  firstName: "atharva",
  lastName: "kakade",
};

console.log(person2.fullName1.apply(person3, ["maharashtra", "India"]));
