<?php

namespace  ArdhanLibrary\Belajar;

class Costumer{
    public function __construct(private string $name)
    {
        
    }
     public function sayHello (string $name): string {
        return "Hello $name , Myname is $this->name";
     }
}