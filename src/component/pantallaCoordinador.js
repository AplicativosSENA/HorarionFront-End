import React, { useState } from "react";
import "./app.css";
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
          <div className="degradado-gris" />
          <h1 className="titulo-Seleccion">Asignación de ficha</h1>
          <select
            value={sede}
            onChange={(e) => setSede(e.target.value)}
            className="selector-coordinador"
          >
            <option value="">Seleccione una sede</option>
            <option value="sede1">Sede 1</option>
            <option value="sede2">Sede 2</option>
          </select>

          <select
            value={programa}
            onChange={(e) => setPrograma(e.target.value)}
            className="selector-coordinador"
          >
            <option value="">Seleccione un programa</option>
            <option value="programa1">Programa 1</option>
            <option value="programa2">Programa 2</option>
          </select>
          <div className="botones-Selector">
            <button
              className="boton-Selector"
              onClick={irCalendarioCoordinador}
            >
              Siguiente
            </button>
          </div>
        </div>
        <div className="seccion-lateral"></div>
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
