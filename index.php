
<?php


include __DIR__ . '/includes/init.php';

include __DIR__ . '/includes/start.php';

if ($user_db){?>
  <h1>Ciao <?=$user_db["user"] ?>!</h1><?php
} 
else{?>
  <h1>Benvenuti</h1><?php
}

?>


<!-- <a type="button" class="btn btn-primary" href="/S2-L1-Login/register.php">Registrazione</a>
<a type="button" class="btn btn-success" href="/S2-L1-Login/login.php">Login</a> -->



<?php
include __DIR__ . '/includes/end.php';