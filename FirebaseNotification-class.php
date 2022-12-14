<?php

class FirebaseNotification {
  // Replace with your Firebase project's server key
  private $serverKey;

  // Replace with the token of the device you want to send the notification to
  private $deviceToken;

  public function __construct($serverKey, $deviceToken) {
    $this->serverKey = $serverKey;
    $this->deviceToken = $deviceToken;
  }

  public function send($title, $body) {
    // Create the message payload
    $data = [
      "notification" => [
        "title" => $title,
        "body" => $body
      ],
      "to" => $this->deviceToken
    ];

    // Encode the payload as JSON
    $jsonData = json_encode($data);

    // Create a new cURL request
    $ch = curl_init("https://fcm.googleapis.com/fcm/send");

    // Set the request headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      "Content-Type: application/json",
      "Authorization: key={$this->serverKey}"
    ]);

    // Set the request body
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    // Set the cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request and get the response
    $response = curl_exec($ch);

    // Close the cURL request
    curl_close($ch);

    return $response;
  }
}
?>
