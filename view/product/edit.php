<?php



?>



<div class="container">
     <div class="row">
    <div class="col-12">
        <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">EDIT FORM</h4>
                    <p class="card-description">PRODUCT</p>

                    <form class="forms-sample"  method="POST">
                            <input type="hidden" name="productId" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="Enter product name">
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Description</label>
                                <textarea class="form-control" id="productDescription" name="description" rows="2" placeholder="Enter product description"><?php echo $row['description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="productPrice">Price</label>
                                <input type="number" class="form-control" id="productPrice" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter price" step="0.01" min="0">
                            </div>
                            <div class="form-group">
                                <label for="productCategory">Category</label>
                                <input type="text" class="form-control" id="productCategory" name="category" value="<?php echo $row['category']; ?>" placeholder="Enter product category">
                            </div>
                            <div class="form-group">
                                <label for="productQty">Quantity</label>
                                <input type="number" class="form-control" id="productQty" name="quantity" value="<?php echo $row['quantity']; ?>" placeholder="Enter quantity" min="0">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mr-2">Update Product</button>
                            <button type="reset" class="btn btn-light"><a href="http://localhost:8012/LESSON_CRUD_PHP/ProductList.php">Cancel</a></button>
                        </form>

                  </div>
         </div>
    </div>
 </div>
</div>