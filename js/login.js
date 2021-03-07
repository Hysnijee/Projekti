function ValidimiLogin(){
    let LogInbtn = document.getElementById('login');

            const username = document.getElementById('userN');
            const fjalkalimi = document.getElementById('pass');
            const rememberMe = document.getElementById('rememberme');

            if (username.value == "") {
                alert("Ju duhet te shtoni username-in.");
                return false;
            }
            else if (fjalkalimi.value == "") {
                alert("Ju duhet te shtoni Fjalkalimin.");
                return false;
            }
            else if (fjalkalimi.length < 7) {
                alert("Fjalekalimi juaj duhet te permbaje se paku 8 karaktere.");
                return false;
            }
            else if(rememberMe.checked==true){
                alert("Te dhenat tuaja jane ruajtur dhe ju jeni kycur me sukses!");
            }
            else{
                alert("Ju jeni kycur me sukses!");
                return true;
            }
       
}
