<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html >
<head>

</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");

        if(!empty($_GET['username'])){
            $value = '%'.$_GET['username'].'%';
            $stmt->bindParam(1,$value);
            $stmt->execute();
            $row = $stmt->fetch();?>
            ชื่อผู้ใช้งาน: <?=$row['username']?><br>
            ชื่อสมาชิก: <?=$row['name']?><br>
            ที่อยู่: <?=$row['address']?><br>
            เบอร์ติดต่อ: <?=$row['mobile']?><br>
            อีเมล์: <?=$row['email']?>
        <?php } ?>
</body>
</html>