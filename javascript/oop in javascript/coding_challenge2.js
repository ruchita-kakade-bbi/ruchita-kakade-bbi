console.log("----coding challenge2----");
class carCal {
  constructor(make, speed) {
    this.make = make;
    this.speed = speed;
  }
  accelerate() {
    this.speed += 10;
    console.log(`${this.make} going at ${this.speed} Km/h`);
  }

  brake() {
    this.speed -= 5;
    console.log(`${this.make} going at a ${this.speed} Km/h`);
  }

  get speedUs() {
    return (this.speed /= 1.6);
  }

  set speedUs(speed) {
    this.speed = speed * 1.6;
  }
}

const ford = new carCal("FORD", 120);

ford.accelerate();
ford.accelerate();
ford.brake();
ford.speedUs = 50;
ford.accelerate();
console.log(ford);
