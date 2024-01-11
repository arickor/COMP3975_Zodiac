<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aric Or</title>
</head>
<body>
    <?php
        $zodiac = array("monkey", "rooster", "dog", "pig", "rat", "ox", "tiger", "rabbit", "dragon", 
        "snake", "horse", "goat");
    ?>
    <?php
        if (isset($_POST["year"]) && $_POST["year"] != '') {
            $year = $_POST["year"];
            $remainder = $year % 12;
            $animal = $zodiac[$remainder];
            echo "<h1>Result</h1>";
            echo "<p>You were born in the year of the $animal.</p>";
            echo "<img src='images/$animal.png' alt='$animal'>";
        }
    ?>
</body>
</html>