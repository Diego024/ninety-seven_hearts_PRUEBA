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
    private $ruta = '../../../resources/imageFiles/dashboard/categorias/'; 

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
        if ($this->validateImageFile($file, 1900, 600)) {
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
    public function searchCategorias($value) {
        $query = 'SELECT id_categoria, categoria, descripcion_categoria, foto_categoria
                  FROM categorias
                  WHERE categoria ILIKE ? OR descripcion_categoria ILIKE ?
                  ORDER BY categoria';
         $params = array("%$value%", "%$value%");
         return Database::getRows($query, $params);
    }

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

    public function readProductosCategoria() {
        $query="SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.descripcion, cp.existencia, cp.precio_venta, c.categoria, cp.foto_producto, c.descripcion_categoria, c.foto_categoria
                FROM catalogo_productos cp
                INNER JOIN categorias c
                    ON c.id_categoria = cp.id_categoria
                WHERE cp.id_categoria = ?";
        $params = array($this->id_categoria);
        return Database::getRows($query, $params);
    }

    public function getCategoriasMasVendidas() {
        $query="SELECT SUM(cp.id_categoria), ca.categoria
                FROM orden_compra oc
                INNER JOIN detalle_orden deo
                    ON deo.id_orden_compra = oc.id_orden_compra
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = deo.id_catalogo_producto
                INNER JOIN categorias ca
                    ON ca.id_categoria = cp.id_categoria
                WHERE id_estado_orden = 1
                GROUP BY cp.id_categoria, categoria
                ORDER BY sum DESC
                LIMIT 10";
        $params=null;
        return Database::getRows($query, $params);
    }

    public function getCategoriasEnCatalogo() {
        $query="SELECT COUNT(cp.id_catalogo_producto), c.categoria
                FROM catalogo_productos cp
                INNER JOIN categorias c
                    ON c.id_categoria = cp.id_categoria
                GROUP BY c.categoria;";
        $params=null;
        return Database::getRows($query, $params);
    }
}
