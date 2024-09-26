<?php

include("classes/db.class.php");
include("classes/product.class.php");
include("includes/header.php");
?>





<body>
    <div class="container my-3">
        <a href="create-product.php" class="btn btn-primary">create product</a>
        
        <hr>
        
        <?php $product = new Product(); ?>

        <?php if ($product->getProducts()): ?>

            <?php include("includes/productList.php"); ?>

        <?php else: ?>
            <div class="alert alert-warning">
                Ürün bulunamadı.
            </div>
        <?php endif; ?>
    </div>
<?php include("includes/footer.php"); ?>