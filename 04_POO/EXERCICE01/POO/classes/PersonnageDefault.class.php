<?php

class PersonnageDefault {
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    public function __construct() {
        $this->_nom = 'Loper';
        $this->_prenom = 'Dave';
        $this->_age = '18';
        $this->_sexe= 'Masculin';
    }

    public function getNom() {
        return $this->_nom;
    }
    public function setNom($nom) {
        return $this->_nom = $nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }
    public function setPrenom($prenom) {
        return $this->_prenom = $prenom;
    }

    public function getAge() {
        return $this->_age;
    }
    public function setAge($age) {
        return $this->_age = $age;
    }

    public function getSexe() {
        return $this->_sexe;
    }
    public function setSexe($sexe) {
        return $this->_sexe = $sexe;
    }

}




