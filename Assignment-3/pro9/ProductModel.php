<?php
    class ProductModel{
        public int $productId;
        public string $productName;
        public int $productQuantity;
        public float $productPrice;

        public function __construct($productId, $productName,$productQuantity,$productPrice) {
            $this->productId = $productId;
            $this->productName = $productName;
            $this->productQuantity = $productQuantity;
            $this->productPrice = $productPrice;        
        }

        // public function  getProductId(){
        //     return $this->productId;
        // }

        // public function  getProductName(){
        //     return $this->productName;
        // }

        // public function  getProductQuantity(){
        //     return $this->productQuantity;
        // }

        // public function  getProductPrice(){
        //     return $this->productPrice;
        // }
    }
?>