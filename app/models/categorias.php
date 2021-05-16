<?php
/*
*	Clase para manejar la tabla categorias de la base de datos. Es clase hija de Validator.
*/
class Categorias extends Validator
{
    // Declaración de atributos (propiedades).
    private $id_categoria = null;
    private $categoria = null;
    private $descripcion_categoria = null;
    private $foto_categoria = null;
    private $ruta = '../../../resources/statics/imageFiles/categorias/'; 

    /*
    *   Métodos para asignar valores a los atributos.
    */
    public function setIdCategoria($value)
    {
        if ($this->validateNaturalNumber($value)) {
            $this->id_categoria = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setCategoria($value)
    {
        if ($this->validateAlphanumeric($value, 1, 50)) {
            $this->categoria = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setDescripcionCategoria($value)
    {
        if ($value) {
            if ($this->validateString($value, 1, 250)) {
                $this->descripcion_categoria = $value;
                return true;
            } else {
                return false;
            }
        } else {
            $this->descripcion = null;
            return true;
        }
    }

    public function setFotoCategoria($file)
    {
        if ($this->validateImageFile($file, 500, 500)) {
            $this->foto_categoria = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    /*
    *   Métodos para obtener valores de los atributos.
    */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getDescripcionCategoria()
    {
        return $this->descripcion_categoria;
    }

    public function getFotoCategoria()
    {
        return $this->foto_categoria;
    }

    public function getRuta()
    {
        return $this->ruta;
    }

    /*
    *   Métodos para realizar las operaciones SCRUD (search, create, read, update, delete).
    */

    public function InsertCategoria()
    {
        $sql = 'INSERT INTO categorias(
            categoria, descripcion_categoria, foto_categoria)
            VALUES (?, ?, ?)';
        $params = array($this->categoria, $this->descripcion_categoria, $this->foto_categoria);
        return Database::executeRow($sql, $params);
    }

    public function SelectCategoria()
    {
        $sql = 'SELECT id_categoria, categoria, descripcion_categoria, foto_categoria
                FROM categorias
                ORDER BY categoria';
        $params = null;
        //print_r(Database::getRows($sql, $params));
        print($params);
        return Database::getRows($sql, $params);
    }

    public function SelectOneCategoria()
    {
        $sql = 'SELECT id_categoria, categoria, descripcion_categoria, foto_categoria
                FROM categorias
                WHERE id_categoria = ?';
        $params = array($this->id_categoria);
        return Database::getRow($sql, $params);
    }

    public function updateCategoria($current_image) {

        //Se verifica si existe una nueva imagen para borrar la actual, de lo contrario se mantiene la actual.
        if ($this->foto_categoria) {
            $this->deleteFile($this->getRuta(), $current_image);
        } else {
            $this->foto_categoria = $current_image;
        }

        $query = "UPDATE categorias SET categoria=?, descripcion_categoria=?, foto_categoria=?  WHERE id_categoria = ?";
        $params = array($this->categoria, $this->descripcion_categoria, $this->foto_categoria, $this->id_categoria);
        return Database::executeRow($query, $params);
    }

    public function deleteCategoria() {
        $query = "DELETE FROM categorias WHERE id_categoria = ?";
        $params = array($this->id_categoria);
        return Database::executeRow($query, $params);
    }
}
