document.getElementById('registrationform').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents the default form submission

    // Get form data
    const formData = new FormData(this);

    // Send data to the server
    fetch('http://localhost/E_commerce/backend/insert.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Handle response here
    })
    .then(error => console.error('Error:', error));
});
