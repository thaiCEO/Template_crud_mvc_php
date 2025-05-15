<?php

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$data = [];
if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} 
   
?>






<div class="container">
    <div class="row">
        <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PRODUCT LIST</h4>
                    <p class="card-description"> products <code>.table</code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Category</th>
                          <th>Quantity</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach($data as $item) {?>

                            <tr>
                            <td><?php echo $item['product_name'] ?></td>
                            <td><?php echo $item['description'] ?></td>
                            <td><?php echo $item['price'] ?></td>
                            <td><?php echo $item['category'] ?></td>
                            <td><?php echo $item['quantity'] ?></td>
                            <td>
                                <a href="http://localhost:8012/LESSON_CRUD_PHP/EditProduct.php?id=<?php echo $item['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="http://localhost:8012/LESSON_CRUD_PHP/DeleteProduct.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>

                       <?php } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
        </div>
    </div>
</div>