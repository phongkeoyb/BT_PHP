<?php
$errors = array();

include_once "config.php";

if (isset($_POST) && !empty($_POST)){
    if(!isset($_POST['username']) || empty($_POST['username'])){
        $errors[] = "Username không hợp lệ";
    }

    if(!isset($_POST['password']) || empty($_POST['password'])){
        $errors[] = "password không hợp lệ";
    }

    if(!isset($_POST['confirmpassword']) || empty($_POST['confirmpassword'])){
        $errors[] = "confirmpassword không hợp lệ";
    }

    if($_POST['confirmpassword'] !== $_POST['password']){
        $errors[] = "confirm password khác password";
    }

    if(is_array($errors) && empty($errors)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $create_at = date("Y-m-d H:i:s");
        $sql_insert = "INSERT INTO users (username, password,create_at ) VALUES (?, ?,?)";
        $stmt = $connection->prepare($sql_insert);
        $stmt->bind_param("sss", $username, $password, $create_at);
        $stmt->execute();
        $stmt->close();
        echo "<div class='alert alert-success'>";
        echo "Đăng ký thành công. Hãy <a href='login.php'>Đăng nhập</a> ngay lập tức";
        echo "</div>";
    }
    else {
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>";
        echo $errors_string;
        echo "</div>";
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo tài khoản</h1>
            <form name="register" action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter UserName">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" placeholder="Enter Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>