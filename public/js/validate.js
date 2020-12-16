window.onload = start;

function start(){
    var allForms = document.getElementsByTagName("form");
    for (let i = 0; i < allForms.length; i++) {
        if(i == 1){
            allForms[i].addEventListener('keyup', validate);
        }
    }
}
function validate(){
    let username = document.getElementById("InputUsername").value;
    let email = document.getElementById("InputEmail").value;
    let password = document.getElementById("InputPassword1").value;
    let confirm = document.getElementById("InputPassword2").value;
    var boton = document.getElementById("AccountButton");

    if(username == "" || email == "" || password == "" || confirm == "" ){
        boton.disabled = true;
    }else{
        if(password == confirm){
            boton.disabled = false;
        } else{
            boton.disabled = true;
        }
    }
}