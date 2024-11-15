<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Coordinador.css">
    <title>Asignación de Ficha</title>
    <script>
        let sede = '';
        let programa = '';

        function irCalendarioCoordinador() {
        if (!sede || !programa) {
            alert('Por favor, seleccione una sede y un programa.');
            return;
        }
        // Confirmar que `sede` y `programa` se guardan correctamente
            sessionStorage.setItem('sede', sede);
            sessionStorage.setItem('programa', programa);
            console.log("Sede guardada en sessionStorage:", sede);  // Registro para confirmar
            window.location.href = 'calendarioCoordinador.php';
        }

        function seleccionarPrograma(programa) {
            sessionStorage.setItem('programaSeleccionado', programa);
            // Redirigir a asignacionesCoordinador.php o cualquier otra acción necesaria
        }


        function actualizarSede(value) {
            sede = value;
            sessionStorage.setItem('sede', sede); // Guarda inmediatamente en sessionStorage
            console.log("Sede actualizada en sessionStorage:", sede);  // Registro para confirmar
        }

        function actualizarPrograma(value) {
            programa = value;
            sessionStorage.setItem('programa', programa); // Guarda inmediatamente en sessionStorage
        }
    </script>
</head>
<body>
    <div class="contenedor-principal">
        <div class="franja-verde">
            <img src="..\resources\img\DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        <div class="secciones">
            <div class="seccion-central">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralPan1" />
                </div>
                <div class="degradado-gris degradado-grisPanCoordinador"></div>
                <h1 class="titulo-Seleccion">Asignación de ficha</h1>
                <select
                    onchange="actualizarSede(this.value)"
                    class="selector-coordinador selector-Pan1Coordinador"
                >
                    <option value="">Seleccione una sede</option>
                    <option value="sede_central">Sede Central</option>
                    <option value="sede_norte">Sede Norte</option>
                    <option value="sede_sur">Sede Sur</option>
                    <option value="sede_oriente">Sede Oriente</option>
                    <option value="sede_occidente">Sede Occidente</option>
                </select>

                <select
                    onchange="actualizarPrograma(this.value)"
                    class="selector-coordinador selector-Pan1Coordinador"
                >
                    <option value="">Seleccione un programa</option>
                    <option value="desarrollo_software">Desarrollo de Software</option>
                    <option value="gestion_administrativa">Gestión Administrativa</option>
                    <option value="mantenimiento_equipos">Mantenimiento de Equipos Electrónicos</option>
                    <option value="diseño_multimedia">Diseño Multimedia</option>
                    <option value="logistica_internacional">Logística Internacional</option>
                </select>
                <button
                    class="boton boton-Siguiente1"
                    onclick="irCalendarioCoordinador()"
                >
                    Siguiente
                </button>
            </div>
        </div>
        <button
            class="boton-salida boton-salidaPan1Cor" onclick="window.location.href = 'inicioCoordinador.php'"> Salir
        </button>
    </div>
</body>
</html>
