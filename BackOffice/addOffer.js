function validerFormulaire() {
    // Récupération des valeurs des champs
    let title = document.getElementById("title").value.trim();
    let destination = document.getElementById("destination").value.trim();
    let departureDate = document.getElementById("departure_date").value;
    let returnDate = document.getElementById("return_date").value;
    let price = document.getElementById("price").value;

    // Expression régulière pour la destination (uniquement lettres et espaces)
    let destinationRegex = /^[A-Za-z ]+$/;

    // Vérification des champs
    if (title.length < 3) {
        alert("Le titre doit contenir au moins 3 caractères.");
        return false;
    }
 //--------------------------
    if (!destinationRegex.test(destination) || destination.length < 3) {
        alert("La destination doit contenir uniquement des lettres et des espaces et avoir au moins 3 caractères.");
        return false;
    }

    if (departureDate === "") {
        alert("Veuillez sélectionner une date de départ.");
        return false;
    }

    if (returnDate === "") {
        alert("Veuillez sélectionner une date de retour.");
        return false;
    }

    if (new Date(returnDate) <= new Date(departureDate)) {
        alert("La date de retour doit être ultérieure à la date de départ.");
        return false;
    }

    
    if (price === "" || parseFloat(price) < 0) {
        alert("Le prix doit être un nombre positif.");
        return false;
    }

    // Si tout est valide
    alert("Offre ajoutée avec succès !");
    return true;
}
