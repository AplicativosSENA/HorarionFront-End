<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Coordinador.css">
    <title>Asignación de Ficha</title>
    <script>
        // Funciones para actualizar los valores seleccionados
        let ficha = '';
        let instructor = '';
        let ambiente = '';

        function actualizarFicha(value) {
            ficha = value;
        }

        function actualizarInstructor(value) {
            instructor = value;
        }

        function actualizarAmbiente(value) {
            ambiente = value;
        }

        function asignarFicha() {
            if (!ficha || !instructor || !ambiente) {
                alert('Por favor, seleccione una ficha, un instructor y un ambiente.');
                return;
            }
            // Lógica de asignación aquí (puedes reemplazarlo con la funcionalidad que desees)
            console.log("Ficha asignada:", ficha, instructor, ambiente);
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
                    <img class="imagen-central img-centralAsignarCor" />
                </div>
                <div class="degradado-gris degradado-grisPanCoordinador"></div>
                <h1 class="titulo-asignar">Asignación de ficha</h1>

                <select id="selectorFicha" onchange="actualizarFicha(this.value)" class="selector-coordinador selector-Pan1Coordinador">
                    <option value="">Seleccione ficha</option>
                    <option value="ficha1">Ficha 1</option>
                    <option value="ficha2">Ficha 2</option>
                    <option value="ficha3">Ficha 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>

                <select id="selectorInstructor" onchange="actualizarInstructor(this.value)" class="selector-coordinador selector-Pan1Coordinador">
                    <option value="">Seleccionar instructor</option>
                    <option value="instructor1">Instructor 1</option>
                    <option value="instructor2">Instructor 2</option>
                    <option value="instructor3">Instructor 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>

                <select id="selectorAmbiente" onchange="actualizarAmbiente(this.value)" class="selector-coordinador selector-Pan1Coordinador">
                    <option value="">Seleccione el ambiente</option>
                    <option value="ambiente1">Ambiente 1</option>
                    <option value="ambiente2">Ambiente 2</option>
                    <option value="ambiente3">Ambiente 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>

                <div class="botones botones-Siguiente1">
                    <button class="boton boton-Siguiente1" onclick="asignarFicha()">Asignar</button>
                </div>
            </div>
        </div>

        <button class="boton-volver" onclick="window.location.href = 'asignacionesCoordinador.php'">Volver</button>
        <button class="boton-salida" onclick="window.location.href = 'inicioCoordinador.php'">Salir</button>
    </div>
</body>
</html>
