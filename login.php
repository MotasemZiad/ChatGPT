<?php

// Use CURL to handle the login request
$ch = curl_init();

// Set the login URL
$loginUrl = 'https://example.com/login';

// Set the username and password
$username = 'username';
$password = 'password';

// Set the post fields
$postFields = array(
    'username' => $username,
    'password' => $password,
);

// Set the options for the CURL request
curl_setopt($ch, CURLOPT_URL, $loginUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
curl_setopt($ch, CURLOPT_COOKIESESSION, true);

// Execute the CURL request
$result = curl_exec($ch);

// Close the CURL session
curl_close($ch);

// Use CURL to handle the access request
$ch = curl_init();

// Set the URL to access
$accessUrl = 'https://example.com/access';

// Set the options for the CURL request
curl_setopt($ch, CURLOPT_URL, $accessUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');

// Execute the CURL request
$result = curl_exec($ch);

// Get the redirected URL
$redirectedUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

// Close the CURL session
curl_close($ch);

// Echo the redirected URL
echo $redirectedUrl;
