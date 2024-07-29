<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1" placeholder="Tulis angka pertama" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="number" name="num2" placeholder="Tulis angka kedua">
        <button type="submit">Hitung</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST") {

            //cara cek jalan atau tidak -> echo "OKE";
            $num1 = $_POST['num1'];
            $operator = $_POST['operator'];
            $num2 = $_POST['num2'];

            switch($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if($num2 == 0) {
                        $result = "Tidak bisa dibagi dengan 0";
                    } else {
                        $result = $num1/$num2;
                    }
                    break;
                default:
                    $result = "Operator tidak valid";
            }
            echo "</br><b>Hasil hitung </b>".$result;
        }
    ?>
</body>
</html>