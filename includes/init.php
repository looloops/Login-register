<?php

// $status = session_status();
// if ($status == PHP_SESSION_NONE) {
//     //There is no active session
//     session_start();
// } else
//     if ($status == PHP_SESSION_DISABLED) {
//         //Sessions are not available
//     } else
//         if ($status == PHP_SESSION_ACTIVE) {
//             //Destroy current and start new one
//             session_destroy();
//             session_start();
//         }


include __DIR__ . '/db.php';

if (isset($_SESSION['USER_ID'])) {

    $user_from_db = false;
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
