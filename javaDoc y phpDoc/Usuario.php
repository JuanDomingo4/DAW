<?php

/**
 * Autor: Juan Domingo Rodríguez Rodríguez
 * Versión 1.0
*/




/**
 * Clase Usuario.
 * Contiene info básica sobre él, nombre y email.
 */
class Usuario {

    private $nombre; // Nombre del usuario
    private $email; // Email del usuario

    /**
     * Creamos el constructor para el nuevo Usuario.
     * @param string $nombre Nombre del usuario.
     * @param string $email Email del usuario.
     */
    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * Método para obtener el nombre del usuario.
     * @return string El nombre del usuario.
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Método para establecer el nombre del usuario.
     * @param string $nombre El nombre a establecer.
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Método para obtener el email del usuario.
     * @return string El correo electrónico del usuario.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Método para establecer el email del usuario.
     * @param string $email El email a establecer.
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Método para obtener una cadena del objeto Usuario con sus datos.
     * @return string Una cadena de datos que representa al Usuario.
     */
    public function __toString() {
        return "Usuario { nombre = " . $this->nombre . ", email = " . $this->email . " }";
    }
}

// Crear un nuevo usuario
$usuario = new Usuario("JuanDomingo", "juandomingo@example.com");

// Mostrar información del usuario
echo $usuario;

?>
