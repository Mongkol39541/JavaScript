let requestURL = "employees.json";
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        dataReportStatus(JSON.parse(request.responseText));
    }
}
request.open("GET", requestURL, true);
request.send();

function dataReportStatus(data) {
    for (let i = 0; i < data.Firstname.length; i++) {
        let strong = document.createElement('strong');
        let text = document.createTextNode(data.Firstname[i] + " " + data.Lastname[i]);
        strong.appendChild(text);
        let txt = " " + data.Gender[i] + " ";
        txt += "is a " + data.Position[i] + ", ";
        txt += data.Address[i];
        document.getElementById("out").appendChild(strong);
        document.getElementById("out").innerHTML += txt;
        document.getElementById("out").innerHTML += '<br>';
    }
}