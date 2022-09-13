console.log("-----sorting methods-----");

const arraySort = [20, 10, 45, 44, 545];
//for descending
const ArraySort1 = arraySort.sort(function (val1, val2) {
  if (val1 > val2) {
    return -1;
  }
  if (val1 < val2) {
    return 1;
  }
});
console.log(ArraySort1);

//for ascending
const ArraySort2 = arraySort.sort(function (val1, val2) {
  if (val1 > val2) {
    return 1;
  }
  if (val1 < val2) {
    return -1;
  }
});
console.log(ArraySort2);
