<?php

class Connection {

    // Credentials
    private $servernaam = "mysql:host=localhost;dbname=rekenmaatje";
    private $gebruiker = "root";
    private $wachtwoord = "";

    // Opties
    public $opties  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    // Connectie variabel
    protected $verbinding;

    public function OpenVerbinding() {
        // Probeer verbinding te maken
        try     {
            $this->verbinding = new PDO($this->servernaam, $this->gebruiker,$this->wachtwoord,$this->opties);
            return $this->verbinding;
        }       catch (PDOException $e) {
            echo "Er is een probleem met de mysql verbinding: " . $e->getMessage();
        }
    }

    public function sluitVerbinding() {
        $this->verbinding = null;
    }

}
?>