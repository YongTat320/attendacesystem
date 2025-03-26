<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJAM-KSB Scavenger Hunt 2025</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>SIGN IN FORM</h1>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="name">NAME: </label>
                <input type="text" id="name" name="name" required autofocus>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>