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
    <h1>Sistemdeki Kullanıcılar</h1>
    <?php foreach ($users as $user) : ?>
        <ul>
            <li><?= $user->name; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>