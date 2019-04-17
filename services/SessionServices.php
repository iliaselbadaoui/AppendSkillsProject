<?php

include_once "../root.php";
include_once root."/classes/Connection.php";
include_once root."/classes/Session.php";
class SessionServices
{

    /**
     * UserServices constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = new Connection();
        $this->connection=$this->connection->getConnection();
    }

    function Start($O)
    {
        $query = "Insert into session values(NULL,NOW(),NULL,?,?,?)";
        $req = $this->connection->prepare($query);
        $req->execute(array($O->getNavigateur(),$O->getOs(),$O->getUser())) or die("Error");
    }

    function End($id)
    {
        $query = "Update session set sortie=NOW() where user=? and sortie is NULL";
        $req = $this->connection->prepare($query);
        $req->execute(array($id)) or die("Error");
    }
}