<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php route('/post') ?>" method="POST">
        <input type="text" name="input[first_name]" placeholder="First Name">
        <input type="text" name="input[last_name]" placeholder="Last Name">
        <button type="submit">Confirmar!</button>
    </form>
</body>

</html>