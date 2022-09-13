// let language = [];
// let btn = document.getElementById("btn1");
// const getCountry = function (country) {
//   fetch(`https://restcountries.com/v3.1/name/${country}`)
//     .then(
//       function (response) {
//         console.log(response);
//         return response.json();
//       },
//       (err) => alert(err)
//     )
//     .then(function (data) {
//       let lang = data[0].languages;
//       console.log(lang);
//       for (let val of Object.values(lang)) {
//         language.push(val);
//         document.getElementById(
//           "h3"
//         ).textContent = ` languages speaks in india is ${language}  `;
//         console.log(language);
//       }

//       console.log(language);
//     });
// };
// btn.addEventListener("click", function () {
//   getCountry("bharat");
// });
