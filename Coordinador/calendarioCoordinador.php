<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <title>Calendario Coordinador</title>
    <script>
        let mesActual = new Date().getMonth();
        const añoActual = new Date().getFullYear();
        const nombreMes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        function obtenerDiasDelMes(mes, año) {
            return new Date(año, mes + 1, 0).getDate();
        }

        function actualizarCalendario() {
    const nombreMesElement = document.getElementById("nombreMes");
    nombreMesElement.textContent = `Horario de Programa - ${nombreMes[mesActual]}`;

    const diasDelMes = obtenerDiasDelMes(mesActual, añoActual);
    const tablaDias = document.getElementById("tablaDias");
    tablaDias.innerHTML = "";

    let dia = 1;
    for (let i = 0; i < Math.ceil(diasDelMes / 7); i++) {
        const fila = document.createElement("tr");
        for (let j = 0; j < 7; j++) {
            const celda = document.createElement("td");
            if (dia <= diasDelMes) {
                const boton = document.createElement("button");
                boton.textContent = dia;
                boton.classList.add("boton-calendario", "boton-calCoordinador");

                // Crear una función para capturar el valor de 'dia' en cada botón
                boton.onclick = (function(diaSeleccionado) {
                    return function() {
                        seleccionarDia(diaSeleccionado, mesActual + 1, añoActual);
                    };
                })(dia);

                celda.appendChild(boton);
                dia++;
            }
            fila.appendChild(celda);
        }
        tablaDias.appendChild(fila);
    }
}

        function siguienteMes() {
            if (mesActual < new Date().getMonth() + 1) {
                mesActual++;
                actualizarCalendario();
            }
        }

        function mesAnterior() {
            if (mesActual > new Date().getMonth()) {
                mesActual--;
                actualizarCalendario();
            }
        }

        // Función para imprimir el día, mes y año seleccionados
        function seleccionarDia(dia, mes, año) {
            console.log(`Día seleccionado: ${dia}/${mes}/${año}`);
        }

        function irAPaginaInicio() {
            window.location.href = 'inicioCoordinador.php';
        }

        function irAPaginaAnterior() {
            window.location.href = 'pantallaCoordinador.php';
        }

        document.addEventListener("DOMContentLoaded", actualizarCalendario);
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
                    <img class="imagen-central img-centralCorTruc" />
                </div>
                <button class="boton-flecha boton-adelanteCoordinador" onclick="siguienteMes()">➡</button>
                <button class="boton-flecha boton-atrasCoordinador" onclick="mesAnterior()">⬅</button>
                <h1 class="titulo-calendario titulo-calCoordinador" id="nombreMes">
                    Horario de Programa
                </h1>
                <table class="tabla-calendario tabla-calCoordinador">
                    <thead>
                        <tr class="texto-calendario texto-calCoordinador">
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sábado</th>
                            <th>Domingo</th>
                        </tr>
                    </thead>
                    <tbody id="tablaDias">
                        <!-- Los días del mes se generarán aquí mediante JavaScript -->
                    </tbody>
                </table>
                <button class="boton-volver" onclick="irAPaginaAnterior()">Volver</button>
                <button class="boton-salida" onclick="irAPaginaInicio()">Salir</button>
            </div>
        </div>
    </div>
</body>
</html>
