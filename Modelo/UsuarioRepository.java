package com.odontologia.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import com.odontologia.api.model.Usuario;

import java.util.Optional;

public interface UsuarioRepository extends JpaRepository<Usuario, Long> {
    Optional<Usuario> findByCorreo(String correo);
}
