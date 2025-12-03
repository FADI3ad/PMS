<?php
session_start();




$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



if ($path === "/") {
    include "../views/index.php";
} else if ($path === "/contact") {
    include "../views/contact.php";
} else if ($path === "/about") {
    include "../views/about.php";
} else if ($path === "/register" && $_SERVER['REQUEST_METHOD'] === "GET") {
    include "../views/auth/register.php";
} else if ($path === "/register" && $_SERVER['REQUEST_METHOD'] === "POST") {
    include "../controllers/UserController.php";
    register($usersJsonFile);
} else if ($path === "/login" && $_SERVER['REQUEST_METHOD'] === "GET") {
    include "../views/auth/login.php";
} elseif ($path === "/login" && $_SERVER['REQUEST_METHOD'] === "POST") {
    include "../controllers/UserController.php";
    login($usersJsonFile);
} else if ($path === "/logout") {
    include "../controllers/UserController.php";
    logout();
} else if ($path === "/add-product" && $_SERVER['REQUEST_METHOD'] === "GET") {
    include "../middlewares/AdminMiddleware.php";
    if (isAdmin($_SESSION['user']['name'])) {
        include "../views/addproduct.php";
    } else {
        header("location: /");
    }
} else if ($path === "/add-product" && $_SERVER['REQUEST_METHOD'] === "POST") {
    include "../middlewares/AdminMiddleware.php";
    if (isAdmin($_SESSION['user']['name'])) {
        include "../controllers/ProductController.php";
    } else {
        header("location: /");
    }
}
