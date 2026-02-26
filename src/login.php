<?php



function login($username, $password) {
    // Simulate a login process
    if ($username === 'admin' && $password === 'password') {
        return true; // Login successful
    } else {
        return false; // Login failed
    }
}

// Example usage
$username = 'admin';    
$password = 'password';

if (login($username, $password)) {
    echo "Login successful!";
} else {
    echo "Login failed!";
}   

