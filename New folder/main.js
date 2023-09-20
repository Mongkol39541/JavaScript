let play = 0;

let money_1 = 0;
let money_2 = 0;
let money_3 = 0;

let asix_1 = 0;
let asix_2 = 0;
let asix_3 = 0;

function showLocalData(){
    let randomNumber_1 = Math.floor(Math.random() * 6) + 1;
    let randomNumber_2 = Math.floor(Math.random() * 6) + 1;
    play += 1;
    if (play % 3 == 1) {
        asix_1 += randomNumber_1 + randomNumber_2;
        document.getElementById("out_1").innerHTML = "ผู้เล่นคนที่ 1";
        document.getElementById("out_1").innerHTML += '<br>';
        document.getElementById("out_1").innerHTML += 'ลูกเต๋าลูกที่ 1 ได้ ' + String(randomNumber_1);
        document.getElementById("out_1").innerHTML += '<br>';
        document.getElementById("out_1").innerHTML += 'ลูกเต๋าลูกที่ 2 ได้ ' + String(randomNumber_2);
        document.getElementById("out_1").innerHTML += '<br>';
        document.getElementById("out_1").innerHTML += 'ตำแหน่งที่อยู่ ' + String(asix_1 % 36);
    } else if (play % 3 == 2) {
        asix_2 += randomNumber_1 + randomNumber_2;
        document.getElementById("out_2").innerHTML = "ผู้เล่นคนที่ 2";
        document.getElementById("out_2").innerHTML += '<br>';
        document.getElementById("out_2").innerHTML += 'ลูกเต๋าลูกที่ 1 ได้ ' + String(randomNumber_1);
        document.getElementById("out_2").innerHTML += '<br>';
        document.getElementById("out_2").innerHTML += 'ลูกเต๋าลูกที่ 2 ได้ ' + String(randomNumber_2);
        document.getElementById("out_2").innerHTML += '<br>';
        document.getElementById("out_2").innerHTML += 'ตำแหน่งที่อยู่ ' + String(asix_2 % 36);
    } else {
        asix_3 += randomNumber_1 + randomNumber_2;
        document.getElementById("out_3").innerHTML = "ผู้เล่นคนที่ 3";
        document.getElementById("out_3").innerHTML += '<br>';
        document.getElementById("out_3").innerHTML += 'ลูกเต๋าลูกที่ 1 ได้ ' + String(randomNumber_1);
        document.getElementById("out_3").innerHTML += '<br>';
        document.getElementById("out_3").innerHTML += 'ลูกเต๋าลูกที่ 2 ได้ ' + String(randomNumber_2);
        document.getElementById("out_3").innerHTML += '<br>';
        document.getElementById("out_3").innerHTML += 'ตำแหน่งที่อยู่ ' + String(asix_3 % 36);
    }
};