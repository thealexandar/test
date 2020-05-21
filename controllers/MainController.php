<?php
    namespace App\Controllers;

    use \App\Models\ProductModel;

    class MainController {

        public function __construct(){
            
        }

        public function products(){
            $productModel = new ProductModel;
            $products = $productModel->getAllProducts();
            $data = $products;
            return $data;
        }
    }