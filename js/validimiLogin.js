document.addEventListener("DOMContentLoaded",
function(ngjarja) {
const BtnSubmit = document.getElementById('submit-btn');
/*Funksioni per validim */
const validate = (ngjarja) => {
ngjarja.preventDefault();
        const username = document.getElementById('user');
        const password = document.getElementById('pass');
        
        if(username.value ==="" ){
            alert("Ju lutem shtoni Username.");
            username.focus();
            return false;
        }

        if(password.value ===""){
            alert("Ju lutem shtoni Password.");
            password.focus();
            return false;
        }
    }
    BtnSubmit.addEventListener('click', validate);
});