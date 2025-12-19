<?php
session_start();
if(empty($_SESSION['logged_in'])){
    header("Location: login.php");
    exit;
}
$error = '';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = trim($_POST['username']);
    if(!empty($name)){
        $_SESSION['username'] = $name;
        header("Location: home.php");
        exit;
    }else{
        $error = "Please enter your name";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Enter Name</title>
<style>
body{margin:0;padding:0;font-family:Arial,sans-serif;background:#667eea;height:100vh;display:flex;justify-content:center;align-items:center;color:#fff;}
.name-container{background:#fff;color:#333;padding:40px;border-radius:10px;text-align:center;width:350px;}
.name-container input[type=text]{width:90%;padding:10px;margin:15px 0;border-radius:5px;border:1px solid #ccc;}
.name-container button{padding:12px 25px;border:none;border-radius:5px;background:#667eea;color:#fff;font-weight:bold;cursor:pointer;}
.error{color:red;margin-bottom:10px;}
</style>
</head>
<body>
<div class="name-container">
    <h2>Welcome! Please enter your name</h2>
    <?php if(!empty($error)): ?><p class="error"><?= htmlspecialchars($error)?></p><?php endif; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Your Name" required><br>
        <button type="submit">Continue</button>
    </form>
</div>
</body>
</html>
