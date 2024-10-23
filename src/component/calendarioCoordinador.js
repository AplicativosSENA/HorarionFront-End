import React, { useState } from "react";
import "../assets/css/app.css";
import { useNavigate } from "react-router-dom";

// Función para obtener el número de días del mes
function obtenerDiasDelMes(mes, año) {
  return new Date(año, mes + 1, 0).getDate();
}

export default function CalendarioMensual() {
  const navigate = useNavigate();
  const irAPaginaInicio = () => {
    navigate("/inicio-coordinador");
  };

  const irAPaginaAnterior = () => {
    navigate("/pantalla-coordinador");
  };

  // Estado para el mes actual
  const [mes, setMes] = useState(new Date().getMonth()); // Empieza con el mes actual
  const [año] = useState(new Date().getFullYear()); // El año actual

  const nombreMes = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
  ];

  // Función para cambiar al siguiente mes
  const siguienteMes = () => {
    if (mes < new Date().getMonth() + 1) {
      // Limita a solo el mes actual y el siguiente
      setMes(mes + 1);
    }
  };
  // Función para volver al mes anterior
  const mesAnterior = () => {
    if (mes > new Date().getMonth()) {
      // Permite regresar al mes anterior solo si el mes actual es mayor que el mes del sistema
      setMes(mes - 1);
    }
  };

  // Función para imprimir el día seleccionado
  const seleccionarDia = (dia) => {
    console.log(`Día seleccionado: ${dia}/ ${mes + 1}/ ${año}`);
  };

  const diasDelMes = obtenerDiasDelMes(mes, año);

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
        <div className="seccion-lateral"></div>
        <div className="seccion-central">
          <img
            src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/42125d3e-67ee-472e-a4e8-c34114de5d28/d4jdiz1-bdb15e34-5e8a-4439-a831-44f1fc915649.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQyMTI1ZDNlLTY3ZWUtNDcyZS1hNGU4LWMzNDExNGRlNWQyOFwvZDRqZGl6MS1iZGIxNWUzNC01ZThhLTQ0MzktYTgzMS00NGYxZmM5MTU2NDkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.JwnbqlI57RLyuaYLx1auQCLFyVEFU5ShpdcTvWSMchA"
            alt="Centro de Formación SENA"
            className="imagen-centralSesion2 imagen-calenCoordinador"
          />
          <img
            src="https://blogger.googleusercontent.com/img/a/AVvXsEiw5MGouzWmAN1Kjq53tBqLqg0HIl2j6YCbqIeonkiYWrkXGP-zr4B9iOvG-suJT29_j08E9LZGe02oUP5rAqzk8ikPBv4cG-4yjf0TjFRie-dBgRUQS4qAbK26zWhbyKkVCVs4U2e8-2lNR17UyFFm5EW8xplZkAFA7hMTsBGOamE9T1pnw6iUP_jf=s960"
            alt="Centro de Formación SENA"
            className="imagen-centralSesion"
          />
          <button
            className="boton-flecha boton-adelanteCoordinador"
            onClick={siguienteMes}
          >
            ➡
          </button>
          <button
            className="boton-flecha boton-atrasCoordinador"
            onClick={mesAnterior}
          >
            ⬅
          </button>
          <h1 className="titulo-calendario titulo-calCoordinador">
            Horario de Programa - {nombreMes[mes]}
          </h1>
          {/* Tabla del calendario mensual */}
          <table className="tabla-calendario tabla-calCoordinador">
            <thead>
              <tr className="texto-calendario texto-calCoordinador">
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
                <th>Domingo</th>
              </tr>
            </thead>
            <tbody>
              {Array.from({ length: Math.ceil(diasDelMes / 7) }).map(
                (_, rowIndex) => (
                  <tr key={rowIndex}>
                    {Array.from({ length: 7 }).map((_, colIndex) => {
                      const dia = rowIndex * 7 + colIndex + 1;
                      return (
                        dia <= diasDelMes && (
                          <td key={colIndex}>
                            <button
                              className="boton-calendario boton-calCoordinador"
                              onClick={() => seleccionarDia(dia)}
                            >
                              {dia}
                            </button>
                          </td>
                        )
                      );
                    })}
                  </tr>
                )
              )}
            </tbody>
          </table>
          <button className="boton-volver" onClick={irAPaginaAnterior}>
            Volver
          </button>
          <button className="boton-salida" onClick={irAPaginaInicio}>
            Salir
          </button>
        </div>
        <div className="seccion-lateral"></div>
      </div>
    </div>
  );
}
