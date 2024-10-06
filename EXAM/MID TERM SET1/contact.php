<?php
class Contact{
    private $id = null;
    private $name = null;
    private $mobile = null;
    private $email = null;

    public function __construct($id = null,$name=null, $mobile=null, $email=null) {
        $this->id = $id;  // assuming $id is unique and auto-incrementing
        $this->name = $name;
        $this->mobile = $mobile;
        $this->email = $email;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getMobile(){
        return $this->mobile;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function setMobile($mobile){
        $this->mobile = $mobile;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
}
?>