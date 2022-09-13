console.log("---coding challenge1--------");
const calcAverage = (a,b ,c) =>(a+b+c)/3;



 const scoredolphins =calcAverage(44,23,71);
    const scorekolalas= calcAverage(65,54,49);
 console.log(scoredolphins ,scorekolalas);

function checkWinner (avgDolphins , avgkoalas)
{
    if(avgDolphins >= 2* avgkoalas)
    {
        console.log("dolphin team is winner");
    }
    else
    {
        console.log("koalas is winner");
    }
    
    
}
checkWinner(46 , 56);
checkWinner(scoredolphins , scorekolalas);
