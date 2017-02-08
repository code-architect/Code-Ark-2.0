<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * Fetch every thing from given table
     * @param $table
     * @return mixed
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function insert($table, $parameter)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameter)),
            ":".implode(", :", array_keys($parameter))
        );

        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameter);

        }catch (Exception $e)
        {
            die('Something went wrong');

        }

    }


}