// Login functionality
document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Get user input
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    // Simulate login validation (replace with actual backend validation)
    if (username && password && role) {
        // Redirect to the appropriate dashboard based on role
        switch (role) {
            case 'nurse':
                window.location.href = 'nurse_dashboard.html';
                break;
            case 'admin':
                window.location.href = 'admin_dashboard.html';
                break;
            case 'pharmacist':
                window.location.href = 'pharmacist_dashboard.html';
                break;
            default:
                alert('Invalid role selected');
        }
    } else {
        alert('Please fill in all fields');
    }
});