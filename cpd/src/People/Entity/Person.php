<?php
namespace App\People\Entity;

class Person
{
    public $id;
    public $name;
    public $age;

    public function __toString(): string
    {
        return "{$this->id}: {$this->name} ({$this->age})";
    }
}
