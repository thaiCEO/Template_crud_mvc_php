<?php 
include '../database/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = $id";
$result = $conn->query($sql);
if ($result) {
    echo "Product deleted successfully";
    header("Location: ProductList.php");
} else {
    echo "Error deleting product: " . $conn->error;
}

?>