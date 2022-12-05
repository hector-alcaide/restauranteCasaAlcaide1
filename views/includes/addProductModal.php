<div class="modal fade mt-5" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-color1">

      <div class="modal-header d-block">
        <div class="d-flex">
          <h2 class="modal-title fs-5" id="nombreProducto"></h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" title="Cerrar"></button>
        </div>

        <h3 class="modal-title fs-6" id="definicionProducto"></h3>
      </div>
      <form action="" method="post" id="addProductForm">
        <input type="hidden" id="idProducto_input" name="idProducto_input">
        <input type="hidden" id="idCategoria_input" name="idCategoria_input">
        <div class="modal-body">
          <h2 class="modal-title fs-5">Guarniciones</h2>
          <?php common_helper::printArrayExtraProducts($accompaniments) ?>
          <h2 class="modal-title fs-5">Salsas</h2>
          <?php common_helper::printArrayExtraProducts($sauces) ?>
          <h2 class="modal-title fs-5">Tamaño de la carne</h2>
          <?php common_helper::printArrayExtraProducts($sizesProduct) ?>
          <h2 class="modal-title fs-5">Grado de cocción</h2>
          <?php common_helper::printArrayExtraProducts($cookingDegrees) ?>
        </div>
        <div class="modal-footer">
          <label for="cantidad">Cantidad</label>
          <input type="number" class="text-color3" id="cantidad" name="cantidad" value=1 min="1" max="10">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" title="Cerrar">Close</button>
          <button type="submit" class="btn btn-primary" title="Añade el producto al carrito">Añadir Producto</button>
        </div>
      </form>
    </div>
  </div>
</div>