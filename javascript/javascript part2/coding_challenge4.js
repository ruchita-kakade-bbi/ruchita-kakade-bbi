console.log("----coding challenge4------");

const bill1 =[22, 295, 176, 440, 37, 105, 10, 1100, 86,52];
const tip1=[];
const total=[];

for(let i=0;i<bill1.length;i++)
{
    tip1.push(calcTip(bill1[i]));
    total.push(bill1[i]+tip1[i]);
}
console.log(bill1,tip1,total);

const arr=[];
const calcAverage1 =function(arr)
{
    let sum =0;
for(let i=0;i<bill1.length;i++)
{
    sum=sum+arr[i];
    }
let avg=sum/bill1.length;
return avg;
}

console.log(calcAverage1(total));