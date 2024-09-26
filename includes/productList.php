<table class="table table-dark table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>description</th>

            <th></th>
        </tr>

    </thead>
    <?php foreach ($product->getProducts() as $item): ?>

        <tr>
            <td><?php echo $item->id ?></td>
            <td><?php echo $item->title ?></td>
            <td><?php echo $item->price ?></td>
            <td><?php echo $item->description ?></td>
            <td>
                <a href="edit-product.php?id=<?php echo $item->id ?>" class="btn btn-primary btn-sm"> edit </a>
                <form action="delete-product.php" method="post" style="display: inline;">
                    <input type="hidden" name="productId" value="<?php echo $item->id ?>">
                    <button type="submit" class="btn btn-warning btn-sm" name="deleteProduct"> delete </button>
                </form>
            </td>

        </tr>

    <?php endforeach; ?>
</table>