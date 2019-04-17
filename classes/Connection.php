<?php


class Connection
{
    private $connection;

    /**
     * Connection constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=AS_DB","root","");
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }


}