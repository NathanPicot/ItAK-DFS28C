<?php


class Product
{
    public int $id;
    public string $designation;
    public string $univers;
    public int $price;
}


interface InterfaceProduct
{
    public function save(Product $product);
}

class ProductRepository 
{
    public function save(Product $product)  
    {
        $connexion = new \PDO('mysql:host=localhost;dbname=testdb', 'root', 'password');
        $database = new Database()  ;
        
        $query = "INSERT INTO products (ID, DESIGNATION, UNIVERS, PRICE) VALUE ($product->id, $product->designation, $product->univers, $product->price)";

        $database->sqlQuery($query, $connexion);
        // convert Product to proper persistance format
    }
}

class Adapter implements InterfaceProduct
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function save($product)
    {
        $productData = [
            'id' => $product->id,
            'designation' => $product->designation,
            'univers' => $product->univers,
            'price' => $product->price
        ];

        $jsonData = json_encode($productData);
        file_put_contents($this->filePath, $jsonData . PHP_EOL, FILE_APPEND);
    }
}

class Database
{
    public function sqlQuery(string $sqlQuery, \PDO $connexion)
    {
        $stmt = $connexion->prepare($sqlQuery);
        $stmt->execute();
    }
}
