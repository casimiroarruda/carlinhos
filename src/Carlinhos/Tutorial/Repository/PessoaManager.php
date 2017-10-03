<?php

namespace Carlinhos\Tutorial\Repository;

use Carlinhos\Tutorial\Pessoa;

class PessoaManager
{
    protected $data = [];

    public function __construct()
    {
        $this->data = $this->populate();
    }

    protected function populate(): array
    {
        return [
            'Carlinhos' => new Pessoa('Carlinhos', 17, Pessoa::GENDER_MALE),
            'Duodraco' => new Pessoa('Anderson', 36, Pessoa::GENDER_MALE),
            'Aris' => new Pessoa('Ariana', 22, Pessoa::GENDER_FEMALE),
            'Thamara' => new Pessoa('Thamara', 33, Pessoa::GENDER_FEMALE),
            'Pokemao' => new Pessoa('Wandinho', 34, Pessoa::GENDER_MALE)
        ];
    }

    public function getAll():array
    {
        return $this->data;
    }

    public function getByName(string $name):Pessoa
    {
        return $this->data[$name] ?? new Pessoa('Zé Ninguem',42,Pessoa::GENDER_MALE);
    }
}