document.addEventListener("DOMContentLoaded",
function(ngjarja) {
const BtnSubmit = document.getElementById('btn-submit');

const validate = (ngjarja) => {
ngjarja.preventDefault();
        const username = document.getElementById('user');
        const password = document.getElementById('pass');
        const emaill = document.getElementById('emaili');
        if(username.value ==="" ){
            alert("Ju lutem shtoni Username.");
            username.focus();
            return false;
        }

        if(username.value.length < 4 || username.value.length >= 9){
            alert("Username duhet te jete 4 deri 9 karaktere.");
            username.focus();
            return false;
        }

        if(password.value ===""){
            alert("Ju lutem shtoni Password.");
            password.focus();
            return false;
        }

        if(password.value.length > 12 || password.value.length < 6){
            alert("Password duhet te jete 6 deri 12 karaktere.");
            password.focus();
            return false;
        }
        



        if(emaill.value===""){
            alert("Ju lutem shtoni email.");
            emaill.focus();
            return false;
        }

        
        

    //     if (!passValid(password.value)) {
    //         alert("Ju lutem te shtoni password'in valid.");
    //         password.focus();
    //         return false;
    //         }
    //         return true;
    //         }
    //         const passValid = (passwordi) => {
    //         const passRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    //         return passRegex.test(passwordi);
    // }



        if (!emailValid(emaill.value)) {
            alert("Ju lutem te shtoni email'in valid.");
            emaill.focus();
            return false;
            }
            return true; 
            }
            const emailValid = (email) => {
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailRegex.test(email.toLowerCase());

    }
    
    
   BtnSubmit.addEventListener('click', validate);
    
});