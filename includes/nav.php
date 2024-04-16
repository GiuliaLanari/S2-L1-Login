
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid ">
        <a class="navbar-brand text-white" href="/S2-L1-Login/">Home  <?php if ($user_db) { ?>
                
                <span class="text-white"><?= $user_db["user"] ?></span><?php
            } ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!$user_db) { ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/S2-L1-Login/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/S2-L1-Login/register.php">Register</a>
                    </li><?php
                } ?>
            </ul>
         <a class="nav-link me-3" href="logout.php">Logout</a> 
          
        </div>
    </div>
</nav>