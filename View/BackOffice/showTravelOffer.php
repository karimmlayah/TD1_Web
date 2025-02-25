<?php
// Ensure the path to the TravelOffer class is correct
require_once '../../Model/TravelOffer.php';

// Create an instance of TravelOffer
$offre1 = new TravelOffer(
    1,                      // ID
    "Discover Paris",       // Title
    "Paris, France",        // Destination
    "2024-10-15",           // Departure Date
    "2024-10-22",           // Return Date
    1200,                   // Price
    1,                      // Availability (1 for available)
    "Cultural"              // Category
);

// Display the raw object structure
echo "<h3>Object Dump:</h3>";
var_dump($offre1);
echo "<br><br>";

// Display the travel offer details in a formatted HTML table
echo "<h3>Travel Offer Details:</h3>";
$offre1->show();
?>