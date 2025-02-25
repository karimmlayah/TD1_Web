document.getElementById('travelForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous errors
    const errorMessages = document.querySelectorAll('[id$="Error"]');
    errorMessages.forEach(error => error.style.display = 'none');

    let isValid = true;

    // Validate Title
    const title = document.getElementById('title');
    if (title.value.length < 3) {
        document.getElementById('titleError').style.display = 'block';
        isValid = false;
    }

    // Validate Destination
    const destination = document.getElementById('destination');
    const destinationRegex = /^[A-Za-z\s]+$/;
    if (destination.value.length < 3 || !destinationRegex.test(destination.value)) {
        document.getElementById('destinationError').style.display = 'block';
        isValid = false;
    }

    // Validate Departure Date
    const departureDate = document.getElementById('departure_date');
    if (!departureDate.value) {
        document.getElementById('departureDateError').style.display = 'block';
        isValid = false;
    }

    // Validate Return Date
    const returnDate = document.getElementById('return_date');
    if (returnDate.value && new Date(returnDate.value) <= new Date(departureDate.value)) {
        document.getElementById('returnDateError').style.display = 'block';
        isValid = false;
    }

    // Validate Price
    const price = document.getElementById('price');
    if (price.value <= 0 || isNaN(price.value)) {
        document.getElementById('priceError').style.display = 'block';
        isValid = false;
    }

    // If the form is valid, submit it (you can call your submit logic here)
    if (isValid) {
        // Form submission logic, e.g., send data to the server
        alert("Form submitted successfully!");
        // You can use: event.target.submit(); if submitting to a server
    }
});
