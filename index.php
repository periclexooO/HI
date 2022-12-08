<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quieres ser mi novia</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.p1').hover(function(){
                arriba = Math.random()*(400-1) +1;
                abajo = Math.random() * (609-1) +1;
              $(this).css('top', arriba);
              $(this).css('left', abajo);
            });
        });
    function dijoSi(){
        document.getElementById('si').style.display = 'block';
    }
    </script>
</head>
<style>
    *{
    margin: 0px;
    padding: 0px;
}

body{
    background: #3e3ecd;
    font-family: holaa;
}

.contenedor{
    margin: auto;
    width: 900px;
    margin-top: 300px;
    text-align: center;
}



.titulo{
    margin-bottom: 20px;
  
    
}
@font-face {
    font-family: holaa;
    src: url("/letra/natu.ttf");
}

.opciones p{
    background: black;
    display: initial;
    padding: 12px;
    color: #ffffff;
    border-radius: 2px;
    font-weight: bold;
}

p.p1{
    position: absolute;
    top: 400px;
    left: 500px;
    width: 100px;
}
p.p1:hover{
    background: gray;
    cursor: pointer;
}

p.p2{
    position: absolute;
    top: 400px;
    left: 750px;
    width: 100px;
}
p.p2:hover{
    background: gray;
    cursor: pointer;
}
#si{
    background: #c859dc;
    left: 420px;
    position: absolute;
    top: 40px;
    width: 550px;
    color: #ffffff;
    padding: 50px;
    display: none;
}
</style>
<body>
    <div class="contenedor">
        <div class="titulo">
            <h1>¿Quieres ser mi Enamorada?</h1>
        </div>
        <div class="opciones">
            <p class="p1">No</p>
            <p onclick="dijoSi()" class="p2">Si</p>
            <div id="si">    
                <img src="https://i.ibb.co/GpC98KS/Whats-App-Image-2022-11-17-at-7-48-21-PM.jpg" width="60%">
                <h2>Gracias amore, lo sabía. Estas cordialmente invitada a una cita el dia domingo a las mil docientos treinta horas ♡.</h2>
        </div>
        </div>
    </div>
</body>
</html>
