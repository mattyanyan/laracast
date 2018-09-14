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

    // My method
    public function insertInto($table, $description) {
        $statement = $this->pdo->prepare("insert into {$table} (description, completed) values ('{$description}', false);");

        $statement->execute();
    }

    // JW's method
    public function insert($table, $parameters) {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table, 
            implode(', ', array_keys($parameters)), // numerous columns 
            ':' . implode(', :', array_keys($parameters)) // numerous data, ':' means placeholder
        );
        
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);   //$parameters as input and map with the placeholders

        } catch (Exception $e) {
            die('Whoops, something went wrong');
        }


    }
}