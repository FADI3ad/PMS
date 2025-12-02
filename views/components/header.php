
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - EraaSoft PMS Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- Navigation-->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/">EraaSoft PMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <?php if (!isset($_SESSION['user'])): ?>
                        <a class="btn btn-outline-dark btn-sm me-2" href="/login">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login
                        </a>
                        <a class="btn btn-dark btn-sm" href="/register">
                            <i class="bi bi-person-plus me-1"></i> Register
                        </a>
                    <?php else: ?>
                        <div class="d-flex align-items-center gap-2">
                            <?php if ($_SESSION['user']['name'] === 'admin'): ?>
                                <a class="btn btn-success btn-sm" href="/add-product">
                                    <i class="bi bi-plus-circle me-1"></i> Add Product
                                </a>
                            <?php endif; ?>
                            <div class="dropdown">
                                <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-1"></i>
                                    <?= htmlspecialchars($_SESSION['user']['name']) ?>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
                                </ul>
                            </div>


                        </div>
                    <?php endif; ?>
                </div>



            </div>
        </div>
    </nav>