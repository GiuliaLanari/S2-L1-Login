<?php

include_once __DIR__ . '/includes/init.php';

if ($user_db) header('Location:/S2-L1-Login/');

$users = [];
$user = $_POST['user'] ?? '';
$email= $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errors =[];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    if(strlen($user)=== 0){
        $errors["user"]= "UserName non inserito";
    }
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Email non valida";
    }
  
    if(strlen($password)=== 0 ){
        $errors["password"]= "Passeword non inserito";
    }


    if($errors===[]){
    $stmt = $pdo->prepare("
        INSERT INTO users
        (user, email, password)
        VALUES (:user, :email, :password);
    ");
    
    $stmt->execute([
        'user' => $user,
        'email'    => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
    ]);


    header('Location:/S2-L1-Login/login.php');
    exit;

    };
   

}

include_once __DIR__ . '/includes/start.php';

?>
   
    <h1>Register</h1>
    <form action="" method="POST" novalidate>
        <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" id="user" name="user" value="<?= $user ?>">
            <div class="error text-danger "><?= $errors["user"]?? "" ?></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
            <div class="error text-danger "><?= $errors["email"]?? "" ?></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
            <div class="error text-danger "><?= $errors["password"]?? "" ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Registrazione</button>
    </form>

<?php
include __DIR__ . '/includes/end.php';