<?php


class Section
{
    private $id;
    private $nom;
    private $formation;

    /**
     * Section constructor.
     * @param $id
     * @param $nom
     * @param $formation
     */
    public function __construct($id, $nom, $formation)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->formation = $formation;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }


}