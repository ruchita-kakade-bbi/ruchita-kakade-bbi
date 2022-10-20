let request = new XMLHttpRequest();
request.open("GET", "https://data.covid19india.org/v4/min/data.min.json");
request.send();
console.log(request);
request.addEventListener("load", function () {
    const data = JSON.parse(request.responseText);
    document.getElementById(
        "h2"
    ).textContent = `delta patient tested  ${data.AN.delta.tested} and ${data.AN.delta.vaccinated1} peoples done with the vaccination `;
    console.log(data);
}); 