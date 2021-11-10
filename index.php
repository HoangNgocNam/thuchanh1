<?php
include "data.php";
$lists = loadData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<a href="create.php">create</a>
<table class="table table-striped table table-hover">
    <tr>
        <th>name</th>
        <th>age</th>
        <th>address</th>
        <th>department</th>
        <th>phone</th>
        <th>action</th>
    </tr>

    <?php if (isset($lists)) {
        foreach ($lists as $key => $list):?>

        <tr>
            <td><?php echo $list->name?></td>
            <td><?php echo $list->age?></td>
            <td><?php echo $list->address?></td>
            <td><?php echo $list->department?></td>
            <td><?php echo $list->phone?></td>
            <td class="btn btn-success"><a href="delete.php?id=<?php echo $key?>">delete</a></td>
            <td class="btn btn-warning"><a href="update.php?id=<?php echo $key?>">update</a></td>
        </tr>
        <?php endforeach;
    } ?>
</table>
</body>
</html>
