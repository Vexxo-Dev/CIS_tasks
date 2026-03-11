<head>
    <title>Triangle Type & Digit Counter</title>
</head>
<body>
<div>
    <!--- Task 1: Take the sides of a triangle as user inputs and find if the triangle is equilateral, isosceles, or scalene --->
    <h2>Triangle Type Checker</h2>
    <form method="post" style="display: flex; flex-direction: column;">
        <label>Side 1: <input type="number" name="side1" required></label>
        <label>Side 2: <input type="number" name="side2" required></label>
        <label>Side 3: <input type="number" name="side3" required></label>
        <button type="submit" name="triangle" style="margin-top: 15px; padding: 8px 16px; width: 20%;">Check Triangle Type</button>
    </form>
    <?php
    if (isset($_POST['triangle'])) {
        $a = (int)$_POST['side1'];
        $b = (int)$_POST['side2'];
        $c = (int)$_POST['side3'];
        if ($a == $b && $b == $c) {
            $type = "Equilateral";
        } elseif ($a == $b || $b == $c || $a == $c) {
            $type = "Isosceles";
        } else {
            $type = "Scalene";
        }
        echo "<div class='result'>Triangle Type: $type</div>";
    }
    ?>
    <!--- Task 2: Given an integer N, calculate and print the number of digits present in N --->
    <h2>Digit Counter</h2>
    <form method="post">
        <label>Enter an integer: <input type="number" name="number" required></label>
        <button type="submit" name="digits">Count Digits</button>
    </form>
    <?php
    if (isset($_POST['digits'])) {
        $n = (int)$_POST['number'];
        $digits = strlen((string)abs($n));
        echo "<div class='result'>Number of digits: $digits</div>";
    }
    ?>
</div>
</body>
</html>
