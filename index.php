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
    <form action="form_submit.php" method="post">
        <label for="year">Enter your birth year:</label>
        <input type="number" name="year" id="year" min="1900" max="<?php echo date("Y") + 1; ?>">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
    <?php
                if ($year < 1900 || $year > date("Y") + 1) {
                    echo "<p>Error: Year must be between 1900 and " . (date("Y") + 1) . ".</p>";
                }
    ?>
</body>
</html>