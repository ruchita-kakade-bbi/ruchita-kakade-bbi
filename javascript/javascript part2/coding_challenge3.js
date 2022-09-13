console.log("\n" + "\n"+ "----coding challenge3----");

const  mark ={
    fullName : 'mark miller',
    mass : 78,
    height : 1.69,

     calcBMI : function()
     {
       this.BMI = this.mass /this.height **2;
       return this.BMI;
     }
};


const john =
{
    fullName1 : 'john smith',
    mass1 : 92,
    height1 : 1.95,

    calcBMI1 : function()
    {
        this.BMI2 = this.mass1/this.height1 **2;
      return this.BMI2;
    }

};

john.calcBMI1();
mark.calcBMI();

if( john.BMI2 > mark.BMI )
{
    console.log(`${john.fullName1}'s BMI ${john.BMI2} is higher than ${mark .fullName}'s BMI ${mark.BMI}`);
}
else
{
    console.log(`${mark.fullName}'s BMI ${mark.BMI} is higher than ${john.fullName1}'s BMI ${john.BMI2}`);
}