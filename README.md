# firebase-notification-php
Example to send push notification via Firebase using PHP

To use the FirebaseNotification class, you would first need to create an instance of the class by calling the __construct method and passing in your Firebase project's server key and the token of the device you want to send the notification to as arguments.

Once you have an instance of the class, you can send a notification by calling the send method and passing in the title and body of the notification as arguments.

The send method will return a response from the Firebase Cloud Messaging (FCM) service indicating whether or not the notification was successfully sent. You can then handle this response as needed in your code.
