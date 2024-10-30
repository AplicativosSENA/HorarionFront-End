<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
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
            <img
                src="https://img.freepik.com/premium-photo/artistic-blurry-colorful-plain-green-gradient-abstract-wallpaper-background_1120306-3676.jpg"
                alt="Degradado verde a blanco"
                class="imagen-degradado"
            />
        </div>
        <div class="secciones">
            <div class="seccion-central">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-central" />
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
                <div class="botones botones-Siguiente1">
                    <button
                        class="boton boton-Siguiente1"
                        onclick="irCalendarioCoordinador()"
                    >
                        Siguiente
                    </button>
                </div>
            </div>
        </div>
        <button
            class="boton-salida boton-salidaCoordinador" onclick="window.location.href = 'inicioCoordinador.php'"> Salir
        </button>
    </div>
</body>
</html>