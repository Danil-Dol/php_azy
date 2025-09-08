<?php

namespace App;

abstract class Person
{
    public string $gender;

    public function live()
    {
        print("Я живу!");
    }

    abstract public function brave();//дышать
}

/*interface 
{

}*/