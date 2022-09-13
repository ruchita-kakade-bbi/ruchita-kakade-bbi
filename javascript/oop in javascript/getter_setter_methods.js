console.log("---getter and setter methods---");

const account = {
  owner: "jonas",
  movements1: [20, 50, 410, 52, 46, 5112],

  get min() {
    return Math.min(...this.movements1);
  },
  set add(val) {
    this.movements1.push(val);
  },
};
console.log(account.min);

account.add = 500;
console.log(account.movements1);
