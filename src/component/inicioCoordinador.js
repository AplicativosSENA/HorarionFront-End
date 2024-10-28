import React, { useState } from "react";
import "../assets/css/app.css";
import { useNavigate } from "react-router-dom";
import { validateInputs } from "./validaciones";

export default function InicioCoordinador() {
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
      navigate("/pantalla-coordinador"); // Navega solo si la validación es exitosa
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
        <div className="seccion-central">
          <div className="contenedor-imagen ">
            <img className="imagen-central img-centralCorTruc" />
          </div>
          <h1 className="titulo-Sesion titulo-SesionCorTruc">
            Bienvenido Coordinador
          </h1>
          <p
            className={`error error-CoordinadorTruc ${
              errors.email ? "show" : ""
            }`}
          >
            {errors.email}
          </p>
          <p
            className={`error error-CoordinadorTruc ${
              errors.password ? "show" : ""
            }`}
          >
            {errors.password}
          </p>
          <form
            className="contenedor-sesion contenedor-sesionCorTruc"
            onSubmit={handleLogin}
          >
            <p className="texto-Sesion texto-SesionCorTruc">Inicio Sesión</p>
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
              <button
                className="boton-Sesion boton-SesionCorTruc"
                type="submit"
              >
                Ingresar
              </button>
            </div>
          </form>
        </div>
      </div>
      <button className="boton-salida" onClick={irAPantallaInicio}>
        Salir
      </button>
    </div>
  );
}
