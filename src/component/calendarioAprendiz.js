import React, { useState } from "react";
import "../assets/css/app.css";
import { useNavigate } from "react-router-dom";

export default function CalendarioSemanal() {
  const navigate = useNavigate();
  const irAPaginaAnterior = () => {
    navigate("/inicio-aprendiz");
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
      Ambiente: "Tecnologia1",
    },
    "0-1": {
      instructor: "María Gómez",
      fecha: "02/10/2024",
      Ambiente: "Tecnologia2",
    },
    "1-0": {
      instructor: "Carlos Ruiz",
      fecha: "03/10/2024",
      Ambiente: "Biologia",
    },
    "1-1": {
      instructor: "Laura Torres",
      fecha: "04/10/2024",
      Ambiente: "Gimnasio",
    },
    "2-0": {
      instructor: "Pedro López",
      fecha: "05/10/2024",
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
        <div className="seccion-central">
          <div className="contenedor-imagen">
            <img className="imagen-central img-centralCalAprendiz" />
          </div>
          <div className="degradado-gris degradado-grisCalendario" />
          <button className="boton-flecha boton-adelanteAprendiz">➡</button>
          <h1 className="titulo-calendario">Horario de ficha</h1>
          <p className="numero-ficha">2365465456</p>
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
      </div>
    </div>
  );
}
