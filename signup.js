document.getElementById('signupForm').addEventListener('submit', function (event) {
    event.preventDefault();
  
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    // Here, you can add your own signup code to create a new user in your database
    // If the user is created successfully, redirect to the order form page
    // Otherwise,
  