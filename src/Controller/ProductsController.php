<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;
use LojaApp\Model\Product;
use LojaApp\Database\connection;

class ProductsController
{
    public function view($slug)
    {
        $product = new Product(Connection::getInstance());
        $product = $product->find($slug);

        return view::render('single', compact('product'));
    }
}