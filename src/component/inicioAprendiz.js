import { useState } from "react";
import "../assets/css/app.css";
import { useNavigate } from "react-router-dom";
import { validateInputs } from "./validaciones";

export default function InicioAprendiz() {
  const navigate = useNavigate();
  const [ficha, setFicha] = useState("");
  const [errors, setErrors] = useState({ ficha: "" });

  const irAPantallaInicio = () => {
    navigate("/");
  };

  //Funcion que maneja el inicio de sesión
  const handleLogin = (e) => {
    e.preventDefault();
    setErrors({ ficha: "" }); //Limpia errrores antes de validar

    const { fichaError } = validateInputs("", "", ficha);

    setErrors({
      ficha: fichaError,
    });

    if (!fichaError) {
      navigate("/calendario-aprendiz");
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
            <img className="imagen-central img-centralAprendiz" />
          </div>
          <h1 className="titulo-Sesion titulo-sesAprendiz">Bienvenido Aprendiz</h1>
          <p className={`error error-aprendiz ${errors.ficha ? "show" : ""}`}>
            {errors.ficha}
          </p>
          <form className="contenedor-sesion Contenedor-sesionAprendiz" onSubmit={handleLogin}>
            <p className="texto-Sesion texto-SesionAprendiz">Digitar número de ficha:</p>
            <div className="inputs-Sesion">
              <input
                className="input-Sesion input-SesionAprendiz"
                type="number"
                placeholder="Numer"
                value={ficha}
                onChange={(e) => setFicha(e.target.value)}
                required
              />
            </div>
            <div className="botones-Sesion">
              <button className="boton-Sesion boton-SesionAprendiz" type="submit">
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
