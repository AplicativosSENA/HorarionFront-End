import React, { useState } from "react";
import "../assets/css/app.css";
import { useNavigate } from "react-router-dom";

export default function AsignacionFicha() {
  const navigate = useNavigate();
  const [sede, setSede] = useState("");
  const [programa, setPrograma] = useState("");

  const irAPantallaInicio = () => {
    navigate("/inicio-coordinador"); // Navegar al inicio
  };

  const irCalendarioCoordinador = () => {
    navigate("/calendario-coordinador");
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
            <img className="imagen-central img-central" />
          </div>
          <div className="degradado-gris degradado-grisPanCoordinador" />
          <h1 className="titulo-Seleccion">Asignación de ficha</h1>
          <select
            value={sede}
            onChange={(e) => setSede(e.target.value)}
            className="selector-coordinador selector-Pan1Coordinador"
          >
            <option value="">Seleccione una sede</option>
            <option value="sede1">Sede 1</option>
            <option value="sede2">Sede 2</option>
          </select>

          <select
            value={programa}
            onChange={(e) => setPrograma(e.target.value)}
            className="selector-coordinador selector-Pan1Coordinador"
          >
            <option value="">Seleccione un programa</option>
            <option value="programa1">Programa 1</option>
            <option value="programa2">Programa 2</option>
          </select>
          <div className="botones botones-Siguiente1">
            <button
              className="boton boton-Siguiente1 "
              onClick={irCalendarioCoordinador}
            >
              Siguiente
            </button>
          </div>
        </div>
      </div>
      <button
        className="boton-salida boton-salidaCoordinador"
        onClick={irAPantallaInicio}
      >
        Salir
      </button>
    </div>
  );
}
