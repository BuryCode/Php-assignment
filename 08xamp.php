<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number</title>
</head>
<body>
    <h1>Enter a Number to Reverse:</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="number">
        <input type="submit" value="Reverse">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        function reverseNumber($number) {
            $reversedNumber = 0;
            while ($number != 0) {
                $digit = $number % 10;
                $reversedNumber = $reversedNumber * 10 + $digit;
                $number = (int)($number / 10);
            }
            return $reversedNumber;
        }
        $reversed = reverseNumber($number);
        echo "<h2>Reversed Number:</h2>";
        echo "<p>$reversed</p>";
    }
    ?>
</body>
</html>
