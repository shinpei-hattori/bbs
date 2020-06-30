<?php 
namespace App\Liblaray;

class Category{
    public function catCheck($data){
        if($data==='電化製品'){
            $data = 1;
            return $data;
        }
    }
}