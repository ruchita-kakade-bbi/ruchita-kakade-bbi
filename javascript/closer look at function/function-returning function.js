console.log("---function returning function---" + "\n");

const info = function (f) {
  return function lastName(l) {
    console.log("\n" + `${f}  ${l}`);
  };
};

info("rajendra")("kakade");
const info1 = info("ruchita"); //we are storing whole function in info1 variable using info1 variable we can pass values to fun lastname
info1("kakade");
