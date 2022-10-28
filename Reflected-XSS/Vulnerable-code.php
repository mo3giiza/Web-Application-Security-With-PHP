<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vlunerable Code To Reflected XSS</title>
</head>
<body>
    <?php

        if(isset($_GET['search'])){
            echo $_GET['search'];
        }

    ?>
</body>
</html>