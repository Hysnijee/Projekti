
const emailReg = /^[A-Za-z0-9+_.-]+@(.+)$/;

function valdimiIFormes(){
    let inputs = document.querySelectorAll("input");
    fullname = inputs[0].value;
    email = inputs[1].value;
    username = inputs[2].value;
    password = inputs[3].value;
    city = inputs[4].value;
    address = inputs[5].value;
    ccNo = inputs[6].value;

    if(fullname==""){
        alert("Please enter your full name!");
        return false;
    }
    else if(email==""){
        alert("Please enter your email address!");
        return false;
    }
    else if(!emailReg.test(email)){
        alert("Please enter a valid email address!");
        return false;
    }
    else if(username==""){
        alert("Please enter a username!");
        return false;
    }
    else if(username.length<3){
        alert("Username must be at least 3 characters long!");
        return false;
    }
    else if(password==""){
        alert("Please enter a password!");
        return false;
    }
    else if(password.length<7){
        alert("Password must be at least 8 characters long!");
        return false;
    }
    else if(city==""){
        alert("Please enter the city you live in!");
        return false;
    }
    else if(address==""){
        alert("Please enter your address!");
        return false;
    }
    else if(ccNo==""){
        alert("Please enter your credit card number!");
        return false;
    }
    else if(isNaN(ccNo)){
        alert("Please enter a valid credit card number!");
        return false;
    }
    else{
        alert("Your registration was succesful!");
        return true;
    }
}