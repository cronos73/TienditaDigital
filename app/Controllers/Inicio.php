<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductoVenta;
use App\Models\ConfiguracionSistema;
use CodeIgniter\HTTP\Request;
class Inicio extends BaseController
{
    public function index()
    {
        $productos = new ProductoVenta();
        $configuraciones = new ConfiguracionSistema();

        //return view('templates/header');
        //$productos = new ProductoVenta();
        //$productos = $productos->asObject()->select("pc.*, u.email, puc.description, puc.direction")
        //    ->join('products_control as pc', 'pc.product_id = products.id')
        
        //$productos = new ProductoVenta();
        //$datos['productos'] = $productos->orderBy('id', 'ASC')->findAll();
        //$datos['productos'] = $productos->select('id,nombreProducto,descripcionProducto,precioProducto,existenciaProducto,unidadVenta')->findAll();
        $atributo = 'AlertaLogin';
        $datos['alertLogin'] = $configuraciones->select('Valor')->where(['Atributo' => $atributo])->first();;
        $datos['productos'] = $productos->select('*')->
        join('familiaproducto as fa', 'fa.id = producto.idFamilia')->findAll();
        $datos['header'] = view('templates/header');
        $datos['footer'] = view('templates/footer');

        return view('inicio_view', $datos);

         //echo view('templates/header');
         //echo view('inicio_view',$datos);
         //echo view('templates/footer');
    }
}
?>