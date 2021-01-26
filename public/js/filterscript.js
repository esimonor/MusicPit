window.onload=inicio;

function inicio() {
    document.getElementById("SearchForm").addEventListener("click", buscar);
}

function buscar(){
    var instrumento = document.getElementById("inst").value;
    var musica = document.getElementById("mus").value;
    var localizacion = document.getElementById("loc").value;

    document.getElementById('instrument').value = instrumento;
    document.getElementById('music').value = musica;
    document.getElementById('location').value = localizacion;
}