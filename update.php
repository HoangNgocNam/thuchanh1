<?php
    include "data.php";
    $id = $_REQUEST["id"];
    $person = getById($id);
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
<form action="" method="post">
    <input type="text" name="name" placeholder="name" value="<?php echo $person->name?>">
    <input type="text" name="age" placeholder="age"  value="<?php echo $person->age?>">
    <input type="text" name="address" placeholder="address"  value="<?php echo $person->address?>">
    <input type="text" name="department" placeholder="department" value="<?php echo $person->department?>">
    <input type="text" name="phone" placeholder="phone" value="<?php echo $person->phone?>">
    <button type="submit">Add</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    editLists($_REQUEST);
    header("location:index.php");
}