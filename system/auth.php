<?php

include("koneksi.php");
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$select = mysqli_query($conn, "select * from user where username='$username' && password='$password'");
$num = mysqli_num_rows($select);

if ($num == 0) {
?>
    <script>
        alert("Username atau Password Salah !");
        document.location = "../login.php";
    </script>
<?php
} else {
    while ($data = mysqli_fetch_array($select)) {
        $_SESSION["username"] = $data["username"];
        $_SESSION["user_lvl"] = $data["user_lvl"];
    }
    if ($_SESSION["user_lvl"] == "dinas") {
        //login menjadi dinas
    } elseif ($_SESSION["user_lvl"] == "admin_sekolah") {
        //login menjadi admin sekolah
    } else {
        // error
    }
}

?>