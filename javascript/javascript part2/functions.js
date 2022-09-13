console.log("-----function assignment----");
function describeCountry(country , population , capitalcity)
{

  return(`${country} has ${population} people and its capital city is ${capitalcity}`);
}
 const country1 =describeCountry('india' , 1000000 ,'delhi' );

 const country2 = describeCountry('finland' , 6000000 ,  'helsinky');

 const country3 = describeCountry('canada' , 400000 ,'ottawa' );

 console.log(country1 , "\n" ,country2 , "\n" , country3);