<?php

namespace Lae\Belajar;

class Customer{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $nama){
        return "Hai $nama, my name is $this->name";
    }
}