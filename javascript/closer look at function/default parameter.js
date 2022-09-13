console.log("---section10---");
console.log("---default parameter----");
const school1 = [];
const school = function (name1, phnno = 9370575815, std, rollno = 101) {
  const student = {
    name1,
    phnno,
    std,
    rollno,
  };

  school1.push(student);
  console.log(student);
};
school("ruchita");
school("atharva", 62178683719, 3, 102);
school("raviraj");
//school(8);
