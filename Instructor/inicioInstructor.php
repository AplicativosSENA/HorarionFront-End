<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/Instructor.css">
    <title>Inicio Instructor</title>
    <script>
        function handleLogin(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            let emailError = '';
            let passwordError = '';

            // Validación de email (debe contener "@" y un dominio)
            if (!email.includes('@') || !/\.\w{2,}$/.test(email)) {
                emailError = 'Correo no valido. Debe contener "@" y un dominio.';
            }

            // Validación de contraseña (mínimo 6 caracteres)
            if (password.length < 6) {
                passwordError = 'La contraseña debe tener al menos 6 caracteres.';
            }

            // Mostrar los mensajes de error
            const emailErrorElement = document.getElementById('error-email');
            const passwordErrorElement = document.getElementById('error-password');

            emailErrorElement.innerText = emailError;
            passwordErrorElement.innerText = passwordError;

            // Agregar clase para mostrar el mensaje de error si hay errores
            emailErrorElement.classList.toggle('show', !!emailError);
            passwordErrorElement.classList.toggle('show', !!passwordError);

            if (!emailError && !passwordError) {
                // Redirigir a la página de calendario si no hay errores
                window.location.href = 'calendarioInstructor.php';
            } else {
                console.log('Errores en la validación');
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
            <div class="seccion-lateral"></div>
            <div class="seccion-central">
                <div class="contenedor-imagen">
                    <img class="imagen-central img-centralSesionTruc" />
                </div>
                <h1 class="titulo-Sesion titulo-SesionTruc">Bienvenido Instructor</h1>
                <p id="error-email" class="error error-instructor"></p>
                <p id="error-password" class="error error-instructor"></p>
                <form class="contenedor-sesion contenedor-sesionTruc" onsubmit="handleLogin(event)">
                    <p class="texto-Sesion texto-SesionTruc">Inicio Sesión</p>
                    <div class="inputs-Sesion">
                        <input
                            id="email"
                            class="input-Sesion input-SesionTruc"
                            type="email"
                            placeholder="Correo"
                            required
                        />
                    </div>
                    <input
                        id="password"
                        class="input-Sesion input-SesionTruc"
                        type="password"
                        placeholder="Contraseña"
                        required
                    />
                    <div class="botones-Sesion">
                        <button class="boton-Sesion boton-SesionTruc">Ingresar</button>
                    </div>
                </form>
            </div>
            <div class="seccion-lateral"></div>
        </div>
        <button class="boton-salida boton-salidaSesionIns" onclick="window.location.href='../pantallaInicio.php'">Salir</button>
    </div>
</body>
</html>
