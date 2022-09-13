console.log("-----------Arrow function assignment---------");



console.log("---- practice example-----");



const calcAge = birthyear => 2037 - birthyear
 const Age =calcAge(1980);
 console.log("Age of person:- " + Age);

 const retirement = (birthyear , firstname) =>

 {
     const Calage1= 2020 - birthyear;
     const Cal_retirement =65 - Age;
     return `${firstname} retires in ${Cal_retirement} years`;
 }
 
 console.log(retirement(1960 , "Rajendra"));


 console.log("----udemy assignment---------");


 const percentageOfWorld1 = population => (population/7900)*100
  const Cal_population = percentageOfWorld1(400);
  const Cal_population1 =percentageOfWorld1(200);
  const Cal_population2 = percentageOfWorld1(300);
  console.log("population of india is   :- "+ Cal_population);
  console.log("population of USA is     :- "+ Cal_population1);
  console.log("population of france is  :- "+ Cal_population2 );

  const percentageOfWorld2 =(population1 , country_name)=>
  {
      const Cal_population3 =(population1/7900)*100;
      return `${country_name} has population  of ${Cal_population3}`;
  }
  console.log(percentageOfWorld2(260 , "america"));
