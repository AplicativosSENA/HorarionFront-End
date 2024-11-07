<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Coordinador.css">
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
    const primerDiaDelMes = new Date(añoActual, mesActual, 1).getDay(); // Obtener el primer día del mes (0=Domingo, 1=Lunes, ..., 6=Sábado)
    const tablaDias = document.getElementById("tablaDias");
    tablaDias.innerHTML = "";

    let dia = 1;

    // Crear filas para el calendario
    for (let i = 0; i < 6; i++) { // Crear hasta 6 filas para cubrir todos los días
        const fila = document.createElement("tr");
        
        // Rellenar celdas vacías para los días antes del primer día del mes
        for (let j = 0; j < 7; j++) {
            const celda = document.createElement("td");

            // Solo llenar celdas vacías si estamos en la primera fila y antes del primer día del mes
            if (i === 0 && j < primerDiaDelMes) {
                celda.textContent = ""; // Celdas vacías
            } else if (dia <= diasDelMes) {
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
                fila.appendChild(celda);
                dia++; // Incrementar día solo si se está agregando un botón
            } else {
                // Rellenar celdas vacías después de que se han agregado todos los días del mes
                celda.textContent = "";
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
            // Redirige a la nueva página con los detalles del día seleccionado
            window.location.href = `pantallaCoordinador2.php?dia=${dia}&mes=${mes}&año=${año}`;
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
            <img src="..\resources\img\DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        <div class="secciones">
            <div class="seccion-central">
            <div class="contenedor-imagen">
                    <img class="imagen-central img-centralCalCor" />
                </div>
                <button class="boton-flecha boton-adelanteCoordinador" onclick="siguienteMes()">➡</button>
                <button class="boton-flecha boton-atrasCoordinador" onclick="mesAnterior()">⬅</button>
                <h1 class="titulo-calendario titulo-calCoordinador" id="nombreMes">
                    Horario de Programa
                </h1>
                <table class="tabla-calendario tabla-calCoordinador">
                    <thead>
                        <tr class="texto-calendario texto-calCoordinador">
                            <th>Domingo</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sábado</th>
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
