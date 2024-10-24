import React from "react";
import "../assets/css/app.css";
import InicioAprendiz from "./inicioAprendiz";
import InicioInstructor from "./inicioInstructor";
import { useNavigate } from "react-router-dom";

export default function PantallaPrincipal() {
  const navigate = useNavigate();

  const irAPaginaAprendiz = () => {
    navigate("/inicio-aprendiz");
  };

  const irAPaginaInstructor = () => {
    navigate("/inicio-instructor");
  };

  const irAPaginaCoordinador = () => {
    navigate("/inicio-coordinador");
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
            <img className="imagen-central img-centralPanInicio" />
          </div>
          <h1 className="titulo">Título</h1>
          <p className="texto-explicativo">Texto explicativo breve</p>

          <div className="botones botones-inicio">
            <button className="boton boton-inicio" onClick={irAPaginaCoordinador}>
              Coordinador
            </button>
            <button className="boton boton-inicio" onClick={irAPaginaInstructor}>
              Instructor
            </button>
            <button className="boton boton-inicio" onClick={irAPaginaAprendiz}>
              Aprendiz
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}
