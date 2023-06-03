<?php
$username= $_GET['username'];
$password= $_GET['password'];

if($username=="admin" && $password=="test"){
    header('Location: http://localhost/basephp/dashboard.php?username=' . $username);
    exit;
}
else{
    if(!empty($_GET)){
    echo "Username or Password Incorrect !";
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="login-container">
        <div class="form-wrapper">
            <form action="">
                <div class="field-group">
                    <div>
                        <label class="form-label">User Name</label>
                        <input class="form-input" type="name" name="username"/>
                    </div>
                    <div>
                        <label class="form-label">Password &nbsp;</label>
                        <input class="form-input" type="password" name="password"/>
                    </div>
                    <div>
                        <input class="btn" type="submit" value="Login" name=""/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>