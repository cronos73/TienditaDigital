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

<div class="row">
    <div id="card-1" class="card mb-3">
        <img src="<?php echo base_url() ?>/assets/image/tarjeta.jpg " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 id="nombreProducto_<?php echo $idProducto ?>" class="card-title">
                <?php echo $nombreProducto ?>
            </h5>
            <small>
                <p id="descripcionProducto_<?php echo $idProducto ?>" class="card-text" style="height:70px; overflow-x: hidden;overflow-y: auto;">
                    <?php echo $descripcionProducto ?>
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
                        <span id="precioProducto_<?php echo $idProducto ?>">
                            <?php echo $precioProducto ?>
                        </span>
                        x
                        <span class="unidadVentaProducto_<?php echo $idProducto ?>">
                            <?php echo $unidadVentaProducto ?>
                        </span>

                    </td>
                </tr>
                <tr>
                    <td><small class="text-muted" width:"50%">Existencia:</small></td>
                    <td width:"50%">
                        <span id="existenciaProducto_<?php echo $idProducto ?>">
                            <?php echo $existenciaProducto ?>
                        </span>
                        <span class="unidadVentaProducto_<?php echo $idProducto ?>">
                            <?php echo $unidadVentaProducto ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <small class="text-muted" width:"50%">Cantidad:</small>
                    </td>
                    <td width:"50%">
                        <button class="btn-cantidad" onclick="quitarCantidad(<?php echo $idProducto ?>)">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                        <b> 
                        <span id="cantidadProducto_<?php echo $idProducto ?>">
                           <?php echo $cantidadProducto ?> 
                        </span>
                        </b>
                        <button class="btn-cantidad" onclick="agregarCantidad(<?php echo $idProducto ?>)">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <span class="unidadVentaProducto_<?php echo $idProducto ?>">
                            <?php echo $unidadVentaProducto ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <small class="text-muted" width:"50%">Familia:</small>
                    </td>
                    <td width:"50%">
                        <span id="familiaProducto_<?php echo $idProducto ?>">
                            <?php echo $familiaProducto ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <h6 style="padding:40px;"><span id="observaciones_<?php echo $idProducto ?>" style="color:green;">Producto Disponible</span></h6>
                    </td>
                </tr>
            </table>

            <br>
            <p class="pull-right">
                <a class="btn btn-primary btn-carrito" onclick="agregaCarrito(<?php echo $idProducto ?>)">
                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i> -->
                    +
                </a>
            </p>
        </div>
    </div>


</div>