<?php 
include "../services/messageshandle.php";
require_once 'C:\xampp\htdocs\errasoft-projects\pms\views\components/header.php';
?>

<!-- Login Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <h2 class="fw-bolder text-center mb-4">Login</h2>
                        <form action="/login" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                                <label for="email">Email address</label>
                                <?= getErorrMsg('email') ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
                                <label for="password">Password</label>
                                <?= getErorrMsg('Password') ?>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-dark btn-lg" type="submit">Login</button>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <div class="text-center">
                            <a class="small" href="/register">Don't have an account? Sign Up!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

