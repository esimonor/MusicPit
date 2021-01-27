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

                    }else if(respuesta[i].music == 'Hip-Hop')
                        HipHop++;

                    }
                }
                grafico();
            }
        }
    }

    function grafico(){
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Blues', 'Jazz', 'Rock', 'Metal', 'Hip-Hop'],
                datasets: [{
                    label: 'User preference',
                    data: [blues, Jazz, Rock, Metal, HipHop],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }