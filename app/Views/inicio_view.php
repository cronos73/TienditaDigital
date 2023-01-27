<?= $header; ?>


<?php
$idProducto = "1";
$nombreProducto = "Nombre del producto";
$descripcionProducto = "Descripción del producto para describir fd dfa dafa dafadadf afda daf dafa amas el producto ya que esto da a conocer un poco mas el producto.";
$precioProducto = 11;
$unidadVentaProducto = "litros";
$existenciaProducto = "5";
$cantidadProducto = "1";
$familiaProducto = "Limpieza";

?>
<div class="alert alert-warning   alert-dismissible fade show" role="alert">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
    <!-- <strong>Recuerda!</strong> Para poder realizar pedidos debe ser registrado en el sistema. Registrate en el menú de opciones y le daremos mejor servicio. -->
    <?php echo $alertLogin['Valor'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


<div class="row">
    <?php foreach ($productos as $producto) : ?>
        <div id="card-1" class="card mb-3">
            <img class="imagenProduto" src="data:image/jpeg;base64,<?php echo base64_encode($producto['foto']) ?> "/>


            <div class="card-body">
                <h5 id="nombreProducto_<?php echo $producto['id'] ?>" class="card-title">
                    <?php echo $producto['nombreProducto'] ?>
                </h5>
                <small>
                    <p id="descripcionProducto_<?php echo $producto['id'] ?>" class="card-text" style="height:70px; overflow-x: hidden;overflow-y: auto;">
                        <?php echo $producto['descripcionProducto'] ?>
                    </p>
                </small>
                <hr>

                <table border="0" width="100%">
                    <tr>
                        <td>
                            <small class="text-muted" width:"50%">Precio:</small>
                        </td>
                        <td width:"50%">
                            $
                            <span id="precioProducto_<?php echo $producto['id'] ?>">
                                <?php echo $producto['precioProducto'] ?>
                            </span>
                            x
                            <span class="unidadVentaProducto_<?php echo $producto['id'] ?>">
                                <?php echo $producto['unidadVenta'] ?>
                            </span>

                        </td>
                    </tr>
                    <tr>
                        <td><small class="text-muted" width:"50%">Existencia:</small></td>
                        <td width:"50%">
                            <span id="existenciaProducto_<?php echo $producto['id'] ?>">
                                <?php echo $producto['existenciaProducto'] ?>
                            </span>
                            <span class="unidadVentaProducto_<?php echo $producto['id'] ?>">
                                <?php echo $producto['unidadVenta'] ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <small class="text-muted" width:"50%">Solicitar:</small>
                        </td>
                        <td width:"50%">
                            <button class="btn-cantidad" onclick="quitarCantidad(<?php echo $producto['id'] ?>)">
                                <i class="fa fa-minus-circle fa-2x fa-lg" aria-hidden="true"></i>
                            </button>
                            <b>
                                <span id="cantidadProducto_<?php echo $producto['id'] ?>">
                                    <?php echo $cantidadProducto ?>
                                </span>
                            </b>
                            <button class="btn-cantidad" onclick="agregarCantidad(<?php echo $producto['id'] ?>)">
                                <i class="fa fa-plus-circle fa-2x fa-lg" aria-hidden="true"></i>
                            </button>
                            <span class="unidadVentaProducto_<?php echo $producto['id'] ?>">
                                <?php echo $producto['unidadVenta'] ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <small class="text-muted" width:"50%">Familia:</small>
                        </td>
                        <td width:"50%">
                            <span id="familiaProducto_<?php echo $producto['id'] ?>">
                                <?php echo $producto['nombreFamilia'] ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <h6 style="padding:40px;"><span id="observaciones_<?php echo $producto['id'] ?>" style="color:green;">Producto Disponible</span></h6>
                        </td>
                    </tr>
                </table>

                <br>
                <p class="pull-right">
                    <a class="btn btn-primary btn-carrito" onclick="agregaCarrito(<?php echo $producto['id'] ?>)">
                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i> -->
                        +
                    </a>
                </p>
            </div>
        </div>

    <?php endforeach; ?>




</div>
<?= $footer; ?>