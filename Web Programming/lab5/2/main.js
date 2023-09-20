let requestURL = 'person.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    dataReportStatus(JSON.parse(request.responseText));
}
request.open("GET", requestURL, true);
request.send();

function dataReportStatus(data) {
    let text = data[0].firstName + " ";
    text += data[0].lastName + ", ";
    text += data[0].gender.type + " ";
    text += data[0].age + " years old." + '<br>';
    text += data[0].address.streetAddress + " " + '<br>';
    text += data[0].address.city + " " + '<br>';
    text += data[0].address.state + " " + '<br>';
    text += data[0].address.postalCode + " " + '<br>';
    text += data[0].phoneNumber[0].type + " : " + data[0].phoneNumber[0].number + '<br>';
    text += data[0].phoneNumber[1].type + " : " + data[0].phoneNumber[0].number + '<br>';
    document.getElementById("out").innerHTML = text;
}