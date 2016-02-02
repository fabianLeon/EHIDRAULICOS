<?php

/**
 * Description of daoSession
 *
 * @author Fabian
 */
class daoServicio {

    var $database;

    /**
     * constructor de la clase
     */
    function daoServicio($db) {
        $this->database = $db;
    }

    function crearServicio($descripciones, $titulo) {
        $tabla = "usuario";
        $campos = array("k_correo", "n_contrasena", "n_edificio_direccion", "n_nombre", "n_telefono");
        $valores = array("'" . $correo . "'", "'" . $pass . "'", "'" . $edificio . "'", "'" . $nombre . "'", "'" . $telefono . "'");
        return $this->database->insertarRegistro($tabla, $campos, $valores);
    }

    function eliminarServicio($id) {
    }

    function editarServicio($id, $descripciones, $titulo) {
    }
    
    function getDescripciones($id) {
        $sql = "SELECT n_path_imagen, n_titulo, n_descripcion "
             . "FROM descripcion "
             . "WHERE k_servicio = $id ";
        $result = $this->database->ejecutarConsulta($sql);
        return ($this->database->transformarResultado($result));
    }
    function getServicio($id) {
        $sql = "SELECT n_titulo"
             . "FROM descripcion "
             . "WHERE k_servicio = $id ";
        $result = $this->database->ejecutarConsulta($sql);
        return ($this->database->transformarResultado($result));
    }

}
