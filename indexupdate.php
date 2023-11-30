<?php
try {
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $dsn = 'mysql:dbname=git_test;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $sql = 'SELECT id, name, `message` FROM comments';
    $stmt = $dbh->query($sql);

    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Name</th><th>Message</th></tr>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $commenterName = $row['name'];
        $commentMessage = $row['message'];

        echo "<tr><td>{$id}</td><td>{$commenterName}</td><td>{$commentMessage}</td></tr>";
    }
    echo '</table>';
} catch (PDOException $e) {
   
    echo 'エラー:' . $e->getMessage();
}

$dbh = null;
?>
