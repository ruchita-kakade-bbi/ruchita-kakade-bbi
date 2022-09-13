console.log("-----basic array methods assignment----");

const neighbours =['japan','turkey' , 'france']

console.log(neighbours);

neighbours.push('utopia');
console.log(neighbours);

neighbours.pop(neighbours);
console.log(neighbours);

if(!neighbours.includes('Germany'))
{
console.log("Probably not a central European country.");
}
neighbours[neighbours.indexOf('france')] = 'Republic of france';
console.log(neighbours);

neighbours[1]="india";
console.log(neighbours);

