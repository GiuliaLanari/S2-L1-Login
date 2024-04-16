<?php

include_once __DIR__ . '/includes/init.php';

$users = [];
$users['user'] = $_POST['user'] ?? '';
$users['email'] = $_POST['email'] ?? '';
$users['password'] = $_POST['password'] ?? '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $stmt = $pdo->prepare("
        INSERT INTO users
        (user, email, password)
        VALUES (:user, :email, :password);
    ");
    
    $stmt->execute([
        'user' => $users['user'],
        'email'    => $users['email'],
        'password' => password_hash($users['password'],PASSWORD_DEFAULT),
    ]);

   

    header('Location:/S2-L1-Login/login.php');
    exit;
}

include_once __DIR__ . '/includes/start.php';

?>
   
    <h1>Register</h1>
    <form action="" method="POST" novalidate>
        <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" id="user" name="user" value="<?= $users['user'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $users['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary">Registrazione</button>
    </form>

<?php
include __DIR__ . '/includes/end.php';