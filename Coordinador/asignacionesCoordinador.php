<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Coordinador.css">
    <title>Asignación Coordinador</title>
    <script>
        window.onload = function() {
            // Obtener el parámetro 'hora' de la URL
            const urlParams = new URLSearchParams(window.location.search);
            const hora = urlParams.get('hora');
            
            // Mostrar la hora seleccionada en la consola
            if (hora) {
                console.log("Hora seleccionada: " + hora);
            }
        };

        function irANuevaAsignacion() {
            window.location.href = 'asignarCoordinador.php';
        }

        function irAPaginaInicio() {
            window.location.href = 'inicioCoordinador.php';
        }

        function irAPaginaAnterior() {
            window.location.href = 'pantallaCoordinador2.php';
        }
    </script>
</head>
<body>
    <div class="contenedor-principal">
        <div class="franja-verde">
            <img src="../resources/img/DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        <div class="secciones">
            <div class="seccion-central">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralAsigCor" />
                </div>
                <div class="degradado-gris degradado-grisAsignacionCord"></div>
                  
                   <div class="contenedor-botonAgregar"><button class="boton-agregar" onclick="irANuevaAsignacion()">+</button></div>
                

                
                <button class="boton-salida" onclick="irAPaginaInicio()">Salir</button>
                <button class="boton-volver" onclick="irAPaginaAnterior()">Volver</button>
            </div>
        </div>
    </div>
</body>
</html>
