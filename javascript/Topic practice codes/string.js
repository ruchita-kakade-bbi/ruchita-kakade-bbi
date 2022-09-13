console.log("----String practice----");

const airline = "TAP Air India";
const plane = "A320";

// to access character
console.log(airline[2]);
console.log(plane[3]);

//access using index of
console.log(airline.indexOf("A"));
console.log(plane.indexOf("3"));
console.log(airline.lastIndexOf("a"));

//to  check length of string
console.log("length of airline: " + airline.length);
console.log("length of plane: " + plane.length);

//slice method
console.log(airline.slice(0, 5));
console.log(airline.slice(airline.lastIndexOf(" ")));

//using function
function checkMiddleSeat(seat) {
  const s = seat.slice(seat.lastIndexOf(-1));
  if (s === "B" || s === "D") console.log("You got middle seat");
  else console.log("You got lucky");
}
checkMiddleSeat("12B");
checkMiddleSeat("345C");
checkMiddleSeat("56D");

//changing case
console.log(airline.toLocaleLowerCase());
console.log(airline.toLocaleUpperCase());

const passenger = "jOnAS"; //we want this string as Jonas
const passengerLower = passenger.toLocaleLowerCase(); // this will convert string in lower case jonas
const correct = passengerLower[0].toLocaleUpperCase() + passengerLower.slice(1); //we take 1st char of passengerlower(j) and convert it into uppercase(J) and using slice method we take reamining string from passwngerlower (onas)
console.log("expected string: " + correct);

//checking email
const email = "ruchita@gmail.com";
const loginEmail = "  RUCHITA@gmail.com \n ";

const normalEmail = loginEmail.toLocaleLowerCase().trim(); //trim method remove white space and \n
console.log(email === normalEmail);

//trim method we can trim string from start and end
const t = "  i love india   ";
console.log(t.trimStart());
console.log(t.trimEnd());

//replace method
const m = "my name is ruchita. i live in wakad and wakad is nice place ";
console.log(m.replace("ruchita", "rutuja")); //replace method
console.log(m.replaceAll("wakad", "thergaon")); //replaceAll method

//Booleans
const plane1 = "A320neo";
console.log(plane1.includes("A32"));
console.log(plane1.startsWith("A32") && plane1.endsWith("ne"));

//practice exercise
const Baggage = function (items) {
  const baggage = items.toLocaleLowerCase();
  if (baggage.includes("knife") || baggage.includes("gun")) {
    console.log("You are not allowed...");
  } else {
    console.log("You are allowed");
  }
};
Baggage("i have food  and Gun");
Baggage("some food and toys");
Baggage("i have Knife and GUN");

//split method
console.log("ruchita,kakade".split(","));

const [firstName, lastName] = "ruchita kakade".split(" ");
//joint method
const newName = ["Mr.", firstName, lastName].join(" ");
console.log(newName);

//padding
const message = "ruchita kakade";
console.log(message.padStart(19, "*"));
console.log("atharva".padEnd(20, "+"));

//repeat method
const message2 = "ruchita kakade ";
console.log(message2.repeat(4));

const str = "ruchita kakade;age :24 " + " rutuja kakade  ; age :28";
for (const str1 of str.split("+")) {
  const [name1, age] = str1.split(";");
  console.log(`${name1} ${age.replace(":", ":-")}`);
}
