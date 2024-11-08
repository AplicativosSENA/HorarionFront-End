<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Instructor.css">
    <title>Calendario Semanal Instructor</title>
    <script>
        // Estado para manejar la visibilidad de cada menú desplegable
        const menuVisible = {};

        // Función para mostrar el menú
        function showMenu(rowIndex, colIndex) {
            const key = `${rowIndex}-${colIndex}`;
            menuVisible[key] = true;
            document.getElementById(`menu-${key}`).style.display = "block";
        }

        // Función para esconder el menú
        function hideMenu(rowIndex, colIndex) {
            const key = `${rowIndex}-${colIndex}`;
            menuVisible[key] = false;
            document.getElementById(`menu-${key}`).style.display = "none";
        }
    </script>
</head>
<body>
    <div class="contenedor-principal">
    <div class="franja-verde">
            <img src="..\resources\img\DegradadoVerde.jpg" class="imagen-degradado" />
        </div>
        <div class="secciones">
            <div class="seccion-central seccion-centralTruc">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralTruc" />
                </div>
                <div class="degradado-gris degradado-grisCalInstructor"></div>
                <button
                    class="boton-flecha boton-adelanteInstructor boton-adelanteInstructor2"
                    onclick="window.location.href='calendarioInstructor2.php'"
                >
                    ➡
                </button>
                <h1 class="titulo-calendario titulo-calInstructor">Bienvenido</h1>
                <p class="horario-fecha">Horario del 1 octubre al 4</p>
                <table class="tabla-calendario">
                    <thead>
                        <tr class="texto-calendario texto-calInstructor">
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
                            "0-0" => ["Ficha" => "2845614", "fecha" => "01/10/2024", "hora" => "6:00 am - 8:00 am", "Ambiente" => "Tecnologia1"],
                            "0-1" => ["Ficha" => "2845615",  "fecha" => "02/10/2024", "hora" => "6:00 am - 8:00 am", "Ambiente" => "Tecnologia2"],
                            "1-0" => ["Ficha" => "2845616",  "fecha" => "03/10/2024", "hora" => "10:00 am - 12:00 pm", "Ambiente" => "Biologia"],
                            "1-1" => ["Ficha" => "2845617",  "fecha" => "04/10/2024", "hora" => "10:00 am - 12:00 pm", "Ambiente" => "Gimnasio"],
                            "2-0" => ["Ficha" => "2845618",  "fecha" => "05/10/2024", "hora" => "12:00 pm - 2:00 pm", "Ambiente" => "patio"]
                        ];

                        foreach ($horas as $rowIndex => $hora) {
                            echo "<tr class='texto-calendario texto-calInstructor'><td>$hora</td>";
                            foreach ($dias as $colIndex => $dia) {
                                $key = "$rowIndex-$colIndex";
                                echo "<td>
                                    <button class='boton-calendario boton-calInstructor'
                                        onmouseenter='showMenu($rowIndex, $colIndex)'
                                        onmouseleave='hideMenu($rowIndex, $colIndex)'>Ambiente
                                    </button>";
                                if (isset($infoAmbientes[$key])) {
                                    $ambiente = $infoAmbientes[$key];
                                    echo "<div id='menu-$key' class='menu-desplegable' style='display: none;'
                                        onmouseenter='showMenu($rowIndex, $colIndex)'
                                        onmouseleave='hideMenu($rowIndex, $colIndex)'>
                                        <p>Detalles del ambiente para $dia</p>
                                        <p>Ficha: {$ambiente['Ficha']}</p>
                                        <p>Fecha: {$ambiente['fecha']}</p>
                                        <p>Hora: {$ambiente['hora']}</p>
                                        <p>Ambiente: {$ambiente['Ambiente']}</p>
                                    </div>";
                                }
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <button class="boton-salida boton-salidaIns" onclick="window.location.href='inicioInstructor.php'">Salir</button>     
            </div>
        </div>
    </div>
</body>
</html>
