<?php
error_reporting(2);
include_once "../root.php";
include_once root."/interfaces/CRUD.php";
include_once root."/classes/Connection.php";
include_once root."/classes/User.php";
class UserServices implements CRUD
{
    private $connection;

    /**
     * UserServices constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = new Connection();
        $this->connection=$this->connection->getConnection();
    }


    function Create($O)
    {
        $query = "Insert into user values (NULL,?,?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connection->prepare($query);
        $req->execute(array($O->getNom(),$O->getPrenom(),$O->getEmail(),$O->getPass(),$O->getPays(),$O->getVille(),$O->getAdress(),$O->getPhoto(),$O->getTel(),$O->getRole(),$O->getNaissance(),$O->getAbout())) or die("Erreur");
    }

    function Read()
    {
        // TODO: Implement Read() method.
    }

    function UpdatePasse($id,$passe){
        $query = "Update user set motpasse=? where id=?";
        $req = $this->connection->prepare($query);
        $req->execute(array($passe,$id)) or die("Error");
    }

    function Update($O)
    {
        $query = "Update user set nom=?,prenom=?,email=?,motpasse=?,pays=?,ville=?,adress=?,photo=?,tel=?,role=?,naissance=?,about=? where id=?";
        $req = $this->connection->prepare($query);
        $req->execute(array($O->getNom(),$O->getPrenom(),$O->getEmail(),$O->getPass(),$O->getPays(),$O->getVille(),$O->getAdress(),$O->getPhoto(),$O->getTel(),$O->getRole(),$O->getNaissance(),$O->getAbout(),$O->getId())) or die("Error");
    }

    function ShortUpdate($O)
    {
        $query = "Update user set nom=?,prenom=?,pays=?,ville=?,adress=?,tel=?,naissance=? where id=?";
        $req = $this->connection->prepare($query);
        $req->execute(array($O->getNom(),$O->getPrenom(),$O->getPays(),$O->getVille(),$O->getAdress(),$O->getTel(),$O->getNaissance(),$O->getId())) or die("Error");
    }

    function Delete($O)
    {
        $query = "Delete from user where id=?";
        $req= $this->connection->prepare($query);
        $req->execute(array($O->getId())) or die("Error");
    }

    function FindById($ID)
    {
        $query = "Select * from user where id=".$ID;
        $req= $this->connection->query($query);
        return json_encode($req->fetch(PDO::FETCH_ASSOC));
    }
    function FindByEmail($EMAIL){
        $query = "Select * from user where email=?";
        $req= $this->connection->prepare($query);
        $req->bindParam(1,$EMAIL);
        if($req->execute()){
            $res=$req->fetch(PDO::FETCH_OBJ);
            return $res;
        }else{
            return null;
        }
    }
}