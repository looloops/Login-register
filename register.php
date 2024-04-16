<?php
include_once __DIR__ . '/includes/init.php';


$user = [];
$user['username'] = $_POST['username'] ?? '';
$user['email'] = $_POST['email'] ?? '';
$user['password'] = $_POST['password'] ?? '';
print_r($user);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validazioni
    // print_r($_POST); exit;
    $stmt = $pdo->prepare("
        INSERT INTO users
        (username, email, password)
        VALUES (:username, :email, :password);
    ");

    $stmt->execute([
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ]);

    header('Location: /FULL%20STACK%20EPICODE/U1/W1%20-%20PHP%201/W1-D5%20wp-php1/login.php');
    exit;
}

include_once __DIR__ . '/includes/initial.php';
?>
Ciao <?= $user_from_db['username'] ?? 'Guest' ?>
<h1>Register</h1>
<form action="" method="POST" novalidate>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="">
    </div>
    <button type="submit" class="btn btn-primary">Registrami</button>
</form>

<?php
include __DIR__ . '/includes/end.php';
