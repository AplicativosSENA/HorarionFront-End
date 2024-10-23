import React, { useState } from "react";
import "./app.css";
import { useNavigate } from "react-router-dom";

export const validateInputs = (email, password, ficha) => {
  let emailError = "";
  let passwordError = "";
  let fichaError = "";

  // Validar que el correo contenga "@" y un "."
  if (!email.includes("@") || !email.includes(".")) {
    emailError = "Correo no válido. Debe contener '@' y un dominio.";
  }

  // Validar que la contraseña tenga al menos 6 caracteres
  if (password.length < 6) {
    passwordError = "La contraseña debe tener al menos 6 caracteres.";
  }

  if (ficha.length < 7) {
    fichaError = "La Ficha debe tener al menos 7 caracteres.";
  }

  // Retornar los errores
  return {
    emailError,
    passwordError,
    fichaError,
  };
};
