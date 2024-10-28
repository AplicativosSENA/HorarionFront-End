<?php



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <title>Inicio Instructor</title>
    <script>
        function handleLogin(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            let emailError = '';
            let passwordError = '';

            // Validación de email
            if (!email.includes('@')) {
                emailError = 'El correo debe contener una "@"';
            }

            // Validación de contraseña
            if (password.length < 6) {
                passwordError = 'La contraseña debe tener al menos 6 caracteres';
            }

            document.getElementById('error-email').innerText = emailError;
            document.getElementById('error-password').innerText = passwordError;

            if (!emailError && !passwordError) {
                // Redirigir a la página de calendario si no hay errores
                window.location.href = '/calendario-instructor';
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
            <div class="seccion-lateral"></div>
            <div class="seccion-central">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralCorTruc" />
                </div>
                <h1 class="titulo-Sesion titulo-SesionCorTruc">Bienvenido Instructor</h1>
                <p id="error-email" class="error error-CoordinadorTruc"></p>
                <p id="error-password" class="error error-CoordinadorTruc"></p>
                <form class="contenedor-sesion contenedor-sesionCorTruc" onsubmit="handleLogin(event)">
                    <p class="texto-Sesion texto-SesionCorTruc">Inicio Sesión</p>
                    <div class="inputs-Sesion">
                        <input
                            id="email"
                            class="input-Sesion input-SesionCorTruc"
                            type="email"
                            placeholder="Correo"
                            required
                        />
                    </div>
                    <input
                        id="password"
                        class="input-Sesion input-SesionCorTruc"
                        type="password"
                        placeholder="Contraseña"
                        required
                    />
                    <div class="botones-Sesion">
                        <button class="boton-Sesion boton-SesionCorTruc">Ingresar</button>
                    </div>
                </form>
            </div>
            <div class="seccion-lateral"></div>
        </div>
        <button class="boton-salida" onclick="window.location.href='../pantallaInicio.php'">Salir</button>
    </div>
</body>
</html>
