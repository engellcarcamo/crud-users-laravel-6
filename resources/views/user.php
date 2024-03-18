<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Engels Càrcamo">
    <meta name="description" content="Crud User Module with Laravel version 6.20.44">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List - Laravel Framework 6.20.44</title>
</head>

<body>
    <h1><?= e($title); ?></h1>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li> <?php echo e($user) ?> </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>