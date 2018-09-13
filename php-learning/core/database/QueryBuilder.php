<?php

class QueryBuilder {
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertInto($table, $description) {
        $statement = $this->pdo->prepare("insert into {$table} (description, completed) values ('{$description}', false);");

        $statement->execute();
    }
}