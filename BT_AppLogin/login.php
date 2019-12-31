<?php

session_start();

if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] == true)){
    header("Location: homepage.php");
    exit;
}

// biến lưu trữ lỗi trong quá trình đăng nhập
$errors = array();

include_once "config.php";

if (isset($_POST) && !empty($_POST)){
    if(!isset($_POST['username']) || empty($_POST['username'])){
        $errors[] = "Chưa nhập username";
    }
    if(!isset($_POST['password']) || empty($_POST['password'])){
        $errors[] = "Chưa nhập password";
    }

    if (is_array($errors) && empty($errors)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $create_at = date("Y-m-d H:i:s");
        $sql_insert = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $connection->prepare($sql_insert);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_array(MYSQLI_ASSOC);
        //neu ton tai ban ghi
        //thi se tao ra session dang nhap
        if(isset($row['id']) && $row['id'] > 0){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            header("Location: homepage.php");
            echo "<pre>";
            print_r($row);
            echo "</pre>";
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
            exit;
        } else{
            $errors[] = "Dữ liệu đăng nhập chưa đúng";
        }
    }
}

if (is_array($errors) && !empty($errors)){
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>";
        echo $errors_string;
        echo "</div>";
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
                <h1>Đăng nhập tài khoản</h1>
                <form name="login" action="" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter UserName">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group form-check">
                        <p><a href="register.php">Login Up</a> </p>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>