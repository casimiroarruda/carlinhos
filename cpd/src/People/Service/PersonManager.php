<?php
namespace App\People\Service;

use App\People\Entity\Person;

class PersonManager
{
    /** \PDO */
    protected $pdo;
    
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $statement = $this->pdo->prepare('SELECT id, name, age FROM person');
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS, Person::class);
    }

    public function getById(int $id)
    {
        $statement = $this->pdo->prepare('SELECT id, name, age FROM person WHERE id = :id');
        $statement->execute([':id' => $id]);
        $statement->setFetchMode(\PDO::FETCH_CLASS, Person::class);
        return $statement->fetch();
    }

    public function insert(Person $person)
    {
        $sql = 'INSERT INTO person (name, age) VALUES (:name, :age);';
        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute([
        ':name' => $person->name,
        ':age' => $person->age
        ]);
        if (!$result) {
            return;
        }
        $person->id = $this->pdo->lastInsertId();
        return $person;
    }

    public function update(Person $person)
    {
        $sql = 'UPDATE person SET name=:name, age=:age WHERE id=:id;';
        $statement = $this->pdo->prepare($sql);
        return $statement->execute(get_object_vars($person));
    }

    public function purge(Person $person)
    {
        $sql = 'DELETE FROM person WHERE id = :id';
        $statement = $this->pdo->prepare($sql);
        return $statement->execute([':id' => $person->id]);
    }
}
