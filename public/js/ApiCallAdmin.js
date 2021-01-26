// URL: http://127.0.0.1:8000/api/users
window.onload = getUsers;
    let blues = 0;
    let Jazz = 0;
    let Rock = 0;
    let Metal = 0;
    let HipHop = 0;
function getUsers(){

    if(window.XMLHttpRequest){
        peticion_http = new XMLHttpRequest();
    }

    peticion_http.onreadystatechange = muestraUsuarios;
    peticion_http.open('GET', 'http://127.0.0.1:8000/api/users', true);
    peticion_http.send(null);
    
    function muestraUsuarios(){
        if(peticion_http.readyState == 4){
            if(peticion_http.status == 200){
                var texto = peticion_http.responseText;
                var respuesta = JSON.parse(texto); 
                for(let i = 0; i < respuesta.length; i++){
                    if(respuesta[i].music == 'Blues'){
                        blues++;
                    }else if(respuesta[i].music == 'Jazz'){
                        Jazz++;
                    }else if(respuesta[i].music == 'Rock'){
                        Rock++;
                    }else if(respuesta[i].music == 'Metal'){
                        Metal++;
                    }else(respuesta[i].music == 'Hip-Hop')
                        HipHop++;
                    }
                    console.log(blues +' '+Jazz+' '+Rock+' '+Metal+' '+HipHop);
                    drawChart();
                }
            }
        }
    }

