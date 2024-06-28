<?php
require_once 'Product.php';
require_once 'Database.php';
require_once 'fileAdapter.php';
require_once 'ProductRepository.php';

// Utilisation avec la base de données
try {
    $connexion = new \PDO('mysql:host=localhost;dbname=testdb', 'root', 'password');
    $database = new Database($connexion);
    $productRepositoryDb = new ProductRepository($database);

    $product = new Product();
    $product->id = 1;
    $product->designation = "Example Product";
    $product->univers = "Example Universe";
    $product->price = 100;

    $productRepositoryDb->save($product);
    echo "Product saved to database\n";
} catch (Exception $e) {
    echo "Database not available: " . $e->getMessage() . "\n";
}

// Utilisation avec le fichier JSON
$jsonFileAdapter = new JsonFileAdapter('products.json');
$productRepositoryJson = new ProductRepository($jsonFileAdapter);

$product = new Product();
$product->id = 2;
$product->designation = "Another Product";
$product->univers = "Another Universe";
$product->price = 200;

$productRepositoryJson->save($product);
echo "Product saved to JSON file\n";
?>
