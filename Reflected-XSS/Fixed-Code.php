<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sanitized Code For Reflected XSS</title>
</head>
<body>
    <?php

        if(isset($_GET['search'])){
            echo filter_var($_GET['search'], FILTER_SANITIZE_STRING);
        }

    ?>
</body>
</html>