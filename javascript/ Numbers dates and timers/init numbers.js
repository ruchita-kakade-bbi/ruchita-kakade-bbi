console.log("-----international number format-----");
const num = 3245634427876.112;
console.log("Us", new Intl.NumberFormat("en-US").format(num));
console.log("Germany", new Intl.NumberFormat("de-DE").format(num));
