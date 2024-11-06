<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Aprendiz</title>
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Aprendiz.css">
    <script>
        function showMenu(row, col) {
            document.getElementById(`menu-${row}-${col}`).style.display = 'block';
        }
        function hideMenu(row, col) {
            document.getElementById(`menu-${row}-${col}`).style.display = 'none';
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
                        $horas = ["6:00 am 8:00 am", "10:00 am 12:00 pm", "12:00 pm 2:00 pm", "2:00 pm 4:00 pm", "4:00 pm 6:00 pm"];
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
                                echo "<button class='boton-calendario boton-calAprendiz' 
                                           onmouseenter='showMenu($rowIndex, $colIndex)' 
                                           onmouseleave='hideMenu($rowIndex, $colIndex)'>
                                         Ambiente
                                      </button>";
                                
                                if ($ambienteInfo) {
                                    echo "<div id='menu-$rowIndex-$colIndex' class='menu-desplegable' style='display: none;' 
                                                onmouseenter='showMenu($rowIndex, $colIndex)' 
                                                onmouseleave='hideMenu($rowIndex, $colIndex)'>
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
