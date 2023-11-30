<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Database connection parameters
    $dsn = 'mysql:dbname=git_test;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';

    try {
        $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $sql = 'INSERT INTO comments (name, email, message) VALUES (:name, :email, :message)';
        $stmt = $dbh->prepare($sql);


        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        
        $stmt->execute();

       
        $dbh = null;

       
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
       
        echo 'エラー:' . $e->getMessage();
    }
}
?>
