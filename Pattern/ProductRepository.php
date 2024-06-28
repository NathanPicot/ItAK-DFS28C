<?php

require_once 'Interface.php';
require_once 'Product.php';

class ProductRepository
{
    private PersistenceInterface $persistence;

    public function __construct(PersistenceInterface $persistence)
    {
        $this->persistence = $persistence;
    }

    public function save(Product $product)
    {
        $this->persistence->save($product);
    }
}

