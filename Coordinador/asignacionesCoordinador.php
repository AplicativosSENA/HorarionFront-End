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
            let sedeSeleccionada = sessionStorage.getItem('sede'); // Recuperar sede desde sessionStorage
            let asignaciones = JSON.parse(localStorage.getItem("asignaciones")) || [];

            // Mostrar asignaciones guardadas
            function mostrarAsignaciones() {
                let contenedor = document.getElementById("contenedorAsignaciones");
                contenedor.innerHTML = ''; // Limpiar contenido previo

                asignaciones.forEach((asignacion, index) => {
                    let div = document.createElement("div");
                    div.classList.add("asignacion-cuadro");
                    div.innerHTML = `
                        <p class="texto-asignacio"><strong>Ficha:</strong> ${asignacion.ficha}</p>
                        <p class="texto-asignacio"><strong>Instructor:</strong> ${asignacion.instructor}</p>
                        <p class="texto-asignacio"><strong>Ambiente:</strong> ${asignacion.ambiente}</p>
                        <p class="texto-asignacio"><strong>Sede:</strong> ${asignacion.sede}</p> <!-- Mostrar sede de la asignación -->
                        <div class="acciones">
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar" onclick="eliminarAsignacion(${index})">Eliminar</button>
                        </div>
                    `;
                    contenedor.appendChild(div);
                });
            }

            mostrarAsignaciones();

            // Guardar asignación nueva
            function agregarAsignacion(ficha, instructor, ambiente, sede) {
                let nuevaAsignacion = {
                    ficha: ficha,
                    instructor: instructor,
                    ambiente: ambiente,
                    sede: sede
                };

                asignaciones.push(nuevaAsignacion);
                localStorage.setItem("asignaciones", JSON.stringify(asignaciones)); // Guardar asignaciones
                mostrarAsignaciones(); // Volver a mostrar las asignaciones
            }
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

    <style>
        .contenedor-asignaciones {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: flex-start;
            z-index: 10;
            border-bottom: 1px solid #000; /* Línea negra de separación entre los datos */
        }

        .asignacion-cuadro {
            width: 220px;
            height: auto;
            padding: 15px;
            border: 2px solid #000; /* Línea negra alrededor de cada recuadro */
            border-radius: 8px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 10px; /* Espacio inferior */
        }

        .texto-asignacio{
            margin: 5px 0; /* Espaciado entre los párrafos */
            border-bottom: 1px solid #000; /* Línea negra de separación entre los datos */
            padding-bottom: 5px; /* Espaciado debajo de la línea */
        }

        .acciones {
            display: flex;
            gap: 10px;
        }

        .boton-editar, .boton-eliminar {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .boton-editar {
            background-color: #ffa500;
            color: white;
        }

        .boton-eliminar {
            background-color: red;
            color: white;
        }

        .contenedor-botonAgregar {
            position: fixed;
            top: 35vh;
            right: 150vh;
        }
    </style>
</body>
</html>
