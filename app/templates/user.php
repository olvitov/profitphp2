<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, user-scalable=, initial-scale=, maximum-scale=, minimum-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title>Новости</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Заголовок</th>
        <th> Новость</th>
        <?php foreach ($users as $item): ?>
    <tr>
        <td><?php echo $item['nic']; ?></td>
        <td><?php echo $item['user']; ?></td>
    </tr>


    <?php endforeach; ?>

    </tr>
</table>


</body>
</html>
