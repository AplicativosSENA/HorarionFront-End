<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Aprendiz</title>
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Aprendiz.css">
    <script>
        function toggleMenu(row, col) {
            const menu = document.getElementById(`menu-${row}-${col}`);
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
                menu.classList.remove('show');
            } else {
                menu.style.display = 'block';
                setTimeout(() => menu.classList.add('show'), 10); // Añade animación tras mostrarse
            }
        }

        function closeMenu(row, col) {
            const menu = document.getElementById(`menu-${row}-${col}`);
            menu.classList.remove('show');
            setTimeout(() => {
                menu.style.display = 'none';
            }, 300); // Espera la animación antes de ocultar
        }
    </script>
</head>
<body>
    <div class="contenedor-principal">
        <div class="franja-verde">
            <img src="..\resources\img\DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        <div class="secciones">
            <div class="seccion-central seccion-centralCalApre">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralCalAprendiz" />
                </div>
                <div class="degradado-gris degradado-grisCalAprendiz"></div>
                <button class="boton-flecha boton-atrasAprendiz" onclick="window.location.href='calendarioAprendiz.php'">⬅</button>
                <h1 class="titulo-calendario titulo-calAprendiz">Horario de ficha</h1>
                <p class="numero-ficha">2365465456</p>
                <?php
                    // Configurar el idioma a español
                    setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain', 'Spanish');

                    // Calcular el inicio de la próxima semana (lunes) y el final (viernes)
                    $inicioSemanaSiguiente = new DateTime();
                    $inicioSemanaSiguiente->setISODate((int)date('o'), (int)date('W') + 1, 1); // Lunes de la próxima semana

                    $finSemanaSiguiente = clone $inicioSemanaSiguiente;
                    $finSemanaSiguiente->modify('+4 days'); // Viernes de la próxima semana

                    // Verificar si los meses son diferentes
                    if ($inicioSemanaSiguiente->format('n') !== $finSemanaSiguiente->format('n')) {
                        $fechaInicio = strftime('%d de %B', $inicioSemanaSiguiente->getTimestamp());
                        $fechaFin = strftime('%d de %B', $finSemanaSiguiente->getTimestamp());
                    } else {
                        $fechaInicio = strftime('%d de %B', $inicioSemanaSiguiente->getTimestamp());
                        $fechaFin = $finSemanaSiguiente->format('d');
                    }

                    // Mostrar el resultado
                    echo "<p class='horario-fechaApre'>Del $fechaInicio al $fechaFin</p>";
                ?>

                <table class="tabla-calendario">
                    <thead>
                        <tr class="texto-calendario texto-calAprendiz">
                            <th>Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $horas = ["6:00am 8:00am","8:00am 10:00am", "10:00am 12:00pm", "12:00pm 2:00pm", "2:00pm 4:00pm", "4:00pm 6:00pm","6:00pm 8:00pm","8:00pm 10:00pm"];
                        $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
                        
                        $infoAmbientes = [
                            "0-0" => ["instructor" => "Juan Pérez", "hora" => "6:00 am - 8:00 am", "Ambiente" => "Tecnologia1", "programa" => "Programa5", "sede" => "Sede5"],
                            "0-1" => ["instructor" => "María Gómez", "hora" => "6:00 am - 8:00 am", "Ambiente" => "Tecnologia2", "programa" => "Programa4", "sede" => "Sede4"],
                            "1-0" => ["instructor" => "Carlos Ruiz", "hora" => "10:00 am - 12:00 pm","Ambiente" => "Biologia", "programa" => "Programa3", "sede" => "Sede3"],
                            "1-1" => ["instructor" => "Laura Torres", "hora" => "10:00 am - 12:00 pm","Ambiente" => "Gimnasio", "programa" => "Programa2","sede" => "Sede2"],
                            "2-0" => ["instructor" => "Pedro López", "hora" => "12:00 pm - 2:00 pm", "Ambiente" => "Patio", "programa" => "Programa1", "sede" => "Sede1"],
                        ];

                        foreach ($horas as $rowIndex => $hora) {
                            echo "<tr class='texto-calendario texto-calAprendiz'><td>$hora</td>";
                            foreach ($dias as $colIndex => $dia) {
                                $key = "$rowIndex-$colIndex";
                                $ambienteInfo = isset($infoAmbientes[$key]) ? $infoAmbientes[$key] : null;
                                
                                echo "<td>";
                                echo "<button class='boton-calendario boton-calAprendiz' onclick='toggleMenu($rowIndex, $colIndex)'>
                                         Ambiente
                                      </button>";
                                
                                if ($ambienteInfo) {
                                    echo "<div id='menu-$rowIndex-$colIndex' class='menu-desplegable' style='display: none;'>
                                                <button onclick='closeMenu($rowIndex, $colIndex)' class='boton-minimizar'>Minimizar</button>
                                                <p>Detalles del ambiente para $dia</p>
                                                <p>Instructor: {$ambienteInfo['instructor']}</p>
                                                <p>Hora: {$ambienteInfo['hora']}</p>
                                                <p>Ambiente: {$ambienteInfo['Ambiente']}</p>
                                                <p>Programa: {$ambienteInfo['programa']}</p>
                                                <p>Sede: {$ambienteInfo['sede']}</p>
                                          </div>";
                                }
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <button class="boton-salida boton-salidaAprendiz" onclick="window.location.href='inicioAprendiz.php'">Salir</button>
            </div>
        </div>
    </div>
</body>
</html>
