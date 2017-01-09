<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
</head>
<body>
<p>
    歡迎您： <?php echo $_POST["username"]?>
</p>
<p>
    您的郵箱是： <?php echo isset($_POST["email"]) ? $_POST["email"] : "未設置"?>
</p>
</body>
</html>