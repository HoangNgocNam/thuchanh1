<?php
include "data.php";
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
<!--    <table class="table table-striped table table-hover">-->
<!--        <tr>-->
<!--            <td>Name:<input type="text" name="name" placeholder="name"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Age":<input type="text" name="name" placeholder="name"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Address:<input type="text" name="name" placeholder="name"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Department:<input type="text" name="name" placeholder="name"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Phone:<input type="text" name="name" placeholder="name"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><button type="submit">Add</button></td>-->
<!--        </tr>-->
<!--z    </table>-->
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <input type="text" name="department" placeholder="department">
    <input type="text" name="phone" placeholder="phone">
    <button type="submit">Add</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    addNewLists($_POST);
    header("location:index.php");
}