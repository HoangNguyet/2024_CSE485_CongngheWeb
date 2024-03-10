<?php
class Patient{
    //Properties
    private $id;
    private $fullname;
    private $gender;
    private $dateOfBirth;
    private $address;
    private $mobile;

    //Methods
    public function __construct($id, $fullname, $gender, $dateOfBirth, $address, $mobile){
        $this->id = $id;
        $this->fullname = $fullname;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->mobile = $mobile;
    }
    //get and set
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getFullname(){
        return $this->fullname;
    }
    public function setFullname($fullname){
        $this->fullname = $fullname;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function getMobile(){
        return $this->mobile;
    }
    public function setMobile($mobile){
        $this->mobile = $mobile;
    }


}