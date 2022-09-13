console.log("-----ES6 classes---");

class Person1 {
  constructor(firstName, lastName, year) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.year = year;
  }
  fullName() {
    console.log(`${this.firstName} ${this.lastName}`);
  }
  age() {
    this.year += 20;
    console.log(
      `${this.firstName} ${this.lastName} age is ${this.year} years old.. `
    );
  }
}

const name1 = new Person1("Ruchita", "kakade", 19);
name1.fullName();
name1.age();
