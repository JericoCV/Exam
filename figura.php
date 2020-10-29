<?php
include_once "conexionBD.php";
class Figura{
    private $fila;
    private $columna;

    public function getFila()
    {
        return $this->fila;
    }

    public function setFila($fila): void
    {
        $this->fila = $fila;
    }
    public function getColumna()
    {
        return $this->columna;
    }

    public function setColumna($columna): void
    {
        $this->columna = $columna;
    }
    
    public function insertar(int $fila, int $columna): bool
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO figurita(columna, fila) 
                    VALUES(?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $columna, PDO::PARAM_STR);
            $stmt->bindParam(2, $fila, PDO::PARAM_STR);
            $stmt->execute();
            $filasAfectadas = $stmt->rowCount();

            if($filasAfectadas != 0){
                $resultado = true;
            }else{
                $resultado = false;
            }

            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function mostrar()
    {
        try {
            
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT id FROM figuritas";
            $resultado = $conn->query($sql);
            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}