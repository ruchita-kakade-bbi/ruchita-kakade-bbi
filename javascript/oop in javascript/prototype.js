console.log("---prototype-----");
Person.prototype.calcAge = function () {
  console.log(2022 - this.birthYear);
};
details.calcAge();
details1.calcAge();

Person.prototype.middleName = "raj";
console.log(details.hasOwnProperty("firstName"));
console.log(details1.hasOwnProperty("middleName"));
