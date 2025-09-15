<?php //дескриптор
namespace App;

interface StudentInrerface //интерфейс - контракт
{
    public function study();

    public function takeExam():int;
}
