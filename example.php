<?php
include('FirebaseNotification-class.php');

$notification = new FirebaseNotification('your-server-key', 'device-token');

$response = $notification->send('Notification Title', 'Notification Body');

?>
