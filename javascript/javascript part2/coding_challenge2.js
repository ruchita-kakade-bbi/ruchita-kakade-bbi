`use strict`;
console.log("---coding challenge2 asignment-----");


function calcTip(bill){
    if(bill >= 50 && bill <= 300){
        tip = bill * 15 / 100;
        return tip;
    }
    else{
        tip = bill * 20 / 100;
        return tip;
    }
}

let bills = [125,555,44];
let tips = [calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])];
console.log(tips);