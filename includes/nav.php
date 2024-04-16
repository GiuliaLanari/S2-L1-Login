
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/IFOA0124/S2L1-cose-di-php/1-login/">Login php</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!$user_db) { ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/S2-L1-Login/register.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/S2-L1-Login/login.php">Register</a>
                    </li><?php
                } ?>
            </ul>
        
            <?php if ($user_db) { ?>
                <a class="nav-link me-3" href="logout.php">Logout</a>
                <span><?= $user_db["user"] ?></span><?php
            } ?>
        </div>
    </div>
</nav>