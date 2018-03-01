<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

include __DIR__ . '/array.php';

?>

<div class="container">
    <div class="row">
        <?php foreach ($images as $key => $image) { ?>
            <a href="image.php?id=<?php echo $key; ?>">
                <img src="images/<?php echo $image; ?>" alt="">
            </a>
        <?php } ?>
    </div>
</div>
</body>
</html>