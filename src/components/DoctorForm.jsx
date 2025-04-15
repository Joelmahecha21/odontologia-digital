import React, { useState } from 'react';
import './DoctorForm.css';

const DoctorForm = () => {
  const [nombre, setNombre] = useState('');
  const [apellido, setApellido] = useState('');
  const [estado, setEstado] = useState('ACTIVO');

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log({ nombre, apellido, estado });
    alert('Doctor registrado exitosamente');
  };

  return (
    <div className="doctor-container">
      <header className="doctor-header">
        <h1>Doctor</h1>
      </header>

      <form className="doctor-form" onSubmit={handleSubmit}>
        <h2>Registro de Doctor</h2>

        <label htmlFor="nombre">Nombre</label>
        <input
          type="text"
          id="nombre"
          placeholder="Ingresar el Nombre"
          value={nombre}
          onChange={(e) => setNombre(e.target.value)}
          required
        />

        <label htmlFor="apellido">Apellido</label>
        <input
          type="text"
          id="apellido"
          placeholder="Ingresar el Apellido"
          value={apellido}
          onChange={(e) => setApellido(e.target.value)}
          required
        />

        <label htmlFor="estado">Estado</label>
        <select
          id="estado"
          value={estado}
          onChange={(e) => setEstado(e.target.value)}
        >
          <option value="ACTIVO">ACTIVO</option>
          <option value="INACTIVO">INACTIVO</option>
        </select>

        <button type="submit">Ingresar</button>
      </form>

      <div className="consulta-section">
        <h3>Consulta Doctor</h3>
        <a className="consulta-btn" href=".../Vista/Consulta_Doctor.php">
          Consultar
        </a>
      </div>
    </div>
  );
};

export default formulario_doctor;
