<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Coordinador.css">
    <title>Pantalla Coordinador 2</title>
    <script>
        function redirigirAAsignacion(hora) {
            // Redirecciona a la página asignacion.php con la hora en el URL
            window.location.href = 'asignacionesCoordinador.php?hora=' + encodeURIComponent(hora);
        }
        
        function salir() {
            console.log("Saliendo de la aplicación");
        }

        function irAPaginaInicio() {
            window.location.href = 'inicioCoordinador.php';
        }

        function irAPaginaAnterior() {
            window.location.href = 'calendarioCoordinador.php';
        }
    </script>
</head>
<body>
    <div class="contenedor-principal">
        <div class="franja-verde">
            <img src="../resources/img/DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        <div class="secciones">
            <div class="seccion-central seccion-centralPan2">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralPan2Cor" />
                </div>
                <div class="degradado-gris degradado-grisPan2Coordinador"></div>

                <div class="contenedor-tabla">
                    <table class="tabla-horas">
                        <thead>
                            <tr>
                                <th class="texto-hora">Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $horaInicio = 6;
                            $horaFin = 22;
                            $intervalo = 2;
                            for ($i = $horaInicio; $i < $horaFin; $i += $intervalo) {
                                $horaInicial = $i;
                                $horaFinal = $i + $intervalo;

                                // Formatear la hora inicial
                                $horaInicialTexto = sprintf("%d:00", $horaInicial > 12 ? $horaInicial - 12 : $horaInicial);
                                $ampmInicial = $horaInicial < 12 ? "am" : "pm";

                                // Formatear la hora final
                                $horaFinalTexto = sprintf("%d:00", $horaFinal > 12 ? $horaFinal - 12 : $horaFinal);
                                $ampmFinal = $horaFinal < 12 ? "am" : "pm";

                                // Mostrar el intervalo de tiempo en formato "6:00am - 8:00am"
                                $intervaloTexto = "$horaInicialTexto$ampmInicial - $horaFinalTexto$ampmFinal";
                                echo "<tr><td><button class='hora-boton' onclick='redirigirAAsignacion(\"$intervaloTexto\")'>$intervaloTexto</button></td></tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>

                <button class="boton-volver boton-volPan2Coordinador" onclick="irAPaginaAnterior()">Volver</button>
                <button class="boton-salida boton-salPan2Coordinador" onclick="irAPaginaInicio()">Salir</button>
            </div>
        </div>
    </div>
</body>
</html>
