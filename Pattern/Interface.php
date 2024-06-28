<?php

//Interface pour la persistence des données
interface PersistenceInterface
{
    public function save(Product $product);
}

