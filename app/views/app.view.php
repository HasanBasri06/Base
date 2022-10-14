<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <?php App\Kernel::integrated(); ?>

</head>
<body>
    <div class="container" ng-app>
        <div>
            <h1 class="title">Welcome To Base Freamwork</h1>
            <br>
            <h3>Controller : <?= $classes; ?></h3>
            <br>
            <h1>&#127819;</h1>
        </div>
    </div>
</body>
</html>