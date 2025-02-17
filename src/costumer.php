<?php

namespace  ArdhanLibrary\Belajar;

class Costumer{
    public function __construct(private string $name)
    {
        
    }
     public function sayHello (string $name = "Guest"): string {
        return "Hello $name , Myname is $this->name";
     }
}