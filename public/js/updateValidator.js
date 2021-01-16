window.onload = start;

function start(){
    var allForms = document.getElementsByTagName("form");
    for (let i = 0; i < allForms.length; i++) {
        if(i == 2){
            allForms[i].addEventListener('keyup', validate);
            allForms[i].addEventListener('mousemove', validate);
        }
    }
}
function validate(){
    let username = document.getElementById("fullName").value;
    let email = document.getElementById("eMail").value;
    let instrument = document.getElementById("instrument").value;
    let music = document.getElementById("music").value;
    var boton = document.getElementById("submit");
    
    if(username == "" || email == "" || instrument == "" || music == "" ){
        boton.disabled = true;
    }else{
        boton.disabled = false;
    }
}