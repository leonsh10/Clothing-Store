// function validate(number){
//     if(number ==0){
//         //login
//     }

//     else if(number ==1){
//         //register
//     }
// }

function changeForm(param){
    
    var divList=document.getElementsByClassName('forms');
    
    if(param == 0 ){
        divList[0].classList.add('form-style');
        divList[0].classList.remove('hidden');

        divList[1].classList.remove('form-style');
        divList[1].classList.add('hidden')
    }

    else if(param == 1){
        divList[1].classList.add('form-style');
        divList[1].classList.remove('hidden');

        divList[0].classList.remove('form-style');
        divList[0].classList.add('hidden');
    }
}