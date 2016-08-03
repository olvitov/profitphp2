
<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, user-scalable=, initial-scale=, maximum-scale=, minimum-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title><?php echo $this->title?></title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php foreach ($errors as $error): ?>
    <div class="alert alert-danger"></div>
    <?php echo $error->getMessage() ?>

<?php endforeach; ?>

<h3>Шаблон News</h3>
<table border="1" align="center" cellpadding="3" width="200">
    <tr>
        <th>ID Новости</th>
        <th>Заголовок</th>
        <th>Текст новости</th>
        <th> Автор новости</th>
        <?php foreach ($news as $article): ?>
    <tr>
        <td><a href="<?php echo 'http://profitphp2/index.php/?action=one&id=' . $article->id?>">Подробнее</a></td>
        <td><?php echo $article->title; ?></td>
        <td><?php echo $article->text; ?></td>
        <?php if (!empty($article->author)) :?>
            <td> Автор: <?php echo $article->author->name; ?></td>

        <?php endif ?>
        <?php if (empty($article->author)) :?>
            <td> Автор: <?php echo 'Нет Автора'; ?></td>

        <?php endif ?>
    </tr>




    <?php endforeach; ?>

    </tr>
</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>


