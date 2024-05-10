<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.css">
  <title>Login Heal Well</title>
</head>
<?php
if (isset($_POST['submit'])) {
    require_once '../dbkoneksi.php';
    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST ['email'], $_POST ['password']
    ]);

    $count = $user->rowCount(); //untuk memastikan apakah user tersedia apa tidak 

    if($count > 0) { //jika berhasil
        session_start();

        $_SESSION['user'] = $user->fetch();
        header("location:../index.php");
    } else { //jika gagal
        header("location:login.php");
    }
}
?>
<body>
    <section>
        <div class="box"></div>
        <div class="form-box" layout-fixed>
            <div class="form-value">
                <form action="" method="POST">
                    <h2>Log In</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" required name="username">
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="password">
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me! <a href="#">Forget Password</a></label>
                      
                    </div>
                    <button name="submit" class="button">Log in</button>
                    <div class="register">
                        <p>Don't have a account?  <a href="#">Register</a></p>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
