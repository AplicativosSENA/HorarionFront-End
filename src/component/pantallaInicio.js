import React from "react";
import "./app.css";
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
        <div className="seccion-lateral" />

        <div className="seccion-central">
          <img
            src="https://blogger.googleusercontent.com/img/a/AVvXsEiw5MGouzWmAN1Kjq53tBqLqg0HIl2j6YCbqIeonkiYWrkXGP-zr4B9iOvG-suJT29_j08E9LZGe02oUP5rAqzk8ikPBv4cG-4yjf0TjFRie-dBgRUQS4qAbK26zWhbyKkVCVs4U2e8-2lNR17UyFFm5EW8xplZkAFA7hMTsBGOamE9T1pnw6iUP_jf=s960"
            alt="Centro de Formación SENA"
            className="imagen-central"
          />
          <h1 className="titulo">Título</h1>
          <p className="texto-explicativo">Texto explicativo breve</p>

          <div className="botones">
            <button className="boton" onClick={irAPaginaCoordinador}>
              Coordinador
            </button>
            <button className="boton" onClick={irAPaginaInstructor}>
              Instructor
            </button>
            <button className="boton" onClick={irAPaginaAprendiz}>
              Aprendiz
            </button>
          </div>
        </div>
        <div className="seccion-lateral"></div>
      </div>
    </div>
  );
}
