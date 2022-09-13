console.log("\n");
console.log("---bind() method----");
console.log("\n");

const student1 = {
  name: "Ruchita",
  lastName: "Kakade",
  std: 12,
};

const student2 = {
  name: "Atharva",
  lastName: "Kakade",
  std: 10,
};

function Details(game) {
  console.log(
    `student name is ${this.name}  ${this.lastName} and he/she is in ${this.std} th standard and loves to play ${game}.`
  );
}
const stud1 = Details.bind(student1);
stud1("Tennis");

const stud2 = Details.bind(student2);
stud2("cricket");
