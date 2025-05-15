<?php
   if(isset($_POST['submit'])) {
       $productName = $_POST['productName'];
       $productDescription = $_POST['Description'];
       $productPrice = $_POST['Price'];
       $productCategory = $_POST['Category'];
       $productQty = $_POST['Qty'];

       $sql = "INSERT INTO products (product_name, description, price, category, quantity) VALUES ('$productName', '$productDescription', '$productPrice', '$productCategory', '$productQty')";
       
       if ($conn->query($sql) === TRUE) {
           echo "<script>alert('New product created successfully');</script>";
       } else {
           echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
       }
   }
?>





<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">CREATE FORM</h4>
          <p class="card-description">PRODUCT</p>

          <form class="forms-sample" method="POST">
            <div class="form-group">
              <label for="productName">Product Name</label>
              <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
              <label for="productDescription">Description</label>
              <textarea class="form-control" id="productDescription" name="Description" rows="3" placeholder="Enter product description"></textarea>
            </div>
            <div class="form-group">
              <label for="productPrice">Price</label>
              <input type="number" class="form-control" id="productPrice" name="Price" placeholder="Enter price" step="0.01" min="0" required>
            </div>
            <div class="form-group">
              <label for="productCategory">Category</label>
              <input type="text" class="form-control" id="productCategory" name="Category" placeholder="Enter product category" required>
            </div>
            <div class="form-group">
              <label for="productQty">Quantity</label>
              <input type="number" class="form-control" id="productQty" name="Qty" placeholder="Enter quantity" min="0" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mr-2">Create Product</button>
            <button type="reset" class="btn btn-light"><a href="http://localhost:8012/LESSON_CRUD_PHP/ProductList.php">Cancel</a></button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
