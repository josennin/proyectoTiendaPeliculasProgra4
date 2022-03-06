<div class="articulo">
<form action="agregaCarrito.php" method="post">
	<input type="hidden" id="id" value="<?php echo $item['id']; ?>">
	<div class="imagen"><img src="img/<?php echo $item['imagen']; ?>"/></div>
	<div class="titulo"><?php echo $item['nombre']; ?></div>
	<div class="precio"><?php echo $item['precio']; ?>CRC</div>
	<div class="botones">
		<input type="hidden" name="nom" value="<?php echo $item['nombre']; ?>">
		<input type="hidden" name="prec"  value="<?php echo $item['precio']; ?>">
		<input type="hidden" name="ima"  value="<?php echo $item['imagen']; ?>">
		<input style="border: 0; border-radius: 5px; background: rgb(255, 157, 10);
        cursor: pointer; padding: 10px;" type="submit" value="Agregar al carrito">
	</div>
</form>
</div>