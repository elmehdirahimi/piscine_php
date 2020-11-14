<?php
if (!$_POST["login"] === "" || $_POST["passwd"] === "" || $_POST["submit"] !== "OK") {
    echo "ERROR\n";
    return;
}
if (!file_exists("../private"))
    mkdir("../private");
if (file_exists("../private/passwd")) {
    $user_table = unserialize(file_get_contents("../private/passwd"));
    if ($user_table) {
        foreach ($user_table as $user) {
            if ($user["login"] === $_POST["login"]) {
                echo "ERROR\n";
                return;
            }
        }
    }
}
$new_user["login"] = $_POST["login"];
$new_user["passwd"] = hash('whirlpool', $_POST["passwd"]);
$user_table[] = $new_user;
file_put_contents("../private/passwd", serialize($user_table));
echo "OK\n";
header("Location: index.html");
?>