function ValidimiLogin(){
    let loginbtn = document.getElementById('login');

            const username = document.getElementById('username');
            const password = document.getElementById('password');

            if (username.value == "") {
                alert("Ju duhet te shtoni username-in.");
                return false;
            }
            else if (password.value == "") {
                alert("Ju duhet te shtoni Fjalkalimin.");
                return false;
            }
            else if (password.length < 7) {
                alert("Fjalekalimi juaj duhet te permbaje se paku 8 karaktere.");
                return false;
            }
            else{
                return true;
            }
       
}
