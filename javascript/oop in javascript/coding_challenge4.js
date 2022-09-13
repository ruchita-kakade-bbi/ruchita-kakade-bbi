`use strict`;

console.log(`------------Coding Challenge 4------------`);

class EVCl extends carCal {
  #charge;
  constructor(make, speed, charge) {
    super(make, speed);

    this.#charge = charge;
  }

  chargeBattery(chargeTo) {
    this.#charge = chargeTo;
    return this;
  }

  accelerate() {
    this.speed += 20;
    this.#charge--;
    console.log(
      `${this.make} going at ${this.speed} km/h, with a charge of ${
        this.#charge
      }%`
    );
    return this;
  }
}
const rivian = new EVCl("rivian", 120, 23);
rivian.accelerate().accelerate().brake().chargeBattery(70).accelerate();
console.log(rivian.speedUS, rivian.speed);
