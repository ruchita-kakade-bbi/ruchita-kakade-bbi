console.log("----object methods-----");

console.log("\n " + "----udemy video example-----");


const jonas1 ={
   firstName : 'jonas',
   lastName : 'schmedann',
   birthyear1 :1999,
   job :'developer',

   calculateAge : function()
   {
    this.age= 2022 - this.birthyear1;
  return this.age;   
}
  };
  console.log(jonas1.calculateAge());

  console.log(`${jonas1.firstName} is a ${jonas1.calculateAge(this.age)} years old ${jonas1.job}. `);







console.log( "\n"+ "------Assignment-------")

const describeCountry4 = {
    Country1 : 'finland',
    population1 : 6,
    capital1 : 'helsinki',
    neighbouring_country1: ['norway' ,'sweden' ,'russia'],

   
 describe : function()
{
 return(`${this.Country1} has ${this.population1} million finnish-speaking people , ${this.neighbouring_country1.length} and a capital called ${this.capital1}`);
},

 checkIsland : function()
 {
 this.island =this.neighbouring_country1.length == 0? true : false ;
 return this.island;
 }

};
console.log(describeCountry4.describe());
console.log(describeCountry4.checkIsland());