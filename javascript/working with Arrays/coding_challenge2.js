console.log("---coding challenge2---");
const calcAverageHumanAge = function (dogAge) {
  const humanAges = dogAge.map(function (age) {
    if (age <= 2) {
      return age * 2;
    } else {
      return 16 + age * 4;
    }
  });
  console.log(humanAges);

  //to create array of dogs whose age is greater than 18
  const adults = humanAges.filter(function (val) {
    return val >= 18;
  });
  console.log(adults);

  //calculating average of dogs whose age is greater or equal to 18
  const average = adults.reduce(function (acc, val) {
    return acc + val;
  }, 0);
  console.log(average / adults.length);
};

calcAverageHumanAge([5, 2, 4, 1, 15, 8, 3]);
calcAverageHumanAge([16, 6, 10, 5, 6, 1, 4]);
