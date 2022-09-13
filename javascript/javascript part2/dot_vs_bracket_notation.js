console.log("----dot vs bracket notations-----");

console.log("\n" + "----udemy video example-----");

const jonas ={
    firstName : 'jonas',
    lastName  : 'schmedtman',
    age       : 2022-1999,
    job       : 'software developer',
    friends   : ['michael' , 'peter' , 'steven']
}

console.log(jonas);
console.log(jonas.age);
console.log(jonas['lastName']);

 /*const intersetedIn =prompt ('What do you want to know about jonas? choose between firstName, lastName, age, job and friends');
console.log(jonas[intersetedIn]);

console.log(`${jonas.firstName} has ${jonas.friends.length} friends and his best friend is ${jonas.friends[0]}` );
*/
console.log("\n" + "-----assignment-------");

const describeCountry3 ={
    Country : 'finland',
    population : 6,
    capital : 'helsinki',
    neighbouring_country : 3
};

console.log(`${describeCountry3.Country} has ${describeCountry3.population} million  finnish-speaking people ,${describeCountry3.neighbouring_country} neighbouring countries and capital called ${describeCountry3.capital}`);
describeCountry3.population +=2;
console.log(describeCountry3);

describeCountry3['population'] -= 2;
console.log(describeCountry3);