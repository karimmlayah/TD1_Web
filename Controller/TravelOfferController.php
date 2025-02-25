<?php
// Controller/TravelOfferController.php

class TravelOfferController {
    public function showTravelOffer($offer) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Titre</th><th>Destination</th><th>Prix</th><th>Date de Départ</th><th>Date de Retour</th></tr>";
        echo "<tr>";
        echo "<td>" . $offer->getId() . "</td>";
        echo "<td>" . $offer->getTitre() . "</td>"; // Afficher le titre
        echo "<td>" . $offer->getDestination() . "</td>";
        echo "<td>" . $offer->getPrix() . "</td>";
        echo "<td>" . $offer->getDateDepart() . "</td>";
        echo "<td>" . $offer->getDateRetour() . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}
?>