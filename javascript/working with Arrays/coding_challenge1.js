console.log("---coding challenge1---");

let checkDogs = function (dogsJulia, dogsKate) {
  const dogsJuliaFinal = dogsJulia.slice();
  dogsJuliaFinal.splice(0, 1);
  console.log(dogsJuliaFinal);
  dogsJuliaFinal.splice(-2);

  const corrected = dogsJuliaFinal.concat(dogsKate);
  console.log(corrected);

  corrected.forEach(function (dog, i) {
    if (dog >= 3) {
      console.log(`Dog number ${i + 1}  is an adult, and is ${dog} years old`);
    } else {
      console.log(`Dog number ${i + 1} is still a puppy `);
    }
  });
};
checkDogs([3, 5, 2, 12, 7], [4, 1, 15, 8, 3]);
console.log("---another test data---");
checkDogs([9, 16, 6, 8, 3], [10, 5, 6, 1, 4]);
