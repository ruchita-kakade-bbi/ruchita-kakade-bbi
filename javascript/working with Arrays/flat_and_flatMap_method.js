console.log("----flat and flatMap method----");

//flat method
const array2 = [[1, 2], 3, 4, [5, 6, 7], 8];
console.log(array2.flat());

const array3 = [[[1, 20, [67]]], 56, [67, 87], [[65, 45]]];
console.log(array3.flat(3));

//flatMap method
const array4 = [14, 54, 5, 4, 55];
const A = array4.flatMap(function (val) {
  return val + 10;
});
console.log(A);
