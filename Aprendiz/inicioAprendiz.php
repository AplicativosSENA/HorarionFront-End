<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Aprendiz.css">
    <title>Inicio Aprendiz</title>
    <script>
        function validarFicha(event) {
            const fichaInput = document.getElementById("ficha");
            const errorFicha = document.getElementById("error-ficha");
            const fichaValue = fichaInput.value.trim();

            if (fichaValue === "" || fichaValue.length < 8) {
                event.preventDefault(); // Evita el envío del formulario
                errorFicha.textContent = "La Ficha debe tener al menos 7 caracteres.";
                errorFicha.classList.add("show"); // Muestra el mensaje de error
            } 
        }

        function handleSubmit(event) {
            const fichaInput = document.getElementById("ficha").value.trim();
            if (fichaInput !== "" && fichaInput.length >= 7) {
                // Redirige a calendarioAprendiz.php si la ficha es válida
                window.location.href = 'calendarioAprendiz.php';
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
                <form class="contenedor-sesion Contenedor-sesionAprendiz" onsubmit="validarFicha(event); handleSubmit(event);">
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
