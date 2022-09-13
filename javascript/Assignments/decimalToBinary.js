const add = function (a, b) {
  let result = a + b;
  //console.log(result);
  let output = [];
  //for conversion of addition of num to binary

  while (result > 0) {
    let que = parseInt(result / 2);
    let rem = result % 2;
    output.push(rem);
    result = que;
    //console.log(rem);
    //console.log(que);
  }
  let string = " ";

  for (let i = output.length - 1; i >= 0; i--) {
    string += output[i];
  }
  console.log(string);
  //binary to decimal
  let x = 1;

  let output1 = 0;
  if (string[string.length - 1] == 1) {
    output1 = x;
  }
  for (let i = string.length - 2; i >= 0; i--) {
    x = x * 2;

    if (string[i] == 1) {
      output1 = output1 + x;
    }
  }
  console.log(output1);
};

add(4, 2);
//add(6, 8);
