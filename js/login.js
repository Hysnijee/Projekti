function ValidimiLogin(){
    let LogInbtn = document.getElementById('login');

            const username = document.getElementById('username');
            const fjalkalimi = document.getElementById('password');

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
            else{
                alert("Ju jeni kycur me sukses!");
                return true;
            }
       
}
