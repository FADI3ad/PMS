<?php require_once('components/header.php'); ?>


<!-- Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form action="/add-product" method="POST" enctype="multipart/form-data">
                            <!-- Product Name -->
                            <div class="mb-3">
                                <label for="productName" class="form-label fw-bold">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="name" required>
                            </div>
                            
                            <!-- Product Price -->
                            <div class="mb-3">
                                <label for="productPrice" class="form-label fw-bold">Price ($)</label>
                                <input type="number" class="form-control" id="productPrice" name="price" step="0.01" required>
                            </div>

                            <!-- Sale Price (Optional) -->
                            <div class="mb-3">
                                <label for="productSalePrice" class="form-label fw-bold">Sale Price ($)</label>
                                <input type="number" class="form-control" id="productSalePrice" name="sale_price" step="0.01">
                            </div>

                            <!-- Product Image -->
                            <div class="mb-3">
                                <label for="productImage" class="form-label fw-bold">Product Image</label>
                                <input class="form-control" type="file" id="productImage" name="image" accept="image/*" required>
                            </div>

                            <!-- Product Description -->
                            <div class="mb-3">
                                <label for="productDescription" class="form-label fw-bold">Description</label>
                                <textarea class="form-control" id="productDescription" name="description" rows="4"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="bi bi-plus-circle me-1"></i> Add Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('components/footer.php'); ?>
