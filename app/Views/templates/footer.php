    </div>

    <script src="<?php echo base_url() ?>/assets/bootstrap_5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
      function agregaCarrito() {
        var cantidad = parseInt(document.getElementById('carrito_cantidad').innerHTML);
        if (cantidad > 0) {} else {
          cantidad = 0;
        }
        cantidad++;
        document.getElementById('carrito_cantidad').innerHTML = cantidad;
      }
    </script>
    </body>

    </html>