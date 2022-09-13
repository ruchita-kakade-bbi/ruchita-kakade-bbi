console.log("-----Closures----");
console.log("\n");

function x() {
  var a = 100;
  function y() {
    console.log(a);
  }
  a = 200;
  return y;
}
const z = x();
console.log(z);
z(); //because in closure x() fun contain function along with lexical scope means it contain a's ref and output will be 200 because we change a's value to 200 and a ref pointing to value 200
