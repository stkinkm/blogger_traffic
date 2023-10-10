<?php
// Create a new cURL resource
$ch = curl_init();

// Set the URL and options for the request
curl_setopt($ch, CURLOPT_URL, "https://cuan-terviral.blogspot.com/2023/10/berita-crypto-terbaru-mengenal-etherium.html");
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
