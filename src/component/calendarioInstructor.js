import React, { useState } from "react";
import "./app.css";
import { useNavigate } from "react-router-dom";

export default function CalendarioSemanal() {
  const navigate = useNavigate();
  const irAPaginaAnterior = () => {
    navigate("/inicio-instructor");
  };
  const irAPaginaAnteriorCalendario2 = () => {
    navigate("/calendario-instructor2");
  };

  // Estado para manejar la visibilidad de cada menú desplegable
  const [menuVisible, setMenuVisible] = useState({});

  // Función para mostrar el menú
  const showMenu = (rowIndex, colIndex) => {
    const key = `${rowIndex}-${colIndex}`;
    setMenuVisible((prev) => ({
      ...prev,
      [key]: true, // Mostrar el menú correspondiente
    }));
  };

  // Función para esconder el menú
  const hideMenu = (rowIndex, colIndex) => {
    const key = `${rowIndex}-${colIndex}`;
    setMenuVisible((prev) => ({
      ...prev,
      [key]: false, // Esconder el menú correspondiente
    }));
  };

  // Información de ejemplo para los menús desplegables
  const infoAmbientes = {
    "0-0": {
      instructor: "Juan Pérez",
      fecha: "01/10/2024",
      hora: "6:00 am - 8:00 am",
      Ambiente: "Tecnologia1",
    },
    "0-1": {
      instructor: "María Gómez",
      fecha: "02/10/2024",
      hora: "6:00 am - 8:00 am",
      Ambiente: "Tecnologia2",
    },
    "1-0": {
      instructor: "Carlos Ruiz",
      fecha: "03/10/2024",
      hora: "10:00 am - 12:00 pm",
      Ambiente: "Biologia",
    },
    "1-1": {
      instructor: "Laura Torres",
      fecha: "04/10/2024",
      hora: "10:00 am - 12:00 pm",
      Ambiente: "Gimnasio",
    },
    "2-0": {
      instructor: "Pedro López",
      fecha: "05/10/2024",
      hora: "12:00 pm - 2:00 pm",
      Ambiente: "patio",
    },
    // Agrega más información aquí para cada botón
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
        <div className="seccion-lateral"></div>
        <div className="seccion-central">
          <img
            src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/42125d3e-67ee-472e-a4e8-c34114de5d28/d4jdiz1-bdb15e34-5e8a-4439-a831-44f1fc915649.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQyMTI1ZDNlLTY3ZWUtNDcyZS1hNGU4LWMzNDExNGRlNWQyOFwvZDRqZGl6MS1iZGIxNWUzNC01ZThhLTQ0MzktYTgzMS00NGYxZmM5MTU2NDkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.JwnbqlI57RLyuaYLx1auQCLFyVEFU5ShpdcTvWSMchA"
            alt="Centro de Formación SENA"
            className="imagen-calendario2"
          />
          <img
            src="https://blogger.googleusercontent.com/img/a/AVvXsEiw5MGouzWmAN1Kjq53tBqLqg0HIl2j6YCbqIeonkiYWrkXGP-zr4B9iOvG-suJT29_j08E9LZGe02oUP5rAqzk8ikPBv4cG-4yjf0TjFRie-dBgRUQS4qAbK26zWhbyKkVCVs4U2e8-2lNR17UyFFm5EW8xplZkAFA7hMTsBGOamE9T1pnw6iUP_jf=s960"
            alt="Centro de Formación SENA"
            className="imagen-calendario"
          />
          <button
            className="boton-flecha boton-adelanteInstructor"
            onClick={irAPaginaAnteriorCalendario2}
          >
            ➡
          </button>
          <h1 className="titulo-calendario">Bienvenido</h1>
          <p className="numero-ficha">Horario del 1 octubre al 4</p>
          <table className="tabla-calendario">
            <thead>
              <tr className="texto-calendario">
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
              </tr>
            </thead>
            <tbody>
              {[
                "6:00 am 8:00 am",
                "10:00 am 12:00 pm",
                "12:00 pm 2:00 pm",
                "2:00 pm 4:00 pm",
                "4:00 pm 6:00 pm",
              ].map((hora, rowIndex) => (
                <tr className="texto-calendario" key={rowIndex}>
                  <td>{hora}</td>
                  {["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"].map(
                    (dia, colIndex) => (
                      <td key={colIndex}>
                        <button
                          className="boton-calendario"
                          onMouseEnter={() => showMenu(rowIndex, colIndex)}
                          onMouseLeave={() => hideMenu(rowIndex, colIndex)}
                        >
                          Ambiente
                        </button>
                        {menuVisible[`${rowIndex}-${colIndex}`] && (
                          <div
                            className="menu-desplegable"
                            onMouseEnter={() => showMenu(rowIndex, colIndex)} // Mantener visible mientras el cursor esté sobre el menú
                            onMouseLeave={() => hideMenu(rowIndex, colIndex)} // Esconder cuando el cursor salga del menú
                          >
                            <p>Detalles del ambiente para {dia}</p>
                            <p>
                              Instructor:{" "}
                              {
                                infoAmbientes[`${rowIndex}-${colIndex}`]
                                  ?.instructor
                              }
                            </p>
                            <p>
                              Fecha:{" "}
                              {infoAmbientes[`${rowIndex}-${colIndex}`]?.fecha}
                            </p>
                            <p>
                              Hora:{" "}
                              {infoAmbientes[`${rowIndex}-${colIndex}`]?.hora}
                            </p>
                            <p>
                              Ambiente:{" "}
                              {
                                infoAmbientes[`${rowIndex}-${colIndex}`]
                                  ?.Ambiente
                              }
                            </p>
                          </div>
                        )}
                      </td>
                    )
                  )}
                </tr>
              ))}
            </tbody>
          </table>
          <button className="boton-salida" onClick={irAPaginaAnterior}>
            Salir
          </button>
        </div>
        <div className="seccion-lateral"></div>
      </div>
    </div>
  );
}
