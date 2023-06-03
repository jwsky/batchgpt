<?php
// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

// Get API key from headers
$apiKey = $_SERVER['HTTP_AUTHORIZATION'];
$apiKey = str_replace('Bearer ', '', $apiKey);
// Prepare data for OpenAI API
$data = array(
    "model" => $input["model"],
    "messages" => $input["messages"],
);

// Convert data to JSON format
$data_string = json_encode($data);

// OpenAI API endpoint
$api_endpoint = "https://api.openai.com/v1/chat/completions";

// Prepare cURL command
$ch = curl_init($api_endpoint);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization:Bearer ' . $apiKey,
        'Content-Length: ' . strlen($data_string))
);

// Execute cURL command and get response
$result = curl_exec($ch);

// Close cURL
curl_close($ch);

// Send response
header('Content-Type: application/json');
echo $result;
?>
