<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>

<style>
    .container {
        margin-top: 5rem;
    }

    .justify-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<?php

$first = $_GET['first'] ?? null;
$second = $_GET['second'] ?? null;
$operation = $_GET['operation'] ?? null;

if ($operation == 'plus') {
    $result = $first + $second;
} elseif ($operation == 'minus') {
    $result = $first - $second;
} elseif ($operation == 'devide') {
    $result = $first / $second;
} elseif ($operation == 'multiply') {
    $result = $first * $second;
}

?>

<div class="container">
    <div class="row">
        <form action="" method="get" class="col s6 offset-s3">
            <div class="input-field col s12">
                <input type="text" name="first" value="<?php echo $first; ?>">
                <label for="first">Введите первое число:</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="second" value="<?php echo $second; ?>">
                <label for="second">Введите второе число:</label>
            </div>
            <div class="input-field col s12">
                <select name="operation" id="operation">
                    <option value="" disabled selected>Выберите действие</option>
                    <option value="plus">Сложить</option>
                    <option value="minus">Отнять</option>
                    <option value="devide">Разделить</option>
                    <option value="multiply">Умножить</option>
                </select>
                <label>Выберите действие</label>
            </div>
            <div class="col s12 justify-content">
                <p>Результат: <b><?php echo $result ?? 'null'; ?></b></p>
                <button class="waves-effect waves-light btn" type="submit">Равно</button>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
</body>
</html>