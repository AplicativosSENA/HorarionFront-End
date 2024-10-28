<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/inicioAprendiz.css">
    <title>Inicio Aprendiz</title>
    <script>
        function handleLogin(event) {
            event.preventDefault();

            const ficha = document.getElementById('ficha').value;
            let fichaError = '';

            // Validación de ficha
            if (!ficha || isNaN(ficha)) {
                fichaError = 'El número de ficha debe ser un valor numérico y no puede estar vacío';
            }

            document.getElementById('error-ficha').innerText = fichaError;

            if (!fichaError) {
                // Redirigir a la página de calendario si no hay errores
                window.location.href = '/calendario-aprendiz';
            } else {
                console.log('Errores en la validación');
            }
        }
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
                    <img class="imagen-central img-centralAprendiz" />
                </div>
                <h1 class="titulo-Sesion titulo-sesAprendiz">Bienvenido Aprendiz</h1>
                <p id="error-ficha" class="error error-aprendiz"></p>
                <form class="contenedor-sesion Contenedor-sesionAprendiz" onsubmit="handleLogin(event)">
                    <p class="texto-Sesion texto-SesionAprendiz">Digitar número de ficha:</p>
                    <div class="inputs-Sesion">
                        <input
                            id="ficha"
                            class="input-Sesion input-SesionAprendiz"
                            type="number"
                            placeholder="Número"
                            required
                        />
                    </div>
                    <div class="botones-Sesion">
                        <button class="boton-Sesion boton-SesionAprendiz" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
        <button class="boton-salida" onclick="window.location.href='../pantallaInicio.php'">Salir</button>
    </div>
</body>
</html>
