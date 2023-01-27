<?php
namespace App\Models;

use CodeIgniter\Model;

class ConfiguracionSistema extends Model{
    protected $table  = 'configuracion';
    protected $primaryKey  = 'Atributo';
    protected $allowedFields=['Atributo','Valor'];
    public function get($atributo = null)
    {
        if ($atributo === null) {
            return $this->findAll();
        }
        return $this->asArray()
            ->where(['Atributo' => $atributo])
            ->first();
    }
}