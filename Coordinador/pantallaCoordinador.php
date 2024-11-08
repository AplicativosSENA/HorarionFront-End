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
            // Validar que se haya seleccionado una sede y un programa
            if (!sede || !programa) {
                alert('Por favor, seleccione una sede y un programa.');
                return;
            }
            window.location.href = 'calendarioCoordinador.php'; // Navegar al calendario
        }

        function actualizarSede(value) {
            sede = value;
        }

        function actualizarPrograma(value) {
            programa = value;
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
                    <option value="sede1">Sede 1</option>
                    <option value="sede2">Sede 2</option>
                </select>

                <select
                    onchange="actualizarPrograma(this.value)"
                    class="selector-coordinador selector-Pan1Coordinador"
                >
                    <option value="">Seleccione un programa</option>
                    <option value="programa1">Programa 1</option>
                    <option value="programa2">Programa 2</option>
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
