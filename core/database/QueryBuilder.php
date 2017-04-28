<?php

/**
 * Class QueryBuilder
 */
class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @return mixed
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @param $table
     * @param $parameters
     *  Method to insert into tables
     */
    public function insert($table,$parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :',array_keys($parameters))
        );

        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        }catch (Exception $e){
            die('Something went wrong');
        }
    }





}