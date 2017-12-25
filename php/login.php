<?php
include '../includes/pdo-conn.php';
    
if(isset($_POST['login'])) {
    if(empty($_POST["username"]) || empty($_POST["password"])){
        $message = '<p>Prašome teisingai užpildyti sekcijas</p>';
    }
    else {
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST["username"],
                'password' => $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if($count>0){
            $_SESSION["username"] = $_POST["username"];
            header("Location: /parlamento-studijos/admin-page.php");
            exit;
            $message = '<p>Prisijungete</p>';
        } else {
            $message = '<p>Suvesti duomenys neteisingi</p>';
        }
    }
}
?>