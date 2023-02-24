<?php
// Create a new cURL resource
$ch = curl_init();

// Set the URL and options for the request
curl_setopt($ch, CURLOPT_URL, "https://covratizen.blogspot.com/2020/09/python-language-automation.html");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

// Execute the request and store the response
$response = curl_exec($ch);

// Check for errors
if(curl_error($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Close the cURL resource
curl_close($ch);

// Output the response
echo $response;

?>
