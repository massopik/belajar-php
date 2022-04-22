<?php
require_once 'orang.php';
//class
class robot{

    //public, protected, private

    //property
    public $suara;
    public $berat;

    //konstruktor
    public function __construct($suara, $berat){
        $this->suara = $suara;
        $this->berat = $berat;
    }

    //metode
    /*
    public function bersuara(){
        echo 'suara robot .... ' . $this->suara;
    }
    public function berat_robot(){
        return $this->berat;
    }
    */
    //metode set && get

    public function set_suara($suara){
        $this->suara = $suara;
        return $this;
    }

    public function get_suara(){
        return $this->suara;
    }

    public function set_berat($berat){
        $this->berat = $berat;
    }

    public function get_berat(){
        return $this->berat;
    }
}

//inheritance / Pewarisan

class robot_hewan extends robot{

    public function get_kekuatan(){
        echo 'saya hewan laut';
    }

    //overriding

    public function get_suara(){
        return 'suaranya .. ' . $this->suara;
    }

    public function testing(){
        //self dan parent
        //return self::get_suara();
        return parent::get_suara();
    }
}

?>