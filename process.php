<?php
include 'db_connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    
    try {
        // 使用反引号包裹database表名
        $stmt = $conn->prepare("SELECT name, division, group FROM `database` WHERE name = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        
        if($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $result = [
                'status' => 'success',
                'name' => $user['name'],
                'division' => $user['division'],
                'group' => $user['group']
            ];
        } else {
            $result = [
                'status' => 'error',
                'message' => 'User not found, please check your name'
            ];
        }
    } catch(PDOException $e) {
        $result = [
            'status' => 'error',
            'message' => 'Database error: ' . $e->getMessage()
        ];
    }
    

header("Location: success.php");
    exit();
} else {
    // 如果不是POST请求，重定向回表单页
    header("Location: index.php");
    exit();
}
?>