let number = prompt("Number")
In = number
Our = Math.floor(Math.random()*100)
document.getElementById("result_1").innerHTML = Our
document.getElementById("result_2").innerHTML = In
if (In == Our){
    document.getElementById("result_3").innerHTML = "ยินดีด้วย"
}
else{
    document.getElementById("result_3").innerHTML = "เสียใจด้วย"
}