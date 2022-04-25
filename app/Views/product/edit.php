<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update product <?= $data['name'] ?></h5>

            <form action="/product/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put" />
                <input type="hidden" name="oldphoto" value= "<?=$data['photo']?>" />

                <div class="form-group">
                    <label for="example-product-name">Product Name</label>
                    <input type="text" class="form-control" id="example-product-name" aria-describedby="emailHelp" 
                        placeholder="Enter product name" required name="name" value="<?= $data['name'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-stock">Stock</label>
                    <input type="number" min="1" class="form-control" id="example-product-stock" aria-describedby="emailHelp" 
                        placeholder="Enter product stock" required name="stock" value="<?= $data['stock'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-price">Price</label>
                    <input type="number" min="1" class="form-control" id="example-product-price" aria-describedby="emailHelp" 
                        placeholder="Enter product price" required name="price" value="<?= $data['price'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-product-category">Category</label>
                    <select class="form-control" name="category" id="example-product-category">
                        <option value="utilities" <?= $data['category'] == "utilities" ? "selected" : "" ?>>Utilities</option>
                        <option value="food_and_beverages" <?= $data['category'] == "food_and_beverages" ? "selected" : "" ?>> Food & Beverages</option>
                        <option value="books" <?= $data['category'] == "books" ? "selected" : "" ?>>Books</option>
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