<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <title>Pantalla Coordinador 2</title>
    <script>
        function imprimirHora(hora) {
            console.log("Hora seleccionada: " + hora);
        }
        
        function salir() {
            // Aquí puedes agregar lógica para salir, como redireccionar a la página de inicio de sesión
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
            <img src="..\resources\img\DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
            <div class="secciones">
                <div class="seccion-central">
                    <div class="contenedor-imagen">
                        <img class="imagen-central img-central" />
                    </div>
                    <div class="degradado-gris degradado-grisPanCoordinador"></div>

                    <div class="contenedor-tabla">
                    <table class="tabla-horas">
                        <thead>
                            <tr>
                                <th>Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $horaInicio = 6;
                            $horaFin = 18;
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
                                echo "<tr><td><button class='hora-boton' onclick='imprimirHora(\"$intervaloTexto\")'>$intervaloTexto</button></td></tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>

                <button class="boton-volver" onclick="irAPaginaAnterior()">Volver</button>
                <button class="boton-salida" onclick="irAPaginaInicio()">Salir</button>
            </div>
        </div>
    </div>
</body>
</html>