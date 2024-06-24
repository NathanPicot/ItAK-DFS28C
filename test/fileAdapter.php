<?php
require_once 'Interface.php';
require_once 'Product.php';

class JsonFileAdapter implements PersistenceInterface
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function save(Product $product)
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


