package com.odontologia.api.service;

import com.odontologia.api.model.Usuario;
import com.odontologia.api.repository.UsuarioRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UsuarioService {

    @Autowired
    private UsuarioRepository usuarioRepository;

    public String registrar(Usuario usuario) {
        if (usuarioRepository.findByCorreo(usuario.getCorreo()).isPresent()) {
            return "Usuario ya registrado";
        }
        usuarioRepository.save(usuario);
        return "Registro exitoso";
    }

    public String login(String correo, String password) {
        return usuarioRepository.findByCorreo(correo)
                .filter(u -> u.getPassword().equals(password))
                .map(u -> "Autenticación satisfactoria")
                .orElse("Error en la autenticación");
    }
}
