// Fonction pour valider le champ Title
function validateTitle() {
    const title = document.getElementById('title');
    const titleError = document.getElementById('titleError');
    const titleCorrect = document.getElementById('titleCorrect');

    if (title.value.length < 3) {
        titleError.style.display = 'block';
        titleCorrect.style.display = 'none';
    } else {
        titleError.style.display = 'none';
        titleCorrect.style.display = 'block';
    }
}

// Fonction pour valider le champ Destination
function validateDestination() {
    const destination = document.getElementById('destination');
    const destinationError = document.getElementById('destinationError');
    const destinationCorrect = document.getElementById('destinationCorrect');
    const destinationRegex = /^[A-Za-z\s]+$/;

    if (destination.value.length < 3 || !destinationRegex.test(destination.value)) {
        destinationError.style.display = 'block';
        destinationCorrect.style.display = 'none';
    } else {
        destinationError.style.display = 'none';
        destinationCorrect.style.display = 'block';
    }
}

// Fonction pour valider la Date de départ
function validateDepartureDate() {
    const departureDate = document.getElementById('departure_date');
    const departureDateError = document.getElementById('departureDateError');
    const departureDateCorrect = document.getElementById('departureDateCorrect');

    if (!departureDate.value) {
        departureDateError.style.display = 'block';
        departureDateCorrect.style.display = 'none';
    } else {
        departureDateError.style.display = 'none';
        departureDateCorrect.style.display = 'block';
    }
}

// Fonction pour valider la Date de retour
function validateReturnDate() {
    const returnDate = document.getElementById('return_date');
    const departureDate = document.getElementById('departure_date');
    const returnDateError = document.getElementById('returnDateError');
    const returnDateCorrect = document.getElementById('returnDateCorrect');

    if (returnDate.value && new Date(returnDate.value) <= new Date(departureDate.value)) {
        returnDateError.style.display = 'block';
        returnDateCorrect.style.display = 'none';
    } else {
        returnDateError.style.display = 'none';
        returnDateCorrect.style.display = 'block';
    }
}

// Fonction pour valider le champ Prix
function validatePrice() {
    const price = document.getElementById('price');
    const priceError = document.getElementById('priceError');
    const priceCorrect = document.getElementById('priceCorrect');

    if (price.value <= 0 || isNaN(price.value)) {
        priceError.style.display = 'block';
        priceCorrect.style.display = 'none';
    } else {
        priceError.style.display = 'none';
        priceCorrect.style.display = 'block';
    }
}

// Ajouter les événements 'keyup' pour vérifier les champs en temps réel
document.getElementById('title').addEventListener('keyup', validateTitle);
document.getElementById('destination').addEventListener('keyup', validateDestination);
document.getElementById('departure_date').addEventListener('change', validateDepartureDate);
document.getElementById('return_date').addEventListener('change', validateReturnDate);
document.getElementById('price').addEventListener('keyup', validatePrice);
