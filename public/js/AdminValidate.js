window.onload = start;

function start(){
    var cuerpo = document.getElementById('body');
    cuerpo.addEventListener('keyup', validate);
    cuerpo.addEventListener('mousemove', validate);
    cuerpo.addEventListener('click', validate);
}
function validate(){
    let username = document.getElementsByClassName("nombre");
    let email = document.getElementsByClassName("email");
    let instrument = document.getElementsByClassName("instrument");
    let music = document.getElementsByClassName("music");
    var buttons = document.getElementsByClassName("editUser");
    
    for(let i = 0; i<buttons.length; i++){
        if(username[i].value == "" || email[i].value == "" || instrument[i].value == "" || music[i].value == "" ){
            buttons[i].disabled = true;
        }else{
            buttons[i].disabled = false;
        }
    }
}