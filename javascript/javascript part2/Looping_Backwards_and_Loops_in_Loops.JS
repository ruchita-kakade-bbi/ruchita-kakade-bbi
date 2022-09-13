console.log("----Looping Backwards and Loops in Loops assignment----");

console.log("----udemy example---");

console.log("---backward loop-----");

const jonas2 =[
 'jonas','schmed',2037- 1999,'teacher'
];

for(let i= jonas2.length-1 ;i>=0 ;i--)
{
    console.log(jonas2[i]);
}

console.log("---loop inside a loop----");

console.log(" "); 

for(let exercise =1 ;exercise < 4;exercise++)

{
  console.log(`starting exercise ${exercise}`)

  for(let rep =1 ;rep < 5 ;rep++)
  {
      console.log(`starting with exercise ${exercise} : Lifting weight repititions ${rep}`);
  }
}

console.log("---udemy assignment---");
const listOfNeighbours =[['canada', 'Mexico'] ,['spain'] , ['Norway ' ,'sweden','Russia']];

for(let i= 0; i <listOfNeighbours.length;i++ )
{
    for(let j= 0;j<listOfNeighbours[i].length;j++)
    {
        console.log(`Neighbours : ${listOfNeighbours[i][j] }`)
            
        }
    }
