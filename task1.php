<?php
$result = "";

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if ($operation == "+") {
        $result = $num1 + $num2;
    } elseif ($operation == "-") {
        $result = $num1 - $num2;
    } elseif ($operation == "*") {
        $result = $num1 * $num2;
    } elseif ($operation == "/") {
        if ($num2 == 0) {
            $result = "Cannot divide by zero";
        } else {
            $result = $num1 / $num2;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; display: flex; justify-content: center; padding-top: 50px; }
        .box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input, select { padding: 8px; width: 100%; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; }
        input[type="submit"] { background: #4a90d9; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background: #357ab8; }
        h3 { color: green; margin-top: 15px; }
    </style>
</head>
<body>
<div class="box">

    <h2>Simple Calculator</h2>

    <form method="POST">
        <label>First Number:</label><br>
        <input type="number" name="num1" required><br><br>

        <label>Operation:</label><br>
        <select name="operation">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select><br><br>

        <label>Second Number:</label><br>
        <input type="number" name="num2" required><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php if ($result !== ""): ?>
        <h3>Result: <?php echo $result; ?></h3>
    <?php endif; ?>
</div>
</body>
</html>
