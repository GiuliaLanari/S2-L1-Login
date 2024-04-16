
<?php

include_once __DIR__ . '/includes/start.php';
?>
<h1>Benvenuti <?= $user_db['user'] ?? '' ?></h1>
<a type="button" class="btn btn-primary" href="/S2-L1-Login/register.php">Registrazione</a>
<a type="button" class="btn btn-success" href="/S2-L1-Login/login.php">Login</a>



<?php
include __DIR__ . '/includes/end.php';