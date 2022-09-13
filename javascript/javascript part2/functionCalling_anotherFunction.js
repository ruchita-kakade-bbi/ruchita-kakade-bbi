console.log("---function calling another function--------");

console.log("----practice examole------");


function pieceOf_fruit(fruit)
{
    return fruit * 4;
}
function fruitJuice(apples , oranges)
{
 const applePieces =pieceOf_fruit(apples);
 const OrangePieces =pieceOf_fruit(oranges);

 return `juice with ${applePieces}  apple pieces and ${OrangePieces} orange pieces`;

}
console.log(fruitJuice(2 ,3 ));


console.log("------udemy assignment--------");

function percentageOfWorld3(population)
{
    const percent = (population/7900)*10;
    return percent;
}


function describePopulation(country_name , population)
{
    const Cal_population4 =percentageOfWorld3(population);
    return `${country_name} has ${population} million people which is about ${Cal_population4}%`;
}
console.log(describePopulation("india" , 690));