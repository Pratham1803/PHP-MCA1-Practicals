<?php
class ProductModel{
    private $product_name;
    private $products_quan;
    private $product_price;

    public function __construct($name,$quan,$price) {
        $this->product_name = $name;
        $this->products_quan = $quan;
        $this->product_price = $price;
    }

    public function getProductName(){
        return $this->product_name;
    }

    public function getProductQuan(){
        return $this->products_quan;
    }

    public function getProductPrice(){
        return $this->product_price;
    }
}
?>