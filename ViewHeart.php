<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--CSS Styles -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>TEMP</title>
  </head>

    <body>

    </body>
</html>

<?php
    $command = 'python3 view_heart.py';

    $escaped_command = escapeshellcmd($command);
    system($escaped_command);
?>