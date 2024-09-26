<?php

class Product extends Db
{

    public function getProducts()
    {
        $sql = "SELECT * FROM  product";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getProductByID(int $productid)
    {
        $sql = "SELECT * FROM  product WHERE id=:id";
        $statement = $this->connect()->prepare($sql);
        $statement->execute(['id' => $productid]);

        return $statement->fetch();
    }

    public function createProduct($title, $price, $description)
    {
        $sql = "INSERT INTO product(title, price, description) VALUES (:title, :price, :description)";
        $statement = $this->connect()->prepare($sql);
        return $statement->execute([
            'title' =>  $title,
            'price' =>  $price,
            'description' => $description,
        ]);

        
    }

    public function editProduct($id, $title, $price, $description)
    {
        $sql = "UPDATE product SET title=:title, price=:price, description=:description WHERE id=:id";
        $statement = $this->connect()->prepare($sql);
        return $statement->execute([
            'id' => $id,
            'title' =>  $title,
            'price' =>  $price,
            'description' => $description,
        ]);

        
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id=:id";
        $statement = $this->connect()->prepare($sql);
        return $statement->execute([
            'id' => $id
        ]);

        
    }
}
