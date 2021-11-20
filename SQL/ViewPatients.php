<html>
    <head>
        <title>TEMP</title>
    </head>

    <body>

    </body>
</html>

<?php
    $command = 'python3 view_patients.py';

    $escaped_command = escapeshellcmd($command);
    system($escaped_command);
?>