// Logout functionality
document.getElementById('logout').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default link behavior
    alert('You have been logged out.');
    window.location.href = 'index.html'; // Redirect to login page
});

// Medication Request Form Submission
if (document.getElementById('medication-request-form')) {
    document.getElementById('medication-request-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission

        // Get form data
        const patientId = document.getElementById('patient-id').value;
        const medicationName = document.getElementById('medication-name').value;
        const quantity = document.getElementById('quantity').value;
        const urgency = document.getElementById('urgency').value;

        // Simulate form submission (replace with actual backend submission)
        alert(`Medication Request Submitted:\nPatient ID: ${patientId}\nMedication: ${medicationName}\nQuantity: ${quantity}\nUrgency: ${urgency}`);

        // Clear the form
        document.getElementById('medication-request-form').reset();
    });
}