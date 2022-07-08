<?php

class Database extends PDO
{   
    private $driver ='mysql';
    private $host = 'localhost';
    private $dbName = 'agenda';
    private $charset = 'utf8';
    private $user = 'root';
    private $password = '';

    public function __construct()
    {
        try {
            parent::__construct("{$this->driver}:host={$this->host}; dbname={$this->dbName}; charset={$this->charset}",$this->user, $this->password);

            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Conexion a base de datos fallida {$e->getMessage()}";
        }
    }

    //Metodo para realizar consultas a la base de datos 
    public function select($strSql, $arrayData = array(), $fetchMode = PDO::FETCH_OBJ)
    {
        $query = $this->prepare($strSql);

        foreach ($arrayData as $key => $value) {
            $query->bindParam(":$key", $value);
        }
        if (!$query->execute()) {
            echo "Error la consulta no se realizo";
        }
        else
        {
            return $query->fetchAll($fetchMode);
        }
    }

    //Metodo para realizar las inserciones a la base de datos
    public function insert($table, $data)
    {
        try {
            //Ordenar array por key
            ksort($data);
            //Obtener nombre de los campos de la tabla
            $fieldNames = implode('`,`', array_keys($data));
            //Obtener los valores
            $fielValues = ':'. implode(', :', array_keys($data));
            //String de la sentencia
            $strSql = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES($fielValues)");
            //Asignacion de parametros a la sentencia
            foreach ($data as $key => $value) {
                $strSql->bindValue(":$key", $value);
            }
            //Ejecución de la sentencia SQL
            $strSql->execute();

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $data, $where)
    {
        try {
            ksort($data);
            //Atributos que se actualizaran 
            $fieldDetails = '';
            //recorrer los datos paara realizar la actualizacion 
            foreach ($data as $key => $value) {
                //Reasignando el fieldDetails
                $fieldDetails .= "`$key` =  :$key,";
            }
            //Eliminar el ultimo elemento
            $fieldDetails = rtrim($fieldDetails, ',');

            $query = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
            //Cargar los parametros al String 
            foreach ($data as $key => $value) {
                $query->bindValue(":$key", $value);
            }

            $query->execute();

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $where)
    {
        try {
            return $this->exec("DELETE FROM $table WHERE $where");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}