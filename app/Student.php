<?php

namespace App;

class Student extends Person
{
    public string $name;
    protected int $age;
    public array $marks;

    public function __construct(string $name, int $age = 18, array $marks = [])
    {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    public function study() :void
    {
        print(" Я учусь");
    }

    public function addMark(int $mark) :self
    {
        $this->marks[] = $mark;
        return $this;
    }
    public function avgMarks() :float //:float можно не прописывать
    {
        return array_sum($this->marks) / count($this->marks);
    }

    public function setAge(int $age)
    {
        if ($age > 16 && $age < 99)
        {
            $this->age = $age;
        }
        return $this->age;
        //return $age > 16 && $age < 99? ;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function brave()
    {
        print("Я дышу!");
    }
}