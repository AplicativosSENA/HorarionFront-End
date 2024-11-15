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
            let sedeSeleccionada = sessionStorage.getItem('sede'); // Recupera la sede
            let programaSeleccionado = sessionStorage.getItem("programa"); // Recupera el programa

            console.log("Programa seleccionado: ", programaSeleccionado);

            let asignaciones = JSON.parse(localStorage.getItem("asignaciones")) || [];

            // Filtrar asignaciones por el programa seleccionado
            if (programaSeleccionado) {
                asignaciones = asignaciones.filter(asignacion => asignacion.programa === programaSeleccionado);
            }

            function mostrarAsignaciones() {
                let contenedor = document.getElementById("contenedorAsignaciones");
                contenedor.innerHTML = ''; 

                asignaciones.forEach((asignacion, index) => {
                    let div = document.createElement("div");
                    div.classList.add("asignacion-cuadro");
                    div.innerHTML = `
                        <p class="texto-asignacio"><strong>Ficha:</strong> ${asignacion.ficha}</p>
                        <p class="texto-asignacio"><strong>Instructor:</strong> ${asignacion.instructor}</p>
                        <p class="texto-asignacio"><strong>Ambiente:</strong> ${asignacion.ambiente}</p>
                        <p class="texto-asignacio"><strong>Sede:</strong> ${asignacion.sede || "No definida"}</p>
                        <!--<p class="texto-asignacio"><strong>Programa:</strong> ${asignacion.programa || "No definida"}</p>-->
                        <div class="acciones">
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar" onclick="eliminarAsignacion(${index})">Eliminar</button>
                        </div>
                    `;
                    contenedor.appendChild(div);
                });
            }
            mostrarAsignaciones();
            //agregarAsignacion("Ficha 1", "Instructor 1", "Ambiente 1");
        };

        function eliminarAsignacion(index) {
            let asignaciones = JSON.parse(localStorage.getItem("asignaciones")) || [];
            asignaciones.splice(index, 1); // Eliminar asignación seleccionada
            localStorage.setItem("asignaciones", JSON.stringify(asignaciones)); // Guardar cambios
            window.location.reload(); // Recargar página para reflejar los cambios
        }

        function irANuevaAsignacion() {
            window.location.href = 'asignarCoordinador.php';
        }

        function irAPaginaInicio() {
            window.location.href = 'inicioCoordinador.php';
        }

        function irAPaginaAnterior() {
            window.location.href = 'calendarioCoordinador.php'; // Redirigir a calendarioCoordinador.php
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
                <div class="contenedor-botonAgregar">
                    <button class="boton-agregar" onclick="irANuevaAsignacion()">+</button>
                </div>

                <div id="contenedorAsignaciones" class="contenedor-asignaciones">
                    <!-- Las asignaciones se insertarán dinámicamente aquí -->
                </div>

                <button class="boton-volver boton-volAsigCoordinador" onclick="irAPaginaAnterior()">Volver</button>
                <button class="boton-salida boton-salAsigCoordinador" onclick="irAPaginaInicio()">Salir</button>
            </div>
        </div>
    </div>
</body>
</html>
