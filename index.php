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
        $error = '';
        if (isset($_POST["year"])) {
            $year = $_POST["year"];
            if ($year < 1900 || $year > date("Y") + 1) {
                $error = "Error: Year must be between 1900 and " . (date("Y") + 1) . ".";
            } else {
                $remainder = $year % 12;
                $animal = $zodiac[$remainder];
                echo "<h1>Result</h1>";
                echo "<p>You were born under the sign of the $animal.</p>";
                echo "<img src='images/$animal.png' alt='$animal'>";
            }
        }
    ?>
    <form action="index.php" method="post">
        <label for="year">Enter your birth year:</label>
        <input type="number" name="year" id="year">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
    <?php
        if($error != ''){
            echo "<p style='color:red;'>$error</p>";
        }
    ?>
</body>
</html>