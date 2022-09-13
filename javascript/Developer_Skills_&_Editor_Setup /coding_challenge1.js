const Data1 = [17, 21, 23];
const Data2 = [12, 5, -5, 0, 4];

const printForcast = function (arr) {
  let str = " ";
  for (let i = 0; i < arr.length; i++) {
    str += `${arr[i]}°C in ${i + 1}days...`;
  }
  console.log(str);
};
printForcast(Data1);
printForcast(Data2);
