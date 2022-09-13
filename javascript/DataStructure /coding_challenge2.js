console.log("\n" + " -----Coding Challenge2---- ");
console.log("task 1");
const goals = [...game.scored];

for (const [i, goal] of goals.entries()) console.log(`Goal ${i + 1} :${goal} `);

console.log("-----Task 2-----");
const odd = Object.values(game.odds);
let average = 0;
for (const odd1 of odd) average += odd1;
average /= odd.length;
console.log("Average is: " + average);

console.log("----Task3----");
for (const [team, odd1] of Object.entries(game.odds)) {
  const teamStr = team === "x" ? "draw" : `victory ${game[team]}`;
  console.log(`odd of ${teamStr} ${odd1}`);
}
