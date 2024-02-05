<?php
    $paragrafo = $_POST['paragrafo'];
    $badword = $_POST['badword'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <div>
        <p>
            <?php
                 echo "Paragrafo: " . $paragrafo;
                 echo "<br>";
                 echo "Badword: " . str_replace($badword, '***', $badword)
            ?>
            <a href="./index.php">
                Cambia pagina
            </a>
        </p>
    </div>
</body>
</html>