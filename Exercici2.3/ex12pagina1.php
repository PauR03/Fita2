<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <select name="colors">
            <option>Foc</opcion>
            <option>Aigua</opcion>
            <option>Terra</opcion>
        </select>
        <input type="submit">
    </form>

    <?php
        if($_GET['colors'] == "Foc"){
            echo "<style>body{background-color: red;}</style>";
        }
        else if($_GET['colors'] == "Aigua"){
            echo "<style>body{background-color: Blue;}</style>";
        }
        else if($_GET['colors'] == "Terra"){
            echo "<style>body{background-color: brown;}</style>";
        }
    ?>
</body>
</html>