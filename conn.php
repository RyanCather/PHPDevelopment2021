<?php
$conn = new SQLite3('db/db_user') or die("Unable to open database!");
$query = "CREATE TABLE IF NOT EXISTS `user`(user_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password TEXT, name TEXT)";
$conn->exec($query);
$query = $conn->query("SELECT COUNT(*) as count FROM `user`");
$row = $query->fetchArray();
$countRow = $row['count'];

if ($countRow == 0) {
// This is the SQLite version of including variables in SQL statements.
    add_user("Admin", "Admin", "Administrator");
    add_user("User", "User", "User");

    echo "<div class='alert alert-info'>Inserted default User data into the database.</div>";
} else {
    echo "<div class='alert alert-warning'>Database already configured. No changes made.</div>";
}

function add_user($username, $unhashed_password, $name)
{
    global $conn;
    $hashed_password = password_hash($unhashed_password, PASSWORD_DEFAULT);
    $sqlstmt = $conn->prepare("INSERT INTO 'user' (username, password, name) VALUES (:user_name, :hashed_password, :name)");
    $sqlstmt->bindValue(':user_name', $username);
    $sqlstmt->bindValue(':hashed_password', $hashed_password);
    $sqlstmt->bindValue(':name', $name);
    $sqlstmt->execute();
}

?>