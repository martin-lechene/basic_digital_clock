<?php
// Script Name: DigitalClock.php
// Description: Description du script.
//
// Created by: Martin Lechêne
// Date: 19/07/2023
// Version: 1.0
//

// Note: Le script ci-dessous est une approche purement PHP pour afficher une horloge numérique
// dans un navigateur Web en utilisant JavaScript et HTML en tant que backend.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }

        #clock {
            font-family: 'ds-digital', sans-serif;
            font-size: 80px;
            color: cyan;
        }
    </style>
</head>
<body>
    <div id="clock"></div>

    <script>
        function updateTime() {
            var now = new Date();
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var seconds = now.getSeconds().toString().padStart(2, '0');
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12 || 12;

            var timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            document.getElementById('clock').textContent = timeString;
        }

        updateTime();
        setInterval(updateTime, 1000);
    </script>
</body>
</html>
