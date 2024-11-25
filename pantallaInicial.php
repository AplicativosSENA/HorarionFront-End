<?php
// pantallaInicio.php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla Principal</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="resources/css/pantallaInicial.css">
</head>
<body>
    <div class="contenedor-principal">
        <div class="franja-verde">
            <img src="resources\img\DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        
        <div class="secciones">
            <div class="seccion-central">
                <div className="contenedor-imagen ">
                    <img class="imagen-central img-centralPanInicio" />
                </div>
                <h1 class="titulo">Título</h1>
                <p class="texto-explicativo">Texto explicativo breve</p>
                
                <div class="botones botones-inicio">
                    <a>
                        <button class="boton boton-inicio">Encuesta</button>
                    </a>
                    <a href="pantallaInicio.php">
                        <button class="boton boton-inicio">Horario</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
