<?php  
require_once "carrito.php";
$carrito = new Carrito();
$productoId = $_POST['productoId'];
$userId = $_POST['userId'];
    
if (isset($_POST['productoId']) && isset($_POST['userId']))  {
    
    $carrito->agregarProducto($productoId, $userId);
    echo "Producto agregado al carrito exitosamente";
} else {
    echo "Error al agregar el producto al carrito. Los datos no fueron recibidos correctamente";
}
?>
