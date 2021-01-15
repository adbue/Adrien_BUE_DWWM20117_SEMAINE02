<?php

class Employe extends Agence
{
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private $_agence;
    private $_chequeVacance;

    public static $nbrEmploye;

    // Nom :

    public function getNom() {
        return $this->_nom;
    }
    public function setNom($nom) {
        return $this->_nom = $nom;
    }

    // Prénom :

    public function getPrenom() {
        return $this->_prenom;
    }
    public function setPrenom($prenom) {
        return $this->_prenom = $prenom;
    }

        // Date d'embauche :

    public function getDateEmbauche() {
        return $this->_dateEmbauche;
    }
    public function setDateEmbauche($dateEmbauche) {
        return $this->_dateEmbauche = DateTime::createFromFormat('d/m/Y', $dateEmbauche);
    }

    // Fonction au sein de l'entreprise :

    public function getFonction() {
        return $this->_fonction;
    }
    public function setFonction($fonction) {
        return $this->_fonction = $fonction;
    }

    // Salaire annuel brut :

    public function getSalaire() {
        return $this->_salaire;
    }
    public function setSalaire($salaire) {
        return $this->_salaire = $salaire;
    }

    // Service dans lequel se situe l'employé:

    public function getService() {
        return $this->_service;
    }
    public function setService($service) {
        return $this->_service = $service;
    }

    // Agence où travaille l'employé :

    public function getAgence() {
        return $this->_agence;
    }
    public function setAgence($agence) {
        return $this->_agence = $agence;
    }

    // Agence où travaille l'employé :

    public function getChequeVacance() {
        return $this->_chequeVacance;
    }

    

    // Fonction pour connaître l'ancienneté d'un employé(e) au sein de l'entreprise :

    public function getAnciennete() {
        $today = new DateTime();
        $dateEmploye = $this->getDateEmbauche();
        $result = $dateEmploye->diff($today);
        return $result->format('%y');
    }

    // Fonction pour connaître le montant des deux primes:
        # Le montant de la prime annuelle est de 5% du salaire annuel brut
        # Le montant de la  prime d'ancienneté est de 2% du salaire annuel brut par année d'ancienneté

    public function calculerPrime() {
        $annualBonus = $this->getSalaire() * (5/100);
        $seniorityBonus = $this->getSalaire() * (2/100) * $this->getAnciennete();
        $bonusTotal = $annualBonus + $seniorityBonus;
        return $bonusTotal;
    }

    // Fonction pour savoir si un employé peut bénéficier de chèques vacances ou non :

    public function isChequeVacance() {

        if ($this->getAnciennete() >= 1) {
            $_chequeVacance = "Oui";
        } else {
            $_chequeVacance = "Non";
        }
    }
}

?>

