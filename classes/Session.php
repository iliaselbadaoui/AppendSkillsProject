<?php


class Session
{
    private $id;
    private $entree;
    private $sortie;
    private $navigateur;
    private $os;
    private $user;

    /**
     * Session constructor.
     * @param $id
     * @param $entree
     * @param $sortie
     * @param $navigateur
     * @param $os
     * @param $user
     */
    public function __construct($id, $entree, $sortie, $navigateur, $os, $user)
    {
        $this->id = $id;
        $this->entree = $entree;
        $this->sortie = $sortie;
        $this->navigateur = $navigateur;
        $this->os = $os;
        $this->user = $user;
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
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * @param mixed $entree
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;
    }

    /**
     * @return mixed
     */
    public function getSortie()
    {
        return $this->sortie;
    }

    /**
     * @param mixed $sortie
     */
    public function setSortie($sortie)
    {
        $this->sortie = $sortie;
    }

    /**
     * @return mixed
     */
    public function getNavigateur()
    {
        return $this->navigateur;
    }

    /**
     * @param mixed $navigateur
     */
    public function setNavigateur($navigateur)
    {
        $this->navigateur = $navigateur;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}