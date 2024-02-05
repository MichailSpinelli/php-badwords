<?php
    $paragrafo = $_POST['paragraph'];
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
                echo $paragrafo;
                echo $strlen($paragrafo);
                echo str_replace($badword, '***', $paragrafo);
                echo strlen(str_replace($badword, '***', $paragrafo));
            ?>
            <a href="./index.php">
                Cambia pagina
            </a>
        </p>
    </div>
</body>
</html>