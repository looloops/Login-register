<?php

session_start();
include __DIR__ . '/db.php';

if (isset($_SESSION['USER_ID'])) {


    //prepare
    $stmt = $pdo->prepare('
    SELECT * FROM users
    WHERE id = :users_id');
    //execute
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
    ]);

    $user_from_db = $stmt->fetch();
}

