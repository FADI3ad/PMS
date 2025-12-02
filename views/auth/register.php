<?php
include "../services/messageshandle.php";
require_once 'C:\xampp\htdocs\errasoft-projects\pms\views\components/header.php';
?>


<!-- Registration Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <h2 class="fw-bolder text-center mb-4">Sign Up</h2>
                        <form action="/register" method="POST" novalidate>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required />
                                <label for="name">Full Name</label>
                                <?= getErorrMsg('name') ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                                <label for="email">Email address</label>
                                <?= getErorrMsg('email') ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
                                <label for="password">Password</label>
                                <?= getErorrMsg('password') ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Confirm Password" required />
                                <label for="confirm_password">Confirm Password</label>
                                <?= getErorrMsg('confirm_password') ?>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-dark btn-lg" type="submit">Register</button>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>