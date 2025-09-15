<?php
//Has - трейты - особенности
namespace App;

trait HasRest
{
    public function rest()
    {
        print("<p>$this->name отдыхает</p>");
    }
}