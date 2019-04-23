<?php


class Video
{
    private $id;
    private $titre;
    private $chemin;
    PRIVATE $section;
    private $description;
    private $gratuit;

    /**
     * Video constructor.
     * @param $id
     * @param $titre
     * @param $chemin
     * @param $section
     * @param $description
     * @param $gratuit
     */
    public function __construct($id, $titre, $chemin, $section, $description, $gratuit)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->chemin = $chemin;
        $this->section = $section;
        $this->description = $description;
        $this->gratuit = $gratuit;
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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * @param mixed $chemin
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    }

    /**
     * @return mixed
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param mixed $section
     */
    public function setSection($section)
    {
        $this->section = $section;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getGratuit()
    {
        return $this->gratuit;
    }

    /**
     * @param mixed $gratuit
     */
    public function setGratuit($gratuit)
    {
        $this->gratuit = $gratuit;
    }



}