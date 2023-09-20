let requestURL = 'questionAnswerData.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        data = JSON.parse(request.responseText);
        dataReportStatus(data);
    }
}
request.open("GET", requestURL, true);
request.send();

function dataReportStatus(data) {
    for (let i = 0; i < data.length; i++) {
        let question = document.createElement('p');
        let text_question = document.createTextNode(data[i].question);
        question.appendChild(text_question);
        document.getElementById("form_question").appendChild(question);
        for (let [key, value] of Object.entries(data[i].answers)) {
            if (value.length == 1) {
                break
            }
            let choie = document.createElement('span');
            let answers = value + "<br>";
            choie.name =  question;
            if (key != data[i].answers.correct) {
                choie.innerHTML = "<input type = 'radio'>"
            } else {
                choie.innerHTML = "<input type = 'radio' checked>"
            }
            document.getElementById("form_question").appendChild(choie);
            document.getElementById("form_question").innerHTML += answers;
        }
    }
}