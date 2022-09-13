console.log("reviewing function practice example");

function calcAge1(birthyear)
{
    return 2022 - birthyear;

}

function  yearsUntilRetirement(firstname1 , birthyear)
{
    const Age1 =calcAge1(birthyear);
    const retirement1 = 65 - Age1;
    if(retirement1 > 0)
    {
        console.log(`${firstname1} retires in ${retirement1} years`);
        return retirement1;
    }
    else
    {
        console.log(`${firstname1} has already retired`);
        return -1;
    }

}
console.log(yearsUntilRetirement("raju" , 1980));
console.log(yearsUntilRetirement("atharva" , 1950));