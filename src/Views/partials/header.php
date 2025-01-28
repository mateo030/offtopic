<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CUSTOM FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<!-- NAV BAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container px-4">
        <a class="navbar-brand fs-3 fw-bold" href="/offtopic/">Off-Topic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex mx-auto w-50" role="search">
                <input 
                    class="form-control me-2" 
                    type="search" 
                    placeholder="Search for a topic" 
                    aria-label="Search"
                >
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <?php if (isset($_SESSION['userUid'])) : ?>
                        <div class="dropstart">
                            <a href="" class="nav-link btn btn-light dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile">User <br><small style="color:rgb(95, 95, 95)"><?= 'u/' . $_SESSION['userUid'] ?></small></a></li>
                                <li><a class="dropdown-item" href="create">Post</a></li>
                                <li><a class="dropdown-item" href="logout" style="color: red;">Logout</a></li>
                            </ul>
                        </div>
                <?php else : ?>
                    <a href="auth" class="nav-link"> <?= 'Sign in' ?></a>
                <?php endif ?>
                </li>
            </ul>
        </div>
    </div>
</nav>