<?php

include("classes/db.class.php");
include("classes/product.class.php");
include("includes/header.php");
?>


<?php

    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        $product = new Product();

        if ($product->createProduct($title, $price, $description)) {
            header('location: index.php');
        }
    }


?>


<body>
    <div class="container my-3">
        <div class="row">
            <form action="" method="post">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title">title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">price</label>
                        <input type="text" id="price" name="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">description</label>
                        <textarea id="description" name="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">kaydet</button>
                </div>
            </form>
        </div>

    </div>
    <?php include("includes/footer.php"); ?>