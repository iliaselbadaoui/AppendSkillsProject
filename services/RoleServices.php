<?php

include_once "../root.php";
include_once root."/interfaces/CRUD.php";
include_once root."/classes/Connection.php";
class RoleServices implements CRUD
{

    private $connection;

    /**
     * RoleServices constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = new Connection();
        $this->connection = $this->connection->getConnection();
    }


    function Create($O)
    {
        $query="";
    }

    function Read()
    {
        $query = "Select * from role";
        $req = $this->connection->query($query);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return json_encode(array($res));
    }

    function Update($O)
    {
        // TODO: Implement Update() method.
    }

    function Delete($O)
    {
        // TODO: Implement Delete() method.
    }

    function FindById($ID)
    {
        $query = "Select * from role where id=".$ID;
        $req = $this->connection->query($query);
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return json_encode($res);
    }
}