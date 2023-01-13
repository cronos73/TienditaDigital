<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductoVenta extends Model{
    // protected $table  = 'tbl_usuario';
    // protected $primaryKey  = 'id';
    // protected $allowedFields=['id','email','nombre','telefono','estatus','tipo'];
    protected $table  = 'producto';
    protected $primaryKey  = 'id';
    protected $allowedFields=['id','nombreProducto','descripcionProducto','precioProducto','existenciaProducto','unidadVenta','foto'];
    public function get($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }
}

