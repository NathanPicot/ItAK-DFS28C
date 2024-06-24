<?php 

// require_once 'Interface.php';
// require_once 'Product.php';

// class Database implements PersistenceInterface
// {
//     private \PDO $connexion;

//     public function __construct(\PDO $connexion)
//     {
//         $this->connexion = $connexion;
//     }

//     public function save(Product $product)
//     {
//         $sqlQuery = "INSERT INTO products (id, designation, univers, price) VALUES (
//             {$product->id},
//             '{$product->designation}',
//             '{$product->univers}',
//             {$product->price}
//         )";
//         $stmt = $this->connexion->prepare($sqlQuery);
//         $stmt->execute();
//     }
// }
