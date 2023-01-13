    </div>

    <script src="<?php echo base_url() ?>/assets/bootstrap_5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
      function agregaCarrito(idProducto) {
        var cantidad = parseInt(document.getElementById("cantidadProducto_" + idProducto).innerHTML);
        var existencia = parseInt(document.getElementById("existenciaProducto_" + idProducto).innerHTML);
        //document.getElementById("observaciones_" + idProducto).innerHTML = "";

        if (cantidad <= existencia) {
          existencia = existencia - cantidad;
          document.getElementById("existenciaProducto_" + idProducto).innerHTML = existencia;

          var cantidadCarrito = parseInt(document.getElementById('carrito_cantidad').innerHTML);
          if (cantidadCarrito > 0) {

          } else {
            cantidadCarrito = 0;
          }
          cantidadCarrito = cantidadCarrito + cantidad;
          document.getElementById('carrito_cantidad').innerHTML = cantidadCarrito;
          document.getElementById("observaciones_" + idProducto).style.color="green";
        }else{
          document.getElementById("observaciones_" + idProducto).innerHTML = "Existencia agotada";
          document.getElementById("observaciones_" + idProducto).style.color="red";
        }
        
      }
      function quitarCantidad(idProducto){
        var cantidad = parseInt(document.getElementById("cantidadProducto_" + idProducto).innerHTML);
        if (cantidad > 1){
          cantidad--;
        }
        document.getElementById("cantidadProducto_" + idProducto).innerHTML = cantidad;
      }
      function agregarCantidad(idProducto){
        var cantidad = parseInt(document.getElementById("cantidadProducto_" + idProducto).innerHTML);
        var existencia = parseInt(document.getElementById("existenciaProducto_" + idProducto).innerHTML);
        if (cantidad < existencia){
          cantidad++;
        }
        document.getElementById("cantidadProducto_" + idProducto).innerHTML = cantidad;
      }
    </script>
    </body>

    </html>