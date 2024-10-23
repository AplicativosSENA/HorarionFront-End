import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import PantallaPrincipal from "./component/pantallaInicio";
import InicioAprendiz from "./component/inicioAprendiz";
import InicioIntructor from "./component/inicioInstructor";
import InicioCoordinador from "./component/inicioCoordinador";
import CalendarioAprendiz from "./component/calendarioAprendiz";
import CalendarioInstructor from "./component/calendarioInstructor";
import CalendarioInstructor2 from "./component/calendarioInstructor2";
import PantallaCoordinador from "./component/pantallaCoordinador";
import CalemdarioCoordinador from "./component/calendarioCoordinador";

function App() {
  return (
    <div className="App">
      <Router>
        <Routes>
          <Route path="/" element={<PantallaPrincipal />} />
          <Route path="/inicio-aprendiz" element={<InicioAprendiz />} />
          <Route path="/inicio-instructor" element={<InicioIntructor />} />
          <Route path="/inicio-coordinador" element={<InicioCoordinador />} />
          <Route path="/calendario-aprendiz" element={<CalendarioAprendiz />} />
          <Route
            path="/calendario-instructor"
            element={<CalendarioInstructor />}
          />
          <Route
            path="/calendario-instructor2"
            element={<CalendarioInstructor2 />}
          />
          <Route
            path="/pantalla-coordinador"
            element={<PantallaCoordinador />}
          />
          <Route
            path="/calendario-coordinador"
            element={<CalemdarioCoordinador />}
          />
        </Routes>
      </Router>
    </div>
  );
}

export default App;
