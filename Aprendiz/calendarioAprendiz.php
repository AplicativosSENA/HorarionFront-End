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
                <button class="boton-flecha boton-adelanteAprendiz">➡</button>
                <h1 class="titulo-calendario titulo-calAprendiz">Horario de ficha</h1>
                <p class="numero-ficha">2365465456</p>
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
                            "0-0" => ["instructor" => "Juan Pérez", "fecha" => "01/10/2024", "Ambiente" => "Tecnologia1"],
                            "0-1" => ["instructor" => "María Gómez", "fecha" => "02/10/2024", "Ambiente" => "Tecnologia2"],
                            "1-0" => ["instructor" => "Carlos Ruiz", "fecha" => "03/10/2024", "Ambiente" => "Biologia"],
                            "1-1" => ["instructor" => "Laura Torres", "fecha" => "04/10/2024", "Ambiente" => "Gimnasio"],
                            "2-0" => ["instructor" => "Pedro López", "fecha" => "05/10/2024", "Ambiente" => "Patio"],
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
                                                <p>Fecha: {$ambienteInfo['fecha']}</p>
                                                <p>Ambiente: {$ambienteInfo['Ambiente']}</p>
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
