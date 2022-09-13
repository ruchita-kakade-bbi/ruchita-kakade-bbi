const game = {
  team1: "Bayern Munich",
  team2: "Borrussia Dortmund",
  players: [
    [
      "Neuer",
      "Pavard",
      "Martinez",
      "Alaba",
      "Davies",
      "Kimmich",
      "Goretzka",
      "Coman",
      "Muller",
      "Gnarby",
      "Lewandowski",
    ],
    [
      "Burki",
      "Schulz",
      "Hummels",
      "Akanji",
      "Hakimi",
      "Weigl",
      "Witsel",
      "Hazard",
      "Brandt",
      "Sancho",
      "Gotze",
    ],
  ],
  score: "4:0",
  scored: ["Lewandowski", "Gnarby", "Lewandowski", "Hummels"],
  date: "Nov 9th, 2037",
  odds: {
    team1: 1.33,
    x: 3.25,
    team2: 6.5,
  },
};
console.log("--------Coding Challenge1--------");
console.log(`\ntask 1`);
//1
const [players1, players2] = game.players;
console.log(players1, players2);

//2
console.log("task 2");
const [gk, ...fieldPlayers] = players1;
console.log(gk, fieldPlayers);

const [gk1, ...fieldPlayers1] = players2;
console.log(gk1, fieldPlayers1);

//3
console.log("task 3");
const allPlayers = [...players1, ...players2];
console.log(allPlayers);

//4
console.log("task 4");
const players1Final = [...players1, "Thiago", "Countinho", "perisic"];
console.log(players1Final);

//5
console.log("task 5");
const {
  odds: { team1, x, team2 },
} = game;
console.log(team1, x, team2);

//6
console.log("task 6");

const printGoals = function (...players) {
  console.log(`${players.length} goals are scored`);
};
printGoals("Davies", "Muller", "Lewandowski", "Kimmich");
printGoals("Coman", "Muller", "Gnarby");

//7
console.log("task 7");
team1 < team2 && console.log("team1 is winner");
team1 > team2 && console.log("team2 is winner");
