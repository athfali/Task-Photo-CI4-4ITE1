<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Create new product</h5>

            <form action="/product" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="example-product-name">Product Name</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter product name" required name="name">
                </div>

                <div class="form-group">
                    <label for="example-product-stock">Stock</label>
                    <input type="number" min="1" class="form-control" id="example-product-stock" aria-describedby="emailHelp" 
                        placeholder="Enter product stock" required name="stock">
                </div>

                <div class="form-group">
                    <label for="example-product-price">Price</label>
                    <input type="number" min="1" class="form-control" id="example-product-price" aria-describedby="emailHelp" 
                        placeholder="Enter product price" required name="price">
                </div>

                <div class="form-group">
                    <label for="example-product-category">Category</label>
                    <select class="form-control" name="category" id="example-product-category">
                        <option value="utilities">Utilities</option>
                        <option value="food_and_beverages"> Food & Beverages</option>
                        <option value="books">Books</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="example-product-photo">Photo</label>
                    <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>