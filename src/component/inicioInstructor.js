import React, { useState } from "react";
import "./app.css";
import { useNavigate } from "react-router-dom";
import { validateInputs } from "./validaciones";

export default function InicioInstructor() {
  const navigate = useNavigate();
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [errors, setErrors] = useState({ email: "", password: "" });

  const irAPantallaInicio = () => {
    navigate("/");
  };

  // Función que maneja el inicio de sesión
  const handleLogin = (event) => {
    event.preventDefault();
    setErrors({ email: "", password: "" }); // Limpiar errores antes de validar

    // Usar la función importada para validar los inputs
    const { emailError, passwordError } = validateInputs(email, password, "");

    setErrors({
      email: emailError,
      password: passwordError,
    });

    if (!emailError && !passwordError) {
      navigate("/calendario-instructor");
    } else {
      console.log("Errores en la validación");
    }
  };

  return (
    <div className="contenedor-principal">
      <div className="franja-verde">
        <img
          src="https://img.freepik.com/premium-photo/artistic-blurry-colorful-plain-green-gradient-abstract-wallpaper-background_1120306-3676.jpg"
          alt="Degradado verde a blanco"
          className="imagen-degradado"
        />
      </div>
      <div className="secciones">
        <div className="seccion-lateral" />
        <div className="seccion-central">
          <img
            src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/42125d3e-67ee-472e-a4e8-c34114de5d28/d4jdiz1-bdb15e34-5e8a-4439-a831-44f1fc915649.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQyMTI1ZDNlLTY3ZWUtNDcyZS1hNGU4LWMzNDExNGRlNWQyOFwvZDRqZGl6MS1iZGIxNWUzNC01ZThhLTQ0MzktYTgzMS00NGYxZmM5MTU2NDkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.JwnbqlI57RLyuaYLx1auQCLFyVEFU5ShpdcTvWSMchA"
            alt="Centro de Formación SENA"
            className="imagen-centralSesion2"
          />
          <img
            src="https://blogger.googleusercontent.com/img/a/AVvXsEiw5MGouzWmAN1Kjq53tBqLqg0HIl2j6YCbqIeonkiYWrkXGP-zr4B9iOvG-suJT29_j08E9LZGe02oUP5rAqzk8ikPBv4cG-4yjf0TjFRie-dBgRUQS4qAbK26zWhbyKkVCVs4U2e8-2lNR17UyFFm5EW8xplZkAFA7hMTsBGOamE9T1pnw6iUP_jf=s960"
            alt="Centro de Formación SENA"
            className="imagen-centralSesion"
          />
          <h1 className="titulo-Sesion">Bienvenido Instructor</h1>
          <p className={`error ${errors.email ? "show" : ""}`}>
            {errors.email}
          </p>
          <p className={`error ${errors.password ? "show" : ""}`}>
            {errors.password}
          </p>
          <form className="contenedor-sesion" onSubmit={handleLogin}>
            <p className="texto-Sesion2">Incio Sesion</p>
            <div className="inputs-Sesion">
              <input
                className="input-Sesion"
                type="email"
                placeholder="Correo"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                required
              />
            </div>
            <input
              className="input-Sesion"
              type="password"
              placeholder="Contraseña"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              required
            />

            <div className="botones-Sesion">
              <button className="boton-Sesion">Ingresar</button>
            </div>
          </form>
        </div>
        <div className="seccion-lateral"></div>
      </div>
      <button className="boton-salida" onClick={irAPantallaInicio}>
        Salir
      </button>
    </div>
  );
}
