<?php
/**
 * Created by IntelliJ IDEA.
 * User: duodraco
 * Date: 02/10/17
 * Time: 22:32
 */

namespace Carlinhos\Tutorial;

class Pessoa
{
    /** @var string */
    protected $nome;
    /** @var int */
    protected $idade;
    /** @var string */
    protected $gender;

    const GENDER_MALE = 'XY';
    const GENDER_FEMALE = 'XX';

    public function __construct(string $nome, int $idade, string $gender)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->gender = $gender;
    }


    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * @param int $idade
     */
    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }


}