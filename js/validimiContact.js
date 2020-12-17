document.addEventListener("DOMContentLoaded",
function(ngjarja) {
const BtnSubmit = document.getElementById('btn-submit');

const validate = (ngjarja) => {
ngjarja.preventDefault();
        const username = document.getElementById('user');
        const emaill = document.getElementById('emaili');
        const telefon = document.getElementById('phone');      
        const msg = document.getElementById('mesazhi');

        

        if(username.value ==="" ){
            alert("Ju lutem shtoni Emrin.");
            username.focus();
            return false;
        }
        

        if(emaill.value===""){
            alert("Ju lutem shtoni email.");
            emaill.focus();
            return false;
        }

        var phoneno=
        /^\+(?:[0-9] ?){6,14}[0-​9]$/;

        if(telefon.value ==="" || !telefon.value.match(phoneno)){
            alert("Ju lutem shtoni Numrin e Telefonit.");
            telefon.focus();
            return false;
        }
        

        if(msg.value ===""){
            alert("Ju lutem shtoni Messazhin.");
            msg.focus();
            return false;
        }

       

        if (!emailValidi(emaill.value)) {
            alert("Ju lutem te shtoni email'in valid.");
            emaill.focus();
            return false;
            }
            return true;
        }
            const emailValidi = (email) => {
            const emailR = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailR.test(email.toLowerCase());

    }
     
   BtnSubmit.addEventListener('click', validate);
    
});



