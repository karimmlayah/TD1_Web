<?php

class TravelOffer {

    //---------qt1
    /*public int $id;
    public string $titre;
    public string $destination;
    public DateTime $date_depart;
    public DateTime $date_retour;
    public float $prix;
    public bool $disponible;
    public string $categorie;*/

    //---------qt3

    private int $id;
    private string $titre;
    private string $destination;
    private DateTime $date_depart;
    private DateTime $date_retour;
    private float $prix;
    private bool $disponible;
    private string $categorie;

    public function getId() { return $this->id; } 
    public function getTitre() { return $this->titre; }
    public function getDestination() { return $this->destination; }
    public function getDateDepart() { return $this->date_depart->format('Y-m-d'); } // Format DateTime
    public function getDateRetour() { return $this->date_retour->format('Y-m-d'); } // Format DateTime
    public function getPrix() { return $this->prix; }
    public function getDisponibilite() { return $this->disponible ? 1 : 0; }
    public function getCategorie() { return $this->categorie; }    


    public function __construct($id, $titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->destination=$destination;
        $this->date_depart=new DateTime($date_depart);
        $this->date_retour=new DateTime($date_retour);
        $this->prix=$prix;
        $this->disponible=$disponible;
        $this->categorie=$categorie;
    }



    public function show()
    {
        echo "<h2>Détails de l'Offre de Voyage</h2>";
        echo "<table border='1'>
            <tr>
                <th>Title</th> 
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Return Date</th>  
                <th>Price</th>
                <th>Disponibility</th>
                <th>Category</th>
            </tr>  
            <tr>                
                <td>{$this->getTitre()}</td>
                <td>{$this->getDestination()}</td>
                <td>{$this->getDateDepart()}</td>
                <td>{$this->getDateRetour()}</td>
                <td>{$this->getPrix()}</td>
                <td>{$this->getDisponibilite()}</td>
                <td>{$this->getCategorie()}</td>
            </tr>
        </table>";
        
    }  
    /*public function show() {
        echo "<table border='1'>
                <tr>
                    <th>Title</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Price</th>
                    <th>Disponibility</th>
                    <th>Category</th>
                </tr>
                <tr>
                    <td>{$this->titre}</td>
                    <td>{$this->destination}</td>
                    <td>{$this->date_depart}</td>
                    <td>{$this->date_retour}</td>
                    <td>{$this->prix}</td>
                    <td>{$this->disponible}</td>
                    <td>{$this->categorie}</td>
                </tr>
              </table>";
    }*/

    /**
     * Get the value of titre
     */
}

?>