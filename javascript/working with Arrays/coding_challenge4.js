console.log("----coding challenge4-----");

const dogs = [
  { weight: 22, curFood: 250, owners: ["Alice", "Bob"] },
  { weight: 8, curFood: 200, owners: ["Matilda"] },
  { weight: 13, curFood: 275, owners: ["Sarah", "John"] },
  { weight: 32, curFood: 340, owners: ["Michael"] },
];
//task1
dogs.forEach(function (val, index) {
  const recommendedFood = Math.trunc(val.weight ** 0.75 * 28);
  dogs[index].recommendedFood = recommendedFood;
});
console.log(dogs);

//task2
const owner = dogs.find(function (val) {
  return val.owners.includes("Sarah");
});
console.log(owner);
if (dogs.recommendedFood > dogs.curFood) {
  console.log("your dog eating to little");
} else {
  console.log("your dog eating to much");
}
//task3
const ownersEatTooMuch = [];
const ownersEatTooLittle = [];

dogs.forEach(function (val) {
  if (val.recommendedFood > val.curFood) {
    ownersEatTooLittle.push(val.owners);
  } else {
    ownersEatTooMuch.push(val.owners);
  }
});

console.log(ownersEatTooMuch.flat());
console.log(ownersEatTooLittle.flat());

//TASK4
console.log(
  `${ownersEatTooMuch.flat().join(" and ")}'s dogs eating too much! `
);
console.log(
  `${ownersEatTooLittle.flat().join(" and ")}'s dogs eating too little`
);

//task 5
console.log(dogs.some((dog) => dog.curFood === dog.recommendedFood));

//task 6
console.log(
  dogs.some(
    (dog) =>
      dog.curFood > dog.recommendedFood * 0.9 &&
      dog.curFood < dog.recommendedFood * 1.1
  )
);

//7
const dogsEatingOk = dogs.filter(
  (dog) =>
    dog.curFood > dog.recommendedFood * 0.9 &&
    dog.curFood < dog.recommendedFood * 1.1
);
console.log(dogsEatingOk);

const dogsSorted = dogs
  .slice()
  .sort((a, b) => a.recommendedFood - b.recommendedFood);
console.log(dogsSorted);
