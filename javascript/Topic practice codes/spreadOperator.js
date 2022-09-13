//using array spread operator
console.log("implementing Array using spread operator");
const arr1 = [1, 2, 3, 4];
console.log(arr1);

const arr2 = [...arr1, 5, 6, 7];
console.log(arr2);

//using objects spread operator
console.log("implementing objects using  spread operator");
const restaurant = {
  name: "classico Italiano",
  openingHours: {
    thu: {
      open: 10,
      close: 22,
    },
    fri: {
      open: 11,
      close: 23,
    },
  },
  categories: ["Italian", "vegetarian", "pizzaria"],
};
console.log(restaurant);

const rest2 = {
  foundIn: 1990,
  ...restaurant,
  founder: "Raviraj Bugge",
};
console.log(rest2);

//array using rest operator
console.log("implementing array using rest operator");

const [a, b, c, ...others] = [1, 2, 3, 4, 5, 7, 8];
console.log(a, b, others);

//objects using rest operator
console.log("implementing objects using rest operator");
const { fri, ...otherDays } = restaurant.openingHours;

console.log(fri, otherDays);
