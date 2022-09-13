console.log("----slice method----");
console.log("\n");

const arr = ["a", "b", "c", "d"];
console.log(arr.slice(1, 3));
console.log(arr);
console.log(arr.slice(2));

console.log("---splice method---");
console.log(arr.splice(1, 3)); //it delets 1 to 3 elemnts in original array
console.log(arr); //arr will be a only

console.log("---reverse method---");
const arr1 = ["e", "f", "g", "h"];
console.log(arr1.reverse()); //also change original arr1 o/p-[h,g,f,e]
console.log(arr1);

console.log("---concat method---");
const letters = arr.concat(arr1);
console.log(letters);

console.log("---join method---");
console.log(arr1.join(".."));

console.log("--at method--");
console.log(arr1.at(-1));

console.log("ruchita".at(1));
