<?php 
include 'db_connect.php';

// 检查是否有传递结果数据
if(!isset($_GET['result'])) {
    header("Location: index.php");
    exit();
}

$result = json_decode(urldecode($_GET['result']), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJAM-KSB Scavenger Hunt 2025</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <h1>SUCCESSFULLY SIGNED IN!</h1>
        <div class="result">
            <?php if($result['status'] == 'success'): ?>
                <div class="result-item">
                    <span class="label">NAME:</span>
                    <span class="value"><?php echo htmlspecialchars($result['name']); ?></span>
                </div>
                <div class="result-item">
                    <span class="label">DIVISION:</span>
                    <span class="value"><?php echo htmlspecialchars($result['division']); ?></span>
                </div>
                <div class="result-item">
                    <span class="label">GROUP:</span>
                    <span class="value"><?php echo htmlspecialchars($result['team']); ?></span>
                </div>
            <?php else: ?>
                <p class="error"><?php echo htmlspecialchars($result['message']); ?></p>
            <?php endif; ?>
        </div>
        <button class="back-btn" onclick="window.location.href='index.php'">BACK</button>
    </div>
</body>
</html>