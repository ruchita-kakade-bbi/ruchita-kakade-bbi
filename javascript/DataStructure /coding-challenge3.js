console.log("---Coding challenge3---");
const gameEvents = new Map([
  [17, "⚽ GOAL"],
  [36, "🔁 Substitution"],
  [47, "⚽ GOAL"],
  [61, "🔁 Substitution"],
  [64, "🔶 Yellow card"],
  [69, "🔴 Red card"],
  [70, "🔁 Substitution"],
  [72, "🔁 Substitution"],
  [76, "⚽ GOAL"],
  [80, "⚽ GOAL"],
  [92, "🔶 Yellow card"],
]);

console.log("--Task1--");
const event1 = [...new Set(gameEvents.values())];
console.log(event1);

console.log("---Task2---");

gameEvents.delete(64);
console.log(gameEvents);

console.log("---Task3---");

console.log(
  `An event happened, on average, every ${90 / gameEvents.size}minutes`
);

console.log("---Task4---");

for (const [min, event] of gameEvents) {
  const half = min <= 45 ? "FIRST" : "SECOND";
  console.log(`${half} HALF ${min} : ${event}`);
}
