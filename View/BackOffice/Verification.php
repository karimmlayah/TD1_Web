<?php
// Inclure la classe TravelOffer
require_once '../../Model/TravelOffer.php'; // Remonte de deux niveaux pour accéder à Model/
require_once '../../Controller/TravelOfferController.php'; // Remonte de deux niveaux pour accéder à Controller/

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $title = $_POST['title'];
    $destination = $_POST['destination'];
    $departureDate = $_POST['departure_date'];
    $returnDate = $_POST['return_date'];
    $price = (float)$_POST['price']; // Convertir en float
    $availability = isset($_POST['availability']) ? 1 : 0; // Checkbox : 1 si coché, 0 sinon
    $category = $_POST['category'];

    // Créer un objet TravelOffer
    $offre1 = new TravelOffer(
        1, // ID (vous pouvez générer un ID unique ici)
        $title,
        $destination,
        $departureDate,
        $returnDate,
        $price,
        $availability,
        $category
    );

    // Afficher les informations avec var_dump()
    echo "<h3>Détails de l'objet offre1 (var_dump) :</h3>";
    var_dump($offre1);
    echo "<br><br>";

    // Afficher les informations avec la méthode showTravelOffer($offer)
    echo "<h3>Détails de l'objet offre1 (showTravelOffer) :</h3>";
    $controller = new TravelOfferController();
    $controller->showTravelOffer($offre1);
} else {
    echo "<p>Le formulaire n'a pas été soumis.</p>";
}
?>