
const emailReg = /^[A-Za-z0-9+_.-]+@(.+)$/;

function validimIKontaktFormes(){
    let inputs = document.querySelectorAll("input");
    email = inputs[0].value;
    fullname = inputs[1].value;
    address = inputs[2].value;
    message = inputs[3].value;

    if(email==""){
        alert('Please fill the email field');
        return false;
    }
    else if(!emailReg.test(email)){
        alert('Please enter a valid email address');
        return false;
    }
    else if(fullname==""){
        alert('Please fill the name field');
        return false;
    }
    else if(address==""){
        alert('Please fill the address field');
        return false;
    }
    else if(message==""){
        alert('Please fill the message field');
        return false;
    }
    else{
        alert('Your message was sent sucesfully!');
        return true;
    }
}