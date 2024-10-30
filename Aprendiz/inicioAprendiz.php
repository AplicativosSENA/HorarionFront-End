<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Aprendiz.css">
    <title>Inicio Aprendiz</title>
    <script>
        function handleLogin(event) {
            event.preventDefault(); // Evita el envío del formulario

            const fichaInput = document.getElementById("ficha");
            const errorFicha = document.getElementById("error-ficha");
            const fichaValue = fichaInput.value.trim();
            let fichaError = '';

            // Validación de ficha (mínimo 7 caracteres numéricos)
            if (fichaValue.length < 7 || isNaN(fichaValue)) {
                fichaError = "La Ficha debe tener al menos 7 caracteres numéricos.";
            }

            // Muestra o esconde el mensaje de error según corresponda
            if (fichaError) {
                errorFicha.textContent = fichaError;
                errorFicha.classList.add("show");
            } else {
                errorFicha.textContent = '';
                errorFicha.classList.remove("show");
                // Redirige a calendarioAprendiz.php si la ficha es válida
                window.location.href = 'calendarioAprendiz.php';
            }
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
                        <button type="submit" class="boton-Sesion boton-SesionAprendiz">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
        <button class="boton-salida" onclick="window.location.href='../pantallaInicio.php'">Salir</button>
    </div>
</body>
</html>
