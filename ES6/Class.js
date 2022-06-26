//แบบเดิม

//var user={
//    name:"Boss",
//    age:19,
//    SayHi:function(){
//        return "Hello = "+this.name
//    }
//}

//console.log(user.SayHi())

//แบบใหม่

class User {

    constructor(name,age){
        this.name = name
        this.age = age
    }
    SayHi(){
        console.log("Hello = "+this.name+" Age = "+this.age)
    }
}

let user1 = new User("Boss",19)
user1.SayHi()