<?php
include_once __DIR__ . '/includes/init.php';

$user = [];
$user['user'] = $_POST['user'] ?? '';
$user['password'] = $_POST['password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
    $stmt = $pdo->prepare("
        SELECT * FROM users
        WHERE user = :user;
    ");

    $stmt->execute([
        'user' => $_POST['user'],
    ]);

    $user_db = $stmt->fetch();
// print_r($_POST);

    if ($user_db) {
        // print_r($user_db); exit;
        // echo ('Ciao ' . $user_db["user"]); die;
    
        if (password_verify($_POST['password'], $user_db["password"])) {
            $_SESSION['user_id'] = $user_db['id'];
            
            echo ('Ciao ' . $user_db["user"]); die;
            // header('Location: /S2-L1-Login/index.php'); exit;
        };
    }

    $errors['credentials'] = 'Credenziali non valide';
}

include_once __DIR__ . '/includes/start.php'; ?>

    <h1>Login</h1>
    <form action="" method="POST" novalidate>
        <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" id="user" name="user" value="<?= $user['user'] ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

<?php
include __DIR__ . '/includes/end.php';