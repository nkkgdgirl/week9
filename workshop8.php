<?php
    $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>

<head><meta charset="UTF-8"></head>

<body>
<form action="insert2.php" method="post">
    <p> username: <input type="text" name="username"> </p>
    <p> password: <input type="password" name="password"> </p>
    <p> name: <input type="text" name="name"> </p>
    <p> address: <input type="text" name="address">  </p>
    <p> mobile: <input type="text" name="mobile" > </p>
    <p> email: <input type="email" name="email"> </p>
    <br>
    <input type="submit" value="เพิ่มuser ">
</form>
</body>
</html>