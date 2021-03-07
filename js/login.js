const LogInbtn = document.getElementById('login');
LogInbtn.addEventListener("click", (event)=>{
        event.preventDefault();
        const username = document.getElementById('userN');
        const fjalkalimi = document.getElementById('pass');

        if (username.value == "") {
            alert("Ju duhet te shtoni username-in.");
            username.focus();
            return false;
        }

        if (fjalkalimi.value == "") {
            alert("Ju duhet te shtoni Fjalkalimin.");
            fjalkalimi.focus();
            return false;
        }
        else{
            alert("Ju jeni kycur me sukses!");
            return true;
        }
});
